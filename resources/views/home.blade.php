@extends('layout.app')

@section('content')
   <h1 class="my-3">All trains</h1>
   @include('partials.trainTable', ['trainArray' => $trains])
   <h1 class="my-3">Today trains</h1>
   @include('partials.trainTable', ['trainArray' => $today_trains])
@endsection
