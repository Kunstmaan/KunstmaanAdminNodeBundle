<?php

namespace Kunstmaan\AdminNodeBundle\Tests\Entity;

use Kunstmaan\AdminBundle\Entity\AbstractEntity;

/**
 * TestEntity
 */
class TestEntity extends AbstractEntity
{
    /**
     * @param int $id
     */
    public function __construct($id = 0)
    {
        $this->setId($id);
    }

}
