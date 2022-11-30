<?php

namespace ContainerLaeI4Xc;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderf6776 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc4dfa = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties7e013 = [
        
    ];

    public function getConnection()
    {
        $this->initializerc4dfa && ($this->initializerc4dfa->__invoke($valueHolderf6776, $this, 'getConnection', array(), $this->initializerc4dfa) || 1) && $this->valueHolderf6776 = $valueHolderf6776;

        return $this->valueHolderf6776->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerc4dfa && ($this->initializerc4dfa->__invoke($valueHolderf6776, $this, 'getMetadataFactory', array(), $this->initializerc4dfa) || 1) && $this->valueHolderf6776 = $valueHolderf6776;

        return $this->valueHolderf6776->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerc4dfa && ($this->initializerc4dfa->__invoke($valueHolderf6776, $this, 'getExpressionBuilder', array(), $this->initializerc4dfa) || 1) && $this->valueHolderf6776 = $valueHolderf6776;

        return $this->valueHolderf6776->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerc4dfa && ($this->initializerc4dfa->__invoke($valueHolderf6776, $this, 'beginTransaction', array(), $this->initializerc4dfa) || 1) && $this->valueHolderf6776 = $valueHolderf6776;

        return $this->valueHolderf6776->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerc4dfa && ($this->initializerc4dfa->__invoke($valueHolderf6776, $this, 'getCache', array(), $this->initializerc4dfa) || 1) && $this->valueHolderf6776 = $valueHolderf6776;

        return $this->valueHolderf6776->getCache();
    }

    public function transactional($func)
    {
        $this->initializerc4dfa && ($this->initializerc4dfa->__invoke($valueHolderf6776, $this, 'transactional', array('func' => $func), $this->initializerc4dfa) || 1) && $this->valueHolderf6776 = $valueHolderf6776;

        return $this->valueHolderf6776->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerc4dfa && ($this->initializerc4dfa->__invoke($valueHolderf6776, $this, 'wrapInTransaction', array('func' => $func), $this->initializerc4dfa) || 1) && $this->valueHolderf6776 = $valueHolderf6776;

        return $this->valueHolderf6776->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerc4dfa && ($this->initializerc4dfa->__invoke($valueHolderf6776, $this, 'commit', array(), $this->initializerc4dfa) || 1) && $this->valueHolderf6776 = $valueHolderf6776;

        return $this->valueHolderf6776->commit();
    }

    public function rollback()
    {
        $this->initializerc4dfa && ($this->initializerc4dfa->__invoke($valueHolderf6776, $this, 'rollback', array(), $this->initializerc4dfa) || 1) && $this->valueHolderf6776 = $valueHolderf6776;

        return $this->valueHolderf6776->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerc4dfa && ($this->initializerc4dfa->__invoke($valueHolderf6776, $this, 'getClassMetadata', array('className' => $className), $this->initializerc4dfa) || 1) && $this->valueHolderf6776 = $valueHolderf6776;

        return $this->valueHolderf6776->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerc4dfa && ($this->initializerc4dfa->__invoke($valueHolderf6776, $this, 'createQuery', array('dql' => $dql), $this->initializerc4dfa) || 1) && $this->valueHolderf6776 = $valueHolderf6776;

        return $this->valueHolderf6776->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerc4dfa && ($this->initializerc4dfa->__invoke($valueHolderf6776, $this, 'createNamedQuery', array('name' => $name), $this->initializerc4dfa) || 1) && $this->valueHolderf6776 = $valueHolderf6776;

        return $this->valueHolderf6776->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc4dfa && ($this->initializerc4dfa->__invoke($valueHolderf6776, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc4dfa) || 1) && $this->valueHolderf6776 = $valueHolderf6776;

        return $this->valueHolderf6776->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerc4dfa && ($this->initializerc4dfa->__invoke($valueHolderf6776, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc4dfa) || 1) && $this->valueHolderf6776 = $valueHolderf6776;

        return $this->valueHolderf6776->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerc4dfa && ($this->initializerc4dfa->__invoke($valueHolderf6776, $this, 'createQueryBuilder', array(), $this->initializerc4dfa) || 1) && $this->valueHolderf6776 = $valueHolderf6776;

        return $this->valueHolderf6776->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerc4dfa && ($this->initializerc4dfa->__invoke($valueHolderf6776, $this, 'flush', array('entity' => $entity), $this->initializerc4dfa) || 1) && $this->valueHolderf6776 = $valueHolderf6776;

        return $this->valueHolderf6776->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc4dfa && ($this->initializerc4dfa->__invoke($valueHolderf6776, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc4dfa) || 1) && $this->valueHolderf6776 = $valueHolderf6776;

        return $this->valueHolderf6776->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerc4dfa && ($this->initializerc4dfa->__invoke($valueHolderf6776, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc4dfa) || 1) && $this->valueHolderf6776 = $valueHolderf6776;

        return $this->valueHolderf6776->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc4dfa && ($this->initializerc4dfa->__invoke($valueHolderf6776, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc4dfa) || 1) && $this->valueHolderf6776 = $valueHolderf6776;

        return $this->valueHolderf6776->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerc4dfa && ($this->initializerc4dfa->__invoke($valueHolderf6776, $this, 'clear', array('entityName' => $entityName), $this->initializerc4dfa) || 1) && $this->valueHolderf6776 = $valueHolderf6776;

        return $this->valueHolderf6776->clear($entityName);
    }

    public function close()
    {
        $this->initializerc4dfa && ($this->initializerc4dfa->__invoke($valueHolderf6776, $this, 'close', array(), $this->initializerc4dfa) || 1) && $this->valueHolderf6776 = $valueHolderf6776;

        return $this->valueHolderf6776->close();
    }

    public function persist($entity)
    {
        $this->initializerc4dfa && ($this->initializerc4dfa->__invoke($valueHolderf6776, $this, 'persist', array('entity' => $entity), $this->initializerc4dfa) || 1) && $this->valueHolderf6776 = $valueHolderf6776;

        return $this->valueHolderf6776->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerc4dfa && ($this->initializerc4dfa->__invoke($valueHolderf6776, $this, 'remove', array('entity' => $entity), $this->initializerc4dfa) || 1) && $this->valueHolderf6776 = $valueHolderf6776;

        return $this->valueHolderf6776->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerc4dfa && ($this->initializerc4dfa->__invoke($valueHolderf6776, $this, 'refresh', array('entity' => $entity), $this->initializerc4dfa) || 1) && $this->valueHolderf6776 = $valueHolderf6776;

        return $this->valueHolderf6776->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerc4dfa && ($this->initializerc4dfa->__invoke($valueHolderf6776, $this, 'detach', array('entity' => $entity), $this->initializerc4dfa) || 1) && $this->valueHolderf6776 = $valueHolderf6776;

        return $this->valueHolderf6776->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerc4dfa && ($this->initializerc4dfa->__invoke($valueHolderf6776, $this, 'merge', array('entity' => $entity), $this->initializerc4dfa) || 1) && $this->valueHolderf6776 = $valueHolderf6776;

        return $this->valueHolderf6776->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerc4dfa && ($this->initializerc4dfa->__invoke($valueHolderf6776, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc4dfa) || 1) && $this->valueHolderf6776 = $valueHolderf6776;

        return $this->valueHolderf6776->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc4dfa && ($this->initializerc4dfa->__invoke($valueHolderf6776, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc4dfa) || 1) && $this->valueHolderf6776 = $valueHolderf6776;

        return $this->valueHolderf6776->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerc4dfa && ($this->initializerc4dfa->__invoke($valueHolderf6776, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc4dfa) || 1) && $this->valueHolderf6776 = $valueHolderf6776;

        return $this->valueHolderf6776->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerc4dfa && ($this->initializerc4dfa->__invoke($valueHolderf6776, $this, 'contains', array('entity' => $entity), $this->initializerc4dfa) || 1) && $this->valueHolderf6776 = $valueHolderf6776;

        return $this->valueHolderf6776->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerc4dfa && ($this->initializerc4dfa->__invoke($valueHolderf6776, $this, 'getEventManager', array(), $this->initializerc4dfa) || 1) && $this->valueHolderf6776 = $valueHolderf6776;

        return $this->valueHolderf6776->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerc4dfa && ($this->initializerc4dfa->__invoke($valueHolderf6776, $this, 'getConfiguration', array(), $this->initializerc4dfa) || 1) && $this->valueHolderf6776 = $valueHolderf6776;

        return $this->valueHolderf6776->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerc4dfa && ($this->initializerc4dfa->__invoke($valueHolderf6776, $this, 'isOpen', array(), $this->initializerc4dfa) || 1) && $this->valueHolderf6776 = $valueHolderf6776;

        return $this->valueHolderf6776->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerc4dfa && ($this->initializerc4dfa->__invoke($valueHolderf6776, $this, 'getUnitOfWork', array(), $this->initializerc4dfa) || 1) && $this->valueHolderf6776 = $valueHolderf6776;

        return $this->valueHolderf6776->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerc4dfa && ($this->initializerc4dfa->__invoke($valueHolderf6776, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc4dfa) || 1) && $this->valueHolderf6776 = $valueHolderf6776;

        return $this->valueHolderf6776->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerc4dfa && ($this->initializerc4dfa->__invoke($valueHolderf6776, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc4dfa) || 1) && $this->valueHolderf6776 = $valueHolderf6776;

        return $this->valueHolderf6776->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerc4dfa && ($this->initializerc4dfa->__invoke($valueHolderf6776, $this, 'getProxyFactory', array(), $this->initializerc4dfa) || 1) && $this->valueHolderf6776 = $valueHolderf6776;

        return $this->valueHolderf6776->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerc4dfa && ($this->initializerc4dfa->__invoke($valueHolderf6776, $this, 'initializeObject', array('obj' => $obj), $this->initializerc4dfa) || 1) && $this->valueHolderf6776 = $valueHolderf6776;

        return $this->valueHolderf6776->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerc4dfa && ($this->initializerc4dfa->__invoke($valueHolderf6776, $this, 'getFilters', array(), $this->initializerc4dfa) || 1) && $this->valueHolderf6776 = $valueHolderf6776;

        return $this->valueHolderf6776->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerc4dfa && ($this->initializerc4dfa->__invoke($valueHolderf6776, $this, 'isFiltersStateClean', array(), $this->initializerc4dfa) || 1) && $this->valueHolderf6776 = $valueHolderf6776;

        return $this->valueHolderf6776->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerc4dfa && ($this->initializerc4dfa->__invoke($valueHolderf6776, $this, 'hasFilters', array(), $this->initializerc4dfa) || 1) && $this->valueHolderf6776 = $valueHolderf6776;

        return $this->valueHolderf6776->hasFilters();
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

        $instance->initializerc4dfa = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderf6776) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf6776 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderf6776->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializerc4dfa && ($this->initializerc4dfa->__invoke($valueHolderf6776, $this, '__get', ['name' => $name], $this->initializerc4dfa) || 1) && $this->valueHolderf6776 = $valueHolderf6776;

        if (isset(self::$publicProperties7e013[$name])) {
            return $this->valueHolderf6776->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf6776;

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

        $targetObject = $this->valueHolderf6776;
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
        $this->initializerc4dfa && ($this->initializerc4dfa->__invoke($valueHolderf6776, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc4dfa) || 1) && $this->valueHolderf6776 = $valueHolderf6776;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf6776;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf6776;
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
        $this->initializerc4dfa && ($this->initializerc4dfa->__invoke($valueHolderf6776, $this, '__isset', array('name' => $name), $this->initializerc4dfa) || 1) && $this->valueHolderf6776 = $valueHolderf6776;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf6776;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderf6776;
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
        $this->initializerc4dfa && ($this->initializerc4dfa->__invoke($valueHolderf6776, $this, '__unset', array('name' => $name), $this->initializerc4dfa) || 1) && $this->valueHolderf6776 = $valueHolderf6776;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf6776;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderf6776;
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
        $this->initializerc4dfa && ($this->initializerc4dfa->__invoke($valueHolderf6776, $this, '__clone', array(), $this->initializerc4dfa) || 1) && $this->valueHolderf6776 = $valueHolderf6776;

        $this->valueHolderf6776 = clone $this->valueHolderf6776;
    }

    public function __sleep()
    {
        $this->initializerc4dfa && ($this->initializerc4dfa->__invoke($valueHolderf6776, $this, '__sleep', array(), $this->initializerc4dfa) || 1) && $this->valueHolderf6776 = $valueHolderf6776;

        return array('valueHolderf6776');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc4dfa = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc4dfa;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc4dfa && ($this->initializerc4dfa->__invoke($valueHolderf6776, $this, 'initializeProxy', array(), $this->initializerc4dfa) || 1) && $this->valueHolderf6776 = $valueHolderf6776;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf6776;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf6776;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
