<?php

namespace App\Supports;

use Defuse\Crypto\Crypto;
use Defuse\Crypto\Key;

final class Crypt extends Crypt
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Encrypt the given value.
     */
    public static function defuseEncrypt($value, $serialize = true)
    {
        return Crypto::encrypt($serialize ? serialize($value) : $value, self::loadKey());
    }

    /**
     * Decrypt the given value.
     */
    public static function defuseDecrypt($payload, $unserialize = true)
    {
        return $unserialize ? unserialize(Crypto::decrypt($payload, self::loadKey())) : Crypto::decrypt($payload, self::loadKey());
    }

    /**
     * Encrypt the given string value with password.
     */
    public static function defuseEncryptString($value)
    {
        return Crypto::encryptWithPassword($value, config('app.crypt.password'));
    }

    /**
     * Decrypt the given string value with password.
     */
    public static function defuseDecryptString($payload)
    {
        return Crypto::decryptWithPassword($payload, config('app.crypt.password'));
    }

    /**
     * Load the encryption key from etc.
     */
    private function loadKey()
    {
        return Key::loadFromAsciiSafeString(config('app.crypt.key'));
    }
}
