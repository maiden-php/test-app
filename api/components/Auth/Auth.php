<?php

namespace API\Components\App;

class Auth implements AuthInterface
{
    /**
     * Auth constructor.
     *
     * @param array $config
     */
    function __construct(array $config)
    {

    }

    /**
     * @param array $data
     * - email
     * - password
     * @return mixed
     */
    function login(array $data)
    {
        // user credentials are required
        $email      = $data['email'];
        $password   = $data['password'];

        $matches = true;

        if ($matches) {
            session_start();
            return true;
        }

        return false;
    }

    /**
     * @return mixed
     */
    function logout()
    {
        session_destroy();
    }

    /**
     * @param array $data
     * @return mixed
     */
    function register(array $data)
    {
        // insert into users table
    }

    /**
     * @return mixed
     */
    function changePassword()
    {
        // TODO: Implement changePassword() method.
    }

    /**
     * @return mixed
     */
    function forgotPassword()
    {
        // TODO: Implement forgotPassword() method.
    }

    /**
     * @return mixed
     */
    function getAuthUser()
    {
        // TODO: Implement getAuthUser() method.
    }

    /**
     * @return mixed
     */
    function isLoggedIn(): bool
    {
        return true;
    }
}