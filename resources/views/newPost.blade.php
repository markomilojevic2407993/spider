@extends('layout')
@section('body')
<div class="d-flex justify-content-center">
<form action="{{route('newPost')}}" method="post">
    @csrf
    @if($errors->any())
    <p>{{$errors->first()}}</p>
    @endif
    <textarea name="text" cols="30" rows="10" placeholder="Tour sms" required></textarea><br>
    <input type="text" name="title" placeholder="Your title">
    <button type="submit" class="btn btn-success">New post</button>
</form>
</div>
@endsection