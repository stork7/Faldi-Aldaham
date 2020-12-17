<?php namespace App;


use App\User\UserRepository;
use App\User\UserEntity;

class Application
{
    public static function run()
    {
        $userRepository = new UserRepository();
        $user = $userRepository->getById(1);
        echo $user->getUserName();
    }

}