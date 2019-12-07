<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Larangan */
?>
<div class="larangan-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_larangan',
            'judul_larangan',
            'deskripsi_larangan',
        ],
    ]) ?>

</div>
