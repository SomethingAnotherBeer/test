<?php

namespace ContainerKDWbR1q;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldera12d5 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera22f2 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties7c77e = [
        
    ];

    public function getConnection()
    {
        $this->initializera22f2 && ($this->initializera22f2->__invoke($valueHoldera12d5, $this, 'getConnection', array(), $this->initializera22f2) || 1) && $this->valueHoldera12d5 = $valueHoldera12d5;

        return $this->valueHoldera12d5->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera22f2 && ($this->initializera22f2->__invoke($valueHoldera12d5, $this, 'getMetadataFactory', array(), $this->initializera22f2) || 1) && $this->valueHoldera12d5 = $valueHoldera12d5;

        return $this->valueHoldera12d5->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera22f2 && ($this->initializera22f2->__invoke($valueHoldera12d5, $this, 'getExpressionBuilder', array(), $this->initializera22f2) || 1) && $this->valueHoldera12d5 = $valueHoldera12d5;

        return $this->valueHoldera12d5->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera22f2 && ($this->initializera22f2->__invoke($valueHoldera12d5, $this, 'beginTransaction', array(), $this->initializera22f2) || 1) && $this->valueHoldera12d5 = $valueHoldera12d5;

        return $this->valueHoldera12d5->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera22f2 && ($this->initializera22f2->__invoke($valueHoldera12d5, $this, 'getCache', array(), $this->initializera22f2) || 1) && $this->valueHoldera12d5 = $valueHoldera12d5;

        return $this->valueHoldera12d5->getCache();
    }

    public function transactional($func)
    {
        $this->initializera22f2 && ($this->initializera22f2->__invoke($valueHoldera12d5, $this, 'transactional', array('func' => $func), $this->initializera22f2) || 1) && $this->valueHoldera12d5 = $valueHoldera12d5;

        return $this->valueHoldera12d5->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializera22f2 && ($this->initializera22f2->__invoke($valueHoldera12d5, $this, 'wrapInTransaction', array('func' => $func), $this->initializera22f2) || 1) && $this->valueHoldera12d5 = $valueHoldera12d5;

        return $this->valueHoldera12d5->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializera22f2 && ($this->initializera22f2->__invoke($valueHoldera12d5, $this, 'commit', array(), $this->initializera22f2) || 1) && $this->valueHoldera12d5 = $valueHoldera12d5;

        return $this->valueHoldera12d5->commit();
    }

    public function rollback()
    {
        $this->initializera22f2 && ($this->initializera22f2->__invoke($valueHoldera12d5, $this, 'rollback', array(), $this->initializera22f2) || 1) && $this->valueHoldera12d5 = $valueHoldera12d5;

        return $this->valueHoldera12d5->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera22f2 && ($this->initializera22f2->__invoke($valueHoldera12d5, $this, 'getClassMetadata', array('className' => $className), $this->initializera22f2) || 1) && $this->valueHoldera12d5 = $valueHoldera12d5;

        return $this->valueHoldera12d5->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera22f2 && ($this->initializera22f2->__invoke($valueHoldera12d5, $this, 'createQuery', array('dql' => $dql), $this->initializera22f2) || 1) && $this->valueHoldera12d5 = $valueHoldera12d5;

        return $this->valueHoldera12d5->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera22f2 && ($this->initializera22f2->__invoke($valueHoldera12d5, $this, 'createNamedQuery', array('name' => $name), $this->initializera22f2) || 1) && $this->valueHoldera12d5 = $valueHoldera12d5;

        return $this->valueHoldera12d5->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera22f2 && ($this->initializera22f2->__invoke($valueHoldera12d5, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera22f2) || 1) && $this->valueHoldera12d5 = $valueHoldera12d5;

        return $this->valueHoldera12d5->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera22f2 && ($this->initializera22f2->__invoke($valueHoldera12d5, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera22f2) || 1) && $this->valueHoldera12d5 = $valueHoldera12d5;

        return $this->valueHoldera12d5->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera22f2 && ($this->initializera22f2->__invoke($valueHoldera12d5, $this, 'createQueryBuilder', array(), $this->initializera22f2) || 1) && $this->valueHoldera12d5 = $valueHoldera12d5;

        return $this->valueHoldera12d5->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera22f2 && ($this->initializera22f2->__invoke($valueHoldera12d5, $this, 'flush', array('entity' => $entity), $this->initializera22f2) || 1) && $this->valueHoldera12d5 = $valueHoldera12d5;

        return $this->valueHoldera12d5->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera22f2 && ($this->initializera22f2->__invoke($valueHoldera12d5, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera22f2) || 1) && $this->valueHoldera12d5 = $valueHoldera12d5;

        return $this->valueHoldera12d5->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera22f2 && ($this->initializera22f2->__invoke($valueHoldera12d5, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera22f2) || 1) && $this->valueHoldera12d5 = $valueHoldera12d5;

        return $this->valueHoldera12d5->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera22f2 && ($this->initializera22f2->__invoke($valueHoldera12d5, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera22f2) || 1) && $this->valueHoldera12d5 = $valueHoldera12d5;

        return $this->valueHoldera12d5->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera22f2 && ($this->initializera22f2->__invoke($valueHoldera12d5, $this, 'clear', array('entityName' => $entityName), $this->initializera22f2) || 1) && $this->valueHoldera12d5 = $valueHoldera12d5;

        return $this->valueHoldera12d5->clear($entityName);
    }

    public function close()
    {
        $this->initializera22f2 && ($this->initializera22f2->__invoke($valueHoldera12d5, $this, 'close', array(), $this->initializera22f2) || 1) && $this->valueHoldera12d5 = $valueHoldera12d5;

        return $this->valueHoldera12d5->close();
    }

    public function persist($entity)
    {
        $this->initializera22f2 && ($this->initializera22f2->__invoke($valueHoldera12d5, $this, 'persist', array('entity' => $entity), $this->initializera22f2) || 1) && $this->valueHoldera12d5 = $valueHoldera12d5;

        return $this->valueHoldera12d5->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera22f2 && ($this->initializera22f2->__invoke($valueHoldera12d5, $this, 'remove', array('entity' => $entity), $this->initializera22f2) || 1) && $this->valueHoldera12d5 = $valueHoldera12d5;

        return $this->valueHoldera12d5->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializera22f2 && ($this->initializera22f2->__invoke($valueHoldera12d5, $this, 'refresh', array('entity' => $entity), $this->initializera22f2) || 1) && $this->valueHoldera12d5 = $valueHoldera12d5;

        return $this->valueHoldera12d5->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializera22f2 && ($this->initializera22f2->__invoke($valueHoldera12d5, $this, 'detach', array('entity' => $entity), $this->initializera22f2) || 1) && $this->valueHoldera12d5 = $valueHoldera12d5;

        return $this->valueHoldera12d5->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera22f2 && ($this->initializera22f2->__invoke($valueHoldera12d5, $this, 'merge', array('entity' => $entity), $this->initializera22f2) || 1) && $this->valueHoldera12d5 = $valueHoldera12d5;

        return $this->valueHoldera12d5->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera22f2 && ($this->initializera22f2->__invoke($valueHoldera12d5, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera22f2) || 1) && $this->valueHoldera12d5 = $valueHoldera12d5;

        return $this->valueHoldera12d5->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera22f2 && ($this->initializera22f2->__invoke($valueHoldera12d5, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera22f2) || 1) && $this->valueHoldera12d5 = $valueHoldera12d5;

        return $this->valueHoldera12d5->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera22f2 && ($this->initializera22f2->__invoke($valueHoldera12d5, $this, 'getRepository', array('entityName' => $entityName), $this->initializera22f2) || 1) && $this->valueHoldera12d5 = $valueHoldera12d5;

        return $this->valueHoldera12d5->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera22f2 && ($this->initializera22f2->__invoke($valueHoldera12d5, $this, 'contains', array('entity' => $entity), $this->initializera22f2) || 1) && $this->valueHoldera12d5 = $valueHoldera12d5;

        return $this->valueHoldera12d5->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera22f2 && ($this->initializera22f2->__invoke($valueHoldera12d5, $this, 'getEventManager', array(), $this->initializera22f2) || 1) && $this->valueHoldera12d5 = $valueHoldera12d5;

        return $this->valueHoldera12d5->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera22f2 && ($this->initializera22f2->__invoke($valueHoldera12d5, $this, 'getConfiguration', array(), $this->initializera22f2) || 1) && $this->valueHoldera12d5 = $valueHoldera12d5;

        return $this->valueHoldera12d5->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera22f2 && ($this->initializera22f2->__invoke($valueHoldera12d5, $this, 'isOpen', array(), $this->initializera22f2) || 1) && $this->valueHoldera12d5 = $valueHoldera12d5;

        return $this->valueHoldera12d5->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera22f2 && ($this->initializera22f2->__invoke($valueHoldera12d5, $this, 'getUnitOfWork', array(), $this->initializera22f2) || 1) && $this->valueHoldera12d5 = $valueHoldera12d5;

        return $this->valueHoldera12d5->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera22f2 && ($this->initializera22f2->__invoke($valueHoldera12d5, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera22f2) || 1) && $this->valueHoldera12d5 = $valueHoldera12d5;

        return $this->valueHoldera12d5->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera22f2 && ($this->initializera22f2->__invoke($valueHoldera12d5, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera22f2) || 1) && $this->valueHoldera12d5 = $valueHoldera12d5;

        return $this->valueHoldera12d5->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera22f2 && ($this->initializera22f2->__invoke($valueHoldera12d5, $this, 'getProxyFactory', array(), $this->initializera22f2) || 1) && $this->valueHoldera12d5 = $valueHoldera12d5;

        return $this->valueHoldera12d5->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera22f2 && ($this->initializera22f2->__invoke($valueHoldera12d5, $this, 'initializeObject', array('obj' => $obj), $this->initializera22f2) || 1) && $this->valueHoldera12d5 = $valueHoldera12d5;

        return $this->valueHoldera12d5->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializera22f2 && ($this->initializera22f2->__invoke($valueHoldera12d5, $this, 'getFilters', array(), $this->initializera22f2) || 1) && $this->valueHoldera12d5 = $valueHoldera12d5;

        return $this->valueHoldera12d5->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera22f2 && ($this->initializera22f2->__invoke($valueHoldera12d5, $this, 'isFiltersStateClean', array(), $this->initializera22f2) || 1) && $this->valueHoldera12d5 = $valueHoldera12d5;

        return $this->valueHoldera12d5->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera22f2 && ($this->initializera22f2->__invoke($valueHoldera12d5, $this, 'hasFilters', array(), $this->initializera22f2) || 1) && $this->valueHoldera12d5 = $valueHoldera12d5;

        return $this->valueHoldera12d5->hasFilters();
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

        $instance->initializera22f2 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHoldera12d5) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera12d5 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldera12d5->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializera22f2 && ($this->initializera22f2->__invoke($valueHoldera12d5, $this, '__get', ['name' => $name], $this->initializera22f2) || 1) && $this->valueHoldera12d5 = $valueHoldera12d5;

        if (isset(self::$publicProperties7c77e[$name])) {
            return $this->valueHoldera12d5->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera12d5;

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

        $targetObject = $this->valueHoldera12d5;
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
        $this->initializera22f2 && ($this->initializera22f2->__invoke($valueHoldera12d5, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera22f2) || 1) && $this->valueHoldera12d5 = $valueHoldera12d5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera12d5;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldera12d5;
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
        $this->initializera22f2 && ($this->initializera22f2->__invoke($valueHoldera12d5, $this, '__isset', array('name' => $name), $this->initializera22f2) || 1) && $this->valueHoldera12d5 = $valueHoldera12d5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera12d5;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldera12d5;
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
        $this->initializera22f2 && ($this->initializera22f2->__invoke($valueHoldera12d5, $this, '__unset', array('name' => $name), $this->initializera22f2) || 1) && $this->valueHoldera12d5 = $valueHoldera12d5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera12d5;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldera12d5;
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
        $this->initializera22f2 && ($this->initializera22f2->__invoke($valueHoldera12d5, $this, '__clone', array(), $this->initializera22f2) || 1) && $this->valueHoldera12d5 = $valueHoldera12d5;

        $this->valueHoldera12d5 = clone $this->valueHoldera12d5;
    }

    public function __sleep()
    {
        $this->initializera22f2 && ($this->initializera22f2->__invoke($valueHoldera12d5, $this, '__sleep', array(), $this->initializera22f2) || 1) && $this->valueHoldera12d5 = $valueHoldera12d5;

        return array('valueHoldera12d5');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera22f2 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera22f2;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera22f2 && ($this->initializera22f2->__invoke($valueHoldera12d5, $this, 'initializeProxy', array(), $this->initializera22f2) || 1) && $this->valueHoldera12d5 = $valueHoldera12d5;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera12d5;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera12d5;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
