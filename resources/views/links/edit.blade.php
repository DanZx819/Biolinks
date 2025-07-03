<div>
    <div>
    <h1>
        Editar um Link :: {{ $link->name }}
    </h1>
    

    @if ($message = session()->get('message'))
        <div>
            {{ $message }}
        </div>
    @endif


    <form action="{{route('links.edit', $link)}}" method="post">
        
        @csrf
        @method('put')
         <div>
            <input name="name" placeholder="Name" value="{{ old('name', $link->name )}}"/>
            @error('name')
                <span>{{$message}}</span>
            @enderror
        </div>

        <br>
        
        <div>
            <input name="link" placeholder="Seu link" value="{{ old('link', $link->link) }}"/>
            @error('link')
                <span>{{$message}}</span>
            @enderror
        </div>
        
        <br>
    
        
        <button>Salvar</button>
        
    </form>

    <a href="{{ route('dashboard') }}">Voltar</a>
</div>
</div>
