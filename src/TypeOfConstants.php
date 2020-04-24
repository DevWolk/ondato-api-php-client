<?php
declare(strict_types=1);

namespace Velser\OndatoApiClient;

use ReflectionClass;

abstract class TypeOfConstants
{
    const DEFAULT_STATUS = 'UNDEFINED';

    /**
     * @return array
     * @throws \ReflectionException
     */
    protected static function getConstants() {
        $constants = new ReflectionClass(static::class);
        return $constants->getConstants();
    }

    /**
     * @return array
     * @throws \ReflectionException
     */
    public static function mapToNumber()
    {
        return self::getConstants();
    }

    /**
     * @return array|null
     * @throws \ReflectionException
     */
    public static function mapFromNumber()
    {
        return array_flip(self::getConstants());
    }

    /**
     * @param int|string $code
     * @param int $default
     * @return int
     * @throws \ReflectionException
     */
    public static function getCode($code, $default = 0)
    {
        $codes = self::mapFromNumber();
        return $codes[$code] ?? $default;
    }

    /**
     * @param int|string $type
     * @param int|string $default
     * @return int|string
     * @throws \ReflectionException
     */
    public static function getType($type, $default = self::DEFAULT_STATUS)
    {
        $types = self::mapToNumber();
        return $types[$type] ?? $default;
    }

    /**
     * @param $code
     * @return bool
     * @throws \ReflectionException
     */
    public static function isExistByCode($code)
    {
        $code = self::getCode($code, null);
        return isset($code);
    }

    /**
     * @param $type
     * @return bool
     * @throws \ReflectionException
     */
    public static function isExistByType($type)
    {
        $type = self::getType($type, null);
        return isset($type);
    }
}