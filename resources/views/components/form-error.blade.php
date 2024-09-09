@props(['name'])

@error($name)
    <small class="text-red-400 italic">{{ $message }}</small>
@enderror
