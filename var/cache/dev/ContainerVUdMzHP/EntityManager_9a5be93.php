<?php

namespace ContainerVUdMzHP;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderc35dc = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializereb57d = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties9fe16 = [
        
    ];

    public function getConnection()
    {
        $this->initializereb57d && ($this->initializereb57d->__invoke($valueHolderc35dc, $this, 'getConnection', array(), $this->initializereb57d) || 1) && $this->valueHolderc35dc = $valueHolderc35dc;

        return $this->valueHolderc35dc->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializereb57d && ($this->initializereb57d->__invoke($valueHolderc35dc, $this, 'getMetadataFactory', array(), $this->initializereb57d) || 1) && $this->valueHolderc35dc = $valueHolderc35dc;

        return $this->valueHolderc35dc->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializereb57d && ($this->initializereb57d->__invoke($valueHolderc35dc, $this, 'getExpressionBuilder', array(), $this->initializereb57d) || 1) && $this->valueHolderc35dc = $valueHolderc35dc;

        return $this->valueHolderc35dc->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializereb57d && ($this->initializereb57d->__invoke($valueHolderc35dc, $this, 'beginTransaction', array(), $this->initializereb57d) || 1) && $this->valueHolderc35dc = $valueHolderc35dc;

        return $this->valueHolderc35dc->beginTransaction();
    }

    public function getCache()
    {
        $this->initializereb57d && ($this->initializereb57d->__invoke($valueHolderc35dc, $this, 'getCache', array(), $this->initializereb57d) || 1) && $this->valueHolderc35dc = $valueHolderc35dc;

        return $this->valueHolderc35dc->getCache();
    }

    public function transactional($func)
    {
        $this->initializereb57d && ($this->initializereb57d->__invoke($valueHolderc35dc, $this, 'transactional', array('func' => $func), $this->initializereb57d) || 1) && $this->valueHolderc35dc = $valueHolderc35dc;

        return $this->valueHolderc35dc->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializereb57d && ($this->initializereb57d->__invoke($valueHolderc35dc, $this, 'wrapInTransaction', array('func' => $func), $this->initializereb57d) || 1) && $this->valueHolderc35dc = $valueHolderc35dc;

        return $this->valueHolderc35dc->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializereb57d && ($this->initializereb57d->__invoke($valueHolderc35dc, $this, 'commit', array(), $this->initializereb57d) || 1) && $this->valueHolderc35dc = $valueHolderc35dc;

        return $this->valueHolderc35dc->commit();
    }

    public function rollback()
    {
        $this->initializereb57d && ($this->initializereb57d->__invoke($valueHolderc35dc, $this, 'rollback', array(), $this->initializereb57d) || 1) && $this->valueHolderc35dc = $valueHolderc35dc;

        return $this->valueHolderc35dc->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializereb57d && ($this->initializereb57d->__invoke($valueHolderc35dc, $this, 'getClassMetadata', array('className' => $className), $this->initializereb57d) || 1) && $this->valueHolderc35dc = $valueHolderc35dc;

        return $this->valueHolderc35dc->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializereb57d && ($this->initializereb57d->__invoke($valueHolderc35dc, $this, 'createQuery', array('dql' => $dql), $this->initializereb57d) || 1) && $this->valueHolderc35dc = $valueHolderc35dc;

        return $this->valueHolderc35dc->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializereb57d && ($this->initializereb57d->__invoke($valueHolderc35dc, $this, 'createNamedQuery', array('name' => $name), $this->initializereb57d) || 1) && $this->valueHolderc35dc = $valueHolderc35dc;

        return $this->valueHolderc35dc->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializereb57d && ($this->initializereb57d->__invoke($valueHolderc35dc, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializereb57d) || 1) && $this->valueHolderc35dc = $valueHolderc35dc;

        return $this->valueHolderc35dc->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializereb57d && ($this->initializereb57d->__invoke($valueHolderc35dc, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializereb57d) || 1) && $this->valueHolderc35dc = $valueHolderc35dc;

        return $this->valueHolderc35dc->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializereb57d && ($this->initializereb57d->__invoke($valueHolderc35dc, $this, 'createQueryBuilder', array(), $this->initializereb57d) || 1) && $this->valueHolderc35dc = $valueHolderc35dc;

        return $this->valueHolderc35dc->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializereb57d && ($this->initializereb57d->__invoke($valueHolderc35dc, $this, 'flush', array('entity' => $entity), $this->initializereb57d) || 1) && $this->valueHolderc35dc = $valueHolderc35dc;

        return $this->valueHolderc35dc->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializereb57d && ($this->initializereb57d->__invoke($valueHolderc35dc, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializereb57d) || 1) && $this->valueHolderc35dc = $valueHolderc35dc;

        return $this->valueHolderc35dc->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializereb57d && ($this->initializereb57d->__invoke($valueHolderc35dc, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializereb57d) || 1) && $this->valueHolderc35dc = $valueHolderc35dc;

        return $this->valueHolderc35dc->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializereb57d && ($this->initializereb57d->__invoke($valueHolderc35dc, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializereb57d) || 1) && $this->valueHolderc35dc = $valueHolderc35dc;

        return $this->valueHolderc35dc->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializereb57d && ($this->initializereb57d->__invoke($valueHolderc35dc, $this, 'clear', array('entityName' => $entityName), $this->initializereb57d) || 1) && $this->valueHolderc35dc = $valueHolderc35dc;

        return $this->valueHolderc35dc->clear($entityName);
    }

    public function close()
    {
        $this->initializereb57d && ($this->initializereb57d->__invoke($valueHolderc35dc, $this, 'close', array(), $this->initializereb57d) || 1) && $this->valueHolderc35dc = $valueHolderc35dc;

        return $this->valueHolderc35dc->close();
    }

    public function persist($entity)
    {
        $this->initializereb57d && ($this->initializereb57d->__invoke($valueHolderc35dc, $this, 'persist', array('entity' => $entity), $this->initializereb57d) || 1) && $this->valueHolderc35dc = $valueHolderc35dc;

        return $this->valueHolderc35dc->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializereb57d && ($this->initializereb57d->__invoke($valueHolderc35dc, $this, 'remove', array('entity' => $entity), $this->initializereb57d) || 1) && $this->valueHolderc35dc = $valueHolderc35dc;

        return $this->valueHolderc35dc->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializereb57d && ($this->initializereb57d->__invoke($valueHolderc35dc, $this, 'refresh', array('entity' => $entity), $this->initializereb57d) || 1) && $this->valueHolderc35dc = $valueHolderc35dc;

        return $this->valueHolderc35dc->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializereb57d && ($this->initializereb57d->__invoke($valueHolderc35dc, $this, 'detach', array('entity' => $entity), $this->initializereb57d) || 1) && $this->valueHolderc35dc = $valueHolderc35dc;

        return $this->valueHolderc35dc->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializereb57d && ($this->initializereb57d->__invoke($valueHolderc35dc, $this, 'merge', array('entity' => $entity), $this->initializereb57d) || 1) && $this->valueHolderc35dc = $valueHolderc35dc;

        return $this->valueHolderc35dc->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializereb57d && ($this->initializereb57d->__invoke($valueHolderc35dc, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializereb57d) || 1) && $this->valueHolderc35dc = $valueHolderc35dc;

        return $this->valueHolderc35dc->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializereb57d && ($this->initializereb57d->__invoke($valueHolderc35dc, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializereb57d) || 1) && $this->valueHolderc35dc = $valueHolderc35dc;

        return $this->valueHolderc35dc->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializereb57d && ($this->initializereb57d->__invoke($valueHolderc35dc, $this, 'getRepository', array('entityName' => $entityName), $this->initializereb57d) || 1) && $this->valueHolderc35dc = $valueHolderc35dc;

        return $this->valueHolderc35dc->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializereb57d && ($this->initializereb57d->__invoke($valueHolderc35dc, $this, 'contains', array('entity' => $entity), $this->initializereb57d) || 1) && $this->valueHolderc35dc = $valueHolderc35dc;

        return $this->valueHolderc35dc->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializereb57d && ($this->initializereb57d->__invoke($valueHolderc35dc, $this, 'getEventManager', array(), $this->initializereb57d) || 1) && $this->valueHolderc35dc = $valueHolderc35dc;

        return $this->valueHolderc35dc->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializereb57d && ($this->initializereb57d->__invoke($valueHolderc35dc, $this, 'getConfiguration', array(), $this->initializereb57d) || 1) && $this->valueHolderc35dc = $valueHolderc35dc;

        return $this->valueHolderc35dc->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializereb57d && ($this->initializereb57d->__invoke($valueHolderc35dc, $this, 'isOpen', array(), $this->initializereb57d) || 1) && $this->valueHolderc35dc = $valueHolderc35dc;

        return $this->valueHolderc35dc->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializereb57d && ($this->initializereb57d->__invoke($valueHolderc35dc, $this, 'getUnitOfWork', array(), $this->initializereb57d) || 1) && $this->valueHolderc35dc = $valueHolderc35dc;

        return $this->valueHolderc35dc->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializereb57d && ($this->initializereb57d->__invoke($valueHolderc35dc, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializereb57d) || 1) && $this->valueHolderc35dc = $valueHolderc35dc;

        return $this->valueHolderc35dc->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializereb57d && ($this->initializereb57d->__invoke($valueHolderc35dc, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializereb57d) || 1) && $this->valueHolderc35dc = $valueHolderc35dc;

        return $this->valueHolderc35dc->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializereb57d && ($this->initializereb57d->__invoke($valueHolderc35dc, $this, 'getProxyFactory', array(), $this->initializereb57d) || 1) && $this->valueHolderc35dc = $valueHolderc35dc;

        return $this->valueHolderc35dc->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializereb57d && ($this->initializereb57d->__invoke($valueHolderc35dc, $this, 'initializeObject', array('obj' => $obj), $this->initializereb57d) || 1) && $this->valueHolderc35dc = $valueHolderc35dc;

        return $this->valueHolderc35dc->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializereb57d && ($this->initializereb57d->__invoke($valueHolderc35dc, $this, 'getFilters', array(), $this->initializereb57d) || 1) && $this->valueHolderc35dc = $valueHolderc35dc;

        return $this->valueHolderc35dc->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializereb57d && ($this->initializereb57d->__invoke($valueHolderc35dc, $this, 'isFiltersStateClean', array(), $this->initializereb57d) || 1) && $this->valueHolderc35dc = $valueHolderc35dc;

        return $this->valueHolderc35dc->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializereb57d && ($this->initializereb57d->__invoke($valueHolderc35dc, $this, 'hasFilters', array(), $this->initializereb57d) || 1) && $this->valueHolderc35dc = $valueHolderc35dc;

        return $this->valueHolderc35dc->hasFilters();
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

        $instance->initializereb57d = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderc35dc) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc35dc = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderc35dc->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializereb57d && ($this->initializereb57d->__invoke($valueHolderc35dc, $this, '__get', ['name' => $name], $this->initializereb57d) || 1) && $this->valueHolderc35dc = $valueHolderc35dc;

        if (isset(self::$publicProperties9fe16[$name])) {
            return $this->valueHolderc35dc->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc35dc;

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

        $targetObject = $this->valueHolderc35dc;
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
        $this->initializereb57d && ($this->initializereb57d->__invoke($valueHolderc35dc, $this, '__set', array('name' => $name, 'value' => $value), $this->initializereb57d) || 1) && $this->valueHolderc35dc = $valueHolderc35dc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc35dc;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc35dc;
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
        $this->initializereb57d && ($this->initializereb57d->__invoke($valueHolderc35dc, $this, '__isset', array('name' => $name), $this->initializereb57d) || 1) && $this->valueHolderc35dc = $valueHolderc35dc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc35dc;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderc35dc;
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
        $this->initializereb57d && ($this->initializereb57d->__invoke($valueHolderc35dc, $this, '__unset', array('name' => $name), $this->initializereb57d) || 1) && $this->valueHolderc35dc = $valueHolderc35dc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc35dc;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderc35dc;
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
        $this->initializereb57d && ($this->initializereb57d->__invoke($valueHolderc35dc, $this, '__clone', array(), $this->initializereb57d) || 1) && $this->valueHolderc35dc = $valueHolderc35dc;

        $this->valueHolderc35dc = clone $this->valueHolderc35dc;
    }

    public function __sleep()
    {
        $this->initializereb57d && ($this->initializereb57d->__invoke($valueHolderc35dc, $this, '__sleep', array(), $this->initializereb57d) || 1) && $this->valueHolderc35dc = $valueHolderc35dc;

        return array('valueHolderc35dc');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializereb57d = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializereb57d;
    }

    public function initializeProxy() : bool
    {
        return $this->initializereb57d && ($this->initializereb57d->__invoke($valueHolderc35dc, $this, 'initializeProxy', array(), $this->initializereb57d) || 1) && $this->valueHolderc35dc = $valueHolderc35dc;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc35dc;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc35dc;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
