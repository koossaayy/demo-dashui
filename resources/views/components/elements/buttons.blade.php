<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">{{ __('Buttons') }}</h1>
    <div class="flex flex-wrap items-center gap-3 bg-gray-200/60 p-4 lg:p-4 lg:p-10">
        <x-dashui-button type="button">{{ __('Default') }}</x-dashui-button>
        <x-dashui-button type="button" variant="primary">{{ __('Primary') }}</x-dashui-button>
        <x-dashui-button type="button" variant="primary" tone="critical">{{ __('Primary critical') }}</x-dashui-button>
        <x-dashui-button type="button" variant="primary" tone="success">{{ __('Primary success') }}</x-dashui-button>
        <x-dashui-button type="button" variant="secondary">{{ __('Secondary') }}</x-dashui-button>
        <x-dashui-button type="button" variant="subtle">{{ __('Subtle') }}</x-dashui-button>
        <x-dashui-button type="button" variant="plain">{{ __('Plain') }}</x-dashui-button>
        <x-dashui-button type="button" variant="plain" tone="critical">{{ __('Plain critical') }}</x-dashui-button>
        <x-dashui-button type="button" size="large">{{ __('Large') }}</x-dashui-button>

        <x-dashui-button type="button" disabled="true">{{ __('Disabled') }}</x-dashui-button>
        <x-dashui-button type="button" variant="primary" disabled="true">{{ __('Primary disabled') }}</x-dashui-button>
        <x-dashui-button type="button" variant="primary" tone="critical" disabled="true">{{ __('Primary critical disabled') }}</x-dashui-button>
        <x-dashui-button type="button" variant="secondary" disabled="true">{{ __('Secondary disabled') }}</x-dashui-button>
        <x-dashui-button type="button" variant="subtle" disabled="true">{{ __('Subtle disabled') }}</x-dashui-button>
        <x-dashui-button type="button" variant="plain" disabled="true">{{ __('Plain disabled') }}</x-dashui-button>

        <x-dashui-button type="button" fullWidth="true" size="large">{{ __('Full width') }}</x-dashui-button>
        <x-dashui-button as="link" href="#" variant="plain" class="p-0 text-left">
            {{ __('This is a really long string of text that overflows onto the next line we need to put in a lot of words now you can see the alignment. It is very long but a customer could potentially name something this long.') }}
        </x-dashui-button>
    </div>
</div>


<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">{{ __('Button group') }}</h1>
    <div class="flex flex-col gap-y-3 bg-gray-200/60 p-4 lg:p-4 lg:p-10">
        <x-dashui-button-group>
            <x-dashui-button type="button">{{ __('Cancel') }}</x-dashui-button>
            <x-dashui-button type="button" variant="primary">{{ __('Save') }}</x-dashui-button>
        </x-dashui-button-group>

        <x-dashui-button-group variant="segmented">
            <x-dashui-button type="button" class="rounded-r-none">{{ __('Bold') }}</x-dashui-button>
            <x-dashui-button type="button" class="rounded-none">{{ __('Italic') }}</x-dashui-button>
            <x-dashui-button type="button" class="rounded-l-none">{{ __('underline') }}</x-dashui-button>
        </x-dashui-button-group>

        <x-dashui-button-group variant="segmented">
            <x-dashui-button type="button" class="rounded-r-none" pressed="true">{{ __('Pressed') }}</x-dashui-button>
            <x-dashui-button type="button" class="rounded-none">{{ __('Italic') }}</x-dashui-button>
            <x-dashui-button type="button" class="rounded-l-none">{{ __('underline') }}</x-dashui-button>
        </x-dashui-button-group>
    </div>
</div>
