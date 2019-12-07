<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Materi */
?>
<div class="materi-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_materi',
            'jenis_materi',
            'judul_materi',
            'deskripsi_materi',
        ],
    ]) ?>

</div>
