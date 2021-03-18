<?php
/**
 * Created by PhpStorm.
 * User: alainkajangwe
 * Date: 15/02/17
 * Time: 01:34
 */

namespace console\controllers;

use Yii;
use yii\base\Exception;
use yii\console\Controller;
use backend\models\User;
use yii\log\Logger;

class SeedController extends Controller {
    public function actionIndex($username, $password, $email) {
        try {

            if (!$username || !$password || $email) {
                echo "Missing required parameters: username, AND/OR password,";
            }
            echo $username."\n";
            echo $password."\n";

            $user = new User();
            $user->username = $username;
            $user->email = $email;
            $user->setPassword($password);
            $user->generateAuthKey();
            $user->generateEmailVerificationToken();
            $user->status = Yii::$app->params['activated_user'];

            if ($user->save())
                echo 'New user member: ' . $username . ' created!' . "\n";
            else {
                echo 'Failed to create user member: ' . $username. "\n";
                print_r($user->getErrors());
            }

        } catch (Exception $e) {
            echo $e . "\n";
        }

    }
}