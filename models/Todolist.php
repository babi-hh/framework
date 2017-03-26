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

    // 完成
    const DONE = 1;
    // 等待
    const PENDING = 2;
    // 过期
    const EXPIRE = 3;
    // 作废
    const VIODED = 4;

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
            'title' => '标题',
            'description' => '摘要',
            'created' => '创建时间',
            'updated' => '更新时间',
            'due_on' => '到期日期',
            'comment' => '备注',
            'status' => '状态',
        ];
    }
}
