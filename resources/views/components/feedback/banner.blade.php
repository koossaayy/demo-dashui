<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">{{ __('Banner') }}</h1>
    <div class="flex flex-col gap-y-3 bg-gray-200/60 p-4 lg:p-10">
        <x-dashui-banner title="Default banner">
            {{ __('Lorem ipsum dolor sit amet, consectetur adipiscing elit.') }}
        </x-dashui-banner>

        <x-dashui-banner title="Success banner" tone="success">
            {{ __('Lorem ipsum dolor sit amet, consectetur adipiscing elit.') }}
        </x-dashui-banner>

        <x-dashui-banner title="Warning banner" tone="warning">
            {{ __('Lorem ipsum dolor sit amet, consectetur adipiscing elit.') }}
        </x-dashui-banner>

        <x-dashui-banner title="Critical banner" tone="critical">
            {{ __('Lorem ipsum dolor sit amet, consectetur adipiscing elit.') }}
        </x-dashui-banner>

        <x-dashui-banner>
            {{ __('Use your finance report to get detailed information about your business.') }}
        </x-dashui-banner>

        <x-dashui-banner tone="success">
            {{ __('Use your finance report to get detailed information about your business.') }}
        </x-dashui-banner>

        <x-dashui-banner tone="warning">
            {{ __('Use your finance report to get detailed information about your business.') }}
        </x-dashui-banner>

        <x-dashui-banner tone="critical">
            {{ __('Use your finance report to get detailed information about your business.') }}
        </x-dashui-banner>
    </div>
</div>
