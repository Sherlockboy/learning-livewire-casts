<div>
    <span>
        <span>Hello {{ $name }}.</span>
        <small>{{ now() }}</small>
    </span>

    <button wire:click='$refresh'>refresh</button>
    <button wire:click="$emitUp('refreshParent')">refresh parent</button>
</div>
