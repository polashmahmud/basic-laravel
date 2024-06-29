@props(['active' => false])

<a {{ $attributes }}
   class="{{ $active ? 'text-sm leading-none p-3 text-indigo-700  bg-gray-100 rounded hover:bg-gray-200' : 'text-sm leading-none p-3 text-gray-600' }} "
>
    {{ $slot }}
</a>
