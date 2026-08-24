<?php

namespace app\controllers;

use app\core\InitController;

class UserController extends InitController
{
    public function actionProfile()
    {
        echo "Страница пользователя";
        var_dump($this->route);
    }
    public function actionTest(){
        return $this->render('login');
    }
}