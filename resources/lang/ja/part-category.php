<?php
return [
    'labels' => [
        'title' => 'アクセサリー',
        'description' => '多階層ツリー構造をサポート',
        'categories' => 'アクセサリーカテゴリ',
        'Import' => 'インポート',
        'File Help' => 'インポートはxlsx、csvファイルに対応しており、テーブルヘッダーは【名称、説明】を使用する必要があります。',
    ],
    'fields' => [
        'name' => '名称',
        'description' => '説明',
        'parent_id' => '親カテゴリ',
        'depreciation_rule_id' => '減価償却ルール',
        'file' => 'ファイル',
    ],
    'options' => [
    ],
];
