<div>
    <h1>
        Dashboard
    </h1>

    <h2>User {{auth()->user()->name}} :: {{auth()->user()->id}}</h2>

    @if ($message = session()->get('message'))
        {{ $message }}
    @endif
    <a href="{{ route('profile')}}"> Atualizar Profile </a>

    <a href="{{ route('links.create')}}"> Criar </a>

    <ul>
        @foreach ($links as $link)
            <li style="display: flex">

                @unless ($loop->last)
                    
               
                <form action="{{ route('links.down', $link) }}" method="post">
                    @csrf
                    @method('PATCH')

                    <button>Baixo</button>
                </form>
                 @endunless

                 @if (!$loop->first)
                     
                <form action="{{ route('links.up', $link) }}" method="post" >
                    @csrf
                    @method('PATCH')

                    <button>Cima</button>
                </form>
                @endif
                <a href='{{ route('links.edit', $link) }}''>{{ $link->id }}     {{$link->name}}</a>
                <form action="{{ route('links.destroy', $link) }}" method="post" onsubmit="return confirm('Tem certeza ?')">
                    @csrf
                    @method('DELETE')

                    <button>Deletar</button>
                </form>
            </li>
        @endforeach
    </ul>
</div>
