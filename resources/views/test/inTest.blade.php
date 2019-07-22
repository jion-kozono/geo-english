@extends('layouts.helloapp')
<style>
.test-frame {
    padding: 18px;
    display: inline-block;
    height: 736px;
    background-color: rgb(156, 156, 238);
    background-size: cover;
    width: 100%;
}
.test-visual {
    padding: 46px;
    text-align: center;
    height: 696px;
    background-color: rgba(33, 33, 35, 0.16);
    background-size: cover;
    width: 100%;
}
.questions {
    height: 80px;
    font-size: 48px;
    margin:60px 0px;
    text-align: center;
    width: 100%;
}
.option-list {
    display: inline-block;
    background-color: rgb(98, 110, 204);
    background-size: cover;
    height: 380px;
    padding: 20px;
    margin-top: 30px;
    text-align: center;
    width: 100%;
}
.style-of-btn {
    display: inline-block;
    padding: 10px;
    margin: 18px 10px;
    width: 84%;
    text-align: center;
    color: #ddd;
}
@media (max-width: 1000px) {

}
@media (max-width: 670px) {
.questions {
    height: 48px;
    font-size: 30px;
    margin:30px 0px 150px;
    width: 100%;
}
.option-list {
    height: 380px;
    margin-top: 20px;
    text-align: center;
    width: 100%;
}
.style-of-btn {
    display: inline-block;
    padding: 10px;
    margin: 18px 10px;
    width: 84%;
    text-align: center;
    color: #ddd;
}
}
</style>
<div>
    @section('title', 'テスト中画面')
</div>
@section('main')
<div class="test-frame">
    <div class="test-visual">
        <div clss=""></div>
        <div class="questions">
            QuestionQuestion
        </div>
        <p></p>
        <div>
        <ul class="option-list">
            <li class="btn btn-light style-of-btn">コメント</li>
            <p></p>
            <li class="btn btn-light style-of-btn">コメント</li>
            <p></p>
            <li class="btn btn-light style-of-btn">コメント</li>
            <p></p>
            <li class="btn btn-light style-of-btn">コメント</li>
        </ul>
        </div>
    </div>
</div>
@endsection

@section('footer')
@component('components.footer')
@endcomponent
@endsection
