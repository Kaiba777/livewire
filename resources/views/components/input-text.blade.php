
@props(['name'])

<input type="text" name="{{ $name }}" {{ $attributes }}>

<div>
    @error($name)
        <span>{{ $message }}</span>
    @enderror
</div>