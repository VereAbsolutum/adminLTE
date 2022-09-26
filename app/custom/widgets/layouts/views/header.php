<?php 
use yii\helpers\Html;
?>

<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <?= HTML::a('Home', ['/site'], ['class' => 'nav-link']) ?>
        <!-- <a href="index3.html" class="nav-link">Home</a> -->
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <?= HTML::a('Fonecedor', ['/fornecedor'], ['class' => 'nav-link']) ?>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <?= HTML::a('Empresa', ['/empresa'], ['class' => 'nav-link']) ?>
      </li>
    </ul>
  </nav>