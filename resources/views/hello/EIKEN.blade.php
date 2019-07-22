@extends('layouts.helloapp')
<style>

</style>
@section('title', '英検')

@section('header')
@component('components.header')

@endcomponent
@endsection

@section('main')
@component('components.testMain')

@endcomponent
@endsection

@section('info')
@component('components.info')

@endcomponent
@endsection

@section('footer')
@component('components.footer')
@endcomponent
@endsection