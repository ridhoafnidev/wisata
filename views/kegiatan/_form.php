<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Kegiatan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kegiatan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kloter')->textInput(['maxlength' => true, 'type'=>'number']) ?>

    <?= $form->field($model, 'priode')->textInput(['maxlength' => true, 'type'=>'number']) ?>

    <?= $form->field($model, 'tanggal_keberangkatan')->textInput(['maxlength' => true, 'type'=>'date']) ?>

    <?= $form->field($model, 'tanggal_kepulangan')->textInput(['maxlength' => true, 'type'=>'date']) ?>

    <?= $form->field($model, 'judul_kegiatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deskripsi_kegiatan')->textInput(['maxlength' => true]) ?>

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
