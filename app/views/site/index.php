<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Bem vindo estrangeiro!</h1>

        <p class="lead">Você conseguiu acessar o Projeto CRUD. Agora faça a tua escolha</p>

        <div class="form-group">
            <?= HTML::a('Um novo Fornecedor', ['/fornecedor'], ['class' => 'btn btn-lg btn-primary']) ?>
            <?= HTML::a('Uma nova Empresa', ['/empresa'], ['class' => 'btn btn-lg btn-dark']) ?>
        </div>
    </div>
</div>
