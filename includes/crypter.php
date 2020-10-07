<?php
class Crypter
{
    /**
     * __construct method
     *
     */
    private function __construct()
    {
    }
    private static $initialized = false;

    private static function initialize()
    {
        if (self::$initialized)
            return;

        self::$initialized = true;
    }

    public static function greet()
    {
        self::initialize();
    }

    // Non-NULL Initialization Vector for decryption
    private static  $iv = '1234567891011121';

    // Store the decryption key
    private static  $key = "medic-ethiopia";

    // Store the cipher method
    private static $ciphering = "AES-128-CTR";

    // Use OpenSSl Encryption method
    //private $iv_length = openssl_cipher_iv_length(self::$ciphering);
    private static $options = 0;

    public static function encrypt($input)
    {
        // Use openssl_encrypt() function to encrypt the data
        $in = openssl_encrypt(
            $input,
            self::$ciphering,
            self::$key,
            self::$options,
            self::$iv
        );
        return $in;
    }

    public static function decrypt($input)
    {
        // Use openssl_decrypt() function to decrypt the data
        $out =  openssl_decrypt(
            $input,
            self::$ciphering,
            self::$key,
            self::$options,
            self::$iv
        );
        return $out;
    }

    public static function urlencode_base64_encode_encrypt($input)
    {
        self::initialize();
        return urlencode(self::encrypt(base64_encode($input)));
    }

    public static function urldecode_base64_decode_decrypt($input)
    {
        self::initialize();
        return urldecode(base64_decode(self::decrypt($input)));
    }
    public static function urlencode_encrypt($input)
    {
        self::initialize();
        return urlencode(self::encrypt($input));
    }

    public static function urldecode_decrypt($input)
    {
        self::initialize();
        return urldecode(self::decrypt($input));
    }

    public static function ENCODE($input)
    {
        return self::urlencode_base64_encode_encrypt($input);
    }

    public static function DECODE($input)
    {
        return self::urldecode_base64_decode_decrypt($input);
    }
}
