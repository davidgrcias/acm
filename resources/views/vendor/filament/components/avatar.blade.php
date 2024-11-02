@props([
    'circular' => true,
    'size' => 'md',
])

@php
    $user = auth()->user();
    $avatarUrl = $user && $user->picture ? asset('storage/' . $user->picture) : asset('path/to/default/avatar.jpg');
@endphp

@if ($user && $user->picture)
    <!-- If the user has a profile picture -->
    <img
        src="{{ $avatarUrl }}"
        {{
            $attributes
                ->class([
                    'fi-avatar object-cover object-center',
                    'rounded-md' => ! $circular,
                    'fi-circular rounded-full' => $circular,
                    match ($size) {
                        'sm' => 'h-6 w-6',
                        'md' => 'h-8 w-8',
                        'lg' => 'h-10 w-10',
                        default => $size,
                    },
                ])
        }}
    />
@else
    <!-- If the user does not have a profile picture, show the default -->
    <img
        {{
            $attributes
                ->class([
                    'fi-avatar object-cover object-center',
                    'rounded-md' => ! $circular,
                    'fi-circular rounded-full' => $circular,
                    match ($size) {
                        'sm' => 'h-6 w-6',
                        'md' => 'h-8 w-8',
                        'lg' => 'h-10 w-10',
                        default => $size,
                    },
                ])
        }}
    />
@endif
