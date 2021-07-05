<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h2>Welcome back! {{$user->name}}</h2>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Total Credits : {{$user->credit}}
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="row">
                        <div class="col-6">Total Tickets : {{$user->ticket}}</div>
                        @if(session()->has('plus'))
                            <div class="col-6 text-center" style="background-color:#ebb134; !important"> {{session('plus')}} </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h3>Your Redeemable Items</h3>
            @if($events->count() > 0)
                @foreach($events as $data)
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <div class="d-flex bd-highlight">
                                <img src="{{ asset('storage/item/'.$data->items->img) }}" width=90 alt="plusultraitem">
                                <label class="ml-2 d-flex align-items-center">{{$data->items->name}}</label>
                                <div class="d-flex align-items-center ms-auto">
                                    <a href="" class="btn btn-dark">Redeem</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    No Items
                </div>
            </div>
            @endif
        </div>
    </div>
</x-app-layout>
