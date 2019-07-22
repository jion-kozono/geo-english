@extends('layouts.helloapp')
<style>

</style>
@section('title', '参考書一覧')

@section('header')
@component('components.header')

@endcomponent
@endsection

@section('main')
@component('components.booksMain')

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