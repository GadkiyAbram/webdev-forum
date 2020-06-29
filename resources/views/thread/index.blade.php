@extends('layouts.front')

@section('heading')
    <a class="btn btn-primary float-right" href="{{ route('thread.create') }}">Create Thread</a>
    <br>
@endsection

@section('content')

@include('thread.partials.thread-list')

@endsection
