<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "project_task".
 *
 * @property int $id
 * @property string $name
 * @property int|null $user_id
 * @property int $project_id
 * @property int|null $type
 * @property string|null $description
 * @property int $priority 0:Low,  1:Normal,  2:High,  3:Immediate,  4:Just Now
 * @property string|null $start_date
 * @property string|null $end_date
 * @property int $status 0:Open,  1:In Progress,  2:In Review,  3:Closed
 * @property string $created_at
 * @property string $updated_at
 * @property int $created_by
 * @property int $updated_by
 *
 * @property ProjectNote[] $projectNotes
 * @property Project $project
 * @property User $user
 */
class ProjectTask extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'project_task';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'project_id', 'created_by', 'updated_by'], 'required'],
            [['user_id', 'project_id', 'type', 'priority', 'status', 'created_by', 'updated_by'], 'integer'],
            [['description'], 'string'],
            [['start_date', 'end_date', 'created_at', 'updated_at'], 'safe'],
            [['name'], 'string', 'max' => 255],
            [['project_id'], 'exist', 'skipOnError' => true, 'targetClass' => Project::className(), 'targetAttribute' => ['project_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
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
            'user_id' => Yii::t('app', 'User ID'),
            'project_id' => Yii::t('app', 'Project ID'),
            'type' => Yii::t('app', 'Type'),
            'description' => Yii::t('app', 'Description'),
            'priority' => Yii::t('app', '0:Low, 
1:Normal, 
2:High, 
3:Immediate, 
4:Just Now'),
            'start_date' => Yii::t('app', 'Start Date'),
            'end_date' => Yii::t('app', 'End Date'),
            'status' => Yii::t('app', '0:Open, 
1:In Progress, 
2:In Review, 
3:Closed'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'created_by' => Yii::t('app', 'Created By'),
            'updated_by' => Yii::t('app', 'Updated By'),
        ];
    }

    /**
     * Gets query for [[ProjectNotes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProjectNotes()
    {
        return $this->hasMany(ProjectNote::className(), ['project_task_id' => 'id']);
    }

    /**
     * Gets query for [[Project]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProject()
    {
        return $this->hasOne(Project::className(), ['id' => 'project_id']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
