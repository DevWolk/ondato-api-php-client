<?php
declare(strict_types=1);

namespace Velser\OndatoApiClient\Kyc\MapperStatus;

use Velser\OndatoApiClient\TypeOfConstants;

final class EventStatuses extends TypeOfConstants
{
    const STATUS_PROCESSED     = 'PROCESSED';
    const STATUS_CROSS_CHECKED = 'CROSS_CHECKED';
    const STATUS_UPDATED       = 'UPDATED';
    const STATUS_REJECTED      = 'REJECTED';
}
