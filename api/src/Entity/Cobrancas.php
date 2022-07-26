<?php

namespace App\Entity;

use App\Repository\CobrancasRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CobrancasRepository::class)
 */
class Cobrancas
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="float")
     */
    private $valor;

    /**
     * @ORM\Column(type="date")
     */
    private $vencimento;

    /**
     * @ORM\Column(type="float")
     */
    private $taxa_juros;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $taxa_multa;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $valor_desconto;

    /**
     * @ORM\Column(type="string", length=150)
     */
    private $nome_pagador;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $cpf_pagador;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $dias_desconto;

    /**
     * @ORM\Column(type="string", length=500, nullable=true)
     */
    private $instrucoes_caixa;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $credencial;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $chave;

    /**
     * @ORM\Column(type="integer")
     */
    private $Status;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getValor(): ?float
    {
        return $this->valor;
    }

    public function setValor(float $valor): self
    {
        $this->valor = $valor;

        return $this;
    }

    public function getVencimento(): ?\DateTimeInterface
    {
        return $this->vencimento;
    }

    public function setVencimento(\DateTimeInterface $vencimento): self
    {
        $this->vencimento = $vencimento;

        return $this;
    }

    public function getTaxaJuros(): ?float
    {
        return $this->taxa_juros;
    }

    public function setTaxaJuros(float $taxa_juros): self
    {
        $this->taxa_juros = $taxa_juros;

        return $this;
    }

    public function getTaxaMulta(): ?float
    {
        return $this->taxa_multa;
    }

    public function setTaxaMulta(?float $taxa_multa): self
    {
        $this->taxa_multa = $taxa_multa;

        return $this;
    }

    public function getValorDesconto(): ?float
    {
        return $this->valor_desconto;
    }

    public function setValorDesconto(?float $valor_desconto): self
    {
        $this->valor_desconto = $valor_desconto;

        return $this;
    }

    public function getNomePagador(): ?string
    {
        return $this->nome_pagador;
    }

    public function setNomePagador(string $nome_pagador): self
    {
        $this->nome_pagador = $nome_pagador;

        return $this;
    }

    public function getCpfPagador(): ?string
    {
        return $this->cpf_pagador;
    }

    public function setCpfPagador(string $cpf_pagador): self
    {
        $this->cpf_pagador = $cpf_pagador;

        return $this;
    }

    public function getDiasDesconto(): ?int
    {
        return $this->dias_desconto;
    }

    public function setDiasDesconto(?int $dias_desconto): self
    {
        $this->dias_desconto = $dias_desconto;

        return $this;
    }

    public function getInstrucoesCaixa(): ?string
    {
        return $this->instrucoes_caixa;
    }

    public function setInstrucoesCaixa(?string $instrucoes_caixa): self
    {
        $this->instrucoes_caixa = $instrucoes_caixa;

        return $this;
    }

    public function getCredencial(): ?string
    {
        return $this->credencial;
    }

    public function setCredencial(string $credencial): self
    {
        $this->credencial = $credencial;

        return $this;
    }

    public function getChave(): ?string
    {
        return $this->chave;
    }

    public function setChave(string $chave): self
    {
        $this->chave = $chave;

        return $this;
    }

    public function getStatus(): ?int
    {
        return $this->Status;
    }

    public function setStatus(int $Status): self
    {
        $this->Status = $Status;

        return $this;
    }
}
