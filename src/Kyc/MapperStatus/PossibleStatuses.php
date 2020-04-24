<?php
declare(strict_types=1);

namespace Velser\OndatoApiClient\Kyc\MapperStatus;

use Velser\OndatoApiClient\TypeOfConstants;

final class PossibleStatuses extends TypeOfConstants
{
    const STATUS_APPROVED = 'APPROVED';
    const STATUS_PENDING  = 'PENDING';
    const STATUS_FAILED   = 'FAILED';
}
