<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;

/**
 * This is the model class for table "fornecedor".
 *
 * @property int $id
 * @property string $nome
 * @property string $n_inscricao
 * @property string $criado_em
 * @property string $fone
 * @property int $empresa_id
 *
 * @property Empresa $empresa
 */
class Fornecedor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fornecedor';
    }

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::class,
                'createdAtAttribute' => 'criado_em',
                'updatedAtAttribute' => false,
                'value' => new Expression('NOW()'),
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'n_inscricao', 'criado_em', 'fone', 'empresa_id'], 'required'],
            [['criado_em'], 'safe'],
            [['empresa_id'], 'integer'],
            [['nome'], 'string', 'max' => 50],
            [['n_inscricao', 'fone'], 'string', 'max' => 20],
            [['empresa_id'], 'exist', 'skipOnError' => true, 'targetClass' => Empresa::class, 'targetAttribute' => ['empresa_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'n_inscricao' => 'N Inscricao',
            'criado_em' => 'Criado Em',
            'fone' => 'Fone',
            'empresa_id' => 'Empresa ID',
        ];
    }

    /**
     * Gets query for [[Empresa]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEmpresa()
    {
        return $this->hasOne(Empresa::class, ['id' => 'empresa_id']);
    }
}
