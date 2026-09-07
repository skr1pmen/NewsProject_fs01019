<?php

namespace app\models;

use app\core\BaseModel;

class NewsModel extends BaseModel
{
    public function create($title, $lead, $content){
        $error_message = "";
        $result = false;

        if (empty($title)) {
            $error_message .= "Введите заголовок новости";
        }
        if (empty($lead)) {
            $error_message .= "Введите краткое описание новости";
        }
        if (empty($content)) {
            $error_message .= "Введите содежрание новости";
        }

        if (empty($error_message)) {
            $newsId = $this->insert(
                "
                        INSERT INTO news (title, short_description, description, author_id) 
                        VALUES (:title, :short_description, :description, :author_id)
                    ",
                [
                    'title' => $title,
                    'short_description' => $lead,
                    'description' => $content,
                    'author_id' => $_SESSION['user']['id']
                ]
            );
            if (!empty($newsId)) {
                $result = true;
            } else {
                $error_message .= "Не удалось создать запись";
            }
        }

        return [
            "result" => $result,
            "error_message" => $error_message
        ];
    }

    public function list() {
        $news = $this->select("SELECT id, title, create_at FROM news ORDER BY id DESC");
        return $news;
    }

    public function getNewsById($id) {
        $news = $this->select("SELECT * FROM news WHERE id = :id", ["id" => $id]);
        return $news[0];
    }

    public function editNewsById($id, $title, $lead, $content) {
        $error_message = "";
        $result = false;

        if (empty($title)) {
            $error_message .= "Введите заголовок новости";
        }
        if (empty($lead)) {
            $error_message .= "Введите краткое описание новости";
        }
        if (empty($content)) {
            $error_message .= "Введите содежрание новости";
        }

        if (empty($error_message)) {
            $news = $this->update(
                "UPDATE news 
                    SET title = :title, short_description = :lead, description = :content 
                    WHERE id = :id",
                [
                    'title' => $title,
                    'lead' => $lead,
                    'content' => $content,
                    'id' => $id,
                ]
            );
            if (!empty($news)) {
                $result = true;
            } else {
                $error_message .= "Не удалось обновить запись";
            }
        }

        return [
            "result" => $result,
            "error_message" => $error_message
        ];
    }

    public function deleteNewsById($id) {
        $result = false;
        $error_message = "";

        if ($this->getNewsById($id)) {
            $isDelete = $this->delete(
                "DELETE FROM news WHERE id = :id",
                ["id" => $id]
            );
            if ($isDelete) {
                $result = true;
            } else {
                $error_message .= "Не удалось удалить запись";
            }
        } else {
            $error_message .= "Не удалось найти запись для удаления";
        }

        return [
            "result" => $result,
            "error_message" => $error_message
        ];
    }
}