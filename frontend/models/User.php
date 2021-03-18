<?php

namespace frontend\models;

use backend\models\User as BaseUser;
use Yii;
use yii\web\IdentityInterface;

/**
 *
 * @property mixed $authKey
 * @property string $password
 */
class User extends BaseUser implements IdentityInterface
{

}