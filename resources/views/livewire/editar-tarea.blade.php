<div class="md:justify-center p-5">
	<form class="md:w-2/3 space-y-5" wire:submit.prevent='editarTarea'>
		<div class="mb-2">
			<x-input-label for="expediente" :value="__('Numero de Expediente')" />
			<x-text-input id="expediente" class="block w-full" type="text"  wire:model="expediente" :value="old('expediente')"/>
			<x-input-error :messages="$errors->get('expediente')"/>
		</div>
		
		<div class="mb-2">
			<x-input-label  for="tarea" :value="__('Titulo Tarea')" />
			<x-text-input id="tarea" class="block w-full" type="text" wire:model="tarea" placeholder="Titulo tarea" :value="old('tarea')"/>
			<x-input-error :messages="$errors->get('tarea')"/>
		</div>
	
		<div class="mb-2">
			<x-input-label  for="comitente" :value="__('Comitente')" />
			<x-text-input id="comitente" class="block w-full" type="text" wire:model="comitente" placeholder="Comitente" :value="old('comitente')"/>
			<x-input-error :messages="$errors->get('comitente')"/>
		</div>
	
		<div class="mb-2">
			<x-input-label  for="ultimo_envio" :value="__('Ultimo envio')" />
			<x-text-input id="ultimo_envio" class="block w-full" type="date" wire:model="ultimo_envio" :value="old('ultimo_envio')"/>
			<x-input-error :messages="$errors->get('ultimo_envio')"/>
		</div>
	
		<div class="mb-2">
			<x-input-label  for="ultima_correccion" :value="__('Ultima correcion')" />
			<x-text-input id="ultima_correccion" class="block w-full" type="date" wire:model="ultima_correccion" :value="old('ultima_correccion')"/>
			<x-input-error :messages="$errors->get('ultima_correccion')" />
		</div>
	
	
		<x-primary-button class="mt-4">
			Editar Tarea
		</x-primary-button>
	</form>
</div>