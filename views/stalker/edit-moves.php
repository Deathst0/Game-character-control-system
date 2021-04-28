<?php 
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Player;
use app\models\Moves;
?>
<h1>Редактировать</h1>

<?php $form = ActiveForm::begin(); ?>
<div class="row"> 
    <div class="col-md-3">
      <?= $form->field($one, 'location_id')->textInput() ?>  
    </div>
    <div class="col-md-3">
        <?= $form->field($one, 'last_visit_date')->textInput() ?> 
    </div>

    <div class="col-md-12"> 
        <?= Html::submitButton('Изменить', ['class' => 'btn btn-success']) ?>
    </div>
</div>
<?php   ActiveForm::end(); ?>