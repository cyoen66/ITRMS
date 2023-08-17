<?php
return [
    'labels' => [
        'title' => 'アクセサリー',
        'description' => 'メインデータリスト',
        'records' => 'アクセサリー',
        'Category' => 'カテゴリー',
        'Vendor' => 'ベンダー',
        'Depreciation Rule' => '減価償却ルール',
        'Batch Delete' => 'アクセサリーを一括削除',
        'Batch Delete Confirm' => '選択したアクセサリーを削除してもよろしいですか？',
        'Batch Force Delete' => 'アクセサリーを一括強制削除（元に戻せません）',
        'Batch Force Delete Confirm' => '選択したアクセサリーを強制的に削除してもよろしいですか？（この操作は元に戻せません）',
        'Delete' => 'アクセサリーを削除',
        'Delete Confirm' => '削除してもよろしいですか？',
        'Delete Confirm Description' => '削除すると、すべての関連付けられた所属関係が解除されます',
        'Track Create Update' => 'デバイスに所属',
        'Import' => 'アクセサリーをインポート',
        'Maintenance Create' => '故障を報告',
        'File Help' => 'インポートはxlsx、csvファイルをサポートし、必須の列【資産番号、カテゴリー、仕様、ベンダー】が必要です。資産管理システムからのExcelファイルエクスポートもサポートされています。',
        'Deleted' => '削除済み',
        'Track Delete' => '所属を解除',
        'Track Delete Confirm' => 'このユーザーとの関連付けを解除してもよろしいですか？'
    ],
    'fields' => [
        'asset_number_qrcode' => 'QRコード',
        'name' => '名前',
        'description' => '説明',
        'category' => [
            'name' => 'カテゴリー',
        ],
        'vendor' => [
            'name' => 'ベンダー',
        ],
        'device' => [
            'asset_number' => '所属デバイス',
        ],
        'specification' => '仕様',
        'price' => '価格',
        'sn' => 'アクセサリーシリアル番号',
        'purchased' => '購入日',
        'expired' => '保証終了日',
        'depreciation' => [
            'name' => '減価償却ルール',
            'termination' => '廃棄日',
        ],
        'asset_number' => '資産番号',
        'expiration_left_days' => '残り保証期間',
        'depreciation_price' => '減価償却後の価格',
        'category_id' => 'カテゴリー',
        'vendor_id' => 'ベンダー',
        'depreciation_id' => '減価償却ルール',
        'device_id' => 'デバイス',
        'ng_description' => '故障の説明',
        'ng_time' => '故障発生日',
        'file' => 'ファイル',
    ],
];
