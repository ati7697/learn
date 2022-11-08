@extends('layouts.app')
@section('content')
    <div class="flex flex-col navFont w-screen">
        {{--  gallery --}}
        @include('public.partials.gallery')
        {{--courses--}}
        @include('public.partials.course')
        {{-- expectation--}}
        @include('public.partials.expectation')
    </div>
@endsection

