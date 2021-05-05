<?php
namespace frontend\tests\unit\models;

use Codeception\Test\Unit;
use frontend\models\SomeTestModel;

class SomeTestModelTest extends Unit {

    public function testFoo()
    {
        $m = new SomeTestModel();
        $this->assertEquals(2, $m->foo());
    }

}