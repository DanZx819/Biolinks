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
</div>
</div>
