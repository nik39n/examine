<?php

namespace app\controllers;

class AutorizationController extends \yii\web\Controller
{
    public function actionAutorization()
    {
        return $this->render('site/login');
    }

}
