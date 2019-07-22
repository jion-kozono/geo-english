@extends('layouts.helloapp')
<style>

</style>
@section('title', 'プライバシーポリシー')

@section('header')
@component('components.header')

@endcomponent
@endsection

@section('main')
@component('components.privacyMain')

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