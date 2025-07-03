<div>
    
    <img src="{{ $user->photo }}" alt="Profile Picture">

    <h2>User {{$user->name}} :: {{$user->id}}</h2>

    
    <h3>{{$user->description}}</h3>

    <ul>
        @foreach ($user->links as $link)
            <li>

               
                <a href="{{ $link->link }}" target="_blank">
                    {{ $link->id }} . {{ $link->name }}    
                </a>    
               
                
                
            </li>
        @endforeach
    </ul>
</div>
