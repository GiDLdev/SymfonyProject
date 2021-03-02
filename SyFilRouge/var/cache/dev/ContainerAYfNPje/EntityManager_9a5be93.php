<?php

namespace ContainerAYfNPje;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder4a648 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf9004 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesbd166 = [
        
    ];

    public function getConnection()
    {
        $this->initializerf9004 && ($this->initializerf9004->__invoke($valueHolder4a648, $this, 'getConnection', array(), $this->initializerf9004) || 1) && $this->valueHolder4a648 = $valueHolder4a648;

        return $this->valueHolder4a648->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerf9004 && ($this->initializerf9004->__invoke($valueHolder4a648, $this, 'getMetadataFactory', array(), $this->initializerf9004) || 1) && $this->valueHolder4a648 = $valueHolder4a648;

        return $this->valueHolder4a648->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerf9004 && ($this->initializerf9004->__invoke($valueHolder4a648, $this, 'getExpressionBuilder', array(), $this->initializerf9004) || 1) && $this->valueHolder4a648 = $valueHolder4a648;

        return $this->valueHolder4a648->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerf9004 && ($this->initializerf9004->__invoke($valueHolder4a648, $this, 'beginTransaction', array(), $this->initializerf9004) || 1) && $this->valueHolder4a648 = $valueHolder4a648;

        return $this->valueHolder4a648->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerf9004 && ($this->initializerf9004->__invoke($valueHolder4a648, $this, 'getCache', array(), $this->initializerf9004) || 1) && $this->valueHolder4a648 = $valueHolder4a648;

        return $this->valueHolder4a648->getCache();
    }

    public function transactional($func)
    {
        $this->initializerf9004 && ($this->initializerf9004->__invoke($valueHolder4a648, $this, 'transactional', array('func' => $func), $this->initializerf9004) || 1) && $this->valueHolder4a648 = $valueHolder4a648;

        return $this->valueHolder4a648->transactional($func);
    }

    public function commit()
    {
        $this->initializerf9004 && ($this->initializerf9004->__invoke($valueHolder4a648, $this, 'commit', array(), $this->initializerf9004) || 1) && $this->valueHolder4a648 = $valueHolder4a648;

        return $this->valueHolder4a648->commit();
    }

    public function rollback()
    {
        $this->initializerf9004 && ($this->initializerf9004->__invoke($valueHolder4a648, $this, 'rollback', array(), $this->initializerf9004) || 1) && $this->valueHolder4a648 = $valueHolder4a648;

        return $this->valueHolder4a648->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerf9004 && ($this->initializerf9004->__invoke($valueHolder4a648, $this, 'getClassMetadata', array('className' => $className), $this->initializerf9004) || 1) && $this->valueHolder4a648 = $valueHolder4a648;

        return $this->valueHolder4a648->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerf9004 && ($this->initializerf9004->__invoke($valueHolder4a648, $this, 'createQuery', array('dql' => $dql), $this->initializerf9004) || 1) && $this->valueHolder4a648 = $valueHolder4a648;

        return $this->valueHolder4a648->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerf9004 && ($this->initializerf9004->__invoke($valueHolder4a648, $this, 'createNamedQuery', array('name' => $name), $this->initializerf9004) || 1) && $this->valueHolder4a648 = $valueHolder4a648;

        return $this->valueHolder4a648->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf9004 && ($this->initializerf9004->__invoke($valueHolder4a648, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf9004) || 1) && $this->valueHolder4a648 = $valueHolder4a648;

        return $this->valueHolder4a648->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerf9004 && ($this->initializerf9004->__invoke($valueHolder4a648, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf9004) || 1) && $this->valueHolder4a648 = $valueHolder4a648;

        return $this->valueHolder4a648->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerf9004 && ($this->initializerf9004->__invoke($valueHolder4a648, $this, 'createQueryBuilder', array(), $this->initializerf9004) || 1) && $this->valueHolder4a648 = $valueHolder4a648;

        return $this->valueHolder4a648->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerf9004 && ($this->initializerf9004->__invoke($valueHolder4a648, $this, 'flush', array('entity' => $entity), $this->initializerf9004) || 1) && $this->valueHolder4a648 = $valueHolder4a648;

        return $this->valueHolder4a648->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf9004 && ($this->initializerf9004->__invoke($valueHolder4a648, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf9004) || 1) && $this->valueHolder4a648 = $valueHolder4a648;

        return $this->valueHolder4a648->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerf9004 && ($this->initializerf9004->__invoke($valueHolder4a648, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf9004) || 1) && $this->valueHolder4a648 = $valueHolder4a648;

        return $this->valueHolder4a648->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf9004 && ($this->initializerf9004->__invoke($valueHolder4a648, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf9004) || 1) && $this->valueHolder4a648 = $valueHolder4a648;

        return $this->valueHolder4a648->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerf9004 && ($this->initializerf9004->__invoke($valueHolder4a648, $this, 'clear', array('entityName' => $entityName), $this->initializerf9004) || 1) && $this->valueHolder4a648 = $valueHolder4a648;

        return $this->valueHolder4a648->clear($entityName);
    }

    public function close()
    {
        $this->initializerf9004 && ($this->initializerf9004->__invoke($valueHolder4a648, $this, 'close', array(), $this->initializerf9004) || 1) && $this->valueHolder4a648 = $valueHolder4a648;

        return $this->valueHolder4a648->close();
    }

    public function persist($entity)
    {
        $this->initializerf9004 && ($this->initializerf9004->__invoke($valueHolder4a648, $this, 'persist', array('entity' => $entity), $this->initializerf9004) || 1) && $this->valueHolder4a648 = $valueHolder4a648;

        return $this->valueHolder4a648->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerf9004 && ($this->initializerf9004->__invoke($valueHolder4a648, $this, 'remove', array('entity' => $entity), $this->initializerf9004) || 1) && $this->valueHolder4a648 = $valueHolder4a648;

        return $this->valueHolder4a648->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerf9004 && ($this->initializerf9004->__invoke($valueHolder4a648, $this, 'refresh', array('entity' => $entity), $this->initializerf9004) || 1) && $this->valueHolder4a648 = $valueHolder4a648;

        return $this->valueHolder4a648->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerf9004 && ($this->initializerf9004->__invoke($valueHolder4a648, $this, 'detach', array('entity' => $entity), $this->initializerf9004) || 1) && $this->valueHolder4a648 = $valueHolder4a648;

        return $this->valueHolder4a648->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerf9004 && ($this->initializerf9004->__invoke($valueHolder4a648, $this, 'merge', array('entity' => $entity), $this->initializerf9004) || 1) && $this->valueHolder4a648 = $valueHolder4a648;

        return $this->valueHolder4a648->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerf9004 && ($this->initializerf9004->__invoke($valueHolder4a648, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf9004) || 1) && $this->valueHolder4a648 = $valueHolder4a648;

        return $this->valueHolder4a648->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf9004 && ($this->initializerf9004->__invoke($valueHolder4a648, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf9004) || 1) && $this->valueHolder4a648 = $valueHolder4a648;

        return $this->valueHolder4a648->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerf9004 && ($this->initializerf9004->__invoke($valueHolder4a648, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf9004) || 1) && $this->valueHolder4a648 = $valueHolder4a648;

        return $this->valueHolder4a648->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerf9004 && ($this->initializerf9004->__invoke($valueHolder4a648, $this, 'contains', array('entity' => $entity), $this->initializerf9004) || 1) && $this->valueHolder4a648 = $valueHolder4a648;

        return $this->valueHolder4a648->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerf9004 && ($this->initializerf9004->__invoke($valueHolder4a648, $this, 'getEventManager', array(), $this->initializerf9004) || 1) && $this->valueHolder4a648 = $valueHolder4a648;

        return $this->valueHolder4a648->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerf9004 && ($this->initializerf9004->__invoke($valueHolder4a648, $this, 'getConfiguration', array(), $this->initializerf9004) || 1) && $this->valueHolder4a648 = $valueHolder4a648;

        return $this->valueHolder4a648->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerf9004 && ($this->initializerf9004->__invoke($valueHolder4a648, $this, 'isOpen', array(), $this->initializerf9004) || 1) && $this->valueHolder4a648 = $valueHolder4a648;

        return $this->valueHolder4a648->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerf9004 && ($this->initializerf9004->__invoke($valueHolder4a648, $this, 'getUnitOfWork', array(), $this->initializerf9004) || 1) && $this->valueHolder4a648 = $valueHolder4a648;

        return $this->valueHolder4a648->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerf9004 && ($this->initializerf9004->__invoke($valueHolder4a648, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf9004) || 1) && $this->valueHolder4a648 = $valueHolder4a648;

        return $this->valueHolder4a648->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerf9004 && ($this->initializerf9004->__invoke($valueHolder4a648, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf9004) || 1) && $this->valueHolder4a648 = $valueHolder4a648;

        return $this->valueHolder4a648->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerf9004 && ($this->initializerf9004->__invoke($valueHolder4a648, $this, 'getProxyFactory', array(), $this->initializerf9004) || 1) && $this->valueHolder4a648 = $valueHolder4a648;

        return $this->valueHolder4a648->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerf9004 && ($this->initializerf9004->__invoke($valueHolder4a648, $this, 'initializeObject', array('obj' => $obj), $this->initializerf9004) || 1) && $this->valueHolder4a648 = $valueHolder4a648;

        return $this->valueHolder4a648->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerf9004 && ($this->initializerf9004->__invoke($valueHolder4a648, $this, 'getFilters', array(), $this->initializerf9004) || 1) && $this->valueHolder4a648 = $valueHolder4a648;

        return $this->valueHolder4a648->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerf9004 && ($this->initializerf9004->__invoke($valueHolder4a648, $this, 'isFiltersStateClean', array(), $this->initializerf9004) || 1) && $this->valueHolder4a648 = $valueHolder4a648;

        return $this->valueHolder4a648->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerf9004 && ($this->initializerf9004->__invoke($valueHolder4a648, $this, 'hasFilters', array(), $this->initializerf9004) || 1) && $this->valueHolder4a648 = $valueHolder4a648;

        return $this->valueHolder4a648->hasFilters();
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

        $instance->initializerf9004 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder4a648) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder4a648 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder4a648->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerf9004 && ($this->initializerf9004->__invoke($valueHolder4a648, $this, '__get', ['name' => $name], $this->initializerf9004) || 1) && $this->valueHolder4a648 = $valueHolder4a648;

        if (isset(self::$publicPropertiesbd166[$name])) {
            return $this->valueHolder4a648->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4a648;

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

        $targetObject = $this->valueHolder4a648;
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
        $this->initializerf9004 && ($this->initializerf9004->__invoke($valueHolder4a648, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf9004) || 1) && $this->valueHolder4a648 = $valueHolder4a648;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4a648;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder4a648;
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
        $this->initializerf9004 && ($this->initializerf9004->__invoke($valueHolder4a648, $this, '__isset', array('name' => $name), $this->initializerf9004) || 1) && $this->valueHolder4a648 = $valueHolder4a648;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4a648;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder4a648;
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
        $this->initializerf9004 && ($this->initializerf9004->__invoke($valueHolder4a648, $this, '__unset', array('name' => $name), $this->initializerf9004) || 1) && $this->valueHolder4a648 = $valueHolder4a648;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4a648;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder4a648;
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
        $this->initializerf9004 && ($this->initializerf9004->__invoke($valueHolder4a648, $this, '__clone', array(), $this->initializerf9004) || 1) && $this->valueHolder4a648 = $valueHolder4a648;

        $this->valueHolder4a648 = clone $this->valueHolder4a648;
    }

    public function __sleep()
    {
        $this->initializerf9004 && ($this->initializerf9004->__invoke($valueHolder4a648, $this, '__sleep', array(), $this->initializerf9004) || 1) && $this->valueHolder4a648 = $valueHolder4a648;

        return array('valueHolder4a648');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf9004 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf9004;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerf9004 && ($this->initializerf9004->__invoke($valueHolder4a648, $this, 'initializeProxy', array(), $this->initializerf9004) || 1) && $this->valueHolder4a648 = $valueHolder4a648;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder4a648;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder4a648;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
