<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->title = 'Projects';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-data">
    <h1><?= Html::encode($this->title) ?></h1>

        <?php foreach ($Projects as $Project): ?>
            <?php echo "<a href = " . "'http://google.com/''>" . "<div class= 'project col-md-6'>"; ?>
                <div class="title">
                    <?= Html::encode("{$Project->Name}") ?>:
                </div>
                <div class="description">
                 <?= Html::encode("{$Project->Description}") ?>
                </div>
            </div> </a>
        <?php endforeach; ?>    
            
</div>