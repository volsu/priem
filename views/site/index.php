<?php
/* @var $this yii\web\View */
$this->title = 'My Yii Application';
?>
<div class="site-index">
    <?php foreach($users as $user):?>
        <div><?= $user->enrollee_name;?></div>
    <?php endforeach;?>
</div>
