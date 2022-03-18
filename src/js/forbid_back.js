'use strict';

// 現在のページの後に履歴を追加
history.pushState(null, null, location.href);

// ブラウザバック時すぐに、pushStateで作成した履歴に進む
window.addEventListener('popstate', function () {
  history.go(1);
});
