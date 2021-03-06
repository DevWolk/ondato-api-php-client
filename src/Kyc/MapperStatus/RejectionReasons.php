<?php
declare(strict_types=1);

namespace Velser\OndatoApiClient\Kyc\MapperStatus;

use Velser\OndatoApiClient\TypeOfConstants;

final class RejectionReasons extends TypeOfConstants
{
    const REASON_MISSING_DOCUMENT_PHOTO             = 'MISSING_DOCUMENT_PHOTO';
    const REASON_DOCUMENT_NOT_ACCEPTED              = 'DOCUMENT_NOT_ACCEPTED';
    const REASON_DATA_DOES_NOT_MATCH                = 'DATA_DOES_NOT_MATCH';
    const REASON_SANCTIONED                         = 'SANCTIONED';
    const REASON_MISSING_SELFIE_PHOTO               = 'MISSING_SELFIE_PHOTO';
    const REASON_FACES_DOES_NOT_MATCH               = 'FACES_DOES_NOT_MATCH';
    const REASON_POOR_PHOTO_QUALITY                 = 'POOR_PHOTO_QUALITY';
    const REASON_POOR_PHOTO_LIGHTING                = 'POOR_PHOTO_LIGHTING';
    const REASON_BLURRED_PHOTO                      = 'BLURRED_PHOTO';
    const REASON_FACE_PHOTO_UPLOAD_FORMAT           = 'BAD_MEDIA_FORMAT';
    const REASON_MISCELLANEOUS                      = 'MISCELLANEOUS';
    const REASON_POSSIBLE_FRAUD_ATTEMPT             = 'POSSIBLE_FRAUD_ATTEMPT';
    const REASON_UNRELATED_PHOTO                    = 'UNRELATED_PHOTO';
    const REASON_MORE_THAN_ONE_PERSON               = 'MORE_THAN_ONE_PERSON';
    const REASON_PROHIBITED_COUNTRY_OR_STATE        = 'PROHIBITED_COUNTRY_OR_STATE';
    const REASON_DOCUMENT_IS_EXPIRED                = 'DOCUMENT_IS_EXPIRED';
    const REASON_DOCUMENT_WITH_NON_LATIN_CHARACTERS = 'DOCUMENT_WITH_NON_LATIN_CHARACTERS';
    const REASON_PART_OF_DOCUMENT_IS_COVERED        = 'PART_OF_DOCUMENT_IS_COVERED';
    const REASON_EXPIRED_IDENTIFICATION             = 'EXPIRED_IDENTIFICATION';
    const REASON_UNDEFINED                          = 'UNDEFINED';
}
