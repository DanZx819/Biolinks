<x-layout.app>
    <x-container>
        <x-card title="Profile">

            <x-form :route="route('profile.update')" put id="form" enctype="multipart/form-data">

                <div class="flex gap-2 items-center">
                    <div class="avatar">
                        <div class="w-24 rounded-xl">
                            <img src="/storage/{{ $user->photo }}" alt="Profile Picture">
                        </div>
                    </div>

                    <x-file-input name="photo"/>

                    
                </div>

                

                <x-input name="name" placeholder="Name" value="{{ old('name', $user->name)}}"/>

                <x-textarea name="description" :value="old('description', $user->description)" />

                
                <x-input name="handler" prefix="biolinks.com.br/" placeholder="Handler" value="{{ old('handler', $user->handler)}}"/>
                
            </x-form>

            <x-slot:actions>

                <x-a :href="route('dashboard')">Cancel</x-a>
                <x-button type="submit" form="form">Edit Profile</x-button>


            </x-slot:actions>
        </x-card>

    </x-container>
    
</x-layout.app>
