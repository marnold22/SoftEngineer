<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Dataset */

$this->title = 'Update Dataset: ' . $model->DID;
$this->params['breadcrumbs'][] = ['label' => 'Datasets', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->DID, 'url' => ['view', 'DID' => $model->DID, 'PID' => $model->PID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dataset-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
