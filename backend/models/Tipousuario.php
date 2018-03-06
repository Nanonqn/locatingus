<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tipousuario".
 *
 * @property int $id
 * @property string $tipo_usuario_nombre
 *
 * @property User[] $users
 */
class Tipousuario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tipousuario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tipo_usuario_nombre'], 'required'],
            [['tipo_usuario_nombre'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tipo_usuario_nombre' => 'Tipo Usuario Nombre',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(User::className(), ['tipo_usuario_id' => 'id']);
    }
}
