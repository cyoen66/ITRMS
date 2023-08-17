<?php

return [
    'labels' => [
        'title' => '消耗品',
        'description' => '多階層ツリー構造をサポート',
        'categories' => '消耗品カテゴリ',
        'Import' => 'インポート',
        'File Help' => 'インポートはxlsxやcsvファイルに対応しています。テーブルのヘッダーは【名称、説明】を使用する必要があります。',
    ],
    'fields' => [
        'name' => '名前',
        'description' => '説明',
        'parent_id' => '親ノード',
        'order' => '並び順',
        'file' => 'ファイル',
    ],
    'options' => [
    ],
];
