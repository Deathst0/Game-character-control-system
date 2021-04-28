<?php 
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Player;
use app\models\Moves;
?>
<h1>Создать</h1>

<?php $form = ActiveForm::begin(); ?>
<div class="row"> 
    <div class="col-md-3">
      <?php
        $players = Player::find()->all();
        $things = ArrayHelper::map($players,'user_id','user_id');
        echo $form->field($model, 'parent')->dropDownList($things)
      ?>
    </div>
    <div class="col-md-3">
      <?= $form->field($model, 'location_id')->textInput() ?>  
    </div>
    <div class="col-md-3">
      <?= $form->field($model, 'last_visit_date')->textInput() ?>     
    </div>

    <div class="col-md-12"> 
      <?= Html::submitButton('Создать', ['class' => 'btn btn-success']) ?>
    </div>
</div>
<?php   ActiveForm::end(); ?>