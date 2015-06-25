<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Рейтинг 2015');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">
    <h1 class="page-header"><?= Html::encode($this->title);?><span class="badge custom-danger">Количество поданных заявлений: <?=$count;?></span></h1>
    <?php echo $this->render('_search', ['model' => $searchModel]); ?>
    <span class="clearfix"></span>
    <div id="rating"></div>
</div>
