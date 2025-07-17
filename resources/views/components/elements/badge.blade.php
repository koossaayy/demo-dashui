<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">{{ __('Badge') }}</h1>
    <div class="bg-gray-200/60 p-4 lg:p-4 lg:p-10">
        <x-dashui-card>
            <div class="flex flex-wrap items-center gap-3">
                <x-dashui-badge>{{ __('Default') }}</x-dashui-badge>
                <x-dashui-badge tone="info">{{ __('Informational') }}</x-dashui-badge>
                <x-dashui-badge tone="success">{{ __('Success') }}</x-dashui-badge>
                <x-dashui-badge tone="attention">{{ __('Attention') }}</x-dashui-badge>
                <x-dashui-badge tone="warning">{{ __('Warning') }}</x-dashui-badge>
                <x-dashui-badge tone="critical">{{ __('Critical') }}</x-dashui-badge>
                <x-dashui-badge progress="incomplete" tone="attention">{{ __('Incomplete') }}</x-dashui-badge>
                <x-dashui-badge progress="partiallyComplete" tone="warning">{{ __('Partially complete') }}</x-dashui-badge>
                <x-dashui-badge progress="complete">{{ __('Complete') }}</x-dashui-badge>
                <x-dashui-badge progress="complete" tone="success">{{ __('Published') }}</x-dashui-badge>
            </div>
        </x-dashui-card>
    </div>
</div>
