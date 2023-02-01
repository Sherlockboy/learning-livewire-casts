<div>
    @foreach ($names as $name)
        @livewire('say-hi', ['name' => $name], key($name))
        <button wire:click="removeName('{{$name}}')">Remove</button>
    @endforeach

    <hr>
    <span>Refreshed at: {{ now() }}</span>
    <button wire:click='$refresh'>Refresh</button>
</div>