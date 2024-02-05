@extends('layouts.lading')


@section('title','services')

@section('content')
<h1>Servicios</h1>
@component('_components.tarjeta')
    @slot('title','Service 1')
    @slot('content','lorem input')
       

        
@endcomponent
@component('_components.tarjeta')
    @slot('title','Service 2')
    @slot('content','lorem input')
       

        
@endcomponent
@component('_components.tarjeta')
    @slot('title','Service 3')
    @slot('content','lorem input')
       

        
@endcomponent
@endsection