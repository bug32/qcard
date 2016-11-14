<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string  $name
 * @property string  $surname
 * @property string  $login
 * @property double  $balance
 * @property string  $auth_key
 * @property string  $password_hash
 * @property string  $password_reset_token
 * @property string  $email
 * @property string  $subscription_mail
 * @property integer $status
 * @property string  $birthdate
 * @property integer $gender
 * @property integer $id_referer
 * @property integer $confirmed
 * @property string  $ref_num
 * @property integer $square
 * @property integer $created_at
 * @property integer $updated_at
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'auth_key', 'password_hash', 'email', 'created_at', 'updated_at'], 'required'],
            [['balance'], 'number'],
            [['status', 'gender', 'id_referer', 'confirmed', 'ref_num', 'square', 'created_at', 'updated_at'], 'integer'],
            [['birthdate'], 'safe'],
            [['name', 'surname', 'login', 'password_hash', 'password_reset_token', 'email', 'subscription_mail'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['name'], 'unique'],
            [['email'], 'unique'],
            [['password_reset_token'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя',
            'surname' => 'Фамилия',
            'login' => 'Login',
            'balance' => 'Баланс',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'email' => 'Email',
            'subscription_mail' => 'Subscription Mail',
            'status' => 'Status',
            'birthdate' => 'Дата рождения',
            'gender' => 'Пол',
            'id_referer' => 'Id Referer',
            'confirmed' => 'Подтверждение',
            'ref_num' => 'Ref Num',
            'square' => 'Квадрат',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
