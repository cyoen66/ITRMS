<?php
return [
    'labels' => [
        'title' => '資産障害',
        'description' => '装置、部品などの障害報告',
        'records' => '資産障害',
        'Status Waiting' => '処理待ち',
        'Status Done' => '完了',
        'Status Cancelled' => 'キャンセル',
        'Update' => '障害処理',
    ],
    'fields' => [
        'asset_number' => '資産番号',
        'ng_description' => '障害説明',
        'ok_description' => '修理説明',
        'ng_time' => '障害発生日時',
        'ok_time' => '修理日時',
        'status' => '状態',
    ],
    'options' => [
    ],
];
