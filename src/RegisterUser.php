<?php

namespace Src;

class RegisterUser
{
    public function execute(array $data, ResponsToUserRegistration $listener)
    {
        var_dump('Registering the user.');

        //$listener->userRegisteredSuccessfully();
        $listener->userRegisteredFailed();
    }
}
