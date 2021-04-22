<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class SearchDropdown extends Component
{
    public $search;
    public $sortField;
    public $sortAsc = true;
    
    use WithPagination;
    
        public function sortBy($field)
        {
            if ($this->sortField == $field) {
                $this->sortAsc = !$this->sortAsc;
            } else {
                $this->sortAsc = true;
            }
    
            $this->sortField = $field;
        }

    public function updatingSearch()
    {
        $this->resetPage();
    }


    public function render()
    {
        // dd($this->users);
        return view('livewire.search-dropdown', [
            'users' => User::where(function($query){
                $query->where('name', 'like', '%' . $this->search . '%')
                ->orWhere('email', 'like', '%' . $this->search . '%');
            })
            ->when($this->sortField , function($query){
               $query->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc');
            })
            ->paginate(5),
        ]);
    }
}
