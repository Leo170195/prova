<div class="border border-dark" wire:ignore x-data x-init="
    new Taggle($el, {
        tags: {{$tags}},
        onTagAdd: function(e, tag) {
            Livewire.emit('tagAdd', tag)
        },
        onTagRemove: function(e, tag) {
            Livewire.emit('tagRemove', tag)
        }
    })
    Livewire.on('message', tag =>{
        alert('tag aggiunto')
    })
">
</div>