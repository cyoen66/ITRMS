<?php

return [
    'labels' => [
        'title' => '承認プロセス',
        'description' => 'プロセスエンジンの定義',
        'records' => '承認プロセス',
        'Update' => '審査'
    ],
    'fields' => [
        'name' => '名前',
        'description' => '説明',
        'role' => [
            'name' => '審査ロール'
        ],
        'approval' => [
            'name' => '承認'
        ],
        'item' => 'アイテム',
        'item_id' => 'アイテムID',
        'approval_id' => '承認',
        'role_id' => '審査ロール',
        'order_id' => 'プロセス名'
    ],
];
