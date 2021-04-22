<div>
    <span>email verificata</span>
    <input type="checkbox" wire:model='verify' name="" id="verify" aria-describedby="helpId" placeholder="">
    <table style="width:100%">
        <tr>
          <th>id</th>
          <th>Nome</th>
          <th>Email</th>
          <th>Verify</th>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->verify}}</td>
        </tr>
        @endforeach
        
    </table>
    <div>
        {{$users->links()}}
    </div>
</div>
