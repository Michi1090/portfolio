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
