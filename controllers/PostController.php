<?php

namespace app\controllers;

use app\models\Player;
use Yii;
use app\models\TestForm;

class PostController extends AppController {
  
  public $layout = 'basic';

  public function actionIndex(){
    if( Yii::$app->request->isAjax ) {
      debug(Yii::$app->request->post());
      return 'test';
    }

    $model = new TestForm();
    if( $model->load(Yii::$app->request->post()) ){
      if( $model->validate() ){
        Yii::$app->session->SetFlash('success', 'Данные приняты');
        return $this->refresh();
      }else{
        Yii::$app->session->SetFlash('error', 'Ошибка');

      }
    }

    $this->view->title = 'Все статьи';
    return $this->render('index', compact('model'));
  }

  public function actionShow(){
    $this->view->title = 'Персонажи!';
    $this->view->registerMetaTag(['name' => 'keywords', 'content' => 'ключевики']);
    $this->view->registerMetaTag(['name' => 'description', 'content' => 'описание страницы...']);
    
    $players = Player::find()->with('items')->with('movements')->all();
    return $this->render('show', compact('players'));
  }

}