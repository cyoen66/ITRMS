<?php

namespace App\Admin\Actions\Grid\RowAction;

use App\Services\DeviceService;
use Dcat\Admin\Actions\Response;
use Dcat\Admin\Grid\RowAction;

class DeviceRecordReDiscardAction extends RowAction
{
    public function __construct()
    {
        parent::__construct();
        $this->title = '<i class="fa fa-fw feather icon-rotate-ccw"></i> ' . admin_trans_label('ReDiscard');
    }

    /**
     * 处理动作逻辑.
     *
     * @return Response
     */
    public function handle(): Response
    {
        DeviceService::deviceReDiscard($this->getKey());

        return $this->response()
            ->success(trans('main.success'))
            ->refresh();
    }

    /**
     * 对话框.
     *
     * @return string[]
     */
    public function confirm(): array
    {
        return [admin_trans_label('ReDiscard Confirm'), admin_trans_label('ReDiscard Confirm Description')];
    }
}
