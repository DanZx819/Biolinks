@props([
    'route',
    'post' => null,
    'put' => null,
    'delete' => null,
    'patch' => null
])

@php
    $method = $post || $put || $delete || $patch ? 'post' : 'get';
@endphp

<form {{ $attributes->class(['flex flex-col gap-4']) }} action="{{ $route }}" method="{{ $method }}">
    @csrf

    @if ($put)
        @method('put')
    @endif

    @if ($delete)
        @method('delete')
    @endif


    @if ($patch)
        @method('patch')
    @endif

    {{ $slot }}
</form>
