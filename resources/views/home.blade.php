@extends('layouts.app')

@section('content')
<div class="w-full h-full bg-[#091a28]">

    <div style="height:10%;" class="w-full fixed">
        @include('top-bar')
    </div>

    <div style="height:100%;" class="w-full overflow-y-auto overflow-x-hidden fixed  bg-[#091a28]">
        @include('main')
    </div>

{{--     <div style="height:10%;" class="w-full">
        @include('footer-bar')
    </div> --}}


</div>
@endsection
