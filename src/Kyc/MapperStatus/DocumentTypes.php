<?php
declare(strict_types=1);

namespace Velser\OndatoApiClient\Kyc\MapperStatus;

use Velser\OndatoApiClient\TypeOfConstants;

final class DocumentTypes extends TypeOfConstants
{
    const DOCUMENT_UNKNOWN           = 'UNKNOWN';
    const DOCUMENT_ID_CARD           = 'ID_CARD';
    const DOCUMENT_PASSPORT          = 'PASSPORT';
    const DOCUMENT_RESIDENCE_PERMIT  = 'RESIDENCE_PERMIT';
    const DOCUMENT_DRIVER_LICENSE    = 'DRIVER_LICENSE';
    const DOCUMENT_INTERNAL_PASSPORT = 'INTERNAL_PASSPORT';
    const DOCUMENT_SOCIAL_ID         = 'SOCIAL_ID';
    const DOCUMENT_OTHER             = 'OTHER';
}
