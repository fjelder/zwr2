@props(['active'])

@php
$classes = ($active ?? false)
? 'flex items-start py-1 pl-4 text-sm border-l hover:text-gray-600 border-gray-300/50 dark:border-gray-800 hover:border-sky-500 dark:hover:border-gray-700 !text-sky-500 border-sky-500'
: 'flex items-start py-1 pl-4 text-sm text-gray-500 border-l hover:text-gray-600 border-gray-300/50 dark:border-gray-800 hover:border-sky-500 dark:hover:border-gray-700';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
