<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $model app\models\Doa */
/* @var $form yii\widgets\ActiveForm */
$url = Yii::$app->urlManagerFrontEnd->baseUrl;
?>

<div class="doa-form">

    <?php $form = ActiveForm::begin(['options'=>[
                'enctype'=>'multipart/form-data'
            ]]); ?>

    <?php // $form->field($model, 'id_doa')->textInput() ?>

    <?= $form->field($model, 'judul_doa')->textInput(['maxlength' => true]) ?>

    <?php if (!$model->isNewRecord): ?>
        <?php
        $img = [];
        $json = [];
        if (!empty($model->gambar_doa)){
            
                $img[] = Html::img($url.'/web/gambar/doa/'.$model->gambar_doa, ['style' => 'width:auto; height:auto; max-width:100%; max-height:100%']);

                $json[] = [
                    'caption'=>$model->gambar_doa, Url::to(['/file/delete-upload']),
                      'key' => 'gambar_doa '.  $model->id_doa, 
                ];
            }
        ?>

     <?= $form->field($model, 'gambar_doa')->widget(FileInput::className(),[
        'options' => ['accept' => ''],
        'pluginOptions' => [
            'showRemove'=> false,
            'showUpload' => false,
            'showCancel' => false,
            'overwriteInitial' => false,
            'initialPreviewConfig' => $json,
            'previewFileType' => 'image',
            'initialPreview' => $img,
            'uploadAsync'=> true,
            'maxFileSize' => 3*1024*1024,
            'deleteUrl' => Url::to(['/file/delete-upload']),
            'allowedExtensions' => ['jpg','png','jpeg'],
        ]
     ])?>
    <?php else : ?>
         <?= $form->field($model, 'gambar_doa')->widget(FileInput::classname(), [
        'options' => ['accept' => ''],
        'pluginOptions' => [
            'showUpload' => false,
        ]
    ]); ?>
    <?php endif; ?>

    <?= $form->field($model, 'deskripsi_doa')->textInput(['maxlength' => true]) ?>

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
