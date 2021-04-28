<?php 

namespace app\models;
use yii\db\ActiveRecord;

class Player extends ActiveRecord{

    public static function tableName(){
      return 'players';
    }
    public function getInventories(){
      return $this->hasMany(Inventory::className(), ['item_parent' => 'user_id']);
    }
    public function getItems(){
      return $this->hasMany(Item::className(), ['item_id' => 'item_id'])
        ->viaTable('inventories', ['item_parent' => 'name']);
    }
    public function getMovements(){
      return $this->hasMany(Movement::className(), ['parent' => 'user_id']);
    }
    public static function getOne($user_id){
      $data = self::find()->where(['user_id'=>$user_id])->one();
      return $data;
    }
}