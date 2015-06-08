<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Рейтинг');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <span class="clearfix"></span>

    <?= GridView::widget([
        'dataProvider'  => $dataProvider,
        'columns'       => [
            ['class'        => 'yii\grid\SerialColumn'],
            'enrollee_name',
            'object1',
            'object2',
            'object3',
            'total_balls',
            'priority',
        ]
    ]);?>

</div>
