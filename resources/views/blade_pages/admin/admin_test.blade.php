@php
	$titleKey = $titleKey ?? 'shared/title.livewire__user__admintest'; // Standard hvis ikke angivet
	$titleParams = $titleParams ?? []; // Standard hvis ikke angivet
@endphp

<x-layouts.app
	:title-key="$titleKey"
	:title-params="$titleParams"
	class=""
>

	<p>Her er ADMIN er indhold aller første</p>
	<p>Her er indholdHer er indhold næst øverst</p>
	<p>Her er indholdHer er indhold tredje øverst</p>
	<ul>
    @foreach(auth()->user()->categories as $category)
        <li>{{ $category->name }}</li>
    @endforeach
</ul>
	<p>Her er indholdHer er indhold</p>
	<p>Her er indholdHer er indhold</p>
	<p>Her er indholdHer er indhold</p>
	<p>Her er indholdHer er indhold</p>
	<p>Her er indholdHer er indhold</p>
	<p>Her er indholdHer er indhold</p>
	<p>Her er indholdHer er indhold</p>
	<p>Her er indholdHer er indhold</p>
	<p>Her er indholdHer er indhold</p>
	<p>Her er indholdHer er indhold</p>
	<p>Her er indholdHer er indhold</p>
	<p>Her er indholdHer er indhold</p>
	<p>Her er indholdHer er indhold</p>
	<p>Her er indholdHer er indhold</p>
	<p>Her er indholdHer er indhold</p>
	<p>Her er indholdHer er indhold</p>
	<p>Her er indholdHer er indhold</p>
	<p>Her er indholdHer er indhold</p>
	<p>Her er indholdHer er indhold</p>
	<p>Her er indholdHer er indhold</p>
	<p>Her er indholdHer er indhold</p>
	<p>Her er indholdHer er indhold</p>
	<p>Her er indholdHer er indhold</p>
	<p>Her er indholdHer er indhold</p>
	<p>Her er indholdHer er indhold</p>
	<p>Her er indholdHer er indhold</p>
	<p>Her er indholdHer er indhold</p>
	<p>Her er indholdHer er indhold 3. sidste</p>
	<p>Her er indholdHer er indhold 2. sidste</p>
	<p>Her er indholdHer er indhold aller sidste</p>

</x-layouts.app>