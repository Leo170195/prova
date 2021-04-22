<?php

namespace App\Http\Livewire;

use App\Models\Tag;
use Livewire\Component;

class TagsComponent extends Component
{
    public $tags;

    protected $listeners = ['tagAdd', 'tagRemove'];

    public function mount(){
        $allTag = Tag::all();
        $this->tags = json_encode($allTag->pluck("name"));
    }


    public function tagAdd($tag){
        Tag::create(['name' => $tag]);
        $this->emit('message', $tag);
    }

    public function tagRemove($tag){
        Tag::where('name' , $tag)->first()->delete();
    }

    public function render()
    {
        return view('livewire.tags-component');
    }
}
