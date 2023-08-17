<?php

return [
    'labels' => [
        'title' => 'サービス',
        'description' => '主なデータリスト',
        'records' => 'サービス',
        'Status Help' => 'このオプションを選択すると、サービスが一時停止します。',
        'Issue Create' => '異常を報告する',
        'Delete' => 'サービスを削除する',
        'Record None' => 'このサービスの記録はありません！',
        'Delete Confirm' => '削除してもよろしいですか？',
        'Delete Confirm Description' => '削除すると、関連するすべての関係が解除されます。',
        'Batch Delete' => '複数のサービスを削除する',
        'Batch Delete Confirm' => '選択したサービスを削除してもよろしいですか？',
        'Batch Force Delete' => '複数のサービスを強制削除する（復元不可）',
        'Batch Force Delete Confirm' => '選択したサービスを強制的に削除してもよろしいですか？（この操作は元に戻せません）',
        'Track Create Update' => 'デバイスに関連付ける',
        'Deleted' => '削除済み',
        'Track Delete' => '関連付けの解除',
        'Track Delete Confirm' => 'このユーザーとの関連付けを解除してもよろしいですか？'
    ],
    'fields' => [
        'name' => '名称',
        'description' => '説明',
        'status' => '状態',
        'device' => [
            'asset_number' => '関連するデバイス',
        ],
        'price' => '価格',
        'purchased' => '購入日',
        'expired' => '保証期限',
        'device_id' => 'デバイス',
        'issue' => '異常',
        'start' => '開始時刻',
    ],
    'options' => [
    ],
];

