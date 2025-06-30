{{--
@prepend('head')
    @vite(['resources/js/randomScript.js'])
@endprepend
--}}

<div class="flex flex-col items-center">
    <x-layouts.app.components.header
        headerHTML="{{ __($headerKey, $headerParams) }}"
        afterHeader="{{ !empty($afterHeader) ? $afterHeader : '' }}"
        afterHeaderClasses="font-semibold"
        afterHeaderHTML="{{ !empty($afterHeaderHTML) ? $afterHeaderHTML : '' }}"
        subHeaderHTML="{{ !empty($subHeaderKey) ? __($subHeaderKey, $subHeaderParams) : '' }}"
        afterSubHeader="{{ !empty($afterSubHeader) ? $afterSubHeader : '' }}"
        afterSubHeaderClasses="font-semibold"
        afterSubHeaderHTML="{{ !empty($afterSubHeaderHTML) ? $afterSubHeaderHTML : '' }}"
        class="!max-w-5xl"
    />

    <div class="w-full max-w-5xl gap-2 md:gap-3 lg:gap-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-1 lg:grid-cols-2 xl:grid-cols-3">
        {{--
        <h2 class="text-xl mb-3">{{ __($headerKey, $headerParams) }}</h2>
        <h3 class="text-lg mb-3">Du har søgt: {{ $search }}</h3>
        --}}
    
        @forelse ($this->prompts as $prompt)
            <x-user.prompt-card :prompt="$prompt" :key="'prompt-'.$prompt->id" />
        @empty
            <p>{{ __('pages/user/prompt-list.no_result') }}</p>
        @endforelse
    
    </div>
</div>