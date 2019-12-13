<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Kegiatan */
?>
<div class="kegiatan-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_kegiatan',
            'kloter',
            'priode',
            'tanggal_keberangkatan',
            'tanggal_kepulangan',
            'judul_kegiatan',
            'deskripsi_kegiatan',
        ],
    ]) ?>

</div>
