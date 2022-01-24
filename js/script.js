'use strict';

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


/* メニュークリック時のスクロールアニメーション
------------------------------------------------------------------------------------------------------------------------*/
$('a[href*="#"]').click(function () {
	const elmHash = $(this).attr('href');
	const pos = $(elmHash).offset().top;

	$('body,html').animate({ scrollTop: pos }, 500); //500の数値が大きくなるほどゆっくりスクロール
	return false; //バブリング（親要素への伝播）防止
});


/* モバイル版表示時、headerのクラス'.wrapper'を削除
----------------------------------------------------------------------------------------------------------------------- */
$(window).on('load resize', function () {
	const width = $(window).outerWidth();
	const breakPoint = 768;

	if (width <= breakPoint) {
		$('header').removeClass('wrapper');
	} else {
		$('header').addClass('wrapper');
	}
});


/* お問い合わせフォームのバリデーション
----------------------------------------------------------------------------------------------------------------------- */
/* エラーメッセージの表示機能 */
function errorElement(form, msg) {
	form.className = "error-form"; //入力欄のクラス名を"error-from"に
	const newElement = document.createElement("div"); //新たにdiv要素を作成
	newElement.className = "error"; //div要素のクラス名を"errorに
	const newText = document.createTextNode(msg); //エラーメッセージのテキストを代入
	newElement.appendChild(newText); //div要素の中にエラーメッセージを挿入
	form.parentNode.insertBefore(newElement, form.nextSibling); //エラーメッセージをfromの後ろに表示
}

/* エラーメッセージのクリア機能 */
function removeElementsByClass(className) {
	const elements = document.getElementsByClassName(className); //該当するクラス名を持つ要素を取得
	while (elements.length > 0) { //配列elementsの要素が1つ以上ある場合
		elements[0].parentNode.removeChild(elements[0]); //先頭の要素を削除する
	}
}

function removeClass(className) {
	const elements = document.getElementsByClassName(className); //該当するクラス名を持つ要素を取得
	while (elements.length > 0) { //配列elementsの要素が1つ以上ある場合
		elements[0].className = ""; //先頭のクラス名を削除する
	}
}

/* バリデーション（日本語） */
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
	}

	// お問い合わせ内容の入力をチェック
	if (document.form.message.value == "") {
		errorElement(document.form.message, "※お問い合わせ内容が入力されていません");
		flag = false;
	}

	return flag;
}

/* バリデーション（英語） */
function validateEn() {
	let flag = true; //フラグのデフォルトはtrue
	removeElementsByClass("error"); //エラーメッセージの削除
	removeClass("error-form"); //class="error-message"を取り除く

	// お名前の入力をチェック
	if (document.form.name.value == "") {
		errorElement(document.form.name, "*Please enter your name");
		flag = false;
	}

	// メールアドレスの入力をチェック
	if (document.form.email.value == "") {
		errorElement(document.form.email, "*Please enter your email address");
		flag = false;
	}

	// お問い合わせ内容の入力をチェック
	if (document.form.message.value == "") {
		errorElement(document.form.message, "*Please enter your message ");
		flag = false;
	}

	return flag;
}
