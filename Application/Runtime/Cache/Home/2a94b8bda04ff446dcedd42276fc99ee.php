<?php if (!defined('THINK_PATH')) exit(); session_start(); function set_token() { $_SESSION['token'] = md5(microtime(true)); } if(!isset($_SESSION['token']) || $_SESSION['token']=='') { set_token(); } ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="renderer" content="webkit">
  <meta http-equiv="X-UA-COMPATIBLE" content="IE=edge,chrome=1" />
  <meta name="application-name" content="" />
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="viewport"
    content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,initial-scale=1.0,user-scalable=no">
  <meta name="format-detection" content="telephone=no" />
  <meta name="format-detection" content="email=no" />
  <link rel="shortcut icon" href="" type="image/icon" sizes="16*16">
  <link rel="stylesheet" href="/Public/css/Home/base.css">
  <link rel="stylesheet" href="/Public/css/Home/main.css">
  <link rel="stylesheet" href="//at.alicdn.com/t/font_1176844_03wydqx0vwo8.css">
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.2/css/swiper.min.css"> -->

</head>

<body>
  <section id="app">
    <!-- 顶部 -->
    <!-- <header>头部导航</header> -->
    <!-- 主体 -->
    <article>
      <!-- 图 -->
      <div><img src="/Public/images/Home/index_01.jpg" alt=""></div>
      <div><img src="/Public/images/Home/index_02.jpg" alt=""></div>
      <div><img src="/Public/images/Home/index_03.jpg" alt=""></div>
      <div><img src="/Public/images/Home/index_04.jpg" alt=""></div>
      <div><img src="/Public/images/Home/index_05.jpg" alt=""></div>
      <div><img src="/Public/images/Home/index_06.jpg" alt=""></div>
      <div><img src="/Public/images/Home/index_07.jpg" alt=""></div>
      <div><img src="/Public/images/Home/index_08.jpg" alt=""></div>
      <div><img src="/Public/images/Home/index_09.jpg" alt=""></div>
      <div><img src="/Public/images/Home/index_10.jpg" alt=""></div>
      <div><img src="/Public/images/Home/index_11.jpg" alt=""></div>
      <div><img src="/Public/images/Home/index_12.jpg" alt=""></div>
      <div><img src="/Public/images/Home/index_13.jpg" alt=""></div>
      <div><img src="/Public/images/Home/index_14.jpg" alt=""></div>
      <div><img src="/Public/images/Home/index_15.jpg" alt=""></div>
      <div><img src="/Public/images/Home/index_16.jpg" alt=""></div>
      <div><img src="/Public/images/Home/index_17.jpg" alt=""></div>
      <div><img src="/Public/images/Home/index_18.jpg" alt=""></div>
      <div><img src="/Public/images/Home/index_19.jpg" alt=""></div>
      <div><img src="/Public/images/Home/index_20.jpg" alt=""></div>
      <div><img src="/Public/images/Home/index_21.jpg" alt=""></div>
      <div><img src="/Public/images/Home/index_22.jpg" alt=""></div>
      <div><img src="/Public/images/Home/index_23.jpg" alt=""></div>
      <div><img src="/Public/images/Home/index_24.jpg" alt=""></div>
      <div><img src="/Public/images/Home/index_25.jpg" alt=""></div>

      <!-- 留言板 样式一 -->
      <div class="messagebox" id="msgBox">
        <h2><i class="iconfont icon-icon_calendar"></i> 在线留言</h2>
        <div class="messagebook">
          <form action="/add" enctype="multipart/form-data" method="post" id="info">
            <div style="border: 2px solid red;padding:.4rem;border-radius:10px;">
              <p>立即留言，离成功更近！</p>
              <div class="p-input form-name">姓名<input name="name" class="text msg-input"
                  placeholder="如：张先生" value="" type="text"></div>
              <div class="p-input form-name">手机<input name="mobile" class="text" placeholder="如：13888888888"
                  value="" type="text"></div>
              <div class="p-button">
                <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>" />
                <input type="hidden" name="keyword" value="<?php echo $_COOKIE['keyword']; ?>" />
                <input type="hidden" name="plan" value="<?php echo $_COOKIE['plan']; ?>" />
                <input type="hidden" name="unit" value="<?php echo $_COOKIE['unit']; ?>" />
                <input type='hidden' name='shijian' id='shijian' placeholder="">
                <script type="text/javascript">
                  window.onload = function () {
                    var nowDate = new Date();
                    var str = nowDate.getFullYear() + "-" + (nowDate.getMonth() + 1) + "-" + nowDate.getDate() + " " +
                      nowDate.getHours() + ":" + nowDate.getMinutes() + ":" + nowDate.getSeconds();
                    document.getElementById("shijian").value = str;
                  }
                </script>
                <button type="submit" class="button"><span>立即留言</span></button>
              </div>
            </div>
          </form>
        </div>
      </div>

      <!-- 留言板 样式二 -->
      <!-- <div class="msg-box">
        <h2>留言获取更多资料</h2>

        <form action="/add" enctype="multipart/form-data" method="post" class="clue-form" id="info">
          <div class="counter">
            <i class="iconfont icon-horn" style="color: #D0021B"></i>
            <span class="prefix">截止目前已有</span>
            <span class="number">2349</span>
            <span class="suffix">人免费获取更多资料</span>
          </div>

          <div class="input-wrapper layout1 required">
            <div class="label">姓名</div>
            <div class="input-item-wrapper">
              <input class="input-item " type="text" placeholder="请输入您姓名" name="name" autocomplete="off">
              <span class="clearBtn"></span>
            </div>
            <div class="error-msg "></div>
          </div>
          <div class="input-wrapper layout1 required">
            <div class="label">电话</div>
            <div class="input-item-wrapper">
              <input class="input-item " type="text" placeholder="请输入您常用手机号码" name="mobile" autocomplete="off">
              <span class="clearBtn"></span>
            </div>
            <div class="error-msg "></div>
          </div>

          <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>" />
          <input type="hidden" name="keyword" value="<?php echo $_COOKIE['keyword']; ?>" />
          <input type="hidden" name="plan" value="<?php echo $_COOKIE['plan']; ?>" />
          <input type="hidden" name="unit" value="<?php echo $_COOKIE['unit']; ?>" />
          <input type='hidden' name='shijian' id='shijian' placeholder="">
          <script type="text/javascript">
            window.onload = function () {
              var nowDate = new Date();
              var str = nowDate.getFullYear() + "-" + (nowDate.getMonth() + 1) + "-" + nowDate.getDate() + " " +
                nowDate.getHours() + ":" + nowDate.getMinutes() + ":" + nowDate.getSeconds();
              document.getElementById("shijian").value = str;
            }
          </script>
          <div class="phone_agreement_link_wrapper svelte-1mz3y46">
            <label><i class="iconfont icon-huiyishiqueren_huabanfuben" style="color:rgb(78, 144, 255)"></i> 自动输入历史手机号
            </label>
            <a href="javascript:void(0);" class="phone_agreement_link svelte-1mz3y46">《个人信息授权书》</a>
          </div>

          <button class="submitbtn" type="submit"
            style="border-radius: 0.0266667rem; background-color: rgb(78, 144, 255); color: rgb(255, 255, 255); margin-top: 0.64rem;">
            <span>立即留言</span> </button>
        </form>
      </div> -->
    </article>

    <!-- 底部 -->
    <footer>
      <div class="last-box">
        <a href="tel:<?php echo ($phone); ?>" class="last-box-phone">
          <div>
            <span><i class="iconfont icon-phone"></i></span>
            <span>联系客服</span>
          </div>
        </a>
        <a href="#msgBox" class="last-box-msg"><i class="iconfont icon-icon_calendar"></i> 留言免费获取更多资料</a>
      </div>
    </footer>
    <?php echo ($code); ?>
  </section>
</body>
<script src="/Public/js/Home/adaptive.js"></script>
<script src="/Public/js/Home/config.js"></script>
<script crossorigin="anonymous" integrity="sha384-qu2J8HSjv8EaYlbzBdbVeJncuCmfBqnZ4h3UIBZ9WTZ/5Wrqt0/9hofL0046NCkc"
  src="//lib.baomitu.com/zepto/1.2.0/zepto.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.2/js/swiper.min.js"></script> -->
<script>
  // var mySwiper = new Swiper('.swiper-container', {
  //   direction: 'vertical', // 垂直切换选项
  //   loop: true, // 循环模式选项
  //   autoplay: true, //可选选项，自动滑动
  //   height: 35, //你的slide高度
  // })

  $(function () {

    $("#info").submit(function (e) {
      var obj = $('#info').serializeArray();
      var _flag = new Boolean(true); 
      $.each(obj, function (index, item) {
        if (item.name == "name") {
          if (item.value == "" || $.trim(item.value).length < 2 || $.trim(item.value).length > 4) {
            alert("请输入正确的姓名");
            _flag = false;
            return false;
          }
        }
        if (item.name == "mobile") {
          if (item.value == "" || $.trim(item.value).length != 11) {
            alert("请输入正确的手机号")
            _flag = false;
            return false;
          }
        }
      });
      return _flag;
    });
  })
</script>
</html>