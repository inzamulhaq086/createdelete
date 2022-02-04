@extends('frontend.layouts.app')
@section('content')
<div class="container px-4 mx-auto">
    <div class="flex flex-wrap -mx-4">
        <div class="w-full px-4 my-4">
            <a href="{{ route('form') }}"
                class="inline-block bg-indigo-500 py-4 px-8 hover:bg-indigo-600 font-bold text-white">Create</a>
        </div>
        @if (!empty($roadmaps))
            @foreach ($roadmaps as $roadmap)
                <div class="w-full px-4 my-4">
                    <div class="bg-gray-900 text-center space-y-4  group py-14 relative px-2">
                        <div class="flex  justify-center">
                            <img class="w-20" src="{{asset('storage/'.$roadmap->cover_img) }}" alt="">
                            {{-- {{asset('storage/'.$roadmap->coin_img)}} --}}
                        </div>
                        <p class="w-full text-white text-3xl font-bold leading-9">{{$roadmap->name}} <span>{{$roadmap->year}}</span>
                        </p>
                        <h1 class="w-full text-white text-3xl font-bold leading-9">{{$roadmap->title}}
                        </h1>
                        <p class="w-full text-gray-300 text-lg leading-8">{{$roadmap->discription}}</p>
                        <a href="{{route('edit',$roadmap->id)}}"
                            class="inline-block bg-indigo-500 py-4 px-8 hover:bg-indigo-600 font-bold text-white">Edit</a>
                        <a href="{{$roadmap->id}}"
                            class="inline-block bg-red-500 py-4 px-8 hover:bg-red-600 font-bold text-white">Delete</a>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>
@endsection