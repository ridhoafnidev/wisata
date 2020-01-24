<?php

use yii\widgets\DetailView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Destinasi */
?>
<div class="destinasi-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nama',
            'deskripsi:ntext',
            'jenis_id',
            'alamat:ntext',
            'no_hp',
            'website',
            'ig',
            'fb',
            'yt',
            'jam_buka',
            'lat',
            'lng',
            [
                'attribute' => 'photo',
                'format' => 'html',    
                'value' => function ($data) {
                    return Html::img(Yii::getAlias('@web').'/gambar/destinasi/'. $data['photo'],
                        ['width' => '100px', 'height' => '100%']);
                },
            ],
        ],
    ]) ?>

</div>
