<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\KostSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kosts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kost-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Kost', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nomer',
            'nama_kost',
            'harga',
            'jumlah_kamar',
            //'Keterangan:ntext',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, \frontend\models\Kost $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
