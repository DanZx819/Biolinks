<x-layout.app>
    <x-container>
        
        <div class="text-center space-y-4">

            <x-img src="/storage/{{ $user->photo }}" alt="Profile Picture"/>
            <div class="font-bold text-2xl tracking-wider">{{$user->name}}</div>
            <div class="text-sm italic opacity-80">{{$user->description}}</div>

            <ul class="space-y-3">
                @foreach ($links as $link)
                    <li>

                        <x-button href="{{ route('links.edit', $link) }}" block outline info>
                            {{ $link->name }}
                        </x-button>
                    </li>
                @endforeach
            </ul>
        </div>

    </x-container>
    
</x-layout.app>
