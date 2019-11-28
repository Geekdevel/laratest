<?php

namespace Src;

interface ResponsToUserRegistration
{
    public function userRegisteredSuccessfully();

    public function userRegisteredFailed();
}
