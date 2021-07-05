<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ongoing Events') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg d-flex justify-content-between">

            @foreach($items as $item)
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('storage/item/'.$item->img)}}" class="card-img-top" alt="plusultraitem, giveaway">
                    <div class="card-body">
                        <h5 class="card-title">{{$item->name}}</h5>
                        <p class="card-text">{{$item->desc}}</p>
                        <p class="card-text">Ends : {{$item->date}}</p>
                        <a href="#" class="btn btn-dark">Join This Event</a>
                    </div>
            </div>
            @endforeach

            </div>
        </div>
    </div>
</x-app-layout>
