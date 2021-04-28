<?php 
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Player;
use app\models\Item;
?>
<h1>Редактировать</h1>

<?php $form = ActiveForm::begin(); ?>
<div class="row"> 
    <div class="col-md-3">
      <?php
        $players = Player::find()->all();
        $things = ArrayHelper::map($players,'user_id','user_id');
        echo $form->field($one, 'item_parent')->dropDownList($things)
      ?>
    </div>
    <div class="col-md-3">
      <?php 
        $items = Item::find()->all();
        $things = ArrayHelper::map($items,'item_id','item_id');
        echo $form->field($one, 'item_id')->dropDownList($things)
      ?>   
    </div>
    <div class="col-md-3">
        <?= $form->field($one, 'item_uses_number')->textInput() ?>     
    </div>
    <div class="col-md-3">
        <?= $form->field($one, 'item_location')->textInput() ?>     
    </div>

    <div class="col-md-12"> 
        <?= Html::submitButton('Изменить', ['class' => 'btn btn-success']) ?>
    </div>
</div>
<?php   ActiveForm::end(); ?>