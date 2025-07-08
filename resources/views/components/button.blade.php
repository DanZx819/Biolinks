@props([
    'href' => null,
    'block' => false,
    'outline' => false,
    'info' => false,
])

@php
    $tag = $href ? 'a' : 'button';
@endphp

<{{ $tag }}
    @if($href) href="{{ $href }}" @endif
    {{ $attributes->class([
        'btn btn-primary',
        'btn-block' => $block,
        'btn-outline' => $outline,
        'btn-info' => $info,
    ]) }}
>
    {{ $slot }}
</{{ $tag }}>
