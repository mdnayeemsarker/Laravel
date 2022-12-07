@extends('frontend.layouts.app')

@section('titile')
    DL-Laravel
@endsection

@section('doc')
<div class="p-6">
    <div class="ml-4 text-lg leading-7 font-semibold"><a href='/docs' class="underline text-gray-900 dark:text-white">Doc</a></div>

    <div class="ml-12">
        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm justify-content-start">
            Laravel has wonderful, thorough documentation covering every aspect of the framework.
        </div>
    </div>
</div>
@endsection

@section('user')
<div class="p-6">
    <div class="ml-4 text-lg leading-7 font-semibold"><a href='/users' class="underline text-gray-900 dark:text-white">Users</a></div>
    <div class="ml-12">
        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm justify-content-start">
            Lorem ipsum navigation dolor sit amet consectetur adipisicing elit.
        </div>
    </div>
</div>
@endsection