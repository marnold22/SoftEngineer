<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
$this->title = 'createProject';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-create-project">
	<h1><?= Html::encode($this->title) ?></h1>
	<p>To create a project, please fill out the form.</p>
<p>Please fill out the following fields to signup:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                <?= $form->field($model, 'creatorAssociation') ?>

                <?= $form->field($model, 'projectName') ?>

                <?= $form->field($model, 'projectDescription') ?>

                <?= $form->field($model, 'displayImage') ?>

                <?= $form->field($model, 'displayDoc') ?>

                <div class="form-group">
                    <?= Html::submitButton('Create Project', ['class' => 'btn btn-primary', 'name' => 'create-project-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>








