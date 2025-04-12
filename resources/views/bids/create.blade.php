@extends('layouts.standard')

@section('title', 'Bidding Page')

@section('content')
    <h1>{{ $project->title }}</h1>
    <label>
        <strong>Name:</strong>
        <input type="text" name='name' value={{auth()->user()->name}} disabled>
    </label>
    <br>
    <label>
        <strong>Message for project owner:</strong><br>
        <textarea name="msg" cols="30" rows="10"></textarea>
    </label>
    <form action="{{route('bids.store' , $project->id)}}" method='POST'>
        <button type='submit'> Submit bid</button>
    </form>
    
@endsection