<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Kost */

$this->title = 'Create Kost';
$this->params['breadcrumbs'][] = ['label' => 'Kosts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kost-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
