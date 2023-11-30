@extends('layout')
@section('body')
<div class="container d-flex justify-content-center">
<form action="{{route('saveUpdate',['id'=>$poruka->id])}}" method="post">
    @csrf
    <input type="text" name="text" value="{{$poruka->text}}" ><br>
    <input type="text" name="title" placeholder="title" value="{{$poruka->title}}">
    <button type="submit" class="btn btn-danger">update</button>

</form>
</div>
@endsection