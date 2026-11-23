@props([
    'variant' => 'primary',
    'size' => 'md',
    'as' => null,
    'href' => null,
    'type' => 'button',
    'fullWidth' => false,
])

@php
    $baseClasses = 'inline-flex items-center justify-center font-bold font-sans transition-all duration-200 cursor-pointer rounded-lg text-center select-none disabled:opacity-50 disabled:cursor-not-allowed';

    $variantClasses = match ($variant) {
        'primary' => 'bg-construction hover:bg-[#e06614] text-white active:bg-[#c9570c] shadow-sm hover:shadow-[0_4px_16px_rgba(244,119,33,0.3)]',
        'secondary' => 'border border-steel hover:border-construction text-steel hover:text-white bg-transparent hover:bg-steel active:bg-[#1d2f3d]',
        'outline' => 'border border-steel hover:border-construction text-steel hover:text-white bg-white hover:bg-steel',
        'dark' => 'bg-steel border border-steel text-white hover:border-construction hover:bg-[#1d2f3d]',
        'ghost' => 'text-steel hover:text-construction bg-transparent',
        'raw' => '',
        default => 'bg-construction hover:bg-[#e06614] text-white',
    };

    $sizeClasses = match ($size) {
        'sm' => 'px-3 py-1.5 text-xs font-semibold',
        'md' => 'px-5 py-2.5 text-sm',
        'lg' => 'px-6 md:px-8 py-3 md:py-3.5 text-sm md:text-base',
        'xl' => 'px-6 md:px-8 py-3 md:py-4 text-sm md:text-lg',
        'none' => '',
        default => 'px-5 py-2.5 text-sm',
    };

    $classes = trim(implode(' ', array_filter([
        $baseClasses,
        $variantClasses,
        $sizeClasses,
        $fullWidth ? 'w-full' : '',
    ])));

    $tag = $as ?? ($href ? 'a' : 'button');
@endphp

@if ($tag === 'a')
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
@else
    <button type="{{ $type }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </button>
@endif
