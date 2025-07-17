<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">{{ __('Alert') }}</h1>
    <div class="flex flex-col gap-y-3 bg-gray-200/60 p-4 lg:p-10">
        <x-dashui-card>
            <x-slot:heading>
                {{ __('Online store dashboard') }}
            </x-slot:heading>
            <x-dashui-alert>{{ __('Use your finance report to get detailed information about your business.') }}</x-dashui-alert>
            <x-dashui-alert tone="success">{{ __('Use your finance report to get detailed information about your business.') }}</x-dashui-alert>
            <x-dashui-alert tone="warning">{{ __('Use your finance report to get detailed information about your business.') }}</x-dashui-alert>
            <x-dashui-alert tone="critical">{{ __('Use your finance report to get detailed information about your business.') }}</x-dashui-alert>
            <x-dashui-alert tone="warning">
                <p class="mb-1">{{ __('Connect your instagram account to your shop before proceeding.') }}</p>
                <x-dashui-button type="button" class="text-neutral-900">{{ __('Connect account') }}</x-dashui-button>
            </x-dashui-alert>
            <p>{{ __('View a summary of your online store’s performance.') }}</p>
        </x-dashui-card>
    </div>
</div>
