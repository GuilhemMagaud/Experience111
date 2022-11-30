<?php

namespace ContainerWCJrz3U;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder736bc = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerd3fb3 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties850bf = [
        
    ];

    public function getConnection()
    {
        $this->initializerd3fb3 && ($this->initializerd3fb3->__invoke($valueHolder736bc, $this, 'getConnection', array(), $this->initializerd3fb3) || 1) && $this->valueHolder736bc = $valueHolder736bc;

        return $this->valueHolder736bc->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerd3fb3 && ($this->initializerd3fb3->__invoke($valueHolder736bc, $this, 'getMetadataFactory', array(), $this->initializerd3fb3) || 1) && $this->valueHolder736bc = $valueHolder736bc;

        return $this->valueHolder736bc->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerd3fb3 && ($this->initializerd3fb3->__invoke($valueHolder736bc, $this, 'getExpressionBuilder', array(), $this->initializerd3fb3) || 1) && $this->valueHolder736bc = $valueHolder736bc;

        return $this->valueHolder736bc->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerd3fb3 && ($this->initializerd3fb3->__invoke($valueHolder736bc, $this, 'beginTransaction', array(), $this->initializerd3fb3) || 1) && $this->valueHolder736bc = $valueHolder736bc;

        return $this->valueHolder736bc->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerd3fb3 && ($this->initializerd3fb3->__invoke($valueHolder736bc, $this, 'getCache', array(), $this->initializerd3fb3) || 1) && $this->valueHolder736bc = $valueHolder736bc;

        return $this->valueHolder736bc->getCache();
    }

    public function transactional($func)
    {
        $this->initializerd3fb3 && ($this->initializerd3fb3->__invoke($valueHolder736bc, $this, 'transactional', array('func' => $func), $this->initializerd3fb3) || 1) && $this->valueHolder736bc = $valueHolder736bc;

        return $this->valueHolder736bc->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerd3fb3 && ($this->initializerd3fb3->__invoke($valueHolder736bc, $this, 'wrapInTransaction', array('func' => $func), $this->initializerd3fb3) || 1) && $this->valueHolder736bc = $valueHolder736bc;

        return $this->valueHolder736bc->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerd3fb3 && ($this->initializerd3fb3->__invoke($valueHolder736bc, $this, 'commit', array(), $this->initializerd3fb3) || 1) && $this->valueHolder736bc = $valueHolder736bc;

        return $this->valueHolder736bc->commit();
    }

    public function rollback()
    {
        $this->initializerd3fb3 && ($this->initializerd3fb3->__invoke($valueHolder736bc, $this, 'rollback', array(), $this->initializerd3fb3) || 1) && $this->valueHolder736bc = $valueHolder736bc;

        return $this->valueHolder736bc->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerd3fb3 && ($this->initializerd3fb3->__invoke($valueHolder736bc, $this, 'getClassMetadata', array('className' => $className), $this->initializerd3fb3) || 1) && $this->valueHolder736bc = $valueHolder736bc;

        return $this->valueHolder736bc->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerd3fb3 && ($this->initializerd3fb3->__invoke($valueHolder736bc, $this, 'createQuery', array('dql' => $dql), $this->initializerd3fb3) || 1) && $this->valueHolder736bc = $valueHolder736bc;

        return $this->valueHolder736bc->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerd3fb3 && ($this->initializerd3fb3->__invoke($valueHolder736bc, $this, 'createNamedQuery', array('name' => $name), $this->initializerd3fb3) || 1) && $this->valueHolder736bc = $valueHolder736bc;

        return $this->valueHolder736bc->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerd3fb3 && ($this->initializerd3fb3->__invoke($valueHolder736bc, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerd3fb3) || 1) && $this->valueHolder736bc = $valueHolder736bc;

        return $this->valueHolder736bc->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerd3fb3 && ($this->initializerd3fb3->__invoke($valueHolder736bc, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerd3fb3) || 1) && $this->valueHolder736bc = $valueHolder736bc;

        return $this->valueHolder736bc->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerd3fb3 && ($this->initializerd3fb3->__invoke($valueHolder736bc, $this, 'createQueryBuilder', array(), $this->initializerd3fb3) || 1) && $this->valueHolder736bc = $valueHolder736bc;

        return $this->valueHolder736bc->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerd3fb3 && ($this->initializerd3fb3->__invoke($valueHolder736bc, $this, 'flush', array('entity' => $entity), $this->initializerd3fb3) || 1) && $this->valueHolder736bc = $valueHolder736bc;

        return $this->valueHolder736bc->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerd3fb3 && ($this->initializerd3fb3->__invoke($valueHolder736bc, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd3fb3) || 1) && $this->valueHolder736bc = $valueHolder736bc;

        return $this->valueHolder736bc->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerd3fb3 && ($this->initializerd3fb3->__invoke($valueHolder736bc, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerd3fb3) || 1) && $this->valueHolder736bc = $valueHolder736bc;

        return $this->valueHolder736bc->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerd3fb3 && ($this->initializerd3fb3->__invoke($valueHolder736bc, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerd3fb3) || 1) && $this->valueHolder736bc = $valueHolder736bc;

        return $this->valueHolder736bc->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerd3fb3 && ($this->initializerd3fb3->__invoke($valueHolder736bc, $this, 'clear', array('entityName' => $entityName), $this->initializerd3fb3) || 1) && $this->valueHolder736bc = $valueHolder736bc;

        return $this->valueHolder736bc->clear($entityName);
    }

    public function close()
    {
        $this->initializerd3fb3 && ($this->initializerd3fb3->__invoke($valueHolder736bc, $this, 'close', array(), $this->initializerd3fb3) || 1) && $this->valueHolder736bc = $valueHolder736bc;

        return $this->valueHolder736bc->close();
    }

    public function persist($entity)
    {
        $this->initializerd3fb3 && ($this->initializerd3fb3->__invoke($valueHolder736bc, $this, 'persist', array('entity' => $entity), $this->initializerd3fb3) || 1) && $this->valueHolder736bc = $valueHolder736bc;

        return $this->valueHolder736bc->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerd3fb3 && ($this->initializerd3fb3->__invoke($valueHolder736bc, $this, 'remove', array('entity' => $entity), $this->initializerd3fb3) || 1) && $this->valueHolder736bc = $valueHolder736bc;

        return $this->valueHolder736bc->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerd3fb3 && ($this->initializerd3fb3->__invoke($valueHolder736bc, $this, 'refresh', array('entity' => $entity), $this->initializerd3fb3) || 1) && $this->valueHolder736bc = $valueHolder736bc;

        return $this->valueHolder736bc->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerd3fb3 && ($this->initializerd3fb3->__invoke($valueHolder736bc, $this, 'detach', array('entity' => $entity), $this->initializerd3fb3) || 1) && $this->valueHolder736bc = $valueHolder736bc;

        return $this->valueHolder736bc->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerd3fb3 && ($this->initializerd3fb3->__invoke($valueHolder736bc, $this, 'merge', array('entity' => $entity), $this->initializerd3fb3) || 1) && $this->valueHolder736bc = $valueHolder736bc;

        return $this->valueHolder736bc->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerd3fb3 && ($this->initializerd3fb3->__invoke($valueHolder736bc, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerd3fb3) || 1) && $this->valueHolder736bc = $valueHolder736bc;

        return $this->valueHolder736bc->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerd3fb3 && ($this->initializerd3fb3->__invoke($valueHolder736bc, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd3fb3) || 1) && $this->valueHolder736bc = $valueHolder736bc;

        return $this->valueHolder736bc->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerd3fb3 && ($this->initializerd3fb3->__invoke($valueHolder736bc, $this, 'getRepository', array('entityName' => $entityName), $this->initializerd3fb3) || 1) && $this->valueHolder736bc = $valueHolder736bc;

        return $this->valueHolder736bc->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerd3fb3 && ($this->initializerd3fb3->__invoke($valueHolder736bc, $this, 'contains', array('entity' => $entity), $this->initializerd3fb3) || 1) && $this->valueHolder736bc = $valueHolder736bc;

        return $this->valueHolder736bc->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerd3fb3 && ($this->initializerd3fb3->__invoke($valueHolder736bc, $this, 'getEventManager', array(), $this->initializerd3fb3) || 1) && $this->valueHolder736bc = $valueHolder736bc;

        return $this->valueHolder736bc->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerd3fb3 && ($this->initializerd3fb3->__invoke($valueHolder736bc, $this, 'getConfiguration', array(), $this->initializerd3fb3) || 1) && $this->valueHolder736bc = $valueHolder736bc;

        return $this->valueHolder736bc->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerd3fb3 && ($this->initializerd3fb3->__invoke($valueHolder736bc, $this, 'isOpen', array(), $this->initializerd3fb3) || 1) && $this->valueHolder736bc = $valueHolder736bc;

        return $this->valueHolder736bc->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerd3fb3 && ($this->initializerd3fb3->__invoke($valueHolder736bc, $this, 'getUnitOfWork', array(), $this->initializerd3fb3) || 1) && $this->valueHolder736bc = $valueHolder736bc;

        return $this->valueHolder736bc->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerd3fb3 && ($this->initializerd3fb3->__invoke($valueHolder736bc, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd3fb3) || 1) && $this->valueHolder736bc = $valueHolder736bc;

        return $this->valueHolder736bc->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerd3fb3 && ($this->initializerd3fb3->__invoke($valueHolder736bc, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd3fb3) || 1) && $this->valueHolder736bc = $valueHolder736bc;

        return $this->valueHolder736bc->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerd3fb3 && ($this->initializerd3fb3->__invoke($valueHolder736bc, $this, 'getProxyFactory', array(), $this->initializerd3fb3) || 1) && $this->valueHolder736bc = $valueHolder736bc;

        return $this->valueHolder736bc->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerd3fb3 && ($this->initializerd3fb3->__invoke($valueHolder736bc, $this, 'initializeObject', array('obj' => $obj), $this->initializerd3fb3) || 1) && $this->valueHolder736bc = $valueHolder736bc;

        return $this->valueHolder736bc->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerd3fb3 && ($this->initializerd3fb3->__invoke($valueHolder736bc, $this, 'getFilters', array(), $this->initializerd3fb3) || 1) && $this->valueHolder736bc = $valueHolder736bc;

        return $this->valueHolder736bc->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerd3fb3 && ($this->initializerd3fb3->__invoke($valueHolder736bc, $this, 'isFiltersStateClean', array(), $this->initializerd3fb3) || 1) && $this->valueHolder736bc = $valueHolder736bc;

        return $this->valueHolder736bc->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerd3fb3 && ($this->initializerd3fb3->__invoke($valueHolder736bc, $this, 'hasFilters', array(), $this->initializerd3fb3) || 1) && $this->valueHolder736bc = $valueHolder736bc;

        return $this->valueHolder736bc->hasFilters();
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

        $instance->initializerd3fb3 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder736bc) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder736bc = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder736bc->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializerd3fb3 && ($this->initializerd3fb3->__invoke($valueHolder736bc, $this, '__get', ['name' => $name], $this->initializerd3fb3) || 1) && $this->valueHolder736bc = $valueHolder736bc;

        if (isset(self::$publicProperties850bf[$name])) {
            return $this->valueHolder736bc->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder736bc;

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

        $targetObject = $this->valueHolder736bc;
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
        $this->initializerd3fb3 && ($this->initializerd3fb3->__invoke($valueHolder736bc, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd3fb3) || 1) && $this->valueHolder736bc = $valueHolder736bc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder736bc;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder736bc;
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
        $this->initializerd3fb3 && ($this->initializerd3fb3->__invoke($valueHolder736bc, $this, '__isset', array('name' => $name), $this->initializerd3fb3) || 1) && $this->valueHolder736bc = $valueHolder736bc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder736bc;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder736bc;
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
        $this->initializerd3fb3 && ($this->initializerd3fb3->__invoke($valueHolder736bc, $this, '__unset', array('name' => $name), $this->initializerd3fb3) || 1) && $this->valueHolder736bc = $valueHolder736bc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder736bc;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder736bc;
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
        $this->initializerd3fb3 && ($this->initializerd3fb3->__invoke($valueHolder736bc, $this, '__clone', array(), $this->initializerd3fb3) || 1) && $this->valueHolder736bc = $valueHolder736bc;

        $this->valueHolder736bc = clone $this->valueHolder736bc;
    }

    public function __sleep()
    {
        $this->initializerd3fb3 && ($this->initializerd3fb3->__invoke($valueHolder736bc, $this, '__sleep', array(), $this->initializerd3fb3) || 1) && $this->valueHolder736bc = $valueHolder736bc;

        return array('valueHolder736bc');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerd3fb3 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerd3fb3;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerd3fb3 && ($this->initializerd3fb3->__invoke($valueHolder736bc, $this, 'initializeProxy', array(), $this->initializerd3fb3) || 1) && $this->valueHolder736bc = $valueHolder736bc;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder736bc;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder736bc;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
