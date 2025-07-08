@props(['name'])

<div>
    <input class="input input-border" name="{{ $name }}" {{ $attributes }} />
    @error($name)
        <div class="text-sm text-error">{{ $message }}</div>
    @enderror
</div>
