<?php

namespace Rbac\Tests\Models;

use Rbac\Models\Role;
use Rbac\Tests\AbstractTestCase;
use Rbac\Models\ProtectionObject;

class RoleTest extends AbstractTestCase
{
    public function setUp()
    {
        parent::setUp();
        $this->migrate();
    }

    public function testCheckIfARoleCanBePersisted()
    {
        $role = Role::create(['name' => 'Teste']);
        $this->assertEquals('Teste', $role->name);
    }

    public function testRelationshipWithProtectObject()
    {
        $role = Role::create(['name' => 'Teste']);
        $object = ProtectionObject::create(['name' => 'Teste']);
        $role->objects()->save($object);

        $this->assertEquals('Teste', $role->objects()->first()->name);
    }

}