<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->title = 'Data';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-data">
    <h1><?= Html::encode($this->title) ?></h1>
		<ul>
			<?php foreach ($Projects as $Project): ?>
    		<li>
        	<?= Html::encode("{$Project->Name}") ?>:
    		</li>
			<?php endforeach; ?>
		</ul>
</div>