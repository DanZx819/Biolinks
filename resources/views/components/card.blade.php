@props(['title' => null, 'actions' => null])




<div class="card bg-base-100 w-2/3 shadow-xl">
    <div class="card-body">
        @if ($title)
            <div class="card-title mb-4">{{ $title }}</div>
        @endif


        {{ $slot }}

        @if ($actions)
            <div class="card-actions flex items-center justify-between mt-3">
                {{ $actions }}
            </div>
        @endif

    </div>
</div>
