<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Kontak */
?>
<div class="kontak-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'email:email',
            'nama',
            'deskripsi:ntext',
            'createdAt',
        ],
    ]) ?>

</div>
