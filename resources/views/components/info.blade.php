<style>
.info {
    height: 514px;
}
.info-list {
    background-color: rgba(150, 145, 217, 0.8);
    background-size: cover;
    height: 410px;
    border-bottom: solid 3px blue;
    padding-left: 0px;
    margin-bottom: 0px;
}
.kind-of-page {
    display: inline-block;
    float: left;
    margin: 30px 0px 20px;
    width:33%;
    font-size: 28px;
    text-align: center;
}
.kind-of-page:hover {
    background-color: rgba(150, 145, 217, 1);
}
.kind-of-page:active {
    position: relative;
    top: 6px;
    left: 10px;
}
.kind-of-page span {
    display: none;
}
.ad-bottom {
    height: 104px;
    background-color: #DDD;
    border-bottom: solid 3px blue;
}
@media (max-width: 1000px) {
.info {
    height: 644px;
}
.info-list {
    height: 540px;
}
.kind-of-page {
    width:50%;
    margin: 28px 0px;
    font-size: 20px;
}
}
</style>

<div class="info">
    <ul class="info-list">
        <li><a href="/hello" class="kind-of-page">ホーム<a></li>
        <li><a href="/hello/skillTest" class="kind-of-page">実力テスト<a></li>
        <li><a href="/hello/registers" class="kind-of-page">新規登録<a></li>
        <li><a href="/hello/TOEFL" class="kind-of-page">TOEFL<a></li>
        <li><a href="/hello/logins" class="kind-of-page">ログイン<a></li>
        <li><a href="/hello/TOEIC" class="kind-of-page">TOEIC<a></li>
        <li><a href="/hello/profile" class="kind-of-page">製作者<a></li>
        <li><a href="/hello/EIKEN" class="kind-of-page">英検<a></li>
        <li><a href="/hello/books" class="kind-of-page">参考書一覧<a></li>
        <li><a href="/hello/privacy" class="kind-of-page">プライバシーポリシー<a></li>
        <li><a href="/hello/rules" class="kind-of-page">利用規約<a></li>
        <li><a href="/hello/contact" class="kind-of-page">お問い合わせ<a></li>
    </ul>
    <div class="ad-bottom"></div>
</div>