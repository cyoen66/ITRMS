<?php

return [
    'labels' => [
        'title' => '消耗品',
        'description' => 'メインデータリスト',
        'records' => '消耗品',
        'In' => '入庫',
        'Out' => '引取り',
        'Deleted' => '削除済み',
        'Batch Delete' => '消耗品を一括削除',
        'Batch Delete Confirm' => '選択した消耗品を削除してもよろしいですか？',
        'Batch Force Delete' => '消耗品を一括強制削除（復元不可）',
        'Batch Force Delete Confirm' => '選択した消耗品を強制削除してもよろしいですか？（この操作は元に戻せません）',
        'Delete' => '消耗品の削除',
        'Import' => '消耗品をインポート',
        'Delete Confirm' => '削除を確認',
        'Delete Confirm Description' => '削除すると、関連するすべての履歴記録も削除されます',
        'File Help' => 'インポートはxlsx、csvファイルに対応しており、ヘッダーには【名称、規格、分類、ベンダー】の情報が必要です。また、資産管理システムからエクスポートされたExcelファイルを直接インポートできます。',
    ],
    'fields' => [
        'name' => '名前',
        'description' => '説明',
        'specification' => '規格',
        'category' => [
            'name' => '分類',
        ],
        'vendor' => [
            'name' => 'ベンダー',
        ],
        'price' => '価格',
        'user_id' => 'ユーザー（引取人）',
        'purchased' => '購入日',
        'expired' => '保証期限',
        'category_id' => '分類',
        'vendor_id' => 'ベンダー',
        'file' => 'ファイル',
        'consumable_id' => '消耗品',
        'track' => [
            'number' => '総数',
        ],
        'number' => '数量'
    ],
];
