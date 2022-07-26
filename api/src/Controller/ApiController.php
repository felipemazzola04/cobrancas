<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use App\Entity\Cobrancas;

use function json_encode;

class ApiController extends AbstractController
{
    private $client;

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }

    public const FORM_CONTENT_TYPE = 'form';
    /**
     * @Route("/api/cobrancas/{credencial}/{chave}/", name="cobrancas_index", methods={"GET"})
     */
    public function index($credencial, $chave): Response 
    {
        $chave = hash('sha256', $chave);
        $validarCredencial = $this->client->request(
            'GET',
            'https://127.0.0.1:8000/api/contas/'.$credencial.'/'.$chave
        );
        
        if (empty($validarCredencial->getContent())) {
            return $this->json(['msg' => 'Erro ao cadastrar boleto, credenciais inválidas']);
        }

        $cobrancas = $this->getDoctrine()->getRepository(Cobrancas::class)
                        ->findBy(['id' => $identificador, 'credencial' => $credencial, 'chave' => $chave], ['id' => 'DESC']);

        return $this->json(['data' => $cobrancas ]);
    }

    /**
     * @Route("/api/cobrancas/{credencial}/{chave}/{identificador}", name="cobranca_cobrancas", methods={"GET"})
     */
    public function cobrancas($credencial, $chave, $identificador): Response 
    {
        $chave = hash('sha256', $chave);
        $validarCredencial = $this->client->request(
            'GET',
            'https://127.0.0.1:8000/api/contas/'.$credencial.'/'.$chave
        );
        
        if (empty($validarCredencial->getContent())) {
            return $this->json(['msg' => 'Erro ao cadastrar boleto, credenciais inválidas']);
        }

        $cobrancas = $this->getDoctrine()->getRepository(Cobrancas::class)
                       ->findBy(['id' => $identificador, 'credencial' => $credencial, 'chave' => $chave], ['id' => 'DESC']);

        return $this->json(['data' => $cobrancas ]);
    }

    /**
     * @Route("/api/cobrancas/{credencial}/{chave}", name="cobranca_create", methods={"POST"})
     */
    public function create(Request $request, $credencial, $chave): Response 
    {
        $data = $this->getRequestParams($request);
        $data = json_decode($data, true);
        $date = new \DateTime($data['vencimento']);
        $validarCredencial = $this->client->request(
            'GET',
            'https://127.0.0.1:8000/api/contas/'.$credencial.'/'.$chave
        );
        
        if (empty($validarCredencial->getContent())) {
            return $this->json(['msg' => 'Erro ao cadastrar boleto, credenciais inválidas']);
        }
        $chave = hash('sha256', $chave);

        $cobrancas = new Cobrancas();
        $cobrancas->setValor($data['valor']);
        $cobrancas->setVencimento($date);
        $cobrancas->setCpfPagador($data['cpf_pagador']);
        $cobrancas->setTaxaJuros($data['taxa_juros']);
        $cobrancas->setTaxaMulta($data['taxa_multa']);
        $cobrancas->setValorDesconto($data['valor_desconto']);
        $cobrancas->setDiasDesconto($data['dias_desconto']);
        $cobrancas->setNomePagador($data['nome_pagador']);
        $cobrancas->setCredencial($credencial);
        $cobrancas->setChave($chave);
        $cobrancas->setInstrucoesCaixa($data['instrucao_caixa']);
        $cobrancas->setStatus(0);

        $doctrine = $this->getDoctrine()->getManager();
        $doctrine->persist($cobrancas);
        $doctrine->flush();
        // linha fcticia, para gerar uma real é necessário dados bancários reais 
        $linhaDIgitavel = '99990.00003 00002.310' . str_pad($cobrancas->getId(), 10, "0", STR_PAD_LEFT) . '7 90510000003000';


        return $this->json(['msg' => 'Cobranca criada com sucesso.', 
                            'Indentificador' => $cobrancas->getId(),
                            'LinhaDIgitavel' => $linhaDIgitavel]);
    }

        /**
     * @Route("/api/cobrancas/{credencial}/{chave}/{identificador}", name="cobranca_update", methods={"PUT"})
     */
    public function update(Request $request, $credencial, $chave, $identificador): Response 
    {
        $data = $this->getRequestParams($request);
        $data = json_decode($data, true);
        $date = new \DateTime($data['vencimento']);
        $validarCredencial = $this->client->request(
            'GET',
            'https://127.0.0.1:8000/api/contas/'.$credencial.'/'.$chave
        );
        
        if (empty($validarCredencial->getContent())) {
            return $this->json(['msg' => 'Erro ao cadastrar boleto, credenciais inválidas']);
        }
        $chave = hash('sha256', $chave);
        $doctrine = $this->getDoctrine();

        $cobrancas = $doctrine->getRepository(Cobrancas::class)
                       ->findOneBy(['credencial' => $credencial, 'chave' => $chave, 'id' => $identificador]);

        if (isset($data['valor'])) {
            $cobrancas->setValor($data['valor']);
        }

        if (isset($data['vencimento'])) {
            $date = new \DateTime($data['vencimento']);
            $cobrancas->setVencimento($date);
        }

        if (isset($data['cpf_pagador'])) {
            $cobrancas->setCpfPagador($data['cpf_pagador']);
        }

        if (isset($data['taxa_juros'])) {
            $cobrancas->setTaxaJuros($data['taxa_juros']);
        }

        if (isset($data['taxa_multa'])) {
            $cobrancas->setTaxaMulta($data['taxa_multa']);
        }

        if (isset($data['valor_desconto'])) {
            $cobrancas->setValorDesconto($data['valor_desconto']);
        }

        if (isset($data['dias_desconto'])) {
            $cobrancas->setDiasDesconto($data['dias_desconto']);
        }

        if (isset($data['nome_pagador'])) {
            $cobrancas->setNomePagador($data['nome_pagador']);
        }

        if (isset($data['instrucao_caixa'])) {
            $cobrancas->setInstrucoesCaixa($data['instrucao_caixa']);
        }

        $doctrine = $this->getDoctrine()->getManager();
        $doctrine->persist($cobrancas);
        $doctrine->flush();
        // linha fcticia, para gerar uma real é necessário dados bancários reais 
        $linhaDIgitavel = '99990.00003 00002.310' . str_pad($cobrancas->getId(), 10, "0", STR_PAD_LEFT) . '7 90510000003000';


        return $this->json(['msg' => 'Cobranca alterada com sucesso.', 
                            'Indentificador' => $cobrancas->getId(),
                            'LinhaDIgitavel' => $linhaDIgitavel]);
    }

    /**
     * @Route("/api/cobrancas/{credencial}/{chave}/{identificador}", name="cobranca_delete", methods={"DELETE"})
     */
    public function delete($credencial, $chave, $identificador): Response
    {

        $validarCredencial = $this->client->request(
            'GET',
            'https://127.0.0.1:8000/api/contas/'.$credencial.'/'.$chave
        );
        
        if (empty($validarCredencial->getContent())) {
            return $this->json(['msg' => 'Erro ao cadastrar boleto, credenciais inválidas']);
        }

        $chave = hash('sha256', $chave);
        $doctrine = $this->getDoctrine();

        $cobrancas = $doctrine->getRepository(Cobrancas::class)
                       ->findOneBy(['credencial' => $credencial, 'chave' => $chave, 'id' => $identificador]);
        
        $cobrancas->setStatus(-1);
        
        $doctrine = $doctrine->getManager();
        $doctrine->flush();

        return $this->json(['msg' => 'Cobranca invalidada com sucesso.']);
    }

        /**
     * @return resource|string|false
     */
    protected function getRequestParams(Request $request)
    {
        $body = $request->getContent();
        if ($request->getContentType() === self::FORM_CONTENT_TYPE) {
            $body = json_encode($request->request->all());
        }

        if (empty($body)) {
            $body = json_encode($request->query->all());
        }

        return $body;
    }
    


    
}
