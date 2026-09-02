<?php

namespace app\controllers;

use app\core\InitController;
use app\models\UserModel;
use app\lib\UserOperation;

class UserController extends InitController
{
    public function behaviors() {
        return [
          'access' => [
              'rules' => [
                  [
                      'actions' => ['login', 'registration'],
                      'roles' => [UserOperation::RoleGuest],
                      'matchCallback' => function () {
                            $this->redirect('/user/profile');
                      }
                  ],
                  [
                      'actions' => ['profile', 'logout'],
                      'roles' => [UserOperation::RoleUser, UserOperation::RoleAdmin],
                      'matchCallback' => function () {
                          $this->redirect('/user/login');
                      }
                  ],
              ]
          ]
        ];
    }

    public function actionProfile()
    {
        $this->render('profile',
        [
            'user' => [
                'login' => $_SESSION['user']['login'],
                'is_admin' => $_SESSION['user']['is_admin'],
            ]
        ]);
    }

    public function actionRegistration()
    {
        $this->view->title = "Регистрация";
        $error_message = '';

        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            $login = !empty($_POST['login']) ? trim($_POST['login']) : null;
            $password = !empty($_POST['password']) ? trim($_POST['password']) : null;
            $password_confirm = !empty($_POST['password_confirm']) ? trim($_POST['password_confirm']) : null;

            if (empty($login)) {
                $error_message .= "Введите ваш логин<br>";
            }
            if (empty($password)) {
                $error_message .= "Введите пароль<br>";
            }
            if (empty($password_confirm)) {
                $error_message .= "Введите повторный пароль<br>";
            }
            if ($password != $password_confirm) {
                $error_message .= "Пароли не совпадают<br>";
            }

            if (empty($error_message)) {
                $userModel = new UserModel();
                $userId = $userModel->addNewUser($login, $password);
                if ($userId) {
                    $this->redirect("/user/profile");
                }
            }
        }

        $this->render('registration', [
            'error_message' => $error_message
        ]);
    }

    public function actionLogin() {
        $this->view->title = "Авторизация";
        $error_message = '';

        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            $login = !empty($_POST['login']) ? trim($_POST['login']) : null;
            $password = !empty($_POST['password']) ? trim($_POST['password']) : null;

            $userModel = new UserModel();
            $result_auth = $userModel->authByLogin($login, $password);
            if ($result_auth['result']) {
                $this->redirect("/user/profile");
            } else {
                $error_message = $result_auth['error_message'];
            }
        }

        $this->render('login', [
            'error_message' => $error_message
        ]);
    }

    public function actionLogout() {
        if (isset($_SESSION['user'])) {
            unset($_SESSION['user']);
        }

        $this->redirect("/");
    }
}