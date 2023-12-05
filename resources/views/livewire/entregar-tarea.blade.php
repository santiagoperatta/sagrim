<div class="flex flex-col justify-center items-center">
        <form method="POST" wire:submit.prevent='subirTarea' class="p-2 w-96 mt-5" enctype="multipart/form-data">
            <div class="mb-4">
                <x-input-label for="pdf"/>
                <x-text-input id="pdf" class="block mt-1 w-full" type="file" wire:model="pdf" accept=".pdf"/>
            </div>

            @error('pdf')
            <x-input-error :messages="$message" class="mt-2" />
            @enderror

            <x-primary-button class="w-full justify-center mt-4">
                {{('Subir Archivo')}}
            </x-primary-button>
        </form>
		@if (session()->has('mensaje'))
        <div class="text-sm text-green-600 space-y-1">
            {{ session('mensaje') }}
        </div>
	@endif
</div>
