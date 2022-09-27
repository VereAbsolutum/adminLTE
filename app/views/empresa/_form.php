<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Empresa $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="empresa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fantasia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'n_inscricao')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cep')->textInput() ?>

    <?= $form->field($model, 'endereco')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php 
$script = <<< JS
    $('#empresa-cep').keypress((e) => {
        const onlyNumbers = /[0-9]|\./;
        const key = String.fromCharCode(e.keyCode);

        // allow only numbers
        if (!onlyNumbers.test(key)) {
            e.preventDefault();
            return;
        }
    })
JS;
$this->registerJs($script);
?>

<?php 
$script1 = <<< JS
    $('#empresa-cep').keyup((e) => {
        const cep = e.target.value;
        const getCep = async (cep) => {
            //Check if we have a CEP
            if (cep.length === 8) {
                const apiUrl = 'https://viacep.com.br/ws/' + cep + '/json/';
                const response = await fetch(apiUrl);
                const data = await response.json();
                if(data.erro){
                    //code goes here
                    alert('CEP invalido, tente novamente.');
                    return
                }
                if(data.logradouro){
                    $('#empresa-endereco').val(data.logradouro);
                }
            }
        }
        getCep(cep);
    })
JS;
$this->registerJs($script1);
?>


