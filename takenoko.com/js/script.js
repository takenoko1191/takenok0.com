$(function() {
  //drawer
  
  $('.drawer').drawer();
  //wow
  new WOW().init();
  
  //google form
  $('#form').submit(function (event) {
    var formData = $('#form').serialize();
    $.ajax({
      url: "https://docs.google.com/forms/u/0/d/e/1FAIpQLSczGu9P_7JtzTbq9rB3ho9JRaqP0mrmdEAuCjNHPhUg7OYplA/formResponse",
      data: formData,
      type: "POST",
      dataType: "xml",
      statusCode: {
        0: function () {
          $('#form').slideUp();
          $(".end-message").slideDown();
          $(".submit-btn").fadeOut();
        },
        200: function () {
          $(".false-message").slideDown();
        }
      }
    });
    event.preventDefault();
  });

  //トップへ戻るスクロール
  var $pagetop = $('.footer-top');
  $pagetop.click(function () {
    var speed = 500;
    $('body, html').animate({ scrollTop: 0 }, speed),{'easing': 'swiper'};
    return false;
  });
  
  //テキストのカウントアップ+バーの設定
var bar = new ProgressBar.Line(splash_text, {//id名を指定
  easing: 'easeInOut',//アニメーション効果linear、easeIn、easeOut、easeInOutが指定可能
  duration: 1000,//時間指定(1000＝1秒)
  strokeWidth: 0.2,//進捗ゲージの太さ
  color: '#8C50FF',//進捗ゲージのカラー
  trailWidth: 0.2,//ゲージベースの線の太さ
  trailColor: '#fff',//ゲージベースの線のカラー
  text: {//テキストの形状を直接指定       
    style: {//天地中央に配置
      position: 'absolute',
      left: '50%',
      top: '50%',
      padding: '0',
      margin: '-30px 0 0 0',//バーより上に配置
      transform:'translate(-50%,-50%)',
      'font-size':'1rem',
      color: '#fff',
    },
    autoStyleContainer: false //自動付与のスタイルを切る
  },
  step: function(state, bar) {
    bar.setText(Math.round(bar.value() * 100) + ' %'); //テキストの数値
  }
});

//アニメーションスタート
bar.animate(1.0, function () {//バーを描画する割合を指定します 1.0 なら100%まで描画します
  $("#splash_text").fadeOut(10);//フェイドアウトでローディングテキストを削除
  $(".loader_cover-up").addClass("coveranime");//カバーが上に上がるクラス追加
  $(".loader_cover-down").addClass("coveranime");//カバーが下に下がるクラス追加
  $("#splash").fadeOut();//#splashエリアをフェードアウト
});


});