<x-layout.app>
    <x-container>
        
        <div class="absolute top-10 left-0 flex flex-col gap-4 ">
            <x-button ghost :href="route('profile')" >Update Profile</x-button>
            <x-button ghost :href="route('links.create')" >Create a new link</x-button>
            <x-button ghost :href="route('logout')" >Logout</x-button>
        </div>

        <div class="text-center space-y-3 w-2/3">

            <x-img src="/storage/{{ $user->photo }}" alt="Profile Picture"/>
            <div class="font-bold text-2xl tracking-wider">{{$user->name}}</div>
            <div class="text-sm italic opacity-80">{{$user->handler}}</div>
            <div class="text-sm italic opacity-80">{{$user->description}}</div>
            

            <ul class="space-y-2 text-center flex flex-col">
                @foreach ($links as $link)
                    <li class="flex items-center gap-2 justify-center">

                        @unless ($loop->last)
                            <x-form :route="route('links.down', $link)" patch class="mb-0">
                                <x-button outline ghost>

                                        <x-icon class="w-6 h-6" down/>
                                </x-button>
                            </x-form>

                            @else
                                <x-button disabled ghost><x-icon class="w-6 h-6" down/></x-button>
                        @endunless
                        
                        @unless ($loop->first)
                            <x-form :route="route('links.up', $link)" patch class="mb-0">
                                <x-button outline ghost>

                                        <x-icon class="w-6 h-6" up/>
                                </x-button>
                            </x-form>
                             @else
                                <x-button disabled ghost><x-icon class="w-6 h-6" up/></x-button>
                        @endunless

                        <x-button href="{{ route('links.edit', $link) }}" block outline info>
                            {{ $link->name }}
                        </x-button>
                       
                        <x-form :route="route('links.destroy', $link)" delete class="mb-0" >
                            

                            

                            <x-button ghost outline >
                                <x-icon class="w-6 h-6" trash/>
                            </x-button>
                        </x-form>

                    </li>
                @endforeach
            </ul>
        </div>

    </x-container>
    
</x-layout.app>
