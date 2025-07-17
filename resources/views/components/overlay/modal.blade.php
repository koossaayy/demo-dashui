<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">{{ __('Modal default') }}</h1>
    <div class="bg-gray-200/60 p-4 lg:p-10">
        <x-dashui-button type="button" aria-controls="modal-default">{{ __('Show modal window') }}</x-dashui-button>

        <x-dashui-modal activator="modal-default" title="Reach more shoppers with Instagram product tags" role="alertdialog" aria-labelledby="modal-title" aria-describedby="modal-description">
            <p>{{ __('Use Instagram posts to share your products with millions of people. Let shoppers buy from your store without leaving Instagram.') }}</p>
            <x-slot:actions>
                <x-dashui-button type="button" class="js-modal__close">{{ __('Learn more') }}</x-dashui-button>
                <x-dashui-button type="button" variant="primary">{{ __('Add Instagram') }}</x-dashui-button>
            </x-slot:actions>
        </x-dashui-modal>
    </div>
</div>

<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">{{ __('Small Modal') }}</h1>
    <div class="bg-gray-200/60 p-4 lg:p-10">
        <x-dashui-button type="button" aria-controls="modal-small">{{ __('Show modal window') }}</x-dashui-button>

        <x-dashui-modal activator="modal-small" title="Reach more shoppers with Instagram product tags" size="small">
            <p>{{ __('Use Instagram posts to share your products with millions of people. Let shoppers buy from your store without leaving Instagram.') }}</p>
            <x-slot:actions>
                <x-dashui-button type="button" class="js-modal__close">{{ __('Learn more') }}</x-dashui-button>
                <x-dashui-button type="button" variant="primary">{{ __('Add Instagram') }}</x-dashui-button>
            </x-slot:actions>
        </x-dashui-modal>
    </div>
</div>

<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">{{ __('Large Modal') }}</h1>
    <div class="bg-gray-200/60 p-4 lg:p-10">
        <x-dashui-button type="button" aria-controls="modal-large">{{ __('Show modal window') }}</x-dashui-button>

        <x-dashui-modal activator="modal-large" title="Reach more shoppers with Instagram product tags" size="large">
            <p>{{ __('Use Instagram posts to share your products with millions of people. Let shoppers buy from your store without leaving Instagram.') }}</p>
            <x-slot:actions>
                <x-dashui-button type="button" class="js-modal__close">{{ __('Learn more') }}</x-dashui-button>
                <x-dashui-button type="button" variant="primary">{{ __('Add Instagram') }}</x-dashui-button>
            </x-slot:actions>
        </x-dashui-modal>
    </div>
</div>


<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">{{ __('Modal without a title') }}</h1>
    <div class="bg-gray-200/60 p-4 lg:p-10">
        <x-dashui-button type="button" aria-controls="modal-untitled">{{ __('Show modal window') }}</x-dashui-button>

        <x-dashui-modal activator="modal-untitled">
            <p>{{ __('Use Instagram posts to share your products with millions of people. Let shoppers buy from your store without leaving Instagram.') }}</p>
            <x-slot:actions>
                <x-dashui-button type="button" class="js-modal__close">{{ __('Learn more') }}</x-dashui-button>
                <x-dashui-button type="button" variant="primary">{{ __('Add Instagram') }}</x-dashui-button>
            </x-slot:actions>
        </x-dashui-modal>
    </div>
</div>

<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">{{ __('Full width Modal') }}</h1>
    <div class="bg-gray-200/60 p-4 lg:p-10">
        <x-dashui-button type="button" aria-controls="modal-full">{{ __('Show modal window') }}</x-dashui-button>

        <x-dashui-modal activator="modal-full" title="Reach more shoppers with Instagram product tags" size="fullScreen">
            <p>{{ __('Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet accusantium provident nulla minus velit, voluptas voluptatem in libero hic quaerat saepe quae, labore, qui illo eum ullam ea. Repudiandae excepturi aut earum ipsa vitae modi, non eos hic? Atque fugit ullam est ab nam numquam id pariatur, esse voluptates, ipsa aperiam consequatur laboriosam perspiciatis. Nemo culpa reprehenderit tenetur alias dolor veritatis ducimus, numquam ipsa incidunt harum dolorem quod perspiciatis autem quis soluta, nobis assumenda aliquam perferendis ut commodi inventore sunt.') }}</p>
            <x-slot:actions>
                <x-dashui-button type="button" class="js-modal__close">{{ __('Cancel') }}</x-dashui-button>
                <x-dashui-button type="button" variant="primary">{{ __('Save') }}</x-dashui-button>
            </x-slot:actions>
        </x-dashui-modal>
    </div>
</div>
