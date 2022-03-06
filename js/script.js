'use strict';

/* jQuery */

/* メインビジュアルのスライドショー
--------------------------------------------------------------------------------------------------------------*/
$('.slider').slick({
	fade: true,//切り替えをフェードで行う。初期値はfalse。
	autoplay: true,//自動的に動き出すか。初期値はfalse。
	autoplaySpeed: 4000,//次のスライドに切り替わる待ち時間
	speed: 1000,//スライドの動きのスピード。初期値は300。
	infinite: true,//スライドをループさせるかどうか。初期値はtrue。
	slidesToShow: 1,//1回で表示させるスライド数
	slidesToScroll: 1,//1回のスクロールでスライドする数
	arrows: true,//左右の矢印あり
	prevArrow: '<div class="slick-prev"></div>',//矢印部分PreviewのHTMLを変更
	nextArrow: '<div class="slick-next"></div>',//矢印部分NextのHTMLを変更
	dots: true,//下部ドットナビゲーションの表示
	pauseOnFocus: false,//フォーカスで一時停止を無効
	pauseOnHover: false,//マウスホバーで一時停止を無効
	pauseOnDotsHover: false,//ドットナビゲーションをマウスホバーで一時停止を無効
});

//スマホ用：スライダーをタッチしても止めずにスライドをさせたい場合
$('.slider').on('touchmove', function (event, slick, currentSlide, nextSlide) {
	$('.slider').slick('slickPlay');
});


/* スクロールアニメーション
----------------------------------------------------------------------------------------------------------------------*/
$('a[href*="#"]').click(function () {
	const elmHash = $(this).attr('href');
	const pos = $(elmHash).offset().top;

	$('body,html').animate({ scrollTop: pos }, 500); //500の数値が大きくなるほどゆっくりスクロール
	return false; //バブリング（親要素への伝播）防止
});


/* トップページへ戻るボタン
----------------------------------------------------------------------------------------------------------------------*/

//スクロールした際のボタンの動作
function PageTopAnime() {
	//<main>までスクロールしたらボタンが出現
	const scroll = $(window).scrollTop();
	const mainPos = Math.round($('main').offset().top);

	if (scroll >= mainPos) {
		$('#page-top').removeClass('DownMove');
		$('#page-top').addClass('UpMove');
	} else {
		if ($('#page-top').hasClass('UpMove')) {
			$('#page-top').removeClass('UpMove');
			$('#page-top').addClass('DownMove');
		}
	}

	//<footer>手前でボタンの動作が止まる
	const windowHight = window.innerHeight;
	const footerPos = $('footer').offset().top;
	if (scroll + windowHight >= (footerPos + 10)) {
		const pos = (scroll + windowHight) - footerPos + 10
		$('#page-top').css('bottom', pos);
	} else {
		if ($('#page-top').hasClass('UpMove')) {
			$('#page-top').css('bottom', '10px');
		}
	}
}

// 画面をスクロールをしたら動かしたい場合の記述
$(window).scroll(function () {
	PageTopAnime();
});

// ページが読み込まれたらすぐに動かしたい場合の記述
$(window).on('load', function () {
	PageTopAnime();
});


/* モバイル版表示時、headerのクラス'.wrapper'を削除
------------------------------------------------------------------------------------------------------------------- */
$(window).on('load resize', function () {
	const width = $(window).outerWidth();
	const breakPoint = 768;

	if (width <= breakPoint) {
		$('header').removeClass('wrapper');
	} else {
		$('header').addClass('wrapper');
	}
});



/* JavaScript */

/* お問い合わせフォームのバリデーション
--------------------------------------------------------------------------------------------------------------------- */
// エラーメッセージの表示機能
function errorElement(form, msg) {
	form.className = "error-form"; //入力欄のクラス名を"error-form"に
	const newElement = document.createElement("div"); //新たにdiv要素を作成
	newElement.className = "error"; //div要素のクラス名を"errorに
	const newText = document.createTextNode(msg); //エラーメッセージのテキストを代入
	newElement.appendChild(newText); //div要素の中にエラーメッセージを挿入
	form.parentNode.insertBefore(newElement, form.nextSibling); //エラーメッセージをformの後ろに表示
}

// エラーメッセージのクリア機能
function removeElementsByClass(className) {
	const elements = document.getElementsByClassName(className); //該当するクラス名を持つ要素を取得
	while (elements.length > 0) { //配列elementsの要素が1つ以上ある限り
		elements[0].parentNode.removeChild(elements[0]); //先頭の要素を削除する
	}
}

function removeClass(className) {
	const elements = document.getElementsByClassName(className); //該当するクラス名を持つ要素を取得
	while (elements.length > 0) { //配列elementsの要素が1つ以上ある限り
		elements[0].className = ""; //先頭のクラス名を削除する
	}
}
// メールアドレスの形式チェック
function validateMail(email) {
	if (email.match(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/) == null) { // match関数は形式に合わない場合、nullを返す
		return true;
	} else {
		return false;
	}
}

// バリデーション
function validate() {
	let flag = true; //フラグのデフォルトはtrue
	removeElementsByClass("error"); //エラーメッセージの削除
	removeClass("error-form"); //class="error-message"を取り除く

	// お名前の入力をチェック
	if (document.form.name.value == "") {
		errorElement(document.form.name, "※お名前が入力されていません");
		flag = false;
	}

	// メールアドレスの入力をチェック
	if (document.form.email.value == "") {
		errorElement(document.form.email, "※メールアドレスが入力されていません");
		flag = false;
	} else if (validateMail(document.form.email.value)) {
		// メールアドレスの形式をチェック
		errorElement(document.form.email, "※メールアドレスが正しくありません");
		flag = false;

	}

	// お問い合わせ内容の入力をチェック
	if (document.form.message.value == "") {
		errorElement(document.form.message, "※メッセージが入力されていません");
		flag = false;
	} else if (document.form.message.value.length < 50) {
		// 50文字以上入力されているかチェック
		errorElement(document.form.message, "※メッセージは50文字以上で入力してください");
		flag = false;
	}

	return flag;
}
