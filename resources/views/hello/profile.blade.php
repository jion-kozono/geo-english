@extends('layouts.helloapp')
<style>

</style>
@section('title', '製作者')

@section('header')
@component('components.header')

@endcomponent
@endsection

@section('main')
@component('components.profileMain')

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