<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder74d0a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf1567 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesc4986 = [
        
    ];

    public function getConnection()
    {
        $this->initializerf1567 && ($this->initializerf1567->__invoke($valueHolder74d0a, $this, 'getConnection', array(), $this->initializerf1567) || 1) && $this->valueHolder74d0a = $valueHolder74d0a;

        return $this->valueHolder74d0a->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerf1567 && ($this->initializerf1567->__invoke($valueHolder74d0a, $this, 'getMetadataFactory', array(), $this->initializerf1567) || 1) && $this->valueHolder74d0a = $valueHolder74d0a;

        return $this->valueHolder74d0a->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerf1567 && ($this->initializerf1567->__invoke($valueHolder74d0a, $this, 'getExpressionBuilder', array(), $this->initializerf1567) || 1) && $this->valueHolder74d0a = $valueHolder74d0a;

        return $this->valueHolder74d0a->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerf1567 && ($this->initializerf1567->__invoke($valueHolder74d0a, $this, 'beginTransaction', array(), $this->initializerf1567) || 1) && $this->valueHolder74d0a = $valueHolder74d0a;

        return $this->valueHolder74d0a->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerf1567 && ($this->initializerf1567->__invoke($valueHolder74d0a, $this, 'getCache', array(), $this->initializerf1567) || 1) && $this->valueHolder74d0a = $valueHolder74d0a;

        return $this->valueHolder74d0a->getCache();
    }

    public function transactional($func)
    {
        $this->initializerf1567 && ($this->initializerf1567->__invoke($valueHolder74d0a, $this, 'transactional', array('func' => $func), $this->initializerf1567) || 1) && $this->valueHolder74d0a = $valueHolder74d0a;

        return $this->valueHolder74d0a->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerf1567 && ($this->initializerf1567->__invoke($valueHolder74d0a, $this, 'wrapInTransaction', array('func' => $func), $this->initializerf1567) || 1) && $this->valueHolder74d0a = $valueHolder74d0a;

        return $this->valueHolder74d0a->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerf1567 && ($this->initializerf1567->__invoke($valueHolder74d0a, $this, 'commit', array(), $this->initializerf1567) || 1) && $this->valueHolder74d0a = $valueHolder74d0a;

        return $this->valueHolder74d0a->commit();
    }

    public function rollback()
    {
        $this->initializerf1567 && ($this->initializerf1567->__invoke($valueHolder74d0a, $this, 'rollback', array(), $this->initializerf1567) || 1) && $this->valueHolder74d0a = $valueHolder74d0a;

        return $this->valueHolder74d0a->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerf1567 && ($this->initializerf1567->__invoke($valueHolder74d0a, $this, 'getClassMetadata', array('className' => $className), $this->initializerf1567) || 1) && $this->valueHolder74d0a = $valueHolder74d0a;

        return $this->valueHolder74d0a->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerf1567 && ($this->initializerf1567->__invoke($valueHolder74d0a, $this, 'createQuery', array('dql' => $dql), $this->initializerf1567) || 1) && $this->valueHolder74d0a = $valueHolder74d0a;

        return $this->valueHolder74d0a->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerf1567 && ($this->initializerf1567->__invoke($valueHolder74d0a, $this, 'createNamedQuery', array('name' => $name), $this->initializerf1567) || 1) && $this->valueHolder74d0a = $valueHolder74d0a;

        return $this->valueHolder74d0a->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf1567 && ($this->initializerf1567->__invoke($valueHolder74d0a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf1567) || 1) && $this->valueHolder74d0a = $valueHolder74d0a;

        return $this->valueHolder74d0a->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerf1567 && ($this->initializerf1567->__invoke($valueHolder74d0a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf1567) || 1) && $this->valueHolder74d0a = $valueHolder74d0a;

        return $this->valueHolder74d0a->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerf1567 && ($this->initializerf1567->__invoke($valueHolder74d0a, $this, 'createQueryBuilder', array(), $this->initializerf1567) || 1) && $this->valueHolder74d0a = $valueHolder74d0a;

        return $this->valueHolder74d0a->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerf1567 && ($this->initializerf1567->__invoke($valueHolder74d0a, $this, 'flush', array('entity' => $entity), $this->initializerf1567) || 1) && $this->valueHolder74d0a = $valueHolder74d0a;

        return $this->valueHolder74d0a->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf1567 && ($this->initializerf1567->__invoke($valueHolder74d0a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf1567) || 1) && $this->valueHolder74d0a = $valueHolder74d0a;

        return $this->valueHolder74d0a->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerf1567 && ($this->initializerf1567->__invoke($valueHolder74d0a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf1567) || 1) && $this->valueHolder74d0a = $valueHolder74d0a;

        return $this->valueHolder74d0a->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf1567 && ($this->initializerf1567->__invoke($valueHolder74d0a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf1567) || 1) && $this->valueHolder74d0a = $valueHolder74d0a;

        return $this->valueHolder74d0a->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerf1567 && ($this->initializerf1567->__invoke($valueHolder74d0a, $this, 'clear', array('entityName' => $entityName), $this->initializerf1567) || 1) && $this->valueHolder74d0a = $valueHolder74d0a;

        return $this->valueHolder74d0a->clear($entityName);
    }

    public function close()
    {
        $this->initializerf1567 && ($this->initializerf1567->__invoke($valueHolder74d0a, $this, 'close', array(), $this->initializerf1567) || 1) && $this->valueHolder74d0a = $valueHolder74d0a;

        return $this->valueHolder74d0a->close();
    }

    public function persist($entity)
    {
        $this->initializerf1567 && ($this->initializerf1567->__invoke($valueHolder74d0a, $this, 'persist', array('entity' => $entity), $this->initializerf1567) || 1) && $this->valueHolder74d0a = $valueHolder74d0a;

        return $this->valueHolder74d0a->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerf1567 && ($this->initializerf1567->__invoke($valueHolder74d0a, $this, 'remove', array('entity' => $entity), $this->initializerf1567) || 1) && $this->valueHolder74d0a = $valueHolder74d0a;

        return $this->valueHolder74d0a->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerf1567 && ($this->initializerf1567->__invoke($valueHolder74d0a, $this, 'refresh', array('entity' => $entity), $this->initializerf1567) || 1) && $this->valueHolder74d0a = $valueHolder74d0a;

        return $this->valueHolder74d0a->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerf1567 && ($this->initializerf1567->__invoke($valueHolder74d0a, $this, 'detach', array('entity' => $entity), $this->initializerf1567) || 1) && $this->valueHolder74d0a = $valueHolder74d0a;

        return $this->valueHolder74d0a->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerf1567 && ($this->initializerf1567->__invoke($valueHolder74d0a, $this, 'merge', array('entity' => $entity), $this->initializerf1567) || 1) && $this->valueHolder74d0a = $valueHolder74d0a;

        return $this->valueHolder74d0a->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerf1567 && ($this->initializerf1567->__invoke($valueHolder74d0a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf1567) || 1) && $this->valueHolder74d0a = $valueHolder74d0a;

        return $this->valueHolder74d0a->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf1567 && ($this->initializerf1567->__invoke($valueHolder74d0a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf1567) || 1) && $this->valueHolder74d0a = $valueHolder74d0a;

        return $this->valueHolder74d0a->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerf1567 && ($this->initializerf1567->__invoke($valueHolder74d0a, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf1567) || 1) && $this->valueHolder74d0a = $valueHolder74d0a;

        return $this->valueHolder74d0a->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerf1567 && ($this->initializerf1567->__invoke($valueHolder74d0a, $this, 'contains', array('entity' => $entity), $this->initializerf1567) || 1) && $this->valueHolder74d0a = $valueHolder74d0a;

        return $this->valueHolder74d0a->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerf1567 && ($this->initializerf1567->__invoke($valueHolder74d0a, $this, 'getEventManager', array(), $this->initializerf1567) || 1) && $this->valueHolder74d0a = $valueHolder74d0a;

        return $this->valueHolder74d0a->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerf1567 && ($this->initializerf1567->__invoke($valueHolder74d0a, $this, 'getConfiguration', array(), $this->initializerf1567) || 1) && $this->valueHolder74d0a = $valueHolder74d0a;

        return $this->valueHolder74d0a->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerf1567 && ($this->initializerf1567->__invoke($valueHolder74d0a, $this, 'isOpen', array(), $this->initializerf1567) || 1) && $this->valueHolder74d0a = $valueHolder74d0a;

        return $this->valueHolder74d0a->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerf1567 && ($this->initializerf1567->__invoke($valueHolder74d0a, $this, 'getUnitOfWork', array(), $this->initializerf1567) || 1) && $this->valueHolder74d0a = $valueHolder74d0a;

        return $this->valueHolder74d0a->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerf1567 && ($this->initializerf1567->__invoke($valueHolder74d0a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf1567) || 1) && $this->valueHolder74d0a = $valueHolder74d0a;

        return $this->valueHolder74d0a->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerf1567 && ($this->initializerf1567->__invoke($valueHolder74d0a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf1567) || 1) && $this->valueHolder74d0a = $valueHolder74d0a;

        return $this->valueHolder74d0a->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerf1567 && ($this->initializerf1567->__invoke($valueHolder74d0a, $this, 'getProxyFactory', array(), $this->initializerf1567) || 1) && $this->valueHolder74d0a = $valueHolder74d0a;

        return $this->valueHolder74d0a->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerf1567 && ($this->initializerf1567->__invoke($valueHolder74d0a, $this, 'initializeObject', array('obj' => $obj), $this->initializerf1567) || 1) && $this->valueHolder74d0a = $valueHolder74d0a;

        return $this->valueHolder74d0a->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerf1567 && ($this->initializerf1567->__invoke($valueHolder74d0a, $this, 'getFilters', array(), $this->initializerf1567) || 1) && $this->valueHolder74d0a = $valueHolder74d0a;

        return $this->valueHolder74d0a->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerf1567 && ($this->initializerf1567->__invoke($valueHolder74d0a, $this, 'isFiltersStateClean', array(), $this->initializerf1567) || 1) && $this->valueHolder74d0a = $valueHolder74d0a;

        return $this->valueHolder74d0a->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerf1567 && ($this->initializerf1567->__invoke($valueHolder74d0a, $this, 'hasFilters', array(), $this->initializerf1567) || 1) && $this->valueHolder74d0a = $valueHolder74d0a;

        return $this->valueHolder74d0a->hasFilters();
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

        $instance->initializerf1567 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder74d0a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder74d0a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder74d0a->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerf1567 && ($this->initializerf1567->__invoke($valueHolder74d0a, $this, '__get', ['name' => $name], $this->initializerf1567) || 1) && $this->valueHolder74d0a = $valueHolder74d0a;

        if (isset(self::$publicPropertiesc4986[$name])) {
            return $this->valueHolder74d0a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder74d0a;

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

        $targetObject = $this->valueHolder74d0a;
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
        $this->initializerf1567 && ($this->initializerf1567->__invoke($valueHolder74d0a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf1567) || 1) && $this->valueHolder74d0a = $valueHolder74d0a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder74d0a;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder74d0a;
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
        $this->initializerf1567 && ($this->initializerf1567->__invoke($valueHolder74d0a, $this, '__isset', array('name' => $name), $this->initializerf1567) || 1) && $this->valueHolder74d0a = $valueHolder74d0a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder74d0a;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder74d0a;
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
        $this->initializerf1567 && ($this->initializerf1567->__invoke($valueHolder74d0a, $this, '__unset', array('name' => $name), $this->initializerf1567) || 1) && $this->valueHolder74d0a = $valueHolder74d0a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder74d0a;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder74d0a;
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
        $this->initializerf1567 && ($this->initializerf1567->__invoke($valueHolder74d0a, $this, '__clone', array(), $this->initializerf1567) || 1) && $this->valueHolder74d0a = $valueHolder74d0a;

        $this->valueHolder74d0a = clone $this->valueHolder74d0a;
    }

    public function __sleep()
    {
        $this->initializerf1567 && ($this->initializerf1567->__invoke($valueHolder74d0a, $this, '__sleep', array(), $this->initializerf1567) || 1) && $this->valueHolder74d0a = $valueHolder74d0a;

        return array('valueHolder74d0a');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf1567 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf1567;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerf1567 && ($this->initializerf1567->__invoke($valueHolder74d0a, $this, 'initializeProxy', array(), $this->initializerf1567) || 1) && $this->valueHolder74d0a = $valueHolder74d0a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder74d0a;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder74d0a;
    }
}
