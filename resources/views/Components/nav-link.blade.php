
@props(['active' => false])
<a class="{{ $active ? "bg-gray-900 ":" hover:bg-gray-700 " }} rounded-md px-3 py-2 text-sm font-medium text-white"
    {{ $attributes }}
    >
    {{ $slot }}
</a>
