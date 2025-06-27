@prepend('styles')
    {{-- <style>/* admin-specifikke styles */</style> --}}
@endprepend

@props([
    'titleKey' => 'shared/title.components__layouts__admin',
    'titleParams' => [],
])

<x-layouts.master
    {{ $attributes->merge([
        'class' => 'admin-layout min-h-dvh transition-[height_100ms_ease-out]',
    ]) }}
    :titleKey="$titleKey"
    :titleParams="$titleParams"
>

    {{ $slot }}

</x-layouts.master>