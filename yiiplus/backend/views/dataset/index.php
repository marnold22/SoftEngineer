<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\DatasetSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Datasets';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dataset-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Dataset', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        /*elements columns for creating data entries in the tables. */
        /*'DID' and 'PID' column attributes have the format attribute:format:label*/
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            
            'DID',
            'PID::Project Title',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
