<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "empresa".
 *
 * @property int $id
 * @property string $fantasia
 * @property string $n_inscricao
 * @property string $endereco
 *
 * @property Fornecedor[] $fornecedors
 */
class Empresa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'empresa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fantasia', 'n_inscricao', 'endereco'], 'required'],
            [['fantasia', 'endereco'], 'string', 'max' => 50],
            [['n_inscricao'], 'string', 'max' => 40],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fantasia' => 'Fantasia',
            'n_inscricao' => 'N Inscricao',
            'endereco' => 'Endereco',
        ];
    }

    /**
     * Gets query for [[Fornecedors]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFornecedors()
    {
        return $this->hasMany(Fornecedor::class, ['empresa_id' => 'id']);
    }
}
