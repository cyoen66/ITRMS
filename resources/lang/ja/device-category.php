<?php

return [
    'labels' => [
        'title' => 'デバイス',
        'description' => '多階層ツリー構造をサポート',
        'categories' => 'デバイスカテゴリ',
        'Import' => 'インポート',
        'File Help' => 'インポートはxlsx、csvファイルに対応しています。また、ヘッダーは【名称、説明】とする必要があります。',
    ],
    'fields' => [
        'name' => '名称',
        'description' => '説明',
        'parent_id' => '親カテゴリ',
        'depreciation_rule_id' => '償却ルール',
        'file' => 'ファイル',
    ],
    'options' => [
    ],
];
