@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'border-accent focus:border-accent focus:ring-accent focus:outline-accent-active rounded-md shadow-sm px-2 py-1']) }}>