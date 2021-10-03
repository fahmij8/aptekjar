<?php

namespace Modules\Sympozia\Http\Livewire\Pages;

use Livewire\Component;

class Schedule extends Component
{
    public function render()
    {
        return view('sympozia::livewire.pages.schedule')
            ->extends(config('sympozia.extends.frontend'), ['header' => 'Schedule']);
    }
}