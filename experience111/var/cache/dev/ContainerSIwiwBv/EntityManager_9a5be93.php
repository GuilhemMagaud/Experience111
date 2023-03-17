<?php

namespace ContainerSIwiwBv;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder803cf = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer479f3 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesc9338 = [
        
    ];

    public function getConnection()
    {
        $this->initializer479f3 && ($this->initializer479f3->__invoke($valueHolder803cf, $this, 'getConnection', array(), $this->initializer479f3) || 1) && $this->valueHolder803cf = $valueHolder803cf;

        return $this->valueHolder803cf->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer479f3 && ($this->initializer479f3->__invoke($valueHolder803cf, $this, 'getMetadataFactory', array(), $this->initializer479f3) || 1) && $this->valueHolder803cf = $valueHolder803cf;

        return $this->valueHolder803cf->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer479f3 && ($this->initializer479f3->__invoke($valueHolder803cf, $this, 'getExpressionBuilder', array(), $this->initializer479f3) || 1) && $this->valueHolder803cf = $valueHolder803cf;

        return $this->valueHolder803cf->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer479f3 && ($this->initializer479f3->__invoke($valueHolder803cf, $this, 'beginTransaction', array(), $this->initializer479f3) || 1) && $this->valueHolder803cf = $valueHolder803cf;

        return $this->valueHolder803cf->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer479f3 && ($this->initializer479f3->__invoke($valueHolder803cf, $this, 'getCache', array(), $this->initializer479f3) || 1) && $this->valueHolder803cf = $valueHolder803cf;

        return $this->valueHolder803cf->getCache();
    }

    public function transactional($func)
    {
        $this->initializer479f3 && ($this->initializer479f3->__invoke($valueHolder803cf, $this, 'transactional', array('func' => $func), $this->initializer479f3) || 1) && $this->valueHolder803cf = $valueHolder803cf;

        return $this->valueHolder803cf->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer479f3 && ($this->initializer479f3->__invoke($valueHolder803cf, $this, 'wrapInTransaction', array('func' => $func), $this->initializer479f3) || 1) && $this->valueHolder803cf = $valueHolder803cf;

        return $this->valueHolder803cf->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer479f3 && ($this->initializer479f3->__invoke($valueHolder803cf, $this, 'commit', array(), $this->initializer479f3) || 1) && $this->valueHolder803cf = $valueHolder803cf;

        return $this->valueHolder803cf->commit();
    }

    public function rollback()
    {
        $this->initializer479f3 && ($this->initializer479f3->__invoke($valueHolder803cf, $this, 'rollback', array(), $this->initializer479f3) || 1) && $this->valueHolder803cf = $valueHolder803cf;

        return $this->valueHolder803cf->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer479f3 && ($this->initializer479f3->__invoke($valueHolder803cf, $this, 'getClassMetadata', array('className' => $className), $this->initializer479f3) || 1) && $this->valueHolder803cf = $valueHolder803cf;

        return $this->valueHolder803cf->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer479f3 && ($this->initializer479f3->__invoke($valueHolder803cf, $this, 'createQuery', array('dql' => $dql), $this->initializer479f3) || 1) && $this->valueHolder803cf = $valueHolder803cf;

        return $this->valueHolder803cf->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer479f3 && ($this->initializer479f3->__invoke($valueHolder803cf, $this, 'createNamedQuery', array('name' => $name), $this->initializer479f3) || 1) && $this->valueHolder803cf = $valueHolder803cf;

        return $this->valueHolder803cf->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer479f3 && ($this->initializer479f3->__invoke($valueHolder803cf, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer479f3) || 1) && $this->valueHolder803cf = $valueHolder803cf;

        return $this->valueHolder803cf->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer479f3 && ($this->initializer479f3->__invoke($valueHolder803cf, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer479f3) || 1) && $this->valueHolder803cf = $valueHolder803cf;

        return $this->valueHolder803cf->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer479f3 && ($this->initializer479f3->__invoke($valueHolder803cf, $this, 'createQueryBuilder', array(), $this->initializer479f3) || 1) && $this->valueHolder803cf = $valueHolder803cf;

        return $this->valueHolder803cf->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer479f3 && ($this->initializer479f3->__invoke($valueHolder803cf, $this, 'flush', array('entity' => $entity), $this->initializer479f3) || 1) && $this->valueHolder803cf = $valueHolder803cf;

        return $this->valueHolder803cf->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer479f3 && ($this->initializer479f3->__invoke($valueHolder803cf, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer479f3) || 1) && $this->valueHolder803cf = $valueHolder803cf;

        return $this->valueHolder803cf->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer479f3 && ($this->initializer479f3->__invoke($valueHolder803cf, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer479f3) || 1) && $this->valueHolder803cf = $valueHolder803cf;

        return $this->valueHolder803cf->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer479f3 && ($this->initializer479f3->__invoke($valueHolder803cf, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer479f3) || 1) && $this->valueHolder803cf = $valueHolder803cf;

        return $this->valueHolder803cf->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer479f3 && ($this->initializer479f3->__invoke($valueHolder803cf, $this, 'clear', array('entityName' => $entityName), $this->initializer479f3) || 1) && $this->valueHolder803cf = $valueHolder803cf;

        return $this->valueHolder803cf->clear($entityName);
    }

    public function close()
    {
        $this->initializer479f3 && ($this->initializer479f3->__invoke($valueHolder803cf, $this, 'close', array(), $this->initializer479f3) || 1) && $this->valueHolder803cf = $valueHolder803cf;

        return $this->valueHolder803cf->close();
    }

    public function persist($entity)
    {
        $this->initializer479f3 && ($this->initializer479f3->__invoke($valueHolder803cf, $this, 'persist', array('entity' => $entity), $this->initializer479f3) || 1) && $this->valueHolder803cf = $valueHolder803cf;

        return $this->valueHolder803cf->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer479f3 && ($this->initializer479f3->__invoke($valueHolder803cf, $this, 'remove', array('entity' => $entity), $this->initializer479f3) || 1) && $this->valueHolder803cf = $valueHolder803cf;

        return $this->valueHolder803cf->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer479f3 && ($this->initializer479f3->__invoke($valueHolder803cf, $this, 'refresh', array('entity' => $entity), $this->initializer479f3) || 1) && $this->valueHolder803cf = $valueHolder803cf;

        return $this->valueHolder803cf->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer479f3 && ($this->initializer479f3->__invoke($valueHolder803cf, $this, 'detach', array('entity' => $entity), $this->initializer479f3) || 1) && $this->valueHolder803cf = $valueHolder803cf;

        return $this->valueHolder803cf->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer479f3 && ($this->initializer479f3->__invoke($valueHolder803cf, $this, 'merge', array('entity' => $entity), $this->initializer479f3) || 1) && $this->valueHolder803cf = $valueHolder803cf;

        return $this->valueHolder803cf->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer479f3 && ($this->initializer479f3->__invoke($valueHolder803cf, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer479f3) || 1) && $this->valueHolder803cf = $valueHolder803cf;

        return $this->valueHolder803cf->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer479f3 && ($this->initializer479f3->__invoke($valueHolder803cf, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer479f3) || 1) && $this->valueHolder803cf = $valueHolder803cf;

        return $this->valueHolder803cf->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer479f3 && ($this->initializer479f3->__invoke($valueHolder803cf, $this, 'getRepository', array('entityName' => $entityName), $this->initializer479f3) || 1) && $this->valueHolder803cf = $valueHolder803cf;

        return $this->valueHolder803cf->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer479f3 && ($this->initializer479f3->__invoke($valueHolder803cf, $this, 'contains', array('entity' => $entity), $this->initializer479f3) || 1) && $this->valueHolder803cf = $valueHolder803cf;

        return $this->valueHolder803cf->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer479f3 && ($this->initializer479f3->__invoke($valueHolder803cf, $this, 'getEventManager', array(), $this->initializer479f3) || 1) && $this->valueHolder803cf = $valueHolder803cf;

        return $this->valueHolder803cf->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer479f3 && ($this->initializer479f3->__invoke($valueHolder803cf, $this, 'getConfiguration', array(), $this->initializer479f3) || 1) && $this->valueHolder803cf = $valueHolder803cf;

        return $this->valueHolder803cf->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer479f3 && ($this->initializer479f3->__invoke($valueHolder803cf, $this, 'isOpen', array(), $this->initializer479f3) || 1) && $this->valueHolder803cf = $valueHolder803cf;

        return $this->valueHolder803cf->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer479f3 && ($this->initializer479f3->__invoke($valueHolder803cf, $this, 'getUnitOfWork', array(), $this->initializer479f3) || 1) && $this->valueHolder803cf = $valueHolder803cf;

        return $this->valueHolder803cf->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer479f3 && ($this->initializer479f3->__invoke($valueHolder803cf, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer479f3) || 1) && $this->valueHolder803cf = $valueHolder803cf;

        return $this->valueHolder803cf->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer479f3 && ($this->initializer479f3->__invoke($valueHolder803cf, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer479f3) || 1) && $this->valueHolder803cf = $valueHolder803cf;

        return $this->valueHolder803cf->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer479f3 && ($this->initializer479f3->__invoke($valueHolder803cf, $this, 'getProxyFactory', array(), $this->initializer479f3) || 1) && $this->valueHolder803cf = $valueHolder803cf;

        return $this->valueHolder803cf->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer479f3 && ($this->initializer479f3->__invoke($valueHolder803cf, $this, 'initializeObject', array('obj' => $obj), $this->initializer479f3) || 1) && $this->valueHolder803cf = $valueHolder803cf;

        return $this->valueHolder803cf->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer479f3 && ($this->initializer479f3->__invoke($valueHolder803cf, $this, 'getFilters', array(), $this->initializer479f3) || 1) && $this->valueHolder803cf = $valueHolder803cf;

        return $this->valueHolder803cf->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer479f3 && ($this->initializer479f3->__invoke($valueHolder803cf, $this, 'isFiltersStateClean', array(), $this->initializer479f3) || 1) && $this->valueHolder803cf = $valueHolder803cf;

        return $this->valueHolder803cf->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer479f3 && ($this->initializer479f3->__invoke($valueHolder803cf, $this, 'hasFilters', array(), $this->initializer479f3) || 1) && $this->valueHolder803cf = $valueHolder803cf;

        return $this->valueHolder803cf->hasFilters();
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

        $instance->initializer479f3 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder803cf) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder803cf = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder803cf->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer479f3 && ($this->initializer479f3->__invoke($valueHolder803cf, $this, '__get', ['name' => $name], $this->initializer479f3) || 1) && $this->valueHolder803cf = $valueHolder803cf;

        if (isset(self::$publicPropertiesc9338[$name])) {
            return $this->valueHolder803cf->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder803cf;

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

        $targetObject = $this->valueHolder803cf;
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
        $this->initializer479f3 && ($this->initializer479f3->__invoke($valueHolder803cf, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer479f3) || 1) && $this->valueHolder803cf = $valueHolder803cf;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder803cf;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder803cf;
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
        $this->initializer479f3 && ($this->initializer479f3->__invoke($valueHolder803cf, $this, '__isset', array('name' => $name), $this->initializer479f3) || 1) && $this->valueHolder803cf = $valueHolder803cf;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder803cf;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder803cf;
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
        $this->initializer479f3 && ($this->initializer479f3->__invoke($valueHolder803cf, $this, '__unset', array('name' => $name), $this->initializer479f3) || 1) && $this->valueHolder803cf = $valueHolder803cf;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder803cf;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder803cf;
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
        $this->initializer479f3 && ($this->initializer479f3->__invoke($valueHolder803cf, $this, '__clone', array(), $this->initializer479f3) || 1) && $this->valueHolder803cf = $valueHolder803cf;

        $this->valueHolder803cf = clone $this->valueHolder803cf;
    }

    public function __sleep()
    {
        $this->initializer479f3 && ($this->initializer479f3->__invoke($valueHolder803cf, $this, '__sleep', array(), $this->initializer479f3) || 1) && $this->valueHolder803cf = $valueHolder803cf;

        return array('valueHolder803cf');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer479f3 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer479f3;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer479f3 && ($this->initializer479f3->__invoke($valueHolder803cf, $this, 'initializeProxy', array(), $this->initializer479f3) || 1) && $this->valueHolder803cf = $valueHolder803cf;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder803cf;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder803cf;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
