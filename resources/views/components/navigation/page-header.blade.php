<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">{{ __('Default page header') }}</h1>
    <div class="flex flex-col gap-y-4 bg-gray-200/60 p-4 lg:p-10">
        <x-dashui-page-header title="General">
            <x-dashui-button type="button" variant="default">{{ __('Save') }}</x-dashui-button>
        </x-dashui-page-header>

        <p>{{ __('Page content') }}</p>
    </div>
</div>

<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">{{ __('Page header with subtitle') }}</h1>
    <div class="flex flex-col gap-y-4 bg-gray-200/60 p-4 lg:p-10">
        <x-dashui-page-header title="3/4 inch Leather pet collar" subtitle="Perfect for any pet">
            <x-dashui-button-group>
                <x-dashui-button type="button" variant="secondary">{{ __('Duplicate') }}</x-dashui-button>
                <x-dashui-button type="button" variant="primary" disabled="true">{{ __('Save') }}</x-dashui-button>
            </x-dashui-button-group>
        </x-dashui-page-header>

        <p>{{ __('Page content') }}</p>
    </div>
</div>

<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">{{ __('Page header with back action') }}</h1>
    <div class="flex flex-col gap-y-4 bg-gray-200/60 p-4 lg:p-10">
        <x-dashui-page-header title="General" backAction="#0">
            <x-dashui-button-group>
                <x-dashui-button type="button" variant="primary">{{ __('Save') }}</x-dashui-button>
            </x-dashui-button-group>
        </x-dashui-page-header>

        <p>{{ __('Page content') }}</p>
    </div>
</div>


<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">{{ __('Page header with content after title') }}</h1>
    <div class="flex flex-col gap-y-4 bg-gray-200/60 p-4 lg:p-10">
        <x-dashui-page-header title="3/4 inch Leather pet collar" subtitle="Perfect for any pet">
            <x-slot:titleMetadata>
                <x-dashui-badge tone="success">{{ __('Paid') }}</x-dashui-badge>
            </x-slot:titleMetadata>
            <x-dashui-button-group>
                <x-dashui-button type="button" variant="secondary">{{ __('Duplicate') }}</x-dashui-button>
                <x-dashui-button type="button" variant="primary" disabled="true">{{ __('Save') }}</x-dashui-button>
            </x-dashui-button-group>
        </x-dashui-page-header>

        <p>{{ __('Page content') }}</p>
    </div>
</div>


<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">{{ __('Page header with all elements') }}</h1>
    <div class="flex flex-col gap-y-4 bg-gray-200/60 p-4 lg:p-10">
        <x-dashui-page-header title="3/4 inch Leather pet collar" subtitle="Perfect for any pet" backAction="#0">
            <x-slot:titleMetadata>
                <x-dashui-badge progress="partiallyComplete" tone="warning">{{ __('Shipped') }}</x-dashui-badge>
            </x-slot:titleMetadata>
            <div class="flex flew-wrap items-center gap-2">
                <x-dashui-button type="button" variant="secondary">{{ __('Duplicate') }}</x-dashui-button>
                <x-dashui-button type="button" aria-controls="popover-actions" variant="secondary">
                    {{ __('Promote') }} <x-gmdi-expand-more class="w-4 h-4"/>
                </x-dashui-button>
                <x-dashui-button type="button" variant="primary" disabled="true">{{ __('Save') }}</x-dashui-button>

                <x-dashui-button-group variant="segmented">
                    <x-dashui-button as="link" href="#0" variant="secondary" disabled="true" class="p-1.5 rounded-r-none">
                        <x-gmdi-chevron-left class="w-4 h-4"/>
                    </x-dashui-button>
                    <x-dashui-button as="link" href="#0" variant="secondary" class="p-1.5 rounded-l-none">
                        <x-gmdi-chevron-right class="w-4 h-4"/>
                    </x-dashui-button>
                </x-dashui-button-group>
            </div>
            <x-dashui-popover id="popover-actions" role="dialog">
                <x-dashui-action-link type="button" label="Share on Facebook"/>
                <x-dashui-action-link type="button" label="View on your store"/>
            </x-dashui-popover>
        </x-dashui-page-header>

        <p>{{ __('Page content') }}</p>
    </div>
</div>
