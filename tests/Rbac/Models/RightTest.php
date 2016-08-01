<?php

namespace Rbac\Tests\Models;

use Rbac\Models\Right;
use Rbac\Tests\AbstractTestCase;
use Rbac\Models\ProtectionObject;

class RightTest extends AbstractTestCase
{
    public function setUp()
    {
        parent::setUp();
        $this->migrate();
    }

    public function testCheckIfARightCanBePersisted()
    {
        $right = Right::create(['name' => 'Teste', 'slug'=>'Teste']);
        $this->assertEquals('Teste', $right->name);
        $this->assertEquals('Teste', $right->slug);
    }

    public function testRelationshipWithProtectionObject()
    {
        $right = Right::create(['name' => 'Teste', 'slug'=>'Teste']);
        $object = ProtectionObject::create(['name' => 'Teste']);
        $right->objects()->save($object);

        $this->assertEquals('Teste', $right->objects()->first()->name);
    }

}