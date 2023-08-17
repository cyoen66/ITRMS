<?php

return [
    'labels' => [
        'title' => 'デバイス',
        'description' => 'ソートとカスタム操作',
        'columns' => 'フィールド',
        'Name Help' => 'フィールド名。互換性を確保するため、できるだけ英語を使用してください。',
        'Nick Name Help' => 'このフィールドの名前を説明するもので、名前は任意です。',
        'Must Help' => '注意：日付および日付時刻のタイプは常に必須ではありません。',
        'Delete' => 'フィールドの削除',
        'Update' => 'フィールドの編集',
        'Delete Confirm' => '削除を確認しますか？',
        'Delete Confirm Description' => '削除すると、このフィールドのすべてのユーザーデータが削除され、元に戻すことはできません。',
        'Custom Column Sort Delete' => 'カスタム列のデフォルトソートに戻す',
        'Custom Column Delete Confirm' => 'デフォルトのソートに戻しますか？'
    ],
    'fields' => [
        'qrcode' => 'QRコード',
        'name' => '名称',
        'description' => '説明',
        'mac' => 'MACアドレス',
        'ip' => 'IPアドレス',
        'photo' => '写真',
        'price' => '価格',
        'purchased' => '購入日',
        'expired' => '保証期限',
        'asset_number' => '資産番号',
        'category' => [
            'name' => 'カテゴリ',
        ],
        'vendor' => [
            'name' => 'ベンダー',
        ],
        'user' => [
            'name' => 'ユーザー',
            'department' => [
                'name' => '部門',
            ],
        ],
        'expiration_left_days' => '残り保証期間（日）',
        'depreciation' => [
            'name' => '償却ルール',
        ],
        'nick_name' => 'フィールド別名',
        'must' => '必須',
        'table_name' => 'テーブル名',
        'custom_column_id' => 'カスタムフィールド',
        'select_options' => '選択肢リスト',
        'item' => '項目',
    ],
    'options' => [
    ],
];
