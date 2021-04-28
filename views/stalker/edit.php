<?php 
use yii\helpers\Html;
use yii\widgets\ActiveForm;
  ?>
<h1>Редактировать</h1>

<?php $form = ActiveForm::begin(); ?>
<div class="row"> 
    <div class="col-md-2">
        <?= $form->field($one, 'name')->textInput() ?>
    </div>
    <div class="col-md-2">
        <?= $form->field($one, 'clan')->textInput() ?>     
    </div>
    <div class="col-md-2">
        <?= $form->field($one, 'registration_date')->textInput() ?>     
    </div>
    <div class="col-md-2">
        <?= $form->field($one, 'password')->passwordInput() ?>     
    </div>
    <div class="col-md-2">
        <?= $form->field($one, 'killing_number')->textInput() ?>     
    </div>

    <div class="col-md-12"> 
        <?= Html::submitButton('Изменить', ['class' => 'btn btn-success']) ?>
    </div>
</div>
<?php   ActiveForm::end(); ?>