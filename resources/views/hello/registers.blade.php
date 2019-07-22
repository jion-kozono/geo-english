@extends('layouts.helloapp')
<style>

</style>
@section('title', '新規登録')

@section('header')
@component('components.header')

@endcomponent
@endsection

@section('main')
@component('components.registersMain')

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