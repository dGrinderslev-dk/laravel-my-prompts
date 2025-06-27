@php
	$titleKey = $titleKey ?? 'shared/title.blade_pages__public__terms_of_use';
	$titleParams = $titleParams ?? [];
	$darkMode = $darkMode ?? NULL;
@endphp

<x-layouts.guest
	:title-key="$titleKey"
	:title-params="$titleParams"
	:dark-mode="$darkMode"
	class=""
>

<p class="text-white">terms</p>

</x-layouts.guest>