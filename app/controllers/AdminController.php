<?php

namespace app\controllers;

use app\core\InitController;
use app\lib\UserOperation;
use app\models\NewsModel;

class AdminController extends InitController
{
    public function behaviors() {
        return [
            'access' => [
                'rules' => [
                    [
                        'actions' => ['index', 'create', 'update', 'delete'],
                        'roles' => [UserOperation::RoleAdmin],
                        'matchCallback' => function () {
                            $this->redirect('/');
                        }
                    ],
                ]
            ]
        ];
    }

    public function actionIndex() {
        $this->view->title = "Админ панель";

        $newsModel = new NewsModel();
        $news = $newsModel->list();


        $this->render('index', ['news' => $news]);
    }

    public function actionCreate() {
        $this->view->title = "Создание новости";
        $error_message = "";

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $title = !empty($_POST['title']) ? trim($_POST['title']) : null;
            $lead = !empty($_POST['lead']) ? trim($_POST['lead']) : null;
            $content = !empty($_POST['content']) ? trim($_POST['content']) : null;

            $adminModel = new NewsModel();
            $result = $adminModel->create($title, $lead, $content);
            if ($result['result']) {
                $this->redirect("/admin/index");
            } else {
                $error_message = $result['error_message'];
            }
        }

        $this->render('create',
        [
            'error_message' => $error_message,
        ]);
    }

    public function actionEdit()
    {
        $this->view->title = "Редактирование новости";
        $newsId = !empty($_GET['id']) ? $_GET['id'] : null;
        $error_message = "";
        $news = null;

        if (!empty($newsId)) {
            $newsModel = new NewsModel();
            $news = $newsModel->getNewsById($newsId);
            if (empty($news)) {
                $error_message .= "Новость не найдена";
            }
        } else {
            $error_message .= "Отсутствует id записи";
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $title = !empty($_POST['title']) ? trim($_POST['title']) : null;
            $lead = !empty($_POST['lead']) ? trim($_POST['lead']) : null;
            $content = !empty($_POST['content']) ? trim($_POST['content']) : null;

            $newsModel = new NewsModel();
            $result_edit = $newsModel->editNewsById($newsId, $title, $lead, $content);
            if ($result_edit['result']) {
                $this->redirect("/admin/index");
            } else {
                $error_message .= $result_edit['error_message'];
            }
        }

        $this->render('form',[
            'error_message' => $error_message,
            'news' => $news,
        ]);
    }
}