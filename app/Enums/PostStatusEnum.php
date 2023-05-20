<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

final class PostStatusEnum extends Enum
{
    const INACTIVE = 0;
    const PUBLISHED = 1;
    const DRAFT = 2;
}
