<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Admin */
?>
<div class="admin-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_admin',
            'username',
            'nama_lengkap',
            'password',
            // 'authkey',
            // 'accesToken',
            'email:email',
            'foto',
            'createdAt',
            'updatedAt',
        ],
    ]) ?>

</div>
