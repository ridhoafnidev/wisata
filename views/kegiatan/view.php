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
            'judul_kegiatan',
            'deskripsi_kegiatan',
        ],
    ]) ?>

</div>
