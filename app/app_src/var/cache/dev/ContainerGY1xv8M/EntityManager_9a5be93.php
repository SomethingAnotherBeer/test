<?php

namespace ContainerGY1xv8M;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder1d565 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer102ce = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesbdfc7 = [
        
    ];

    public function getConnection()
    {
        $this->initializer102ce && ($this->initializer102ce->__invoke($valueHolder1d565, $this, 'getConnection', array(), $this->initializer102ce) || 1) && $this->valueHolder1d565 = $valueHolder1d565;

        return $this->valueHolder1d565->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer102ce && ($this->initializer102ce->__invoke($valueHolder1d565, $this, 'getMetadataFactory', array(), $this->initializer102ce) || 1) && $this->valueHolder1d565 = $valueHolder1d565;

        return $this->valueHolder1d565->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer102ce && ($this->initializer102ce->__invoke($valueHolder1d565, $this, 'getExpressionBuilder', array(), $this->initializer102ce) || 1) && $this->valueHolder1d565 = $valueHolder1d565;

        return $this->valueHolder1d565->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer102ce && ($this->initializer102ce->__invoke($valueHolder1d565, $this, 'beginTransaction', array(), $this->initializer102ce) || 1) && $this->valueHolder1d565 = $valueHolder1d565;

        return $this->valueHolder1d565->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer102ce && ($this->initializer102ce->__invoke($valueHolder1d565, $this, 'getCache', array(), $this->initializer102ce) || 1) && $this->valueHolder1d565 = $valueHolder1d565;

        return $this->valueHolder1d565->getCache();
    }

    public function transactional($func)
    {
        $this->initializer102ce && ($this->initializer102ce->__invoke($valueHolder1d565, $this, 'transactional', array('func' => $func), $this->initializer102ce) || 1) && $this->valueHolder1d565 = $valueHolder1d565;

        return $this->valueHolder1d565->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer102ce && ($this->initializer102ce->__invoke($valueHolder1d565, $this, 'wrapInTransaction', array('func' => $func), $this->initializer102ce) || 1) && $this->valueHolder1d565 = $valueHolder1d565;

        return $this->valueHolder1d565->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer102ce && ($this->initializer102ce->__invoke($valueHolder1d565, $this, 'commit', array(), $this->initializer102ce) || 1) && $this->valueHolder1d565 = $valueHolder1d565;

        return $this->valueHolder1d565->commit();
    }

    public function rollback()
    {
        $this->initializer102ce && ($this->initializer102ce->__invoke($valueHolder1d565, $this, 'rollback', array(), $this->initializer102ce) || 1) && $this->valueHolder1d565 = $valueHolder1d565;

        return $this->valueHolder1d565->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer102ce && ($this->initializer102ce->__invoke($valueHolder1d565, $this, 'getClassMetadata', array('className' => $className), $this->initializer102ce) || 1) && $this->valueHolder1d565 = $valueHolder1d565;

        return $this->valueHolder1d565->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer102ce && ($this->initializer102ce->__invoke($valueHolder1d565, $this, 'createQuery', array('dql' => $dql), $this->initializer102ce) || 1) && $this->valueHolder1d565 = $valueHolder1d565;

        return $this->valueHolder1d565->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer102ce && ($this->initializer102ce->__invoke($valueHolder1d565, $this, 'createNamedQuery', array('name' => $name), $this->initializer102ce) || 1) && $this->valueHolder1d565 = $valueHolder1d565;

        return $this->valueHolder1d565->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer102ce && ($this->initializer102ce->__invoke($valueHolder1d565, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer102ce) || 1) && $this->valueHolder1d565 = $valueHolder1d565;

        return $this->valueHolder1d565->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer102ce && ($this->initializer102ce->__invoke($valueHolder1d565, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer102ce) || 1) && $this->valueHolder1d565 = $valueHolder1d565;

        return $this->valueHolder1d565->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer102ce && ($this->initializer102ce->__invoke($valueHolder1d565, $this, 'createQueryBuilder', array(), $this->initializer102ce) || 1) && $this->valueHolder1d565 = $valueHolder1d565;

        return $this->valueHolder1d565->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer102ce && ($this->initializer102ce->__invoke($valueHolder1d565, $this, 'flush', array('entity' => $entity), $this->initializer102ce) || 1) && $this->valueHolder1d565 = $valueHolder1d565;

        return $this->valueHolder1d565->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer102ce && ($this->initializer102ce->__invoke($valueHolder1d565, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer102ce) || 1) && $this->valueHolder1d565 = $valueHolder1d565;

        return $this->valueHolder1d565->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer102ce && ($this->initializer102ce->__invoke($valueHolder1d565, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer102ce) || 1) && $this->valueHolder1d565 = $valueHolder1d565;

        return $this->valueHolder1d565->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer102ce && ($this->initializer102ce->__invoke($valueHolder1d565, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer102ce) || 1) && $this->valueHolder1d565 = $valueHolder1d565;

        return $this->valueHolder1d565->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer102ce && ($this->initializer102ce->__invoke($valueHolder1d565, $this, 'clear', array('entityName' => $entityName), $this->initializer102ce) || 1) && $this->valueHolder1d565 = $valueHolder1d565;

        return $this->valueHolder1d565->clear($entityName);
    }

    public function close()
    {
        $this->initializer102ce && ($this->initializer102ce->__invoke($valueHolder1d565, $this, 'close', array(), $this->initializer102ce) || 1) && $this->valueHolder1d565 = $valueHolder1d565;

        return $this->valueHolder1d565->close();
    }

    public function persist($entity)
    {
        $this->initializer102ce && ($this->initializer102ce->__invoke($valueHolder1d565, $this, 'persist', array('entity' => $entity), $this->initializer102ce) || 1) && $this->valueHolder1d565 = $valueHolder1d565;

        return $this->valueHolder1d565->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer102ce && ($this->initializer102ce->__invoke($valueHolder1d565, $this, 'remove', array('entity' => $entity), $this->initializer102ce) || 1) && $this->valueHolder1d565 = $valueHolder1d565;

        return $this->valueHolder1d565->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer102ce && ($this->initializer102ce->__invoke($valueHolder1d565, $this, 'refresh', array('entity' => $entity), $this->initializer102ce) || 1) && $this->valueHolder1d565 = $valueHolder1d565;

        return $this->valueHolder1d565->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer102ce && ($this->initializer102ce->__invoke($valueHolder1d565, $this, 'detach', array('entity' => $entity), $this->initializer102ce) || 1) && $this->valueHolder1d565 = $valueHolder1d565;

        return $this->valueHolder1d565->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer102ce && ($this->initializer102ce->__invoke($valueHolder1d565, $this, 'merge', array('entity' => $entity), $this->initializer102ce) || 1) && $this->valueHolder1d565 = $valueHolder1d565;

        return $this->valueHolder1d565->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer102ce && ($this->initializer102ce->__invoke($valueHolder1d565, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer102ce) || 1) && $this->valueHolder1d565 = $valueHolder1d565;

        return $this->valueHolder1d565->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer102ce && ($this->initializer102ce->__invoke($valueHolder1d565, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer102ce) || 1) && $this->valueHolder1d565 = $valueHolder1d565;

        return $this->valueHolder1d565->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer102ce && ($this->initializer102ce->__invoke($valueHolder1d565, $this, 'getRepository', array('entityName' => $entityName), $this->initializer102ce) || 1) && $this->valueHolder1d565 = $valueHolder1d565;

        return $this->valueHolder1d565->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer102ce && ($this->initializer102ce->__invoke($valueHolder1d565, $this, 'contains', array('entity' => $entity), $this->initializer102ce) || 1) && $this->valueHolder1d565 = $valueHolder1d565;

        return $this->valueHolder1d565->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer102ce && ($this->initializer102ce->__invoke($valueHolder1d565, $this, 'getEventManager', array(), $this->initializer102ce) || 1) && $this->valueHolder1d565 = $valueHolder1d565;

        return $this->valueHolder1d565->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer102ce && ($this->initializer102ce->__invoke($valueHolder1d565, $this, 'getConfiguration', array(), $this->initializer102ce) || 1) && $this->valueHolder1d565 = $valueHolder1d565;

        return $this->valueHolder1d565->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer102ce && ($this->initializer102ce->__invoke($valueHolder1d565, $this, 'isOpen', array(), $this->initializer102ce) || 1) && $this->valueHolder1d565 = $valueHolder1d565;

        return $this->valueHolder1d565->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer102ce && ($this->initializer102ce->__invoke($valueHolder1d565, $this, 'getUnitOfWork', array(), $this->initializer102ce) || 1) && $this->valueHolder1d565 = $valueHolder1d565;

        return $this->valueHolder1d565->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer102ce && ($this->initializer102ce->__invoke($valueHolder1d565, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer102ce) || 1) && $this->valueHolder1d565 = $valueHolder1d565;

        return $this->valueHolder1d565->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer102ce && ($this->initializer102ce->__invoke($valueHolder1d565, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer102ce) || 1) && $this->valueHolder1d565 = $valueHolder1d565;

        return $this->valueHolder1d565->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer102ce && ($this->initializer102ce->__invoke($valueHolder1d565, $this, 'getProxyFactory', array(), $this->initializer102ce) || 1) && $this->valueHolder1d565 = $valueHolder1d565;

        return $this->valueHolder1d565->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer102ce && ($this->initializer102ce->__invoke($valueHolder1d565, $this, 'initializeObject', array('obj' => $obj), $this->initializer102ce) || 1) && $this->valueHolder1d565 = $valueHolder1d565;

        return $this->valueHolder1d565->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer102ce && ($this->initializer102ce->__invoke($valueHolder1d565, $this, 'getFilters', array(), $this->initializer102ce) || 1) && $this->valueHolder1d565 = $valueHolder1d565;

        return $this->valueHolder1d565->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer102ce && ($this->initializer102ce->__invoke($valueHolder1d565, $this, 'isFiltersStateClean', array(), $this->initializer102ce) || 1) && $this->valueHolder1d565 = $valueHolder1d565;

        return $this->valueHolder1d565->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer102ce && ($this->initializer102ce->__invoke($valueHolder1d565, $this, 'hasFilters', array(), $this->initializer102ce) || 1) && $this->valueHolder1d565 = $valueHolder1d565;

        return $this->valueHolder1d565->hasFilters();
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

        $instance->initializer102ce = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder1d565) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder1d565 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder1d565->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer102ce && ($this->initializer102ce->__invoke($valueHolder1d565, $this, '__get', ['name' => $name], $this->initializer102ce) || 1) && $this->valueHolder1d565 = $valueHolder1d565;

        if (isset(self::$publicPropertiesbdfc7[$name])) {
            return $this->valueHolder1d565->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1d565;

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

        $targetObject = $this->valueHolder1d565;
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
        $this->initializer102ce && ($this->initializer102ce->__invoke($valueHolder1d565, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer102ce) || 1) && $this->valueHolder1d565 = $valueHolder1d565;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1d565;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder1d565;
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
        $this->initializer102ce && ($this->initializer102ce->__invoke($valueHolder1d565, $this, '__isset', array('name' => $name), $this->initializer102ce) || 1) && $this->valueHolder1d565 = $valueHolder1d565;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1d565;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder1d565;
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
        $this->initializer102ce && ($this->initializer102ce->__invoke($valueHolder1d565, $this, '__unset', array('name' => $name), $this->initializer102ce) || 1) && $this->valueHolder1d565 = $valueHolder1d565;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1d565;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder1d565;
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
        $this->initializer102ce && ($this->initializer102ce->__invoke($valueHolder1d565, $this, '__clone', array(), $this->initializer102ce) || 1) && $this->valueHolder1d565 = $valueHolder1d565;

        $this->valueHolder1d565 = clone $this->valueHolder1d565;
    }

    public function __sleep()
    {
        $this->initializer102ce && ($this->initializer102ce->__invoke($valueHolder1d565, $this, '__sleep', array(), $this->initializer102ce) || 1) && $this->valueHolder1d565 = $valueHolder1d565;

        return array('valueHolder1d565');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer102ce = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer102ce;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer102ce && ($this->initializer102ce->__invoke($valueHolder1d565, $this, 'initializeProxy', array(), $this->initializer102ce) || 1) && $this->valueHolder1d565 = $valueHolder1d565;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder1d565;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder1d565;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
