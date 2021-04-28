<?php

namespace app\controllers;

use app\models\Player;
use app\models\Inventory;
use app\models\Movement;
use app\models\Item;
use Yii;

class StalkerController extends AppController {
  
  public $layout = 'basic';

  public function actionIndex(){
    $this->view->title = 'Система управления персонажами!';
    
    $players = Player::find()->with('movements')->all();
    return $this->render('index', compact('players'));
  }

  public function actionEdit($id){

    $one = Player::getOne($id);
    
    if($_POST['Player']) {
      $one->name = $_POST['Player']['name'];
      $one->clan = $_POST['Player']['clan'];
      $one->registration_date = $_POST['Player']['registration_date'];
      $one->password = $_POST['Player']['password'];
      $one->killing_number = $_POST['Player']['killing_number'];
    
      if($one->validate() && $one->save()){
        return $this->redirect(['index']);
      }
    }
    
    return $this->render('edit', ['one'=>$one]);
  }

  public function actionCreate(){

    $model = new Player();

    if($_POST['Player']) {
      $model->name = $_POST['Player']['name'];
      $model->clan = $_POST['Player']['clan'];
      $model->registration_date = $_POST['Player']['registration_date'];
      $model->password = $_POST['Player']['password'];
      $model->killing_number = $_POST['Player']['killing_number'];
   
      if($model->validate() && $model->save()){
        return $this->redirect(['index']);
      }
    }
    return $this->render('create', ['model'=>$model]);
  }

  public function actionDelete($id){
    $model = Player::getOne($id);
    $model->delete();
    return $this->redirect(['index']);
  }

  public function actionInventories(){
    $this->view->title = 'Система управления вещами персонажей!';
    
    $players = Player::find()->with('inventories')->with('items')->all();
    return $this->render('inventories', compact('players'));
  }

  public function actionEditInventories($id){

    $one = Inventory::getOne($id);

    if($_POST['Inventory']) {
      $one->item_parent = $_POST['Inventory']['item_parent'];
      $one->item_id = $_POST['Inventory']['item_id'];
      $one->item_uses_number = $_POST['Inventory']['item_uses_number'];
      $one->item_location = $_POST['Inventory']['item_location'];
   
      if($one->validate() && $one->save()){
        return $this->redirect(['inventories']);
      }
    }
    return $this->render('edit-inventories', ['one'=>$one]);
  }

  public function actionCreateInventories(){

    $model = new Inventory();

    if($_POST['Inventory']) {
      $model->item_parent = $_POST['Inventory']['item_parent'];
      $model->item_id = $_POST['Inventory']['item_id'];
      $model->item_uses_number = $_POST['Inventory']['item_uses_number'];
      $model->item_location = $_POST['Inventory']['item_location'];
  
      if($model->validate() && $model->save()){
        return $this->redirect(['inventories']);
      }
    }
    return $this->render('create-inventories', ['model'=>$model]);
  }

  public function actionDeleteInventories($id){
    $model = Inventory::getOne($id);
    $model->delete();
    return $this->redirect(['inventories']);
  }

  public function actionMoves(){
    $this->view->title = 'Система управления перемещением персонажей!';
    
    $players = Player::find()->with('movements')->all();
    return $this->render('moves', compact('players'));
  }

  public function actionEditMoves($id){

    $one = Movement::getOne($id);

    if($_POST['Movement']) {
      $one->location_id = $_POST['Movement']['location_id'];
      $one->last_visit_date = $_POST['Movement']['last_visit_date'];
   
      if($one->validate() && $one->save()){
        return $this->redirect(['moves']);
      }
    }
    return $this->render('edit-moves', ['one'=>$one]);
  }

  public function actionCreateMoves(){
    $model = new Movement();

    if($_POST['Movement']) {
      $model->parent = $_POST['Movement']['parent'];
      $model->location_id = $_POST['Movement']['location_id'];
      $model->last_visit_date = $_POST['Movement']['last_visit_date'];

      if($model->validate() && $model->save()){
        return $this->redirect(['moves']);
      }
    }
    return $this->render('create-moves', ['model'=>$model]);
  }

  public function actionDeleteMoves($id){
    $model = Movement::getOne($id);
    $model->delete();
    return $this->redirect(['moves']);
  }

}