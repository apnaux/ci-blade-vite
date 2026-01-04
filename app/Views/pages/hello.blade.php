@extends('app')
@section('title', 'Home Page')

@section('body')
<main x-data="{message: 'Hello {{ $name }}!'}">
  <h1 class="text-red-800 font-bold" x-text="message"></h1>
</main>
@endsection