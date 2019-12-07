<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Larangan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="larangan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php //$form->field($model, 'id_larangan')->textInput() ?>

    <?= $form->field($model, 'judul_larangan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deskripsi_larangan')->textInput(['maxlength' => true]) ?>

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
