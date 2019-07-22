@extends('layouts.helloapp')
<style>

</style>
@section('title', '利用規約')

@section('header')
@component('components.header')

@endcomponent
@endsection

@section('main')
@component('components.rulesMain')

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