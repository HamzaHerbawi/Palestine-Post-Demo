<?php

namespace App\Widgets;

use App\Models\Invoice;
use Illuminate\Support\Facades\Auth;
use TCG\Voyager\Widgets\BaseDimmer;

class Invoices extends BaseDimmer
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $count = Invoice::count();
        $string = trans_choice('Invoice', $count);

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-file-text',
            'title'  => "{$count} {$string}",
            'text'   => 'Click on button below to view all invoices.',
            'button' => [
                'text' => 'View all invoices',
                'link' => route('voyager.invoices.index'),
            ],
           'image' => voyager_asset('images/widget-backgrounds/new/03.jpg'),
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return Auth::user()->can('browse', app(Invoice::class));
    }
}
