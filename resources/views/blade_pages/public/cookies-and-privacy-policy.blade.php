@php
	$titleKey = $titleKey ?? 'shared/title.blade_pages__public__cookies_and_privacy_policy';
	$titleParams = $titleParams ?? [];
	$darkMode = $darkMode ?? NULL;
@endphp

<x-layouts.guest
	:title-key="$titleKey"
	:title-params="$titleParams"
	:dark-mode="$darkMode"
	class=""
>

<p class="text-white">cookies</p>

</x-layouts.guest>