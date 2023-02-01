<div>
    @foreach ($names as $name)
        @livewire('say-hi', ['name' => $name], key($name))
    @endforeach

    <hr>
    
    <span>{{ now() }}</span>
    <button wire:click='refreshChildren'>Refresh Children</button>
    <button wire:click="$emit('refreshChildren')">Refresh Children Faster</button>
</div>