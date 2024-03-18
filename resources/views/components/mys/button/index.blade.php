@props([
    'icon' => false,
])
<button type="button"
    class="flex items-center gap-2 rounded-lg border border-gray-800 bg-gray-800 px-6 py-2 text-base font-medium text-white hover:border hover:border-gray-900 hover:bg-gray-900 hover:text-white disabled:cursor-not-allowed disabled:opacity-75">
    @if ($icon)
        @svg($icon)
        {{-- <x-dynamic-component :component="'icon.' . $icon" /> --}}
    @endif
    {{ $slot }}
</button>
