<div class="md:col-span-1 flex justify-between">
    <div class="px-4 sm:px-0">
        <h3 class="text-2xl font-bold rounded-full text-white bg-dark p-2">{{ $title }}</h3>

        <p class="mt-1 text-lg font-bold text-white">
            {{ $description }}
        </p>
    </div>

    <div class="px-4 sm:px-0">
        {{ $aside ?? '' }}
    </div>
</div>
