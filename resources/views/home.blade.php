@extends('layouts.app')
<script>
    function changeBackgroundImage(bgImage) {
        document.getElementById("bgDiv").style.backgroundImage = "url(" + bgImage + ")";
    }
</script>
@section('content')
    <div class="flex flex-col navFont w-screen">
        {{--  gallery --}}
        @include('homeLayouts.gallery')
        {{--skill--}}
        @include('homeLayouts.skill')
        {{--purches--}}
        @include('homeLayouts.purchase')
        {{-- expectation--}}
        @include('homeLayouts.expectation')
    </div>
@endsection

