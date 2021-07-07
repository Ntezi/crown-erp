<?php


namespace backend\models;


use Yii;
use yii\behaviors\BlameableBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;

class Project extends \common\models\Project
{
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['description'], 'string'],
            [['start_date', 'created_at', 'updated_at'], 'safe'],
            [['estimated_period', 'status', 'created_by', 'updated_by'], 'integer'],
            [['name', 'code'], 'string', 'max' => 255],
        ];
    }

    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => 'yii\behaviors\TimestampBehavior',
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
                ],
                'value' => new Expression('NOW()'),
            ],
            'blameable' => [
                'class' => BlameableBehavior::className(),
                'createdByAttribute' => 'created_by',
                'updatedByAttribute' => 'updated_by',
            ],
        ];
    }
    public function attributeLabels()
    {
        return [
            'status' => Yii::t('app', 'Status'),
        ];
    }
    public function getProjectByCode($code)
    {
        return self::find()->where(['like', 'code', $code])->orderBy(['id' => SORT_DESC])->one();
    }

    public function generateCodes()
    {
        $code = strtoupper(substr($this->name, 0, 3));
        $code = preg_replace('/\s+/', '', $code);
        $existing_project = $this->getProjectByCode($code);

        if (!empty($existing_project)) {
            $digit = $existing_project->id + 1;
            if ($existing_project->id < 10) {
                $code .= '00' . $digit;
            } elseif ($existing_project->id < 100) {
                $code .= '0' . $digit;
            }
        } else {
            $code .= '001';
        }
        return preg_replace('/\s+/', '', $code);
    }

    public function beforeSave($insert) {
        $this->code = $this->generateCodes();
        return parent::beforeSave($insert);
    }

    public function getUser()
    {
        return User::findOne($this->created_by);
    }
    public function getStatus()
    {
        if ($this->status == Yii::$app->params['project_status_active']) {
            $status = Yii::t('app', 'Active');
        } elseif ($this->status == Yii::$app->params['project_status_deleted']) {
            $status = Yii::t('app', 'Deleted');
        } else {
            $status = Yii::t('app', 'Not set');
        }
        return $status;
    }
}