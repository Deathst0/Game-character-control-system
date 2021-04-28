<?php 

namespace app\models;
use yii\db\ActiveRecord;

class Movement extends ActiveRecord{

    public static function tableName(){
      return 'movements';
    }
    public function getPlayer(){
      return $this->hasOne(Player::className(), ['user_id' => 'parent']);
    }
    public static function getOne($move_id){
      $data = self::find()->where(['move_id'=>$move_id])->one();
      return $data;
    }
}