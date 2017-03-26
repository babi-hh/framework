<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "node".
 *
 * @property string $nid
 * @property string $type
 * @property string $title
 * @property string $body
 * @property string $uid
 * @property integer $status
 * @property string $comment
 * @property string $created
 * @property string $updated
 */
class Node extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'node';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type', 'body', 'uid', 'status', 'created', 'updated'], 'required'],
            [['body'], 'string'],
            [['uid', 'status', 'comment', 'created', 'updated'], 'integer'],
            [['type'], 'string', 'max' => 32],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nid' => 'Nid',
            'type' => 'Type',
            'title' => 'Title',
            'body' => 'Body',
            'uid' => 'Uid',
            'status' => 'Status',
            'comment' => 'Comment',
            'created' => 'Created',
            'updated' => 'Updated',
        ];
    }
}
