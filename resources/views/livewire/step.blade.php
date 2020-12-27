<div>
    {{-- In work, do what you enjoy. --}}
    <p>Add steps if required
        <span wire:click="increment" class="fas fa-plus"></span>
    </p>
    @foreach($steps as $step)
    <div wire:key="{{$step}}">
        <input type="text" name="step[]" placeholder="{{'Describe step '.($step+1)}}" />
        <span class="fas fa-times" wire:click="decrement({{$step}})"></span>
        <br/>
    </div>
    @endforeach 
</div>
