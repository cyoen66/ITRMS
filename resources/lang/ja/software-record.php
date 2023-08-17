<?php

return [
    'labels' => [
        'title' => 'ソフトウェア',
        'description' => '主要データリスト',
        'records' => 'ソフトウェア',
        'Manage Track' => 'トラッキングの管理',
        'Export To Excel' => 'Excel へエクスポート',
        'Counts Help' => '"-1"は無制限を示します。',
        'Batch Delete' => '複数のソフトウェアを一括削除',
        'Batch Delete Confirm' => '選択したソフトウェアを削除してもよろしいですか？',
        'Batch Force Delete' => '複数のソフトウェアを強制的に削除（元に戻せません）',
        'Batch Force Delete Confirm' => '選択したソフトウェアを強制的に削除してもよろしいですか？（この操作は元に戻せません）',
        'Delete' => 'ソフトウェアの削除',
        'Delete Confirm' => '削除してもよろしいですか？',
        'Delete Confirm Description' => '削除すると、関連するすべてのトラッキングが解除されます',
        'Track Create Update' => 'デバイスへのトラッキングの追加と更新',
        'Import' => 'ソフトウェアのインポート',
        'File Help' => 'xlsx、csvファイルのインポートがサポートされています。必要な列ヘッダーは【資産番号、名称、カテゴリ、ベンダー、バージョン】です。資産管理システムからのExcelファイルの直接インポートもサポートされています。',
        'Deleted' => '削除済み'
    ],
    'fields' => [
        'asset_number_qrcode' => 'QRコード',
        'name' => '名称',
        'description' => '説明',
        'category' => [
            'name' => 'カテゴリ',
        ],
        'version' => 'バージョン',
        'vendor' => [
            'name' => 'ベンダー',
        ],
        'price' => '価格',
        'purchased' => '購入日',
        'expired' => '保証期限',
        'distribution' => '配布方法',
        'counts' => 'ライセンス数',
        'left_counts' => '残りライセンス数',
        'device' => [
            'asset_number' => '所属デバイス',
            'user' => [
                'name' => 'ユーザー',
            ],
        ],
        'asset_number' => '資産番号',
        'expiration_left_days' => '残り保証期間',
        'category_id' => 'カテゴリ',
        'vendor_id' => 'ベンダー',
        'depreciation_id' => '減価償却ルール',
        'file' => 'ファイル',
    ],
    'options' => [
    ],
];
