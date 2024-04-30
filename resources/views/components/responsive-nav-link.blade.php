@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block w-full ps-3 pe-4 py-2 border-l-4 dark:border-emerald-300 dark:border-emerald-600 text-start text-base font-medium text-emerald-700 dark:text-emerald-300 bg-emerald-50 dark:bg-emerald-900/50 focus:outline-none focus:text-emerald-800 dark:focus:text-emerald-200 focus:bg-emerald-100 dark:focus:bg-emerald-900 focus:border-emerald-700 dark:focus:border-emerald-300 transition duration-150 ease-in-out'
            : 'block w-full ps-3 pe-4 py-2 border-l-4 border-transparent text-start text-base font-medium text-neutral-600 dark:text-neutral-400 hovertex:t-neutral-800 dark:hover:text-neutral-200 hover:bg-neutral-50 dark:hover:bg-neutral-700 hover:border-neutral-300 dark:hover:border-neutral-600 focus:outline-none focus:text-neutral-800 dark:focus:text-neutral-200 focus:bg-neutral-50 dark:focus:bg-neutral-700 focus:border-neutral-300 dark:focus:border-neutral-600 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
