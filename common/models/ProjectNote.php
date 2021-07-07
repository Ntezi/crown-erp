<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "project_note".
 *
 * @property int $id
 * @property int $project_task_id
 * @property string|null $description
 * @property int $status
 * @property string $created_at
 * @property string $updated_at
 * @property int $created_by
 * @property int $updated_by
 *
 * @property ProjectTask $projectTask
 */
class ProjectNote extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'project_note';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['project_task_id', 'status', 'created_by', 'updated_by'], 'required'],
            [['project_task_id', 'status', 'created_by', 'updated_by'], 'integer'],
            [['description'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['project_task_id'], 'exist', 'skipOnError' => true, 'targetClass' => ProjectTask::className(), 'targetAttribute' => ['project_task_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'project_task_id' => Yii::t('app', 'Project Task ID'),
            'description' => Yii::t('app', 'Description'),
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'created_by' => Yii::t('app', 'Created By'),
            'updated_by' => Yii::t('app', 'Updated By'),
        ];
    }

    /**
     * Gets query for [[ProjectTask]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProjectTask()
    {
        return $this->hasOne(ProjectTask::className(), ['id' => 'project_task_id']);
    }
}
