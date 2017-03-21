<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "todolist".
 *
 * @property string $id
 * @property string $uid
 * @property string $title
 * @property string $description
 * @property integer $created
 * @property integer $updated
 * @property integer $due_on
 * @property string $comment
 * @property integer $status
 */
class Todolist extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'todolist';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uid', 'description', 'created', 'updated', 'due_on', 'comment'], 'required'],
            [['uid', 'created', 'updated', 'due_on', 'status'], 'integer'],
            [['description', 'comment'], 'string'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'uid' => 'Uid',
            'title' => 'Title',
            'description' => 'Description',
            'created' => 'Created',
            'updated' => 'Updated',
            'due_on' => 'Due On',
            'comment' => 'Comment',
            'status' => 'Status',
        ];
    }
}
