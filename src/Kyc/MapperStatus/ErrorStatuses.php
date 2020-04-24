<?php
declare(strict_types=1);

namespace Velser\OndatoApiClient\Kyc\MapperStatus;

use Velser\OndatoApiClient\TypeOfConstants;

final class ErrorStatuses extends TypeOfConstants
{
    const STATUS_FAILED                   = 'FAILED';
    const STATUS_BAD_REQUEST              = 'BAD_REQUEST';
    const STATUS_IDENTIFICATION_NOT_FOUND = 'IDENTIFICATION_NOT_FOUND';
    const STATUS_SESSION_NOT_CREATED      = 'SESSION_NOT_CREATED';
    const STATUS_WRONG_LANGUAGE           = 'WRONG_LANGUAGE';
    const STATUS_NO_FILES                 = 'NO_FILES';
}
