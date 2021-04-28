<?php 
use yii\helpers\Html;
use yii\widgets\ActiveForm;
  ?>
<h1>Создать</h1>

<?php $form = ActiveForm::begin(); ?>
<div class="row"> 
    <div class="col-md-2">
        <?= $form->field($model, 'name')->textInput() ?>
    </div>
    <div class="col-md-2">
        <?= $form->field($model, 'clan')->textInput() ?>     
    </div>
    <div class="col-md-2">
        <?= $form->field($model, 'registration_date')->textInput() ?>     
    </div>
    <div class="col-md-2">
        <?= $form->field($model, 'password')->passwordInput() ?>     
    </div>
    <div class="col-md-2">
        <?= $form->field($model, 'killing_number')->textInput() ?>     
    </div>

    <div class="col-md-12"> 
        <?= Html::submitButton('Создать', ['class' => 'btn btn-success']) ?>
    </div>
</div>
<?php   ActiveForm::end(); ?>