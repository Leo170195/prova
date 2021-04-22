<div>
    <div>
        <input class="border border-dark" type="text" wire:model="search" />
    </div>
    <div>
        <table style="width:100%">
            <tr>
              <th><button wire:click="sortBy('id')" class="btn btn-success">id</button></th>
              <th><button wire:click="sortBy('name')" class="btn btn-dark">Nome</button></th>
              <th><button wire:click="sortBy('email')" class="btn btn-primary">Email</button></th>
            </tr>
            @foreach ($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
            </tr>
            @endforeach
            
        </table>
        <div>
            {{$users->links()}}
        </div>
    </div>
</div>


