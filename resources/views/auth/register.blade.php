<div>
    <div>
    <h1>
        Registrar
    </h1>
    {{ auth()->id() }}

    @if ($message = session()->get('message'))
        <div>
            {{ $message }}
        </div>
    @endif


    <form action="{{route('register')}}" method="post">
        
        @csrf

         <div>
            <input name="name" placeholder="Name" />
            @error('name')
                <span>{{$message}}</span>
            @enderror
        </div>


         <div>
            <input name="lastname" placeholder="LastName" />
            @error('lastname')
                <span>{{$message}}</span>
            @enderror
        </div>

        <br>

        <div>
            <input name="email" placeholder="Email" value="{{ old('email')}}"/>
            @error('email')
                <span>{{$message}}</span>
            @enderror
        </div>



        <br>


        <div>
            <input name="email_confirmation" placeholder="Confirme o Email" />
            @error('email_confirmation')
                <span>{{$message}}</span>
            @enderror
        </div>

        <br>

        <div>
            <input name="password" type="password" placeholder="Senha"/>
            @error('password')

                <span>{{$message}}</span>

            @enderror
        </div>
        <br>
        <button>Registrar</button>
        
    </form>
</div>
</div>
