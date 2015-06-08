<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Users'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'object1',
            'object2',
            'object3',
            'ind_achivement',
            'type_document',
            'is_benefit',
            'is_olymp',
            'is_target',
            'is_enrolled',
            'priority',
            'order',
            'oop_base',
            'is_expelled',
            'enrollee_code',
            'enrollee_name',
            'total_balls',
            'is_concurs_out',
            'is_rec_by_priority',
            'is_rec_by_other',
            'cg_code',
            'cg_view',
            'cg_form',
            'cg_oop_code',
            'cg_oop_name',
            'cg_level',
            'cg_base',
            'cg_unique_right',
            'stat_plan',
            'stat_quota',
        ],
    ]) ?>

</div>
