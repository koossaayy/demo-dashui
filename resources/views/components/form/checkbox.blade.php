<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">{{ __('Checkbox & Radio buttons') }}</h1>
    <div class="bg-gray-200/60 p-4 lg:p-10">
        <div class="mb-4">
            <fieldset class="mb-5 lg:mb-8">
                <legend class="mb-3 text-contrast-higher font-medium">{{ __('Custom Radio Buttons') }}</legend>

                <ul class="flex flex-col gap-1 lg:gap-1.5">
                    <li>
                        <input class="radio" type="radio" name="radio-button" id="radio-1" checked>
                        <label for="radio-1">{{ __('Choice 1') }}</label>
                    </li>

                    <li>
                        <input class="radio" type="radio" name="radio-button" id="radio-2">
                        <label for="radio-2">{{ __('Choice 2') }}</label>
                    </li>

                    <li>
                        <input class="radio" type="radio" name="radio-button" id="radio-3">
                        <label for="radio-3">{{ __('Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, vero. Dolore et eveniet maxime hic tempora neque explicabo eaque doloremque!') }}</label>
                    </li>
                </ul>
            </fieldset>

            <fieldset>
                <legend class="mb-3 text-contrast-higher font-medium">{{ __('Custom Checkboxes') }}</legend>

                <ul class="flex flex-col gap-1 lg:gap-1.5">
                    <li>
                        <input class="checkbox" type="checkbox" id="checkbox-1" checked>
                        <label for="checkbox-1">{{ __('Option 1') }}</label>
                    </li>

                    <li>
                        <input class="checkbox" type="checkbox" id="checkbox-2">
                        <label for="checkbox-2">{{ __('Option 2') }}</label>
                    </li>

                    <li>
                        <input class="checkbox" type="checkbox" id="checkbox-3">
                        <label for="checkbox-3">{{ __('Option 3') }}</label>
                    </li>
                </ul>
            </fieldset>
        </div>

        <div>
            <fieldset class="mb-5 lg:mb-8">
                <legend class="mb-3 text-contrast-higher font-medium">{{ __('Inline custom Radio Buttons') }}</legend>

                <ul class="flex flex-wrap gap-5">
                    <li>
                        <input class="radio" type="radio" name="radio-button" id="radio-4" checked>
                        <label for="radio-4">{{ __('Choice 1') }}</label>
                    </li>

                    <li>
                        <input class="radio" type="radio" name="radio-button" id="radio-5">
                        <label for="radio-5">{{ __('Choice 2') }}</label>
                    </li>

                    <li>
                        <input class="radio" type="radio" name="radio-button" id="radio-6">
                        <label for="radio-6">{{ __('Choice 3') }}</label>
                    </li>
                </ul>
            </fieldset>

            <fieldset>
                <legend class="mb-3 text-contrast-higher font-medium">{{ __('Inline custom Checkboxes') }}</legend>

                <ul class="flex flex-wrap gap-5 lg:gap-8">
                    <li>
                        <input class="checkbox" type="checkbox" id="checkbox-4" checked>
                        <label for="checkbox-4">{{ __('Option 1') }}</label>
                    </li>

                    <li>
                        <input class="checkbox" type="checkbox" id="checkbox-5">
                        <label for="checkbox-5">{{ __('Option 2') }}</label>
                    </li>

                    <li>
                        <input class="checkbox" type="checkbox" id="checkbox-6">
                        <label for="checkbox-6">{{ __('Option 3') }}</label>
                    </li>
                </ul>
            </fieldset>
        </div>
    </div>
</div>
