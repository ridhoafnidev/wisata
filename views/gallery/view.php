<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Gallery */
?>
<div class="gallery-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'gambar',
            'judul',
            'createdAt',
        ],
    ]) ?>

</div>
