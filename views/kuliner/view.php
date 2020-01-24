<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Kuliner */
?>
<div class="kuliner-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'gambar',
            'judul',
            'isi:ntext',
            'createdAt',
        ],
    ]) ?>

</div>
