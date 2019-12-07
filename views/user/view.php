<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\User */
?>
<div class="user-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_user',
            'username',
            'nama_lengkap',
            'email:email',
            'password',
            'nomor_hp',
            'alamat',
            'createdAt',
            'updateAt',
        ],
    ]) ?>

</div>
