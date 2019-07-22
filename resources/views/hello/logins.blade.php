@extends('layouts.helloapp')
<style>

</style>
@section('title', 'ログイン')

@section('header')
@component('components.header')

@endcomponent
@endsection

@section('main')
@component('components.loginsMain')

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