<?php

namespace app\controllers;

use app\core\InitController;
use app\lib\UserOperation;
use app\models\NewsModel;

class MainController extends InitController
{
    public function behaviors() {
        return [
            'access' => [
                'rules' => [
                    [
                        'actions' => ['index', 'news'],
                        'roles' => [
                            UserOperation::RoleGuest,
                            UserOperation::RoleAdmin,
                            UserOperation::RoleUser
                        ],
                        'matchCallback' => function () {
                            $this->redirect('/');
                        }
                    ],
                ]
            ]
        ];
    }

    public function actionIndex() {
        $this->view->title = "Главная страница";

        $newsModel = new NewsModel();
        $news = $newsModel->list();

        $this->render('index', ['news' => $news]);
    }

    public function actionNews() {
        $this->view->title = "";
        $newsId = !empty($_GET['id']) ? $_GET['id'] : null;
        $error_message = "";
        $news = null;

        if (!empty($newsId)) {
            $newsModel = new NewsModel();
            $news = $newsModel->getNewsById($newsId);
            if (empty($news)) {
                $error_message .= "Новость не найдена";
            }
            $this->view->title = $news["title"];
        } else {
            $error_message .= "Отсутствует id записи";
        }

        $this->render('news', ['news' => $news]);
    }
}