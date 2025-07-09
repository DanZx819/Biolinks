<x-layout.app>
    <x-container>
        <x-card title="Create a new Link">

            <x-form :route="route('links.store')" post id="create-form">

                <x-input name="link" placeholder="Link" value="{{ old('link')}}"/>

                <x-input name="name" placeholder="Name" value="{{ old('name')}}"/>

            </x-form>

            <x-slot:actions>

                <x-a :href="route('dashboard')">Cancel</x-a>
                <x-button type="submit" form="create-form" primary>Create a new Link</x-button>


            </x-slot:actions>
        </x-card>

    </x-container>
    
</x-layout.app>
