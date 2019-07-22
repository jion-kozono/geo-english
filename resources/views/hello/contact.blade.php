@extends('layouts.helloapp')
<style>

</style>
@section('title', 'お問い合わせ')

@section('header')
@component('components.header')

@endcomponent
@endsection

@section('main')
@component('components.contactMain')

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