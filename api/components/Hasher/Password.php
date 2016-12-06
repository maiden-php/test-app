<?php

namespace API\Components\Hasher;

/**
 * Class Password
 *
 * A wrapper for the PHP >= 5.5 Password API
 *
 * http://php.net/manual/en/book.password.php
 */
class Password 
{
    /**
     * Level of difficulty we want tour password to has by default
     */
    const COST = 13;

    /**
     * @param $password
     *
     * password_hash()
     * @return bool|string
     */
    function create($password)
    {
        $hash = password_hash($password, PASSWORD_BCRYPT, [
            'cost' => self::COST,
            //'salt' => 'any string here'
        ]);

        return $hash;
    }

    /**
     * password_needs_rehash()
     *
     * @param $password
     * @return bool
     */
    function update($password) : bool
    {
        return password_needs_rehash($password, PASSWORD_BCRYPT);
    }

    /**
     * password_verify ( string $password, string $hash )
     *
     * @param string $password
     * @param string $hash
     *
     * @return bool
     */
    function check(string $password , string $hash) : bool
    {
        return password_verify($password, $hash);
    }

    /**
     * password_get_info
     *
     * @param $hash
     * @return array
     */
    public function getInfo($hash) : array
    {
        return password_get_info($hash);
    }

    /**
     * @param string $password
     * @return string
     */
    public function md5(string $password) : string
    {
        return md5($password);
    }

    /**
     * @param string $password
     * @return string
     */
    public function sha(string $password) : string
    {
        return sha1($password);
    }
}

