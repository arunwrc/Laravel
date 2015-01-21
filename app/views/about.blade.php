@extends('layouts.master')

@section('title')
@parent :: About
@stop

@section('content')
<h1>About Us Page</h1>
<p>This page is created using a master template.</p>

@stop

@section('scripts')
<script src="{{asset('bootstrap/js/main.js')}}"></script> <!--Testing -->
@stop