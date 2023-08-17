<?php

return [
    'labels' => [
        'title' => 'デバイス',
        'description' => 'ユーザーとの使用関係',
        'tracks' => 'デバイスの所属履歴',
        'History Scope' => '履歴の所属履歴を表示',
        'Delete' => '所属の解除',
        'Track None' => 'このデバイスの所属記録が見つかりません！',
        'Delete Success' => 'デバイスの所属が正常に解除されました！',
        'Delete Confirm' => 'このユーザーとの関連を解除してもよろしいですか？',
        'Update Delete' => 'デバイスを返却',
    ],
    'fields' => [
        'device' => [
            'asset_number' => '資産番号',
            'name' => 'デバイス',
        ],
        'user' => [
            'name' => 'ユーザー',
        ],
        'lend_time' => '貸出日時',
        'lend_description' => '貸出の説明',
        'plan_return_time' => '返却予定日時',
        'return_time' => '返却日時',
        'return_description' => '返却の説明',
    ],
    'options' => [
    ],
];
