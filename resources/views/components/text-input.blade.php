@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'class="text-gray-400 text-base w-full h-12 border border-gray-700 px-5 bg-transparent mb-5"']) !!}>
