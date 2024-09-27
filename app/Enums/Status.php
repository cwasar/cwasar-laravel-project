<?php

namespace App\Enums;
enum Status: int
{
    case NOACTIVE = 0;
    case ACTIVE = 1;


    public function getName(): string{
        return match ($this) {
            self::NOACTIVE => 'Выключен',
            self::ACTIVE => 'Активный',
        };
    }
}
