<?php

namespace App\Widgets;

use App\Models\Box;
use Illuminate\Support\Facades\Auth;

use TCG\Voyager\Widgets\BaseDimmer;

class Boxes extends BaseDimmer
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
        $count = Box::count();
        $string = trans_choice('Box', $count);

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-categories',
            'title'  => "{$count} {$string}",
            'text'   => 'Click on button below to view all boxes.',
            'button' => [
                'text' => 'View all boxes',
                'link' => route('voyager.boxes.index'),
            ],
            'image' => voyager_asset('images/widget-backgrounds/new/01.jpg'),
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return Auth::user()->can('browse', app(Box::class));
    }

  
}
