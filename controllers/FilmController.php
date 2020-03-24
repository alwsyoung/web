<?php

namespace app\controllers;

use app\models\Comment;
use app\models\Film;
use yii\web\Controller;

class FilmController extends Controller
{
/*
* Список всех фильмов.
*/
    public function actionIndex()
    {
        $films = Film::find()
            ->orderBy(['createdAt' => SORT_DESC])
            ->all();

        return $this->render('index', [
            'films' => $films
        ]);
    }

/*
* Просмотр одного фильма.
*
* @param int $id ID фильма
* @return string
*/
    public function actionView($id)
    {
        $film = Film::findOne(['id' => $id]);
        $comments = $film->comments;

        return $this->render('view', [
            'film' => $film,
            'comments' => $comments
        ]);
    }

    /*
     * Просмотр комментариев к фильму.
     *
     * @return string
     */
    public function actionComment($id)
    {
        $film = Film::findOne(['id' => $id]);
        $comments = Comment::find()
            ->where(['filmId' => $id])
            ->all();

        return $this->render('comment', [
            'film' => $film,
            'comments' => $comments
        ]);
    }

    public function actionCreate()
    {
        $data = $_POST;
        return $this->render('create');
    }
}