<?php

namespace FoxEngineers\Bitwise;

use FoxEngineers\Bitwise\Contracts\BitwiseFlagInterface;

/**
 * Trait BitwiseFlag.
 *
 * @mixin BitwiseFlagInterface
 */
trait BitwiseFlag
{
    /**
     * @param int $flag
     *
     * @return bool
     */
    public function getFlag(int $flag): bool
    {
        $name = $this->getFlagName();

        return ($this->{$name} & $flag) == $flag;
    }

    /**
     * @param int  $flag
     * @param bool $value
     *
     * @return void
     */
    public function setFlag(int $flag, bool $value): void
    {
        $name = $this->getFlagName();

        if ($value) {
            $this->$name |= $flag;
            return;
        }

        $this->$name &= ~$flag;
    }
}
