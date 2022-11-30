<?php

namespace ContainerTZccSrx;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder5fd3f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer10b25 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesdb9d4 = [
        
    ];

    public function getConnection()
    {
        $this->initializer10b25 && ($this->initializer10b25->__invoke($valueHolder5fd3f, $this, 'getConnection', array(), $this->initializer10b25) || 1) && $this->valueHolder5fd3f = $valueHolder5fd3f;

        return $this->valueHolder5fd3f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer10b25 && ($this->initializer10b25->__invoke($valueHolder5fd3f, $this, 'getMetadataFactory', array(), $this->initializer10b25) || 1) && $this->valueHolder5fd3f = $valueHolder5fd3f;

        return $this->valueHolder5fd3f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer10b25 && ($this->initializer10b25->__invoke($valueHolder5fd3f, $this, 'getExpressionBuilder', array(), $this->initializer10b25) || 1) && $this->valueHolder5fd3f = $valueHolder5fd3f;

        return $this->valueHolder5fd3f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer10b25 && ($this->initializer10b25->__invoke($valueHolder5fd3f, $this, 'beginTransaction', array(), $this->initializer10b25) || 1) && $this->valueHolder5fd3f = $valueHolder5fd3f;

        return $this->valueHolder5fd3f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer10b25 && ($this->initializer10b25->__invoke($valueHolder5fd3f, $this, 'getCache', array(), $this->initializer10b25) || 1) && $this->valueHolder5fd3f = $valueHolder5fd3f;

        return $this->valueHolder5fd3f->getCache();
    }

    public function transactional($func)
    {
        $this->initializer10b25 && ($this->initializer10b25->__invoke($valueHolder5fd3f, $this, 'transactional', array('func' => $func), $this->initializer10b25) || 1) && $this->valueHolder5fd3f = $valueHolder5fd3f;

        return $this->valueHolder5fd3f->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer10b25 && ($this->initializer10b25->__invoke($valueHolder5fd3f, $this, 'wrapInTransaction', array('func' => $func), $this->initializer10b25) || 1) && $this->valueHolder5fd3f = $valueHolder5fd3f;

        return $this->valueHolder5fd3f->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer10b25 && ($this->initializer10b25->__invoke($valueHolder5fd3f, $this, 'commit', array(), $this->initializer10b25) || 1) && $this->valueHolder5fd3f = $valueHolder5fd3f;

        return $this->valueHolder5fd3f->commit();
    }

    public function rollback()
    {
        $this->initializer10b25 && ($this->initializer10b25->__invoke($valueHolder5fd3f, $this, 'rollback', array(), $this->initializer10b25) || 1) && $this->valueHolder5fd3f = $valueHolder5fd3f;

        return $this->valueHolder5fd3f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer10b25 && ($this->initializer10b25->__invoke($valueHolder5fd3f, $this, 'getClassMetadata', array('className' => $className), $this->initializer10b25) || 1) && $this->valueHolder5fd3f = $valueHolder5fd3f;

        return $this->valueHolder5fd3f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer10b25 && ($this->initializer10b25->__invoke($valueHolder5fd3f, $this, 'createQuery', array('dql' => $dql), $this->initializer10b25) || 1) && $this->valueHolder5fd3f = $valueHolder5fd3f;

        return $this->valueHolder5fd3f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer10b25 && ($this->initializer10b25->__invoke($valueHolder5fd3f, $this, 'createNamedQuery', array('name' => $name), $this->initializer10b25) || 1) && $this->valueHolder5fd3f = $valueHolder5fd3f;

        return $this->valueHolder5fd3f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer10b25 && ($this->initializer10b25->__invoke($valueHolder5fd3f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer10b25) || 1) && $this->valueHolder5fd3f = $valueHolder5fd3f;

        return $this->valueHolder5fd3f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer10b25 && ($this->initializer10b25->__invoke($valueHolder5fd3f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer10b25) || 1) && $this->valueHolder5fd3f = $valueHolder5fd3f;

        return $this->valueHolder5fd3f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer10b25 && ($this->initializer10b25->__invoke($valueHolder5fd3f, $this, 'createQueryBuilder', array(), $this->initializer10b25) || 1) && $this->valueHolder5fd3f = $valueHolder5fd3f;

        return $this->valueHolder5fd3f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer10b25 && ($this->initializer10b25->__invoke($valueHolder5fd3f, $this, 'flush', array('entity' => $entity), $this->initializer10b25) || 1) && $this->valueHolder5fd3f = $valueHolder5fd3f;

        return $this->valueHolder5fd3f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer10b25 && ($this->initializer10b25->__invoke($valueHolder5fd3f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer10b25) || 1) && $this->valueHolder5fd3f = $valueHolder5fd3f;

        return $this->valueHolder5fd3f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer10b25 && ($this->initializer10b25->__invoke($valueHolder5fd3f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer10b25) || 1) && $this->valueHolder5fd3f = $valueHolder5fd3f;

        return $this->valueHolder5fd3f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer10b25 && ($this->initializer10b25->__invoke($valueHolder5fd3f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer10b25) || 1) && $this->valueHolder5fd3f = $valueHolder5fd3f;

        return $this->valueHolder5fd3f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer10b25 && ($this->initializer10b25->__invoke($valueHolder5fd3f, $this, 'clear', array('entityName' => $entityName), $this->initializer10b25) || 1) && $this->valueHolder5fd3f = $valueHolder5fd3f;

        return $this->valueHolder5fd3f->clear($entityName);
    }

    public function close()
    {
        $this->initializer10b25 && ($this->initializer10b25->__invoke($valueHolder5fd3f, $this, 'close', array(), $this->initializer10b25) || 1) && $this->valueHolder5fd3f = $valueHolder5fd3f;

        return $this->valueHolder5fd3f->close();
    }

    public function persist($entity)
    {
        $this->initializer10b25 && ($this->initializer10b25->__invoke($valueHolder5fd3f, $this, 'persist', array('entity' => $entity), $this->initializer10b25) || 1) && $this->valueHolder5fd3f = $valueHolder5fd3f;

        return $this->valueHolder5fd3f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer10b25 && ($this->initializer10b25->__invoke($valueHolder5fd3f, $this, 'remove', array('entity' => $entity), $this->initializer10b25) || 1) && $this->valueHolder5fd3f = $valueHolder5fd3f;

        return $this->valueHolder5fd3f->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer10b25 && ($this->initializer10b25->__invoke($valueHolder5fd3f, $this, 'refresh', array('entity' => $entity), $this->initializer10b25) || 1) && $this->valueHolder5fd3f = $valueHolder5fd3f;

        return $this->valueHolder5fd3f->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer10b25 && ($this->initializer10b25->__invoke($valueHolder5fd3f, $this, 'detach', array('entity' => $entity), $this->initializer10b25) || 1) && $this->valueHolder5fd3f = $valueHolder5fd3f;

        return $this->valueHolder5fd3f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer10b25 && ($this->initializer10b25->__invoke($valueHolder5fd3f, $this, 'merge', array('entity' => $entity), $this->initializer10b25) || 1) && $this->valueHolder5fd3f = $valueHolder5fd3f;

        return $this->valueHolder5fd3f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer10b25 && ($this->initializer10b25->__invoke($valueHolder5fd3f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer10b25) || 1) && $this->valueHolder5fd3f = $valueHolder5fd3f;

        return $this->valueHolder5fd3f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer10b25 && ($this->initializer10b25->__invoke($valueHolder5fd3f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer10b25) || 1) && $this->valueHolder5fd3f = $valueHolder5fd3f;

        return $this->valueHolder5fd3f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer10b25 && ($this->initializer10b25->__invoke($valueHolder5fd3f, $this, 'getRepository', array('entityName' => $entityName), $this->initializer10b25) || 1) && $this->valueHolder5fd3f = $valueHolder5fd3f;

        return $this->valueHolder5fd3f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer10b25 && ($this->initializer10b25->__invoke($valueHolder5fd3f, $this, 'contains', array('entity' => $entity), $this->initializer10b25) || 1) && $this->valueHolder5fd3f = $valueHolder5fd3f;

        return $this->valueHolder5fd3f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer10b25 && ($this->initializer10b25->__invoke($valueHolder5fd3f, $this, 'getEventManager', array(), $this->initializer10b25) || 1) && $this->valueHolder5fd3f = $valueHolder5fd3f;

        return $this->valueHolder5fd3f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer10b25 && ($this->initializer10b25->__invoke($valueHolder5fd3f, $this, 'getConfiguration', array(), $this->initializer10b25) || 1) && $this->valueHolder5fd3f = $valueHolder5fd3f;

        return $this->valueHolder5fd3f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer10b25 && ($this->initializer10b25->__invoke($valueHolder5fd3f, $this, 'isOpen', array(), $this->initializer10b25) || 1) && $this->valueHolder5fd3f = $valueHolder5fd3f;

        return $this->valueHolder5fd3f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer10b25 && ($this->initializer10b25->__invoke($valueHolder5fd3f, $this, 'getUnitOfWork', array(), $this->initializer10b25) || 1) && $this->valueHolder5fd3f = $valueHolder5fd3f;

        return $this->valueHolder5fd3f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer10b25 && ($this->initializer10b25->__invoke($valueHolder5fd3f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer10b25) || 1) && $this->valueHolder5fd3f = $valueHolder5fd3f;

        return $this->valueHolder5fd3f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer10b25 && ($this->initializer10b25->__invoke($valueHolder5fd3f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer10b25) || 1) && $this->valueHolder5fd3f = $valueHolder5fd3f;

        return $this->valueHolder5fd3f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer10b25 && ($this->initializer10b25->__invoke($valueHolder5fd3f, $this, 'getProxyFactory', array(), $this->initializer10b25) || 1) && $this->valueHolder5fd3f = $valueHolder5fd3f;

        return $this->valueHolder5fd3f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer10b25 && ($this->initializer10b25->__invoke($valueHolder5fd3f, $this, 'initializeObject', array('obj' => $obj), $this->initializer10b25) || 1) && $this->valueHolder5fd3f = $valueHolder5fd3f;

        return $this->valueHolder5fd3f->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer10b25 && ($this->initializer10b25->__invoke($valueHolder5fd3f, $this, 'getFilters', array(), $this->initializer10b25) || 1) && $this->valueHolder5fd3f = $valueHolder5fd3f;

        return $this->valueHolder5fd3f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer10b25 && ($this->initializer10b25->__invoke($valueHolder5fd3f, $this, 'isFiltersStateClean', array(), $this->initializer10b25) || 1) && $this->valueHolder5fd3f = $valueHolder5fd3f;

        return $this->valueHolder5fd3f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer10b25 && ($this->initializer10b25->__invoke($valueHolder5fd3f, $this, 'hasFilters', array(), $this->initializer10b25) || 1) && $this->valueHolder5fd3f = $valueHolder5fd3f;

        return $this->valueHolder5fd3f->hasFilters();
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

        $instance->initializer10b25 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder5fd3f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder5fd3f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder5fd3f->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer10b25 && ($this->initializer10b25->__invoke($valueHolder5fd3f, $this, '__get', ['name' => $name], $this->initializer10b25) || 1) && $this->valueHolder5fd3f = $valueHolder5fd3f;

        if (isset(self::$publicPropertiesdb9d4[$name])) {
            return $this->valueHolder5fd3f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5fd3f;

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

        $targetObject = $this->valueHolder5fd3f;
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
        $this->initializer10b25 && ($this->initializer10b25->__invoke($valueHolder5fd3f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer10b25) || 1) && $this->valueHolder5fd3f = $valueHolder5fd3f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5fd3f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder5fd3f;
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
        $this->initializer10b25 && ($this->initializer10b25->__invoke($valueHolder5fd3f, $this, '__isset', array('name' => $name), $this->initializer10b25) || 1) && $this->valueHolder5fd3f = $valueHolder5fd3f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5fd3f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder5fd3f;
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
        $this->initializer10b25 && ($this->initializer10b25->__invoke($valueHolder5fd3f, $this, '__unset', array('name' => $name), $this->initializer10b25) || 1) && $this->valueHolder5fd3f = $valueHolder5fd3f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5fd3f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder5fd3f;
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
        $this->initializer10b25 && ($this->initializer10b25->__invoke($valueHolder5fd3f, $this, '__clone', array(), $this->initializer10b25) || 1) && $this->valueHolder5fd3f = $valueHolder5fd3f;

        $this->valueHolder5fd3f = clone $this->valueHolder5fd3f;
    }

    public function __sleep()
    {
        $this->initializer10b25 && ($this->initializer10b25->__invoke($valueHolder5fd3f, $this, '__sleep', array(), $this->initializer10b25) || 1) && $this->valueHolder5fd3f = $valueHolder5fd3f;

        return array('valueHolder5fd3f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer10b25 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer10b25;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer10b25 && ($this->initializer10b25->__invoke($valueHolder5fd3f, $this, 'initializeProxy', array(), $this->initializer10b25) || 1) && $this->valueHolder5fd3f = $valueHolder5fd3f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5fd3f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5fd3f;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
