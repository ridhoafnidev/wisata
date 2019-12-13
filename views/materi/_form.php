<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Materi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="materi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php // $form->field($model, 'id_materi')->textInput() ?>

    <?= $form->field($model, 'jenis_materi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'judul_materi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deskripsi_materi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link_youtube')->textInput(['maxlength' => true]) ?>

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
