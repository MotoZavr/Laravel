<?php

namespace App\Admin\Widgets;

use Arrilot\Widgets\AbstractWidget;

class CategoriesWidget extends AbstractWidget
{
    public function run()
    {

        $count = \App\Models\Category::count();
        $string = 'Categories';

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-bag',
            'title'  => "{$count} {$string}",
            'text'   => __('voyager::dimmer.page_text', ['count' => $count, 'string' => $string]),
            'button' => [
                'text' => __('voyager::dimmer.page_link_text'),
                'link' => route('voyager.categories.index'),
            ],
            'image' => voyager_asset('images/widget-backgrounds/02.jpg'),
        ]));
    }
    public function shouldBeDisplayed()
    {
        return true;
    }
}
