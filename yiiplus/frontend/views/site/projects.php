<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = 'Projects';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-projects">
	<h1><?= Html::encode($this->title) ?></h1>
	<p>If you want to upload data or a project please fill out the form.</p>

	<div class='row'>
		<div class="col-lg-3">
			<?php $form = ActiveForm::begin(['id' => 'upload-form']); ?>
				
				<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>
			
					<?= $form->field($model, 'imageFile')->fileInput() ?>

				<?= $form->field($model, 'projectname') ?>

				<?= $form->field($model, 'username') ?>

				<div class="formgroup">
					<?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'project-button']) ?>)
				</div>

			<?php ActiveForm::end(); ?>
		</div>
	</div>
</div>




<?php ActiveForm::end() ?>



