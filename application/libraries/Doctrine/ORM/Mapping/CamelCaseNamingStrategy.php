<?php

namespace Doctrine\ORM\Mapping;

use Doctrine\ORM\Mapping\DefaultNamingStrategy;
use Doctrine\Common\Util\Inflector;

class CamelCaseNamingStrategy extends DefaultNamingStrategy
{
    /**
     * {@inheritdoc}
     */
    public function classToTableName($className)
    {
        return Inflector::camelize(parent::classToTableName($className));
    }

    /**
     * {@inheritdoc}
     */
    public function propertyToColumnName($propertyName)
    {
        return Inflector::camelize(parent::propertyToColumnName($propertyName));
    }

    /**
     * {@inheritdoc}
     */
    public function joinColumnName($propertyName)
    {
        return Inflector::camelize($propertyName) . '_' . $this->referenceColumnName();
    }
}