<?php

namespace common\models;

use backend\models\User;
use Yii;

/**
 * This is the model class for table "project".
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property string|null $start_date
 * @property int|null $estimated_period
 * @property int $status 0:deleted, 1:active
 * @property string $created_at
 * @property string $updated_at
 * @property int $created_by
 * @property int $updated_by
 *
 * @property ProjectClientLink[] $projectClientLinks
 * @property Client[] $clients
 * @property ProjectTask[] $projectTasks
 * @property ProjectTeam[] $projectTeams
 * @property User[] $users
 */
class Project extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'project';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'status', 'created_by', 'updated_by'], 'required'],
            [['description'], 'string'],
            [['start_date', 'created_at', 'updated_at'], 'safe'],
            [['estimated_period', 'status', 'created_by', 'updated_by'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'description' => Yii::t('app', 'Description'),
            'start_date' => Yii::t('app', 'Start Date'),
            'estimated_period' => Yii::t('app', 'Estimated Period'),
            'status' => Yii::t('app', '0:deleted, 1:active'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'created_by' => Yii::t('app', 'Created By'),
            'updated_by' => Yii::t('app', 'Updated By'),
        ];
    }

    /**
     * Gets query for [[ProjectClientLinks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProjectClientLinks()
    {
        return $this->hasMany(ProjectClientLink::className(), ['project_id' => 'id']);
    }

    /**
     * Gets query for [[Clients]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getClients()
    {
        return $this->hasMany(Client::className(), ['id' => 'client_id'])->viaTable('project_client_link', ['project_id' => 'id']);
    }

    /**
     * Gets query for [[ProjectTasks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProjectTasks()
    {
        return $this->hasMany(ProjectTask::className(), ['project_id' => 'id']);
    }

    /**
     * Gets query for [[ProjectTeams]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProjectTeams()
    {
        return $this->hasMany(ProjectTeam::className(), ['project_id' => 'id']);
    }

    /**
     * Gets query for [[Users]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(User::className(), ['id' => 'user_id'])->viaTable('project_team', ['project_id' => 'id']);
    }
}
