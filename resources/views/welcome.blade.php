@extends('layout')
@section('content')
    <div class="mx-auto mt-14 max-w-7xl p-4 lg:p-6">
        <h1 class="mb-3 text-2xl font-bold lg:text-3xl">{{ __('Components') }}</h1>
        <p class="mb-10 text-lg">{{ __('Components are the reusable blade blocks for creating an admin experience like Shopify.') }}</p>

        <div class="grid grid-cols-1 gap-4 lg:grid-cols-12 mb-10">
            <div class="lg:col-span-3">
                <h4 class="text-xl font-bold lg:text-2xl">{{ __('Elements') }}</h4>
            </div>
            <div class="lg:col-span-9">
                @include('components.elements.buttons')
                @include('components.elements.avatars')
                @include('components.elements.thumbnail')
                @include('components.elements.badge')
            </div>
        </div>

        <div class="grid grid-cols-1 gap-4 lg:grid-cols-12 mb-10">
            <div class="lg:col-span-3">
                <h4 class="text-xl font-bold lg:text-2xl">{{ __('Layout') }}</h4>
            </div>
            <div class="lg:col-span-9">
                @include('components.layout.box')
                @include('components.layout.card')
                @include('components.layout.callout-card')
                @include('components.layout.divider')
                @include('components.layout.empty-state')
                @include('components.layout.media-card')
            </div>
        </div>

        <div class="grid grid-cols-1 gap-4 lg:grid-cols-12 mb-10">
            <div class="lg:col-span-3">
                <h4 class="text-xl font-bold lg:text-2xl">{{ __('Form & input') }}</h4>
            </div>
            <div class="lg:col-span-9">
                @include('components.form.checkbox')
                @include('components.form.inputs')
                @include('components.form.combobox')
                @include('components.form.search')
                @include('components.form.autocomplete')
                @include('components.form.select-auto')
                @include('components.form.drop-zone')
                @include('components.form.tag')
            </div>
        </div>

        <div class="grid grid-cols-1 gap-4 lg:grid-cols-12 mb-10">
            <div class="lg:col-span-3">
                <h4 class="text-xl font-bold lg:text-2xl">{{ __('Feedback') }}</h4>
            </div>
            <div class="lg:col-span-9">
                @include('components.feedback.banner')
                @include('components.feedback.alert')
                @include('components.feedback.inline-error')
                @include('components.feedback.flash-message')
                @include('components.feedback.circle-loader')
            </div>
        </div>

        <div class="grid grid-cols-1 gap-4 lg:grid-cols-12 mb-10">
            <div class="lg:col-span-3">
                <h4 class="text-xl font-bold lg:text-2xl">{{ __('Overlay') }}</h4>
            </div>
            <div class="lg:col-span-9">
                @include('components.overlay.popover')
                @include('components.overlay.tooltip')
                @include('components.overlay.modal')
                @include('components.overlay.copy-to-clipboard')
            </div>
        </div>

        <div class="grid grid-cols-1 gap-4 lg:grid-cols-12 mb-10">
            <div class="lg:col-span-3">
                <h4 class="text-xl font-bold lg:text-2xl">{{ __('Tables') }}</h4>
            </div>
            <div class="lg:col-span-9">
                @include('components.table.index-table')
            </div>
        </div>

        <div class="grid grid-cols-1 gap-4 lg:grid-cols-12 mb-10">
            <div class="lg:col-span-3">
                <h4 class="text-xl font-bold lg:text-2xl">{{ __('Navigation') }}</h4>
            </div>
            <div class="lg:col-span-9">
                @include('components.navigation.action-link')
                @include('components.navigation.pagination')
                @include('components.navigation.tabs')
                @include('components.navigation.page-header')
                @include('components.navigation.top-bar')
                @include('components.navigation.navigation')
            </div>
        </div>

        <div class="grid grid-cols-1 items-center gap-4 lg:grid-cols-12 mb-10">
            <div class="lg:col-span-3">
                <h4 class="text-xl font-bold lg:text-2xl">{{ __('App') }}</h4>
            </div>
            <div class="lg:col-span-9">
                <a href="{{ url('frame') }}" class="underline font-medium text-sl" target="_blank">{{ __('Show page') }}</a>
            </div>
        </div>
    </div>
@endsection
