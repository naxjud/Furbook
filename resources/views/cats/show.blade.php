@extends('layouts.master')

@section('header')
    @if(isset($breed))
        <a href="{{url('/')}}">Back to the overview</a>
    @endif

    <h2>{{$cat->name}}</h2>
    <a href="{{url('cats/'.$cat->id.'/edit')}}">
        <span class="glyphicon glyphicon-pencil"></span>
        Edit
    </a>
    <a href="{{url('cats/'.$cat->id.'/delete')}}">
        <span class="glyphicon glyphicon-trash"></span>
        Delete
    </a>
    <p>Last edited: {{$cat->updated_at->diffForHumans()}}</p>
@stop

@section('content')
    <p>Date of Birth: {{$cat->date_of_birth}}</p>
    <p>
        @if($cat->breed)
            Breed:
            {{link_to('cats/breeds/'.$cat->breed->name,$cat->breed->name)}}
        @endif
    </p>
@stop