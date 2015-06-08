<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Users');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create User'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'object1',
            'object2',
            'object3',
            'ind_achivement',
            // 'type_document',
            // 'is_benefit',
            // 'is_olymp',
            // 'is_target',
            // 'is_enrolled',
            // 'priority',
            // 'order',
            // 'oop_base',
            // 'is_expelled',
            // 'enrollee_code',
            // 'enrollee_name',
            // 'total_balls',
            // 'is_concurs_out',
            // 'is_rec_by_priority',
            // 'is_rec_by_other',
            // 'cg_code',
            // 'cg_view',
            // 'cg_form',
            // 'cg_oop_code',
            // 'cg_oop_name',
            // 'cg_level',
            // 'cg_base',
            // 'cg_unique_right',
            // 'stat_plan',
            // 'stat_quota',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
