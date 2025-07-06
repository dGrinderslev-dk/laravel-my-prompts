<?php
$appName = config('app.name');

return [
    'metaDescription' => [
				// layout template standard værdier (feks resources/views/components/layouts/guest.blade.php har short key "components__layouts__guest")
				'components__layouts__guest' => $appName,
				'components__layouts__master' => $appName,

				// views standard værdier (feks resources/views/eksempel-mappe/eksempelUndermappe/mit-eksempel-view.blade.php har short key "eksempel_mappe__eksempelundermappe__mit_eksempel_view")
        'blade_pages__public__home' => 'Store, organize, and access your AI prompts effortlessly with ' . $appName . '. The easiest way to manage prompts for ChatGPT, Midjourney, and other AI tools. Start for free.',
        'livewire__auth__login' => 'Log in to your ' . $appName . ' account to access your AI prompt library. Organize and manage your prompts for ChatGPT, Midjourney, and more.',
        'livewire__auth__register' => 'Create your free ' . $appName . ' account and start organizing your AI prompts today. Perfect for ChatGPT, Midjourney, and other AI tools.',
        'blade_pages__public__cookies_and_privacy_policy' => 'Learn how ' . $appName . ' protects your privacy and handles your data. Read our comprehensive cookies and privacy policy for AI prompt management.',
        'blade_pages__public__terms_of_use' => 'Read the terms of use for ' . $appName . ', the AI prompt management tool. Understand your rights and responsibilities when using our service.',

				// ___get-routes___
				// short key navngives efter det navn som routen har (`Route::get(...)->name('eksempel');`) hvilket kan ses når man bruger `php artisan route:list`.
				// Eksempel: den route som har name "public.public-pages.home" i `routes/public/public-pages.php` har short key "public__public_pages__home"
				// Eksempel: den route som har name "login" i `routes/auth.php` har short key "login"
				//'public__public_pages__home' => 'dette er meta description til home route',
    ],
    'ogDescription' => [
				// views standard værdier (feks resources/views/eksempel-mappe/eksempelUndermappe/mit-eksempel-view.blade.php har short key "eksempel_mappe__eksempelundermappe__mit_eksempel_view")
        'blade_pages__public__home' => 'Experience the easiest way to organize AI prompts. ' . $appName . ' helps you store, manage, and access prompts for ChatGPT, Midjourney, and other AI tools.',
        'livewire__auth__login' => 'Access your personal AI prompt library with ' . $appName . '. Sign in to organize and manage your prompts efficiently.',
        'livewire__auth__register' => 'Join thousands of users organizing their AI prompts with ' . $appName . '. Start managing your ChatGPT and Midjourney prompts for free.',
        'blade_pages__public__cookies_and_privacy_policy' => 'Transparency matters. See how ' . $appName . ' protects your privacy and data in our comprehensive privacy policy.',
        'blade_pages__public__terms_of_use' => 'Understand the terms of service for ' . $appName . ', your trusted AI prompt management platform.',
    ],
		/*
    'page_titles' => [
        'home' => $appName . ' - Organize Your AI Prompts Effortlessly',
        'login' => 'Log In - ' . $appName,
        'register' => 'Sign Up - ' . $appName,
        'cookies_privacy' => 'Privacy Policy - ' . $appName,
        'terms' => 'Terms of Use - ' . $appName,
    ],
    'og_image_alts' => [
        'home' => $appName . ' interface showing organized AI prompts for ChatGPT and Midjourney',
        'login' => $appName . ' login interface',
        'register' => $appName . ' signup form',
        'cookies_privacy' => $appName . ' privacy and security illustration',
        'terms' => $appName . ' terms of service document',
    ],
		*/
];