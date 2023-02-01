<div>
    <input wire:model='name' type="text">
    <input wire:model='loud' type="checkbox">
    <select wire:model='greeting'>
        <option value="Hello">Hello</option>
        <option value="Goodbye">Goodbye</option>
        <option value="Chao">Chao</option>
    </select>

    <button wire:click='resetName'>Reset Name</button>
    
    <h1>{{ $greeting }} {{ $name }} @if ($loud) ! @endif</h1>
</div>
