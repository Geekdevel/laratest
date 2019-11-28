<?php

$registration = new Src\RegisterUser;
$authController = new Src\AuthController($registration);

$authController->register();
