<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Form;
use app\models\Base;
use app\models\Program;
use app\models\Level;
use kartik\depdrop\DepDrop;
/* @var $this yii\web\View */
/* @var $model app\models\UserSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-search">

    <?php $form = ActiveForm::begin([
        'id'     => 'searchForm',
        'action' => ['rating/enrollee'],
        'method' => 'get',
        'enableClientValidation'    => false,
        'enableAjaxValidation'      => false
    ]); ?>

    <?php  echo $form->field($model, 'cg_level' )->dropDownList(Level::items(), [
        'id'        => 'level',
        'prompt'    => 'Выберите уровень образования',

    ]); ?>

    <?php echo $form->field($model, 'cg_oop_name')->widget(DepDrop::className(), [
        'options'       => ['id' => 'oop'],
        'pluginOptions' => [
            'depends'       => ['level'],
            'placeholder'   => 'Выберите тип направления подготовки',
            'url'           => \yii\helpers\Url::to(['rating/programmes']),
            'loadingText'   => 'Загрузка...'
        ]
    ]);?>

    <?php echo $form->field($model, 'cg_form')->widget(DepDrop::className(),[
        'options'       => ['id' => 'form'],
        'pluginOptions' => [
            'depends'       => ['level', 'oop'],
            'placeholder'   => 'Выберите форму обучения',
            'url'           => \yii\helpers\Url::to(['rating/forms']),
            'loadingText'   => 'Загрузка...'
        ]
    ]);?>

    <?php echo $form->field($model, 'cg_base')->widget(DepDrop::className(),[
        'options'       => ['id' => 'base'],
        'pluginOptions' => [
            'depends'       => ['level', 'oop', 'form'],
            'placeholder'   => 'Выберите тип приема',
            'url'           => \yii\helpers\Url::to(['rating/bases']),
            'loadingText'   => 'Загрузка...'
        ]
    ]);?>
    <?php /* echo $form->field($model, 'cg_oop_name')->dropDownList([],[
        'prompt'    => 'Выберите тип направления подготовки',
        'disabled'  => true
    ]);?>


    <?php/* echo $form->field($model, 'cg_oop_name')->dropDownList(Program::items(), [
        'prompt'    => 'Выберите тип направления подготовки'
    ]) ?>

    <?php echo $form->field($model, 'cg_form' )->dropDownList(Form::items(), [
        'prompt'    => 'Выберите форму обучения'
    ]); ?>

    <?php echo $form->field($model, 'cg_base' )->dropDownList(Base::items(), [
        'prompt'    => 'Выберите тип приема'
    ]); */?>
    <div class="form-group pull-right">
        <?//= Html::submitButton(Yii::t('app', 'Поиск'), ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Поиск', ['#'], ['id' => 'search', 'class' => 'btn btn-primary']);?>
    </div>

    <?php ActiveForm::end(); ?>
</div>