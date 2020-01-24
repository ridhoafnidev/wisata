<?php

use yii\widgets\DetailView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\JenisDestinasi */
?>
<div class="jenis-destinasi-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'jenis_destinasi',
            [
                'attribute' => 'icon',
                'format' => 'html',    
                'value' => function ($data) {
                    return Html::img(Yii::getAlias('@web').'/gambar/icon/'. $data['icon'],
                        ['width' => '100px', 'height' => '100%']);
                },
            ],
        ],
    ]) ?>

</div>
