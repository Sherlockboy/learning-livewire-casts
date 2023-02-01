<div>
    <span>
        <span>Hello {{ $name }}.</span>
        <small>Refreshed at:  {{ now() }}</small>
    </span>

    <button wire:click='$refresh'>refresh</button>
</div>
