<?php 

namespace app\models;
use yii\db\ActiveRecord;

class Inventory extends ActiveRecord{

    public static function tableName(){
      return 'inventories';
    }
    public function getPlayer(){
      return $this->hasOne(Player::className(), ['user_id' => 'item_parent']);
    }
    public static function getOne($spot_id){
      $data = self::find()->where(['spot_id'=>$spot_id])->one();
      return $data;
    }
}