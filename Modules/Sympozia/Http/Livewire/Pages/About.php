<?php

namespace Modules\Sympozia\Http\Livewire\Pages;

use Livewire\Component;

class About extends Component
{
    public function render()
    {
        return view('sympozia::livewire.pages.about')->extends(config('sympozia.extends.frontend'), ['header' => 'About']);
    }
}