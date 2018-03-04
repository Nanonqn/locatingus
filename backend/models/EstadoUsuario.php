<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "estadousuario".
 *
 * @property int $id
 * @property string $estado_nombre
 *
 * @property User[] $users
 */
class EstadoUsuario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'estadousuario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'estado_nombre'], 'required'],
            [['id'], 'integer'],
            [['estado_nombre'], 'string', 'max' => 100],
            [['id'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'estado_nombre' => 'Estado Nombre',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     * 
     * Relacion Usuario - EstadoUsuario
     * 
     */
    public function getUsers()
    {
        return $this->hasMany(User::className(), ['estado_usuario_id' => 'id']);
    }
}
