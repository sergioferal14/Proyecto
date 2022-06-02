@props(['id' => null, 'maxWidth' => null])

<x-jet-modal :id="$id" :maxWidth="$maxWidth" {{ $attributes }}>  
        <div class="text-lg flex flex-row justify-top px-6 py-4 text-center" style="background-color: #0288d1;color:white">
            {{ $title }}
        </div>
    <div class="px-6 py-4">
        <div class="mt-4">
            {{ $content }}
        </div>
    </div>

    <div class="flex flex-row justify-end px-6 py-4 bg-gray-100 text-right">
        {{ $footer }}
    </div>
</x-jet-modal>
