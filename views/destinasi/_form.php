<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\JenisDestinasi;
use yii\helpers\ArrayHelper;
use kartik\file\FileInput;
use yii\helpers\Url;
use kartik\select2\select2;
$url = Yii::$app->urlManagerFrontEnd->baseUrl;


/* @var $this yii\web\View */
/* @var $model app\models\Destinasi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="destinasi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deskripsi')->textarea(['rows' => 6]) ?>

    <?php
    
    $jenis = JenisDestinasi::find()->all();

    //use yii\helpers\ArrayHelper;
    $listData=ArrayHelper::map($jenis,'id','jenis_destinasi');

    echo $form->field($model, 'jenis_id')->widget(Select2::classname(), [
        'data' => $listData,
        'options'=>['placeholder'=>Yii::t('app','Pilih Kelas')],
        'pluginOptions' => [
            'allowClear' => true,
        ],
    ]);
    
    // echo $form->field($model, 'jenis_id')->dropDownList(
    //         $listData,
    //         ['prompt'=>'Pilih...']
    //         )->label("Kategori");

    ?>

<?php if (!$model->isNewRecord): ?>
        <?php
        $img = [];
        $json = [];
        if (!empty($model->photo)){
            
                $img[] = Html::img($url.'/web/gambar/destinasi/'.$model->photo, ['style' => 'width:auto; height:auto; max-width:100%; max-height:100%']);

                $json[] = [
                    'caption'=>$model->photo, Url::to(['/file/delete-upload']),
                      'key' => 'photo '.  $model->id, 
                ];
            }
        ?>

     <?= $form->field($model, 'photo')->widget(FileInput::className(),[
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
         <?= $form->field($model, 'photo')->widget(FileInput::classname(), [
        'options' => ['accept' => ''],
        'pluginOptions' => [
            'showUpload' => false,
        ]
    ]); ?>
    <?php endif; ?>

    <?= $form->field($model, 'alamat')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'no_hp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'website')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ig')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'yt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jam_buka')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lat')->textInput() ?>

    <?= $form->field($model, 'lng')->textInput() ?>

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
