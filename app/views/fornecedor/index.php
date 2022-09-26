<?php

use app\models\Fornecedor;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;

/** @var yii\web\View $this */
/** @var app\models\FornecedorSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Fornecedors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fornecedor-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Fornecedor', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?php Pjax::begin() ?><?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nome',
            'n_inscricao',
            'criado_em',
            'fone',
            // 'empresa_id',
            [
                // 'class' => DataColumn::class,
                'attribute' => 'empresa_id',
                'value' => 'empresa.fantasia',
                'format' => 'text',
                'label' => 'Empresa'
            ],
            [   
                'class' => ActionColumn::class,
                'urlCreator' => function ($action, Fornecedor $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?><?php Pjax::end(); ?>


</div>
