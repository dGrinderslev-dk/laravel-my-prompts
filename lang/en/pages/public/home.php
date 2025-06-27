<?php
$appName = config('app.name');

return [
	'heroSection' => [
		'subtitle' => 'AI Prompt Manager Tool',
		'title' => 'Experience the easiest way to organize',
		'decoTitle' => 'prompts',
		'text' => 'Store, organize, and access your AI prompts effortlessly. '.$appName.' helps you manage your prompts for ChatGPT, Midjourney, and other AI tools.',
		'primaryBtn' => 'Start for Free',
		'secondaryBtn' => 'Watch 2-min Tour',
		'bannerImg' => $appName . ' interface',
		'videoModal_CloseBtn_ariaLabel' => 'close video',
	],
	'featureSection' => [
		'subtitle' => 'Features',
		'title' => 'Everything You Need to Be Organized',
		'text' => 'From organization to quick one-click access, see how '.$appName.' makes managing prompts smooth and simple.',
		'featureCardsTitle' => [
			'promptList_interface' => 'Clean Prompt Overview',
			'promptForm_interface' => 'Quickly Create & Edit Prompts',
			'copying' => 'One-Click Copy',
			'categories' => 'Category Management',
			'security' => 'Private & Secure',
		],
		'featureCardsDesc' => [
			'promptList_interface' => 'Your prompts beautifully organized in one place. Filter by categories, use instant search, or browse your complete collection. Switch between light and dark themes for comfortable viewing anytime.',
			'promptForm_interface' => 'Add new prompts or edit existing ones with ease. Give each prompt a descriptive title for easy recognition, select a prompt type (text generation, image generation, or other), and select a category.',
			'copying' => 'Copy prompts to clipboard with a single click. Ready to paste into your favorite AI tool',
			'categories' => 'Create categories to organize your prompts perfectly. Easily modify or delete categories as needed',
			'security' => 'Your prompts stay completely private. We never share your data - your creative work remains yours alone',
		],
		'featureCardsBtn' => 'Learn More',
		'featureCardsImg' => [
			'promptList_interface' => 'Screenshot of the prompt overview interface',
			'promptForm_interface' => 'Screenshot of the create/edit prompt form',
		],
	],
	'faqSection' => [
		'subtitle' => 'FAQ',
		'title' => 'Frequently Asked Questions',
		'text' => 'Find answers to the most common questions about ' . $appName,
		'faqsQuestion' => [
			/*
			'exampleOfItemWithLink' => 'What browsers are supported?',
			*/
			'0' => 'Is '.$appName.' free to use?',
			'1' => 'How do I get started with '.$appName.'?',
			'2' => 'Which devices and browsers can I use?',
			'3' => 'Will there come new features to '.$appName.'?',
			'4' => 'How secure is my data on '.$appName.'?',
			'5' => 'Which AI tools work with '.$appName.'?',
		],
		'faqsAnswer' => [
			/*
			'exampleOfItemWithLink' => 'Hello. <a href="#" class="underline underline-offset-2 text-primary dark:text-primary-dark">Click here</a> for more info.',
			*/
			'0' => "Yes, ".$appName." is completely free - no subscriptions, no credit card required, no hidden costs. All current features are available at no charge. While we will introduce optional premium features in the future, the core functionality will always remain free.",
			'1' => "Getting started is simple and takes less than a minute! Click 'Sign Up', choose a username (lowercase letters, numbers, and underscores only), enter your email address and set a password. That's it—you're in and can start saving prompts right away.",
			'2' => "You can access your prompts from anywhere. Simply log into your account using any modern web browser - Chrome, Firefox, Safari, Edge, or others. ".$appName." is fully responsive, ensuring a great experience whether you're on a desktop, tablet, or mobile phone.",
			'3' => $appName." will expand with both free and premium features over time. Planned additions include tags for enhanced organization, AI-powered prompt optimization to help craft perfect prompts, advanced filtering options, export functionality, and secure sharing capabilities with full privacy controls.",
			'4' => "Your prompts are protected with modern web security standards. Your data is private by default and will stay that way - even with future sharing features, nothing goes public or gets shared unless you choose it. We don't analyze or sell your data, never share it with third parties, and permanently delete everything if you close your account.",
			'5' => $appName." works with any AI tool that has a prompt input field. This includes ChatGPT, Claude, Midjourney, DALL-E, Stable Diffusion, and many more. Whether you're generating text, images, videos, or other content - if it uses prompts, ".$appName." can help you organize those prompts.",
		],
		'supportMessage' => 'Still have questions? <a href="#" class="underline underline-offset-2 text-primary dark:text-primary-dark">Contact our support</a> for help.',
	],
	'footer' => [
		'otherLinks' => [
			'cookies_and_privacy_policy' => [
				'label' => 'Cookies & Privacy Policy',
			],
			'terms_of_use' => [
				'label' => 'Terms of Use',
			],
		],
		'copyright' => [
			'rights_reserved' => $appName.'. All Rights Reserved.',
		],
		'credits' => [
			'prefix' => 'Developed by',
			'link_label' => 'Daniel Grinderslev - LayoutLive.dk',
		],
	],
];