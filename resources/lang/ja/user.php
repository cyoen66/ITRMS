<?php

return [
    'labels' => [
        'title' => '組織',
        'description' => 'アカウントであり組織メンバーでもある',
        'users' => 'ユーザー',
        'User' => 'ユーザー',
        'Department' => '部署',
        'Role' => '役割',
        'Permission' => '権限',
        'Batch Delete' => 'ユーザー一括削除',
        'Batch Delete Confirm' => '選択したユーザーを削除してもよろしいですか？',
        'Batch Force Delete' => 'ユーザー一括強制削除（復元不可）',
        'Batch Force Delete Confirm' => '選択したユーザーを強制削除してもよろしいですか？（この操作は元に戻せません）',
        'Delete' => 'ユーザーの削除',
        'Delete Confirm' => '削除してもよろしいですか？',
        'Delete Confirm Description' => '削除されると、関連するすべての関係が解除されます',
        'Import' => '人員情報テンプレートのインポート',
        'File Help' => 'インポートはxlsx、csvファイルに対応しています。必須カラムは【ユーザー名、氏名、性別】です。アセット管理システムからエクスポートされたExcelファイルも直接インポートできます。パスワードが指定されていない場合、パスワードはユーザー名と同じになります。',
        'Rewrite' => '上書き',
        'Merge' => '統合',
        'File' => 'ファイル',
        'LDAP' => 'LDAP',
        'Deleted' => '離職者'
    ],
    'fields' => [
        'name' => '氏名',
        'department' => [
            'name' => '部署',
        ],
        'gender' => '性別',
        'title' => '役職',
        'mobile' => '携帯電話',
        'email' => 'メール',
        'mode' => 'モード',
        'status' => 'アカウントステータス',
        'department_id' => '部署',
        'file' => 'ファイル',
    ],
    'options' => [
    ],
];
