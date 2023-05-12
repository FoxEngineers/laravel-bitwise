<?php

namespace FoxEngineers\Bitwise\Tests;

use FoxEngineers\Bitwise\Contracts\BitwiseFlagInterface;
use Illuminate\Database\Eloquent\Model;

class BasicTest extends BaseTestCase
{
    public function testBasic() {
        $model = new TestModel();

        $this->assertInstanceOf(BitwiseFlagInterface::class, $model);

        $this->assertFalse($model->getFlag(TestModel::CAN_CREATE));
        $this->assertFalse($model->can_create);

        $this->assertFalse($model->getFlag(TestModel::CAN_EDIT));
        $this->assertFalse($model->can_edit);

        $this->assertFalse($model->getFlag(TestModel::CAN_DELETE));
        $this->assertFalse($model->can_delete);

        $model->setFlag(TestModel::CAN_CREATE, true);
        $this->assertTrue($model->can_create);

        $model->setFlag(TestModel::CAN_CREATE, false);
        $this->assertFalse($model->can_create);
    }
}