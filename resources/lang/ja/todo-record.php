<?php

return [
    'labels' => [
        'title' => 'タスク',
        'description' => '軽量な TODO 機能',
        'records' => 'タスク',
        'User Id' => 'ユーザー',
        'Update' => 'タスクの処理',
        'Create' => 'タスクの作成',
        'Tag Help' => 'タグを自由に付けることができます。入力後にスペースキーを押して作成し、Enterキーで確定します。',
    ],
    'fields' => [
        'name' => '名称',
        'description' => '説明',
        'start' => '開始時間',
        'end' => '終了時間',
        'priority' => '優先度',
        'user' => [
            'name' => '担当者',
        ],
        'tags' => 'タグ',
        'done_description' => '完了の説明',
        'emoji' => '気分',
        'user_id' => '担当者'
    ],
    'options' => [
    ],
];

