@extends('layouts.master')

@section('header')
   <h2>Add a new cat</h2>
@stop

@section('content')
    {!! Form::open(['url'=>'/cats']) !!}
        {{ csrf_field() }}
        @include('partials.forms.cat')
    {!! Form::close() !!}
@stop