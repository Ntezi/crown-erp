<?php


namespace common\components;

use Yii;
use yii\base\Exception;
use yii\db\Connection;
use yii\web\Controller;
use common\models\master\Company;

class ERPController extends Controller
{
    public function beforeAction($action)
    {
        $session = Yii::$app->session;

        if (isset($_POST['tin_number'])) {
            $company = Company::findOne(['tin_number' => Yii::$app->request->post('tin_number')]);
            if (!empty($company)) {
                $session->set('company_id', $company->id);
                Yii::warning('company_id session: ' . $session->get('company_id'), 'debug');
                Yii::warning('tin number: ' . $company->tin_number, 'debug');
            }
        }


        $company_id = $session->get('company_id');
        if ($company_id) {
            $this->switchCompanyDatabase($company_id);
        }
        return parent::beforeAction($action);
    }

    protected function connectToCompanyDatabase($company)
    {
        $hostname = null;
        $db_name = null;
        $username = null;
        $password = null;

        if (isset($company)) {

            $dsn = $company->dsn;
            Yii::warning('dsn :' . $dsn, 'debug');
            $elements = explode(";", $dsn);

            foreach ($elements as $element) {
                $variables = explode("=", $element);
                if ($variables[0] == "mysql:host") $hostname = $variables[1];
                if ($variables[0] == "dbname") $db_name = $variables[1];
                if ($variables[0] == "username") $username = $variables[1];
                if ($variables[0] == "password") $password = $variables[1];
            }

            if ($hostname && $db_name && $username) {
                try {
                    Yii::$app->set('db', [
                        'class' => 'yii\db\Connection',
                        'dsn' => 'mysql:host=' . $hostname . ';dbname=' . $db_name,
                        'username' => $username,
                        'password' => $password,
                        'charset' => 'utf8']);
                } catch (Exception $e) {
                    Yii::error('Hirwa-Error DB Exception:' . $e);
                }
            } else {

                throw new Exception("DB setup for company [ " . $company->id . " ] is not defined.");
            }
        }

    }

    protected function switchCompanyDatabase($id)
    {
        $company = Company::findOne(['id' => $id]);

        $this->connectToCompanyDatabase($company);

        // SAVE selected company ID to the session after success db connection.
        $session = Yii::$app->session;
        $session->set(Yii::$app->params['company_id'], $id);
    }

}