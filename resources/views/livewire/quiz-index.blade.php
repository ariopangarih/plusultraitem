<div>
    <h4>Question {{$number}} of 3</h4>
    @if(session()->has('incorrect'))
    <div class="alert alert-danger">
        {{session('incorrect')}}
    </div>
    @endif
    @if(session()->has('correct'))
    <div class="alert alert-success">
        {{session('correct')}}
    </div>
    @endif
    <h6 class="mt-5">{{$question}}</h6>
    <div class="d-flex justify-content-start">
        <button class="btn btn-dark m-3" style="margin-left:0px !important;"wire:click="check('True')">True</button>
        <button class="btn btn-dark m-3" wire:click="check('False')">False</button>
    </div>
</div>
