<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "client".
 *
 * @property int $id
 * @property string $name
 * @property string|null $tin
 * @property string $phone_number
 * @property string|null $email_address
 * @property string|null $physical_address
 * @property int $status
 * @property string $created_at
 * @property string $updated_at
 * @property int $created_by
 * @property int $updated_by
 * @property string|null $description
 *
 * @property Contract[] $contracts
 * @property Invoice[] $invoices
 * @property Proforma[] $proformas
 * @property ProjectClientLink[] $projectClientLinks
 * @property Project[] $projects
 * @property UsedItem[] $usedItems
 */
class Client extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'client';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'phone_number', 'status', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'required'],
            [['status', 'created_by', 'updated_by'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['description'], 'string'],
            [['name', 'tin', 'phone_number', 'email_address', 'physical_address'], 'string', 'max' => 255],
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
            'tin' => Yii::t('app', 'Tin'),
            'phone_number' => Yii::t('app', 'Phone Number'),
            'email_address' => Yii::t('app', 'Email Address'),
            'physical_address' => Yii::t('app', 'Physical Address'),
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'created_by' => Yii::t('app', 'Created By'),
            'updated_by' => Yii::t('app', 'Updated By'),
            'description' => Yii::t('app', 'Description'),
        ];
    }

    /**
     * Gets query for [[Contracts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getContracts()
    {
        return $this->hasMany(Contract::className(), ['client_id' => 'id']);
    }

    /**
     * Gets query for [[Invoices]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInvoices()
    {
        return $this->hasMany(Invoice::className(), ['client_id' => 'id']);
    }

    /**
     * Gets query for [[Proformas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProformas()
    {
        return $this->hasMany(Proforma::className(), ['client_id' => 'id']);
    }

    /**
     * Gets query for [[ProjectClientLinks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProjectClientLinks()
    {
        return $this->hasMany(ProjectClientLink::className(), ['client_id' => 'id']);
    }

    /**
     * Gets query for [[Projects]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProjects()
    {
        return $this->hasMany(Project::className(), ['id' => 'project_id'])->viaTable('project_client_link', ['client_id' => 'id']);
    }

    /**
     * Gets query for [[UsedItems]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsedItems()
    {
        return $this->hasMany(UsedItem::className(), ['client_id' => 'id']);
    }
}
