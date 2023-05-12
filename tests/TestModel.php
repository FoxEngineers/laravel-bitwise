<?php

namespace FoxEngineers\Bitwise\Tests;

use FoxEngineers\Bitwise\BitwiseFlag;
use FoxEngineers\Bitwise\Contracts\BitwiseFlagInterface;
use Illuminate\Database\Eloquent\Model;

/**
 * @property bool $can_create
 * @property bool $can_edit
 * @property bool $can_delete
 */
class TestModel extends Model implements BitwiseFlagInterface
{
    use BitwiseFlag;

    public const CAN_CREATE = 1;
    public const CAN_EDIT = 2;
    public const CAN_DELETE = 4;

    protected $table = 'test_models';

    public function getFlagName(): string
    {
        return 'system_value';
    }

    public function getAbilities(): array
    {
        return [
            'can_create' => self::CAN_CREATE,
            'can_edit'   => self::CAN_EDIT,
            'can_delete' => self::CAN_DELETE,
        ];
    }

    public function getCanCreateAttribute(): bool
    {
        return $this->getFlag(self::CAN_CREATE);
    }

    public function getCanEditAttribute(): bool
    {
        return $this->getFlag(self::CAN_EDIT);
    }

    public function getCanDeleteAttribute(): bool
    {
        return $this->getFlag(self::CAN_DELETE);
    }
}