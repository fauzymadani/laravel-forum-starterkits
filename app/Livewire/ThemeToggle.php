<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ThemeToggle extends Component
{
    public $isDark;

    public function mount()
    {
        $this->isDark = session('theme', 'light') === 'dark';
    }

    public function toggleTheme()
    {
        $this->isDark = !$this->isDark;
        session(['theme' => $this->isDark ? 'dark' : 'light']);
    }

    public function render()
    {
        return view('livewire.theme-toggle');
    }
}

