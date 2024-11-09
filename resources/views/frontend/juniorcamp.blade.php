@extends('layouts.front')

@section('content')
    <div class="container">
        
        @include("frontend.partials.navbar")
        
        @include("frontend.partials.navbar2")

        @include("frontend.partials.curriculumoverview")

        @include("frontend.partials.benefitsofjuniors")

        {{-- @include("frontend.partials.stillhavequestions") --}}

        @include("frontend.partials.footer")

    </div>
@endsection
