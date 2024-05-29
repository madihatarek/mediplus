@extends('layouts.main')
@section('content')
    @include('includes.breadCrumbs')

     <!-- Start Feautes -->
     @include('includes.feautes')
     <!--/ End Feautes -->
 
     <!-- Start Fun-facts -->
     @include('includes.funFacts')
     <!--/ End Fun-facts -->
 
     <!-- Start Why choose -->
     @include('includes.choose')
     <!--/ End Why choose -->
 
     <!-- Start Call to action -->
     @include('includes.callToAction')
     <!--/ End Call to action -->
 
     <!-- Start service -->
     @include('includes.service')
     <!--/ End service -->
 
     <!-- Pricing Table -->
     @include('includes.pricingTable')
     <!--/ End Pricing Table -->
@endsection