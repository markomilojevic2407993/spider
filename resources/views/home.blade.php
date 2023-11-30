@extends('layout')
@section('body')
<hr>
<div class="vw-100 vh-100 container">
    
    <h1 class="text-center">Well</h1>
    @foreach($sms as $poruka)
    <div class="border border-2">
        <p class="h5">{{$poruka['title']}}</p>
        <p>{{$poruka['text']}}</p>
        
        <a type="button" href="{{route('del',['delete'=>$poruka->id])}}">Delete</a>
        <a href="{{route('update',['id'=>$poruka->id])}}">Update</a>
       <div class="border border-2 d-flex justify-content-between">
        <p>{{$poruka->created_at}}</p>
        <p>{{$poruka->id}}</p>
       </div>
        
    </div>
    
    <br>
    
    @endforeach
</div>
@endsection