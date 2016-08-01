<?php

namespace Rbac\Tests\Models;

use Rbac\Models\ProtectionObject;
use Rbac\Tests\AbstractTestCase;
use Rbac\Models\Role;
use Rbac\Models\Right;

class ProtectionObjectTest extends AbstractTestCase
{
    public function setUp()
    {
        parent::setUp();
        $this->migrate();
    }

    public function testCheckIfAProtectionObjectCanBePersisted()
    {
        $right = ProtectionObject::create(['name' => 'Teste']);
        $this->assertEquals('Teste', $right->name);
    }

    public function testRelationshipWithRole()
    {
        $role = Role::create(['name' => 'Teste']);
        $object = ProtectionObject::create(['name' => 'Teste']);
        $object->roles()->save($role);

        $this->assertEquals('Teste', $object->roles()->first()->name);
    }

    public function testRelationshipWithRight()
    {
        $right = Right::create(['name' => 'Teste', 'slug'=>'Teste']);
        $object = ProtectionObject::create(['name' => 'Teste']);
        $object->rights()->save($right);

        $this->assertEquals('Teste', $object->rights()->first()->slug);
    }

}