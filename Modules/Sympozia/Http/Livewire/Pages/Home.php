<?php

namespace Modules\Sympozia\Http\Livewire\Pages;

use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return view('sympozia::livewire.pages.home')
            ->extends(config('sympozia.extends.frontend'), ['header' => 'Dashboard']);
    }
}