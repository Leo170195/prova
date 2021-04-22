<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Paginate extends Component
{
    use WithPagination;
    
    public $verify = true; 

    public function render()
    {
        return view('livewire.paginate', [
            'users' => User::where('verify', $this->verify)->paginate(3),
        ]);
    }
}
