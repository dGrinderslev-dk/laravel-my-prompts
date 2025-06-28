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

	<div class="py-10 md:py-16">
		<div class="container max-w-4xl mx-auto">
			{{-- Header Section --}}
			<div class="text-center mb-12 md:mb-16">
				<h1 class="text-on-surface-strong dark:text-on-surface-dark-strong text-3xl font-semibold leading-snug mb-4 md:text-4xl lg:text-5xl text-balance">
					{{ __('pages/public/cookies-and-privacy-policy.header.title') }}
				</h1>
				<p class="text-on-surface dark:text-on-surface-dark text-lg md:text-xl max-w-2xl mx-auto">
					{{ __('pages/public/cookies-and-privacy-policy.header.subtitle') }}
				</p>
				<p class="text-on-surface/75 dark:text-on-surface-dark/75 text-sm mt-4">
					{{ __('pages/public/cookies-and-privacy-policy.header.lastUpdated') }}
				</p>
			</div>

			{{-- Content Sections --}}
			<div class="prose prose-lg max-w-none">
				{{-- Introduction --}}
				<section class="mb-12">
					<h2 class="text-on-surface-strong dark:text-on-surface-dark-strong text-2xl font-semibold mb-6">
						{{ __('pages/public/cookies-and-privacy-policy.introduction.title') }}
					</h2>
					<div class="text-on-surface dark:text-on-surface-dark space-y-4">
						<p>{{ __('pages/public/cookies-and-privacy-policy.introduction.paragraph1') }}</p>
						<p>{{ __('pages/public/cookies-and-privacy-policy.introduction.paragraph2') }}</p>
					</div>
				</section>

				{{-- Data Collection --}}
				<section class="mb-12">
					<h2 class="text-on-surface-strong dark:text-on-surface-dark-strong text-2xl font-semibold mb-6">
						{{ __('pages/public/cookies-and-privacy-policy.dataCollection.title') }}
					</h2>
					<div class="text-on-surface dark:text-on-surface-dark space-y-6">
						<div>
							<h3 class="text-on-surface-strong dark:text-on-surface-dark-strong text-xl font-medium mb-3">
								{{ __('pages/public/cookies-and-privacy-policy.dataCollection.accountInfo.title') }}
							</h3>
							<p class="mb-3">{{ __('pages/public/cookies-and-privacy-policy.dataCollection.accountInfo.description') }}</p>
							<ul class="list-disc pl-6 space-y-1 text-on-surface/90 dark:text-on-surface-dark/90">
								<li>{{ __('pages/public/cookies-and-privacy-policy.dataCollection.accountInfo.items.username') }}</li>
								<li>{{ __('pages/public/cookies-and-privacy-policy.dataCollection.accountInfo.items.email') }}</li>
								<li>{{ __('pages/public/cookies-and-privacy-policy.dataCollection.accountInfo.items.password') }}</li>
							</ul>
						</div>

						<div>
							<h3 class="text-on-surface-strong dark:text-on-surface-dark-strong text-xl font-medium mb-3">
								{{ __('pages/public/cookies-and-privacy-policy.dataCollection.contentData.title') }}
							</h3>
							<p class="mb-3">{{ __('pages/public/cookies-and-privacy-policy.dataCollection.contentData.description') }}</p>
							<ul class="list-disc pl-6 space-y-1 text-on-surface/90 dark:text-on-surface-dark/90">
								<li>{{ __('pages/public/cookies-and-privacy-policy.dataCollection.contentData.items.prompts') }}</li>
								<li>{{ __('pages/public/cookies-and-privacy-policy.dataCollection.contentData.items.categories') }}</li>
								<li>{{ __('pages/public/cookies-and-privacy-policy.dataCollection.contentData.items.settings') }}</li>
							</ul>
						</div>

						<div>
							<h3 class="text-on-surface-strong dark:text-on-surface-dark-strong text-xl font-medium mb-3">
								{{ __('pages/public/cookies-and-privacy-policy.dataCollection.technicalData.title') }}
							</h3>
							<p class="mb-3">{{ __('pages/public/cookies-and-privacy-policy.dataCollection.technicalData.description') }}</p>
							<ul class="list-disc pl-6 space-y-1 text-on-surface/90 dark:text-on-surface-dark/90">
								<li>{{ __('pages/public/cookies-and-privacy-policy.dataCollection.technicalData.items.ipAddress') }}</li>
								<li>{{ __('pages/public/cookies-and-privacy-policy.dataCollection.technicalData.items.browserInfo') }}</li>
								<li>{{ __('pages/public/cookies-and-privacy-policy.dataCollection.technicalData.items.deviceInfo') }}</li>
							</ul>
						</div>
					</div>
				</section>

				{{-- Cookies Section --}}
				<section class="mb-12">
					<h2 class="text-on-surface-strong dark:text-on-surface-dark-strong text-2xl font-semibold mb-6">
						{{ __('pages/public/cookies-and-privacy-policy.cookies.title') }}
					</h2>
					<div class="text-on-surface dark:text-on-surface-dark space-y-6">
						<p>{{ __('pages/public/cookies-and-privacy-policy.cookies.description') }}</p>
						
						<div>
							<h3 class="text-on-surface-strong dark:text-on-surface-dark-strong text-xl font-medium mb-3">
								{{ __('pages/public/cookies-and-privacy-policy.cookies.essential.title') }}
							</h3>
							<p class="mb-3">{{ __('pages/public/cookies-and-privacy-policy.cookies.essential.description') }}</p>
							
							<div class="bg-surface-alt/50 dark:bg-surface-dark-alt/50 rounded-radius p-4 space-y-3">
								<div>
									<strong class="text-on-surface-strong dark:text-on-surface-dark-strong">{{ __('pages/public/cookies-and-privacy-policy.cookies.essential.session.name') }}</strong>
									<p class="text-sm text-on-surface/90 dark:text-on-surface-dark/90 mt-1">
										{{ __('pages/public/cookies-and-privacy-policy.cookies.essential.session.purpose') }}
									</p>
								</div>
								<div>
									<strong class="text-on-surface-strong dark:text-on-surface-dark-strong">{{ __('pages/public/cookies-and-privacy-policy.cookies.essential.csrf.name') }}</strong>
									<p class="text-sm text-on-surface/90 dark:text-on-surface-dark/90 mt-1">
										{{ __('pages/public/cookies-and-privacy-policy.cookies.essential.csrf.purpose') }}
									</p>
								</div>
								<div>
									<strong class="text-on-surface-strong dark:text-on-surface-dark-strong">{{ __('pages/public/cookies-and-privacy-policy.cookies.essential.auth.name') }}</strong>
									<p class="text-sm text-on-surface/90 dark:text-on-surface-dark/90 mt-1">
										{{ __('pages/public/cookies-and-privacy-policy.cookies.essential.auth.purpose') }}
									</p>
								</div>
							</div>
						</div>
					</div>
				</section>

				{{-- Data Usage --}}
				<section class="mb-12">
					<h2 class="text-on-surface-strong dark:text-on-surface-dark-strong text-2xl font-semibold mb-6">
						{{ __('pages/public/cookies-and-privacy-policy.dataUsage.title') }}
					</h2>
					<div class="text-on-surface dark:text-on-surface-dark space-y-4">
						<p>{{ __('pages/public/cookies-and-privacy-policy.dataUsage.description') }}</p>
						<ul class="list-disc pl-6 space-y-2 text-on-surface/90 dark:text-on-surface-dark/90">
							<li>{{ __('pages/public/cookies-and-privacy-policy.dataUsage.purposes.service') }}</li>
							<li>{{ __('pages/public/cookies-and-privacy-policy.dataUsage.purposes.security') }}</li>
							<li>{{ __('pages/public/cookies-and-privacy-policy.dataUsage.purposes.communication') }}</li>
							<li>{{ __('pages/public/cookies-and-privacy-policy.dataUsage.purposes.legal') }}</li>
						</ul>
					</div>
				</section>

				{{-- Data Sharing --}}
				<section class="mb-12">
					<h2 class="text-on-surface-strong dark:text-on-surface-dark-strong text-2xl font-semibold mb-6">
						{{ __('pages/public/cookies-and-privacy-policy.dataSharing.title') }}
					</h2>
					<div class="text-on-surface dark:text-on-surface-dark space-y-4">
						<p>{{ __('pages/public/cookies-and-privacy-policy.dataSharing.noSharing') }}</p>
						<p>{{ __('pages/public/cookies-and-privacy-policy.dataSharing.exceptions') }}</p>
						<ul class="list-disc pl-6 space-y-1 text-on-surface/90 dark:text-on-surface-dark/90">
							<li>{{ __('pages/public/cookies-and-privacy-policy.dataSharing.legal.compliance') }}</li>
							<li>{{ __('pages/public/cookies-and-privacy-policy.dataSharing.legal.safety') }}</li>
							<li>{{ __('pages/public/cookies-and-privacy-policy.dataSharing.legal.consent') }}</li>
						</ul>
					</div>
				</section>

				{{-- Data Security --}}
				<section class="mb-12">
					<h2 class="text-on-surface-strong dark:text-on-surface-dark-strong text-2xl font-semibold mb-6">
						{{ __('pages/public/cookies-and-privacy-policy.security.title') }}
					</h2>
					<div class="text-on-surface dark:text-on-surface-dark space-y-4">
						<p>{{ __('pages/public/cookies-and-privacy-policy.security.description') }}</p>
						<ul class="list-disc pl-6 space-y-1 text-on-surface/90 dark:text-on-surface-dark/90">
							<li>{{ __('pages/public/cookies-and-privacy-policy.security.measures.encryption') }}</li>
							<li>{{ __('pages/public/cookies-and-privacy-policy.security.measures.access') }}</li>
							<li>{{ __('pages/public/cookies-and-privacy-policy.security.measures.monitoring') }}</li>
							<li>{{ __('pages/public/cookies-and-privacy-policy.security.measures.updates') }}</li>
						</ul>
					</div>
				</section>

				{{-- Your Rights --}}
				<section class="mb-12">
					<h2 class="text-on-surface-strong dark:text-on-surface-dark-strong text-2xl font-semibold mb-6">
						{{ __('pages/public/cookies-and-privacy-policy.rights.title') }}
					</h2>
					<div class="text-on-surface dark:text-on-surface-dark space-y-4">
						<p>{{ __('pages/public/cookies-and-privacy-policy.rights.description') }}</p>
						<ul class="list-disc pl-6 space-y-2 text-on-surface/90 dark:text-on-surface-dark/90">
							<li><strong>{{ __('pages/public/cookies-and-privacy-policy.rights.access.title') }}</strong> - {{ __('pages/public/cookies-and-privacy-policy.rights.access.description') }}</li>
							<li><strong>{{ __('pages/public/cookies-and-privacy-policy.rights.rectification.title') }}</strong> - {{ __('pages/public/cookies-and-privacy-policy.rights.rectification.description') }}</li>
							<li><strong>{{ __('pages/public/cookies-and-privacy-policy.rights.erasure.title') }}</strong> - {{ __('pages/public/cookies-and-privacy-policy.rights.erasure.description') }}</li>
							<li><strong>{{ __('pages/public/cookies-and-privacy-policy.rights.portability.title') }}</strong> - {{ __('pages/public/cookies-and-privacy-policy.rights.portability.description') }}</li>
							<li><strong>{{ __('pages/public/cookies-and-privacy-policy.rights.objection.title') }}</strong> - {{ __('pages/public/cookies-and-privacy-policy.rights.objection.description') }}</li>
						</ul>
					</div>
				</section>

				{{-- Data Retention --}}
				<section class="mb-12">
					<h2 class="text-on-surface-strong dark:text-on-surface-dark-strong text-2xl font-semibold mb-6">
						{{ __('pages/public/cookies-and-privacy-policy.retention.title') }}
					</h2>
					<div class="text-on-surface dark:text-on-surface-dark space-y-4">
						<p>{{ __('pages/public/cookies-and-privacy-policy.retention.description') }}</p>
						<ul class="list-disc pl-6 space-y-1 text-on-surface/90 dark:text-on-surface-dark/90">
							<li>{{ __('pages/public/cookies-and-privacy-policy.retention.account') }}</li>
							<li>{{ __('pages/public/cookies-and-privacy-policy.retention.inactive') }}</li>
							<li>{{ __('pages/public/cookies-and-privacy-policy.retention.legal') }}</li>
						</ul>
					</div>
				</section>

				{{-- Changes to Policy --}}
				<section class="mb-12">
					<h2 class="text-on-surface-strong dark:text-on-surface-dark-strong text-2xl font-semibold mb-6">
						{{ __('pages/public/cookies-and-privacy-policy.changes.title') }}
					</h2>
					<div class="text-on-surface dark:text-on-surface-dark space-y-4">
						<p>{{ __('pages/public/cookies-and-privacy-policy.changes.description') }}</p>
						<p>{{ __('pages/public/cookies-and-privacy-policy.changes.notification') }}</p>
					</div>
				</section>

				{{-- Contact Information --}}
				<section class="mb-12">
					<h2 class="text-on-surface-strong dark:text-on-surface-dark-strong text-2xl font-semibold mb-6">
						{{ __('pages/public/cookies-and-privacy-policy.contact.title') }}
					</h2>
					<div class="text-on-surface dark:text-on-surface-dark space-y-4">
						<p>{{ __('pages/public/cookies-and-privacy-policy.contact.description') }}</p>
						<div class="bg-surface-alt/50 dark:bg-surface-dark-alt/50 rounded-radius p-4">
							<p class="font-medium text-on-surface-strong dark:text-on-surface-dark-strong mb-2">
								{{ __('pages/public/cookies-and-privacy-policy.contact.info.title') }}
							</p>
							<p>{{ __('pages/public/cookies-and-privacy-policy.contact.info.email') }}</p>
							<p>{{ __('pages/public/cookies-and-privacy-policy.contact.info.response') }}</p>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>

</x-layouts.guest>