@extends('layouts.app')
@section('content')

    <h2 class="font-bold text-3xl text-amber-600">Edit Category</h2>
    <hr class="h-1 bg-amber-600">

    <div class="mt-10">
        <form action="{{route('categories.update',$category->id)}}" method="POST">
            @csrf
            <div class="mb-4">
                <input type="text" name="name" class="border p-3 w-full rounded-lg" placeholder="Test Category" value="{{$category->name}}">
                @error('name')
                    <div class="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                @enderror

            </div>

            <div class="mb-4">
                <input type="text" name="priority" class="border p-3 w-full rounded-lg" placeholder="Priority" value="{{$category->priority}}">
                @error('priority')
                    <div class="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="flex justify-center gap-5">
                <button class="bg-blue-600 text-white py-3 px-10 rounded-lg">Update</button>
                <a href="{{route('categories.index')}}" class="bg-red-500 text-white py-3 px-7 rounded-lg">Cancle</a>
            </div>
        </form>
    </div>

@endsection