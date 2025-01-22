<?php

namespace App\Livewire;

use Livewire\Component;
use function Livewire\Volt\layout;

class AdminDashboard extends Component
{
    public function render()
    {
        return view('livewire.admin-dashboard')->layout('admin-layout');
    }
}
