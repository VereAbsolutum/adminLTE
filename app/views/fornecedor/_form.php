<?php

use app\models\EmpresarSearch;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Fornecedor $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="fornecedor-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'n_inscricao')->textInput(['maxlength' => true]) ?>

    <?php // $form->field($model, 'criado_em')->textInput() ?>

    <?= $form->field($model, 'fone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'empresa_id')->dropDownList(
        ArrayHelper::map(EmpresarSearch::find()->all(), 'id', 'fantasia'),
        ['prompt' => 'Escolha a Empresa']
    ) ?>

    <?php
    //  $form->field($model, 'empresa_id')->widget(Select2::class, [
    // 'data' => $data,
    // 'language' => 'de',
    // 'options' => ['placeholder' => 'Select a state ...'],
    // 'pluginOptions' => [
    //     'allowClear' => true
    // ],
    // ]) 
    ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
