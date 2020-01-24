<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Galery */
?>
<div class="galery-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'judul',
            'gambar',
        ],
    ]) ?>

</div>
