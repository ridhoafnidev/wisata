<?php

use yii\widgets\DetailView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Doa */
?>
<div class="doa-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_doa',
            'judul_doa',
            'deskripsi_doa',
            [
                'attribute' => 'gambar_doa',
                'format' => 'html',    
                'value' => function ($data) {
                    return Html::img(Yii::getAlias('@web').'/gambar/doa/'. $data['gambar_doa'],
                        ['width' => '300px', 'height' => '300%']);
                },
            ],
        ],
    ]) ?>

</div>
