<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Banner extends Component
{
    public $open;

    public function mount()
    {
        $this->open = session('show-banner', true);
    }

    public function hide()
    {
        session(['show-banner' => false]);
        $this->open = false;
    }

    public function render()
    {
        return view('livewire.banner');
    }
}
