<?php

namespace App\Actions;

use TCG\Voyager\Actions\AbstractAction;

class SmsAction extends AbstractAction
{
    public function getTitle()
    {
        return 'Notification';
    }

    public function getIcon()
    {
        return 'voyager-paper-plane';
    }

    public function getPolicy()
    {
        return 'read';
    }

    public function getAttributes()
    {
        return [
            'class' => 'btn btn-sm btn-warning pull-right',
        ];
    }

    public function getDefaultRoute()
    {
        return route('sms', ['id' => $this->data->id]);
    }
    public function shouldActionDisplayOnDataType()
    {
        return $this->dataType->slug == 'boxes';
    }
}
