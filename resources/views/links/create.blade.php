<div>
    <div>
    <h1>
        Criar um Link
    </h1>
    

    @if ($message = session()->get('message'))
        <div>
            {{ $message }}
        </div>
    @endif


    <form action="{{route('links.store')}}" method="post">
        
        @csrf
        <input type="hidden" name="sort" value="0">
         <div>
            <input name="name" placeholder="Name" />
            @error('name')
                <span>{{$message}}</span>
            @enderror
        </div>

        <br>
        
        <div>
            <input name="link" placeholder="Seu link" />
            @error('link')
                <span>{{$message}}</span>
            @enderror
        </div>
        
        <br>
    
        
        <button>Registrar</button>
        
    </form>
    <a href="{{ route('dashboard') }}">Voltar</a>
</div>
</div>
