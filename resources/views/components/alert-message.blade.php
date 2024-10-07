@props(['type', 'message'])

@php
    // Define the color based on the alert type
    $colorMap = [
        'success' => 'green',
        'error' => 'red',
        'warning' => 'yellow',
        'info' => 'blue',
    ];

    // Default color is 'blue' if type is not matched
    $color = $colorMap[$type] ?? 'blue';

    // Build the dynamic classes for Tailwind
    $bgColor = "bg-{$color}-50";
    $borderColor = "border-{$color}-300";
    $textColor = "text-{$color}-800";
    $darkBgColor = "dark:bg-gray-800";
    $darkBorderColor = "dark:border-{$color}-800";
    $darkTextColor = "dark:text-{$color}-400";
@endphp

<div id="alert-border-2"
    {{ $attributes->merge(['class' => "flex items-center p-4 $textColor border-t-4 $borderColor $bgColor $darkTextColor $darkBgColor $darkBorderColor"]) }}
    role="alert"
    x-data="{ open: true }"
    x-show="open"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in duration-300"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0">

    <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
    </svg>
    
    <div class="ms-3 text-sm font-medium">
        {{ $message }}
    </div>

    <button @click="open = false" type="button" class="ms-auto -mx-1.5 -my-1.5 {{ $bgColor }} text-{{ $color }}-500 rounded-lg focus:ring-2 focus:ring-{{ $color }}-400 p-1.5 hover:bg-{{ $color }}-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-{{ $color }}-400 dark:hover:bg-gray-700" aria-label="Close">
        <span class="sr-only">Dismiss</span>
        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
        </svg>
    </button>
</div>
