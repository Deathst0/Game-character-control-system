<?php 

namespace app\models;
use yii\db\ActiveRecord;

class Item extends ActiveRecord{

    public static function tableName(){
      return 'items';
    }
    public function getPlayer(){
      return $this->hasMany(Player::className(), ['item_id' => 'item_id'])
        ->viaTable('inventories', ['item_id' => 'item_id']);
    }
}