<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">{{ __('Select Autocomplete') }}</h1>
    <div class="bg-gray-200/60 p-4 lg:p-10">
        <label class="form-label" for="autocomplete-select">{{ __('Start typing Weasley:') }}</label>
        <x-dashui-select-auto name="autocomplete-select" id="autocomplete-select">
            <optgroup label="Gryffindor">
                <option>{{ __('Select option') }}</option>
                <option value="0">{{ __('Harry Potter') }}</option>
                <option value="1">{{ __('Hermione Granger') }}</option>
                <option value="2">{{ __('Ron Weasley') }}</option>
                <option value="3">{{ __('Ginny Weasley') }}</option>
                <option value="4">{{ __('George Weasley') }}</option>
            </optgroup>

            <optgroup label="Slytherin">
                <option value="5">{{ __('Draco Malfoy') }}</option>
                <option value="6">{{ __('Gregory Goyle') }}</option>
                <option value="7">{{ __('Vincent Crabbe') }}</option>
            </optgroup>
        </x-dashui-select-auto>

        <x-dashui-select-auto name="autocomplete-select-cat" id="autocomplete-select-cat">
            <option>{{ __('Select option') }}</option>
            <option value="0" data-category="Category 1">{{ __('Option 1') }}</option>
            <option value="1" data-category="Category 2">{{ __('Option 2') }}</option>
            <option value="2" data-category="Category 1">{{ __('Option 3') }}</option>

            <x-slot:template>
                <span class="hidden" data-autocomplete-value></span>
                <div class="truncate text-sm" data-autocomplete-label></div>
                <span data-autocomplete-category></span>
            </x-slot:template>
        </x-dashui-select-auto>
    </div>
</div>
