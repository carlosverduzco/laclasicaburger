@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block pl-3 pr-4 py-2 border-l-4 border-black text-base font-medium text-primary hover:bg-primary hover:border-black focus:outline-none focus:text-black focus:bg-primary focus:border-black transition duration-150 ease-in-out'
            : 'block pl-3 pr-4 py-2 border-l-4 border-black text-base font-medium text-primary hover:underline hover:bg-primary hover:border-black focus:outline-none focus:text-black focus:bg-primary focus:border-black transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
