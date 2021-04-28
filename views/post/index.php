<?php   
use yii\widgets\ActiveForm;
use yii\helpers\Html;

?>
<h1>Test Action</h1>
<?php 

/*debug(Yii::$app);*/
?>

<?php   if( Yii::$app->session->hasFlash('success') ): ?>
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <p> <?php   echo Yii::$app->session->getFlash('success'); ?></p>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
<?php   endif; ?>

<?php   if( Yii::$app->session->hasFlash('error') ): ?>
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <p> <?php   echo Yii::$app->session->getFlash('error'); ?></p>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
<?php   endif; ?>

<?php   $form = ActiveForm::begin(['options' =>['id' => 'testForm']]) ?>
<?= $form->field($model, 'name') ?>
<?= $form->field($model, 'email')->input('email') ?>
<?= $form->field($model, 'text')->textarea(['rows' => 5]) ?>
<?= Html::submitButton('Отправить', ['class' => 'btn btn-success']) ?>
<?php   ActiveForm::end() ?>