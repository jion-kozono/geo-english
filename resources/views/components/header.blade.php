<style>
.header-top {
    width: 100%;
    color: #ddd;
    background-color: #d991d7;
    background-size: cover;
    height: 96px;
    border-bottom: solid 3px blue;
    position: fixed;
    top: 0px;
    z-index: 10;
}
.header-left {
    margin-top: 10px;
    margin-left: 10px;
    width: 200px;
    font-size: 20px;
    float: left;
}
img {
    width: 150px;
    height: 36px;
}
.ad-top {
    display: inline-block;
    position: absolute;
    top: 16px;
    left: 240px;
    width: 670px;
    font-size: 20px;
    float: left;
    border: solid 1px blue;
}
.menu-icon {
    background-color: rgba(255,255,255,0.3);
    color: black;
    float: right;
    font-size: 30px;
    margin-top: 18px;
    margin-right: 20px;
    padding: 12px 16px;
    display: inline-block;
    opacity: 0.8;
    border: solid 1px black;
    border-radius: 4px;
    cursor: pointer;
}
.menu-icon:hover {
    background-color: rgba(255,255,255,0.6);
}
.menu-icon:active {
    position: relative;
    top: 6px;
    left: 10px;
}
/* .modal-top-contain {
    position: fixed;
    top: 0px;
    right: 0;
    bottom: 0;
    left: 0;
    background-color: rgba(0, 0, 0, 0.6);
    z-index: 20;
    display: none;
}
.modal-top {
    position: absolute;
    top: 0px;
    right: 0px;
    height: 500px;
    width: 240px;
    background-color: rgba(230, 236, 240, 0.6);
    z-index: 12;
    height: 500px;
    width: 240px;
} */
.header {
    margin-top: 96px;
    width: 100%;
    background-color: rgba(150, 145, 217, 0.8);
    height: 132px;
    background-size: cover;
    color: #ddd;
}
.header-list {
    height: 66px;
    border-bottom:  solid 3px blue;
}
.kind-of-test {
    text-align: center;
    display: inline-block;
    margin: 10px;
    margin-left: 20px;
    width: 100px;
    font-size: 30px;
    float: left;
}
.kind-of-test:hover {
    background-color: rgba(150, 145, 217, 1);
}
.kind-of-test:active {
    position: relative;
    top: 6px;
    left: 10px;
}
.header-bottom {
    position: relative;
    height: 50px;
    border-bottom:  solid 3px blue;
}
.login {
    text-align: center;
    display: inline-block;
    margin: 0px 20px;
    width: 100px;
    float: left;
    font-size: 24px;
}
.login:hover {
    background-color: rgba(150, 145, 217, 1);
}
.login:active {
    position: relative;
    top: 6px;
    left: 10px;
}
.head-bottom-msg {
    position: absolute;
    top: 6px;
    left: 300px;
    float: left;
    width: 300px;
    color: black;
    font-size: 14px;
}
.head-bottom-msg br {
    display: none;
}

@media (max-width: 1000px) {
.ad-top {
    position: absolute;
    top: 10px;
    left: 200px;
    margin: 5px;
    width: 370px;
    font-size: 14px;
}
}
@media (max-width: 670px) {
.ad-top {
    position: absolute;
    top: 10px;
    left: 180px;
    margin: 5px;
    width: 200px;
    font-size: 8px;
}
.head-bottom-msg {
    position: absolute;
    top: 0px;
    left: 330px;
    width: 160px;
    font-size: 14px;
}
.head-bottom-msg br {
    display: inline-block;
}
}
</style>
<!-- 固定ヘッダー -->
<div class="header-top">
        <div class="header-left">英単語確認テスト<br>
        <img src="resources/views/components/662412.png">
        </div>
        <div class="ad-top">コメントコメントコメントコメントコメントコメントコメント
        コメントコメントコメントコメントコメントコメントコメントコメントコメント
        </div>
        <div class="fa fa-bars menu-icon"></div>
</div>

<!-- ヘッダー -->
<div class="header">
    <div>
    <ul class="header-list">
            <li><a href="/hello/TOEFL" class="kind-of-test">TOEFL<a></li>
            <li><a href="/hello/TOEIC" class="kind-of-test">TOEIC<a></li>
            <li><a href="/hello/EIKEN" class="kind-of-test">英検<a></li>
    </ul>
    </div>
    <div class="header-bottom">
    <ul class="logins">
        <li><a href="/hello/registers" class="login">新規登録</a></li>
        <li><a href="/hello/logins" class="login">ログイン</a></li>
    </ul>
    <div class="head-bottom-msg">※ログインして<br>レベルを上げよう！</div>
    </div>
</div>
