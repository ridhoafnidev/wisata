<?php

use yii\widgets\DetailView;
use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Berita */
?>
<div class="berita-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            [
                'attribute' => 'gambar',
                'format' => 'html',    
                'value' => function ($data) {
                    return Html::img(Yii::getAlias('@web').'/gambar/destinasi/'. $data['gambar'],
                        ['width' => '100px', 'height' => '100%']);
                },
            ],
            'judul',
            'isi:ntext',
            'createdAt',
        ],
    ]) ?>

</div>
