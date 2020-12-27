<div>
    {{-- In work, do what you enjoy. --}}
    <p>Add steps if required
        <span wire:click="increment" class="fas fa-plus"></span>
    </p>
    @foreach($steps as $step)
    <div wire:key="{{$loop->index}}">
        <input type="text" 
        name="stepName[]" 
        placeholder="{{'Describe step '.($loop->index+1)}}" 
        value="{{$step['name']}}" />
        <input type="hidden" 
        name="stepId[]" 
        value="{{$step['id']}}" />
        <span class="fas fa-times" wire:click="decrement({{$loop->index}})"></span>
        <br/>
    </div>
    @endforeach 
</div>
