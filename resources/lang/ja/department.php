<?php

return [
    'labels' => [
        'title' => '組織',
        'description' => '異なるグループのユーザーを区別する',
        'User' => 'ユーザー',
        'Department' => '部門',
        'Role' => '役割',
        'Permission' => '権限',
        'departments' => '部門',
        'Import' => 'インポート',
        'File Help' => 'インポートはxlsx、csvファイルをサポートしています。必須カラムは【名称】で、オプションのカラムには【説明、親部門】が含まれます。',
        'Rewrite' => '上書き',
        'Merge' => 'マージ',
        'File' => 'ファイル',
        'LDAP' => 'LDAP',
    ],
    'fields' => [
        'name' => '名称',
        'description' => '説明',
        'parent' => [
            'name' => '親部門',
        ],
        'mode' => 'モード',
        'file' => 'ファイル',
        'parent_id' => '親部門',
        'role_id' => '部門マネージャー'
    ],
    'options' => [
    ],
];
