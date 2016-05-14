<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Projects;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model backend\models\Dataset */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dataset-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'DID')->textInput() ?>

    <!-- "->label('Insert superb label here')" The previous is the function to change what the user sees as the attribute name.-->

    <?= $form->field($model, 'PID')->dropDownlist(ArrayHelper::map(Projects::find()->all(), 'PID', 'Name'), 
    	['prompt' => 'Select Project']
    	)->label('Project Title')
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
