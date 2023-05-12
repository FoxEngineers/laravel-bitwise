<?php

namespace FoxEngineers\Bitwise\Contracts;

interface BitwiseFlagInterface
{
    /**
     * Define database column to storage bitwise value.
     *
     * @return string
     */
    public function getFlagName(): string;

    /**
     * Define bitwise abilities. Example: [ 'can_comment' => 1, 'can_like' => 2].
     *
     * @return array
     */
    public function getAbilities(): array;

    /**
     * @param int $flag
     *
     * @return bool
     */
    public function getFlag(int $flag): bool;

    /**
     * @param int  $flag
     * @param bool $value
     *
     * @return void
     */
    public function setFlag(int $flag, bool $value): void;
}