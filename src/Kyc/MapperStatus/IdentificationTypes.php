<?php
declare(strict_types=1);

namespace Velser\OndatoApiClient\Kyc\MapperStatus;


use Velser\OndatoApiClient\TypeOfConstants;

final class IdentificationTypes extends TypeOfConstants
{
    const PHOTO     = 'PHOTO';
    const VIDEO     = 'VIDEO';
    const SMS       = 'SMS';
    const SMART_ID  = 'SMART_ID';
    const MOBILE_ID = 'MOBILE_ID';

}
