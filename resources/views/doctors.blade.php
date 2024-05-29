@extends('layouts.main')
@section('content')
    @include('includes.breadCrumbs')

  <!-- Slider Area -->
  @include('includes.slider')
  <!--/ End Slider Area -->

  <!-- Start Schedule Area -->
  @include('includes.schedule')
  <!--/End Start schedule Area -->

   <!-- Start portfolio -->
   @include('includes.portfolio')
   <!--/ End portfolio -->

@endsection