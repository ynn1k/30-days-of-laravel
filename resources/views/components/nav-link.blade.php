@props(['active' => false,'type' => 'a'])

<a class="{{ $active ? 'text-green-400' : 'text-blue-400' }}" {{ $attributes }}>{{ $slot }}</a>
