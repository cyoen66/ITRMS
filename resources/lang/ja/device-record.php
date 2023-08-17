<?php

return [
    'labels' => [
        'title' => 'デバイス',
        'description' => '一覧リスト',
        'records' => 'デバイス',
        'Depreciation Price' => '折旧价格',
        'Current User' => '当前使用者',
        'Photo Help' => '可以选择提供一张设备的照片作为概览。',
        'Security Password Help' => '安全密码，可以代表BIOS密码等。',
        'Admin Password Help' => '管理员密码，可以代表计算机管理员账户密码以及打印机管理员密码等。',
        'Depreciation Rule Help' => '设备折旧规所指定的折旧规则。',
        'Batch Delete' => '批量删除设备',
        'Batch Force Delete' => '批量强制删除设备（不可恢复）',
        'Batch Force Delete Confirm' => '您确定要强制删除选中的设备吗？（此操作不可逆）',
        'Batch Delete Confirm' => '您确定要删除选中的设备吗？',
        'Batch Discard' => '批量报废设备',
        'Batch Discard Confirm' => '您确定要报废选中的设备吗？',
        'Delete' => '删除设备',
        'ReDelete' => '撤销删除',
        'Delete Confirm' => '确认删除设备',
        'ReDelete Confirm' => '确认恢复设备',
        'Delete Confirm Description' => '删除设备将会同时删除所有与之关联的信息',
        'ReDelete Confirm Description' => '恢复设备不会恢复之前所有与之关联的信息',
        'Discard' => '报废设备',
        'ReDiscard' => '撤销报废',
        'Discard Confirm' => '确认报废设备',
        'Discard Confirm Description' => '确认报废这个设备？',
        'ReDiscard Confirm' => '确定恢复报废设备？',
        'ReDiscard Confirm Description' => '设备撤销报废不会恢复之前所有与之关联的信息',
        'Track Create Update' => '分配用户',
        'Update Delete' => '归还设备',
        'Batch Track Create Update' => '批量分配用户',
        'Maintenance Create' => '报告故障',
        'Import' => '导入设备',
        'Export To Excel' => '导出到Excel',
        'NG Description' => '故障描述',
        'Lend Track Create' => '借用设备',
        'File Help' => '导入支持xlsx、csv文件，且表格头必填栏位【资产编号、分类、厂商】，支持咖啡壶导出的Excel文件直接导入。',
        'Deleted' => '回收站',
        'Track Delete' => '解除归属',
        'Track Delete Confirm' => '确认解除与此用户的关联？',
        'No User' => '闲置',
        'Tag Print' => 'ラベル印刷',
        'Tag Print Mode' => '标签打印模式',
        'Tag Print List' => '印刷リスト'
    ],
    'fields' => [
        'asset_number_qrcode' => 'QRコード',
        'description' => '備考',
        'category' => [
            'name' => '分類',
        ],
        'vendor' => [
            'name' => 'メーカー',
        ],
        'mac' => 'MAC',
        'ip' => 'IP',
        'photo' => '写真',
        'admin_user' => [
            'name' => '使用者',
            'department' => [
                'name' => '使用部門',
            ],
            'department_id' => '部门',
        ],
        'price' => '价格',
        'purchased' => '购入日期',
        'expired' => '过保日期',
        'part' => [
            'category' => [
                'name' => '分类',
            ],
            'asset_number' => '名称',
            'specification' => '规格',
            'sn' => '序列号',
            'vendor' => [
                'name' => '厂商',
            ],
        ],
        'software' => [
            'category' => [
                'name' => '分类',
            ],
            'name' => '名称',
            'version' => '版本',
            'distribution' => '发行方式',
            'vendor' => [
                'name' => '厂商',
            ],
        ],
        'service' => [
            'name' => '名称',
        ],
        'depreciation' => [
            'name' => '折旧规则',
            'termination' => '报废日期',
        ],
        'asset_number' => '資産ID',
        'category_id' => 'カテゴリ',
        'vendor_id' => 'メーカー',
        'depreciation_id' => '折旧规则',
        'ng_description' => '故障说明',
        'ng_time' => '故障发生时间',
        'user_same' => '用户已存在',
        'user_id' => '使用者',
        'expiration_left_days' => '残り保証期間',
        'depreciation_price' => '折旧后价格',
        'file' => 'ファイル',
        'depreciation_rule_id' => '折旧规则',
        'device_status' => 'ステータス',
        'no_user' => '未使用'
    ],
    'options' => [
    ],
];
