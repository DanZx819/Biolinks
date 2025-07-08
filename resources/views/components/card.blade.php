@props(['title', 'actions'])




<div class="card bg-base-100 w-2/3 shadow-xl">
    <div class="card-body">
        <div class="card-title mb-4">{{ $title }}</div>

        {{ $slot }}


        <div class="card-actions flex items-center justify-between mt-3">
            {{ $actions }}
        </div>
    </div>
</div>
