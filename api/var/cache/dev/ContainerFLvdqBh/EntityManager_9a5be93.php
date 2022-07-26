<?php

namespace ContainerFLvdqBh;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder8ff16 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerd638c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties71aef = [
        
    ];

    public function getConnection()
    {
        $this->initializerd638c && ($this->initializerd638c->__invoke($valueHolder8ff16, $this, 'getConnection', array(), $this->initializerd638c) || 1) && $this->valueHolder8ff16 = $valueHolder8ff16;

        return $this->valueHolder8ff16->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerd638c && ($this->initializerd638c->__invoke($valueHolder8ff16, $this, 'getMetadataFactory', array(), $this->initializerd638c) || 1) && $this->valueHolder8ff16 = $valueHolder8ff16;

        return $this->valueHolder8ff16->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerd638c && ($this->initializerd638c->__invoke($valueHolder8ff16, $this, 'getExpressionBuilder', array(), $this->initializerd638c) || 1) && $this->valueHolder8ff16 = $valueHolder8ff16;

        return $this->valueHolder8ff16->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerd638c && ($this->initializerd638c->__invoke($valueHolder8ff16, $this, 'beginTransaction', array(), $this->initializerd638c) || 1) && $this->valueHolder8ff16 = $valueHolder8ff16;

        return $this->valueHolder8ff16->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerd638c && ($this->initializerd638c->__invoke($valueHolder8ff16, $this, 'getCache', array(), $this->initializerd638c) || 1) && $this->valueHolder8ff16 = $valueHolder8ff16;

        return $this->valueHolder8ff16->getCache();
    }

    public function transactional($func)
    {
        $this->initializerd638c && ($this->initializerd638c->__invoke($valueHolder8ff16, $this, 'transactional', array('func' => $func), $this->initializerd638c) || 1) && $this->valueHolder8ff16 = $valueHolder8ff16;

        return $this->valueHolder8ff16->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerd638c && ($this->initializerd638c->__invoke($valueHolder8ff16, $this, 'wrapInTransaction', array('func' => $func), $this->initializerd638c) || 1) && $this->valueHolder8ff16 = $valueHolder8ff16;

        return $this->valueHolder8ff16->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerd638c && ($this->initializerd638c->__invoke($valueHolder8ff16, $this, 'commit', array(), $this->initializerd638c) || 1) && $this->valueHolder8ff16 = $valueHolder8ff16;

        return $this->valueHolder8ff16->commit();
    }

    public function rollback()
    {
        $this->initializerd638c && ($this->initializerd638c->__invoke($valueHolder8ff16, $this, 'rollback', array(), $this->initializerd638c) || 1) && $this->valueHolder8ff16 = $valueHolder8ff16;

        return $this->valueHolder8ff16->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerd638c && ($this->initializerd638c->__invoke($valueHolder8ff16, $this, 'getClassMetadata', array('className' => $className), $this->initializerd638c) || 1) && $this->valueHolder8ff16 = $valueHolder8ff16;

        return $this->valueHolder8ff16->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerd638c && ($this->initializerd638c->__invoke($valueHolder8ff16, $this, 'createQuery', array('dql' => $dql), $this->initializerd638c) || 1) && $this->valueHolder8ff16 = $valueHolder8ff16;

        return $this->valueHolder8ff16->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerd638c && ($this->initializerd638c->__invoke($valueHolder8ff16, $this, 'createNamedQuery', array('name' => $name), $this->initializerd638c) || 1) && $this->valueHolder8ff16 = $valueHolder8ff16;

        return $this->valueHolder8ff16->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerd638c && ($this->initializerd638c->__invoke($valueHolder8ff16, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerd638c) || 1) && $this->valueHolder8ff16 = $valueHolder8ff16;

        return $this->valueHolder8ff16->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerd638c && ($this->initializerd638c->__invoke($valueHolder8ff16, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerd638c) || 1) && $this->valueHolder8ff16 = $valueHolder8ff16;

        return $this->valueHolder8ff16->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerd638c && ($this->initializerd638c->__invoke($valueHolder8ff16, $this, 'createQueryBuilder', array(), $this->initializerd638c) || 1) && $this->valueHolder8ff16 = $valueHolder8ff16;

        return $this->valueHolder8ff16->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerd638c && ($this->initializerd638c->__invoke($valueHolder8ff16, $this, 'flush', array('entity' => $entity), $this->initializerd638c) || 1) && $this->valueHolder8ff16 = $valueHolder8ff16;

        return $this->valueHolder8ff16->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerd638c && ($this->initializerd638c->__invoke($valueHolder8ff16, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd638c) || 1) && $this->valueHolder8ff16 = $valueHolder8ff16;

        return $this->valueHolder8ff16->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerd638c && ($this->initializerd638c->__invoke($valueHolder8ff16, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerd638c) || 1) && $this->valueHolder8ff16 = $valueHolder8ff16;

        return $this->valueHolder8ff16->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerd638c && ($this->initializerd638c->__invoke($valueHolder8ff16, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerd638c) || 1) && $this->valueHolder8ff16 = $valueHolder8ff16;

        return $this->valueHolder8ff16->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerd638c && ($this->initializerd638c->__invoke($valueHolder8ff16, $this, 'clear', array('entityName' => $entityName), $this->initializerd638c) || 1) && $this->valueHolder8ff16 = $valueHolder8ff16;

        return $this->valueHolder8ff16->clear($entityName);
    }

    public function close()
    {
        $this->initializerd638c && ($this->initializerd638c->__invoke($valueHolder8ff16, $this, 'close', array(), $this->initializerd638c) || 1) && $this->valueHolder8ff16 = $valueHolder8ff16;

        return $this->valueHolder8ff16->close();
    }

    public function persist($entity)
    {
        $this->initializerd638c && ($this->initializerd638c->__invoke($valueHolder8ff16, $this, 'persist', array('entity' => $entity), $this->initializerd638c) || 1) && $this->valueHolder8ff16 = $valueHolder8ff16;

        return $this->valueHolder8ff16->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerd638c && ($this->initializerd638c->__invoke($valueHolder8ff16, $this, 'remove', array('entity' => $entity), $this->initializerd638c) || 1) && $this->valueHolder8ff16 = $valueHolder8ff16;

        return $this->valueHolder8ff16->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerd638c && ($this->initializerd638c->__invoke($valueHolder8ff16, $this, 'refresh', array('entity' => $entity), $this->initializerd638c) || 1) && $this->valueHolder8ff16 = $valueHolder8ff16;

        return $this->valueHolder8ff16->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerd638c && ($this->initializerd638c->__invoke($valueHolder8ff16, $this, 'detach', array('entity' => $entity), $this->initializerd638c) || 1) && $this->valueHolder8ff16 = $valueHolder8ff16;

        return $this->valueHolder8ff16->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerd638c && ($this->initializerd638c->__invoke($valueHolder8ff16, $this, 'merge', array('entity' => $entity), $this->initializerd638c) || 1) && $this->valueHolder8ff16 = $valueHolder8ff16;

        return $this->valueHolder8ff16->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerd638c && ($this->initializerd638c->__invoke($valueHolder8ff16, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerd638c) || 1) && $this->valueHolder8ff16 = $valueHolder8ff16;

        return $this->valueHolder8ff16->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerd638c && ($this->initializerd638c->__invoke($valueHolder8ff16, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd638c) || 1) && $this->valueHolder8ff16 = $valueHolder8ff16;

        return $this->valueHolder8ff16->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerd638c && ($this->initializerd638c->__invoke($valueHolder8ff16, $this, 'getRepository', array('entityName' => $entityName), $this->initializerd638c) || 1) && $this->valueHolder8ff16 = $valueHolder8ff16;

        return $this->valueHolder8ff16->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerd638c && ($this->initializerd638c->__invoke($valueHolder8ff16, $this, 'contains', array('entity' => $entity), $this->initializerd638c) || 1) && $this->valueHolder8ff16 = $valueHolder8ff16;

        return $this->valueHolder8ff16->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerd638c && ($this->initializerd638c->__invoke($valueHolder8ff16, $this, 'getEventManager', array(), $this->initializerd638c) || 1) && $this->valueHolder8ff16 = $valueHolder8ff16;

        return $this->valueHolder8ff16->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerd638c && ($this->initializerd638c->__invoke($valueHolder8ff16, $this, 'getConfiguration', array(), $this->initializerd638c) || 1) && $this->valueHolder8ff16 = $valueHolder8ff16;

        return $this->valueHolder8ff16->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerd638c && ($this->initializerd638c->__invoke($valueHolder8ff16, $this, 'isOpen', array(), $this->initializerd638c) || 1) && $this->valueHolder8ff16 = $valueHolder8ff16;

        return $this->valueHolder8ff16->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerd638c && ($this->initializerd638c->__invoke($valueHolder8ff16, $this, 'getUnitOfWork', array(), $this->initializerd638c) || 1) && $this->valueHolder8ff16 = $valueHolder8ff16;

        return $this->valueHolder8ff16->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerd638c && ($this->initializerd638c->__invoke($valueHolder8ff16, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd638c) || 1) && $this->valueHolder8ff16 = $valueHolder8ff16;

        return $this->valueHolder8ff16->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerd638c && ($this->initializerd638c->__invoke($valueHolder8ff16, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd638c) || 1) && $this->valueHolder8ff16 = $valueHolder8ff16;

        return $this->valueHolder8ff16->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerd638c && ($this->initializerd638c->__invoke($valueHolder8ff16, $this, 'getProxyFactory', array(), $this->initializerd638c) || 1) && $this->valueHolder8ff16 = $valueHolder8ff16;

        return $this->valueHolder8ff16->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerd638c && ($this->initializerd638c->__invoke($valueHolder8ff16, $this, 'initializeObject', array('obj' => $obj), $this->initializerd638c) || 1) && $this->valueHolder8ff16 = $valueHolder8ff16;

        return $this->valueHolder8ff16->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerd638c && ($this->initializerd638c->__invoke($valueHolder8ff16, $this, 'getFilters', array(), $this->initializerd638c) || 1) && $this->valueHolder8ff16 = $valueHolder8ff16;

        return $this->valueHolder8ff16->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerd638c && ($this->initializerd638c->__invoke($valueHolder8ff16, $this, 'isFiltersStateClean', array(), $this->initializerd638c) || 1) && $this->valueHolder8ff16 = $valueHolder8ff16;

        return $this->valueHolder8ff16->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerd638c && ($this->initializerd638c->__invoke($valueHolder8ff16, $this, 'hasFilters', array(), $this->initializerd638c) || 1) && $this->valueHolder8ff16 = $valueHolder8ff16;

        return $this->valueHolder8ff16->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerd638c = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder8ff16) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder8ff16 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder8ff16->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerd638c && ($this->initializerd638c->__invoke($valueHolder8ff16, $this, '__get', ['name' => $name], $this->initializerd638c) || 1) && $this->valueHolder8ff16 = $valueHolder8ff16;

        if (isset(self::$publicProperties71aef[$name])) {
            return $this->valueHolder8ff16->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8ff16;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder8ff16;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializerd638c && ($this->initializerd638c->__invoke($valueHolder8ff16, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd638c) || 1) && $this->valueHolder8ff16 = $valueHolder8ff16;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8ff16;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder8ff16;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerd638c && ($this->initializerd638c->__invoke($valueHolder8ff16, $this, '__isset', array('name' => $name), $this->initializerd638c) || 1) && $this->valueHolder8ff16 = $valueHolder8ff16;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8ff16;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder8ff16;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializerd638c && ($this->initializerd638c->__invoke($valueHolder8ff16, $this, '__unset', array('name' => $name), $this->initializerd638c) || 1) && $this->valueHolder8ff16 = $valueHolder8ff16;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8ff16;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder8ff16;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializerd638c && ($this->initializerd638c->__invoke($valueHolder8ff16, $this, '__clone', array(), $this->initializerd638c) || 1) && $this->valueHolder8ff16 = $valueHolder8ff16;

        $this->valueHolder8ff16 = clone $this->valueHolder8ff16;
    }

    public function __sleep()
    {
        $this->initializerd638c && ($this->initializerd638c->__invoke($valueHolder8ff16, $this, '__sleep', array(), $this->initializerd638c) || 1) && $this->valueHolder8ff16 = $valueHolder8ff16;

        return array('valueHolder8ff16');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerd638c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerd638c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerd638c && ($this->initializerd638c->__invoke($valueHolder8ff16, $this, 'initializeProxy', array(), $this->initializerd638c) || 1) && $this->valueHolder8ff16 = $valueHolder8ff16;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder8ff16;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder8ff16;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
