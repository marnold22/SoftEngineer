<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use backend\models\Projects;

/* @var $this yii\web\View */
/* @var $model backend\models\SiteData */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="site-data-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Location')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'PID')->dropDownlist(ArrayHelper::map(Projects::find()->all(), 'PID', 'Name'), 
    	['prompt' => 'Select Project']
    	) 
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
