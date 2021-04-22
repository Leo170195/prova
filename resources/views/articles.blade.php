<x-layout>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Surname</th>
                    <th>description</th>
                    <th>Image</th>
                    <th>modifica</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($articles as $article)
                    <tr>
                        <td>{{ $article->id }}</td>
                        <td>{{ $article->name }}</td>
                        <td>{{ $article->surname }}</td>
                        <td>{{ $article->description }}</td>
                        {{-- @if ($article->img) --}}
                        <td><div style="background-image: url('{{Storage::url($article->img)}}'); height: 60px; width: 80px; background-size: cover" ></div></td>
                        {{-- @else
                        <td>NULL</td>
                        @endif --}}
                        <td><a href="{{route('article', ['article' => $article->id])}}" class="btn btn-success">Mostra singolo</a></td>
                    </tr>
                @endforeach
            
            </tbody>
        </table>
    </div>
</x-layout>