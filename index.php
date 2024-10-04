//***************** Сторінка з завершенням замовлення ******************<font></font>
session_start();<font></font>
<font></font>
// формуємо масив із товарами в замовленні (якщо товар один - залишайте тільки перший елемент масиву)<font></font>
$products = urlencode(serialize($products_list));<font></font>
$sender = urlencode(serialize($_SERVER));<font></font>
// параметри запиту<font></font>
$data = array(<font></font>
    'key'             => '63ae48169b6abd886514d8ead4c96d50', // Ваш секретний токен<font></font>
    'products'        => $products,                    // масив з товарами в замовленні<font></font>
    'phone'           => $_REQUEST['phone'],           // телефон<font></font>
    'email'           => $_REQUEST['email'],           // електронка<font></font>
    
);<font></font>
<font></font>
// запит<font></font>
$curl = curl_init();<font></font>
curl_setopt($curl, CURLOPT_URL, 'http://halfpith.lp-crm.biz/api/addNewOrder.html');<font></font>
curl_setopt($curl, CURLOPT_POST, true);<font></font>
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);<font></font>
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);<font></font>
$out = curl_exec($curl);<font></font>
curl_close($curl);<font></font>
//$out – відповідь сервера у форматі JSON<font></font>
<font></font>
/*----- Резервна копія замовлення на електронну адресу (якщо замовлення не надійшло в CRM) -----*/<font></font>
// Відправка замовлення на пошту test@mail.com<font></font>
$name = stripslashes(htmlspecialchars($_REQUEST['name']));<font></font>
$phone = stripslashes(htmlspecialchars($_REQUEST['phone']));<font></font>
$subject = 'Замовлення товару з сайту!'; // заголовок листа<font></font>
$addressat = "test@mail.com"; // Ваш електронний адрес<font></font>
$success_url = './form-ok.php?name='.$name.'&phone='.$phone.'&time='.date("Y-m-d H:i:s").'';<font></font>
$message = "ПІБ: {$name}\nКонтактний телефон: {$phone}\Товар: {$_REQUEST['product_id']}";<font></font>
$verify = mail($addressat,$subject,$message,"Content-type:text/plain;charset=utf-8\r\n");<font></font>
if ($verify == 'true'){ //якщо лист надіслано<font></font>
    header('Location: '.$success_url); //редирект на сторінку спасибі<font></font>
    echo '<h1 style="color:green;">Вітаємо! Ваше замовлення прийнято!</h1>';<font></font>
    exit;<font></font>
}<font></font>


<!DOCTYPE html><html lang="uk"><head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=480">
	<link rel="profile" href="https://gmpg.org/xfn/11">
<meta name="google-site-verification" content="eU1YzhNLXZDK01H5XEFsXMm9vuKi3uc8o4tmcchHS4c">
	<title>ШВЕЕЙНАЯ МАШИНКА ФБ – YOBLINKO SHOP</title>
<meta name="robots" content="max-image-preview:large">
<link rel="dns-prefetch" href="//unpkg.com">
<link rel="alternate" type="application/rss+xml" title="YOBLINKO SHOP » стрічка" href="https://diskounter.com.ua/feed/">
<link rel="alternate" type="application/rss+xml" title="YOBLINKO SHOP » Канал коментарів" href="https://diskounter.com.ua/comments/feed/">
<link rel="alternate" type="application/rss+xml" title="YOBLINKO SHOP » ШВЕЕЙНАЯ МАШИНКА ФБ Канал коментарів" href="https://diskounter.com.ua/minishvei/feed/">
<script async="" src="js/gtm.js"></script><script async="" src="js/fbevents.js"></script><script>
window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/diskounter.com.ua\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.6.1"}};
/*! This file is auto-generated */
!function(i,n){var o,s,e;function c(e){try{var t={supportTests:e,timestamp:(new Date).valueOf()};sessionStorage.setItem(o,JSON.stringify(t))}catch(e){}}function p(e,t,n){e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(t,0,0);var t=new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data),r=(e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(n,0,0),new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data));return t.every(function(e,t){return e===r[t]})}function u(e,t,n){switch(t){case"flag":return n(e,"\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f","\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f")?!1:!n(e,"\ud83c\uddfa\ud83c\uddf3","\ud83c\uddfa\u200b\ud83c\uddf3")&&!n(e,"\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f","\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");case"emoji":return!n(e,"\ud83d\udc26\u200d\u2b1b","\ud83d\udc26\u200b\u2b1b")}return!1}function f(e,t,n){var r="undefined"!=typeof WorkerGlobalScope&&self instanceof WorkerGlobalScope?new OffscreenCanvas(300,150):i.createElement("canvas"),a=r.getContext("2d",{willReadFrequently:!0}),o=(a.textBaseline="top",a.font="600 32px Arial",{});return e.forEach(function(e){o[e]=t(a,e,n)}),o}function t(e){var t=i.createElement("script");t.src=e,t.defer=!0,i.head.appendChild(t)}"undefined"!=typeof Promise&&(o="wpEmojiSettingsSupports",s=["flag","emoji"],n.supports={everything:!0,everythingExceptFlag:!0},e=new Promise(function(e){i.addEventListener("DOMContentLoaded",e,{once:!0})}),new Promise(function(t){var n=function(){try{var e=JSON.parse(sessionStorage.getItem(o));if("object"==typeof e&&"number"==typeof e.timestamp&&(new Date).valueOf()<e.timestamp+604800&&"object"==typeof e.supportTests)return e.supportTests}catch(e){}return null}();if(!n){if("undefined"!=typeof Worker&&"undefined"!=typeof OffscreenCanvas&&"undefined"!=typeof URL&&URL.createObjectURL&&"undefined"!=typeof Blob)try{var e="postMessage("+f.toString()+"("+[JSON.stringify(s),u.toString(),p.toString()].join(",")+"));",r=new Blob([e],{type:"text/javascript"}),a=new Worker(URL.createObjectURL(r),{name:"wpTestEmojiSupports"});return void(a.onmessage=function(e){c(n=e.data),a.terminate(),t(n)})}catch(e){}c(n=f(s,u,p))}t(n)}).then(function(e){for(var t in e)n.supports[t]=e[t],n.supports.everything=n.supports.everything&&n.supports[t],"flag"!==t&&(n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&n.supports[t]);n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&!n.supports.flag,n.DOMReady=!1,n.readyCallback=function(){n.DOMReady=!0}}).then(function(){return e}).then(function(){var e;n.supports.everything||(n.readyCallback(),(e=n.source||{}).concatemoji?t(e.concatemoji):e.wpemoji&&e.twemoji&&(t(e.twemoji),t(e.wpemoji)))}))}((window,document),window._wpemojiSettings);
</script>
<style id="wp-emoji-styles-inline-css">

	img.wp-smiley, img.emoji {
		display: inline !important;
		border: none !important;
		box-shadow: none !important;
		height: 1em !important;
		width: 1em !important;
		margin: 0 0.07em !important;
		vertical-align: -0.1em !important;
		background: none !important;
		padding: 0 !important;
	}
</style>
<link rel="stylesheet" id="wp-block-library-css" href="css/style.min.css" media="all">
<style id="classic-theme-styles-inline-css">
/*! This file is auto-generated */
.wp-block-button__link{color:#fff;background-color:#32373c;border-radius:9999px;box-shadow:none;text-decoration:none;padding:calc(.667em + 2px) calc(1.333em + 2px);font-size:1.125em}.wp-block-file__button{background:#32373c;color:#fff;text-decoration:none}
</style>
<style id="global-styles-inline-css">
:root{--wp--preset--aspect-ratio--square: 1;--wp--preset--aspect-ratio--4-3: 4/3;--wp--preset--aspect-ratio--3-4: 3/4;--wp--preset--aspect-ratio--3-2: 3/2;--wp--preset--aspect-ratio--2-3: 2/3;--wp--preset--aspect-ratio--16-9: 16/9;--wp--preset--aspect-ratio--9-16: 9/16;--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);}:where(.is-layout-flex){gap: 0.5em;}:where(.is-layout-grid){gap: 0.5em;}body .is-layout-flex{display: flex;}.is-layout-flex{flex-wrap: wrap;align-items: center;}.is-layout-flex > :is(*, div){margin: 0;}body .is-layout-grid{display: grid;}.is-layout-grid > :is(*, div){margin: 0;}:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}
:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}
:root :where(.wp-block-pullquote){font-size: 1.5em;line-height: 1.6;}
</style>
<link rel="stylesheet" id="contact-form-7-css" href="css/styles.css" media="all">
<link rel="stylesheet" id="wp-components-css" href="css/style.min_1.css" media="all">
<link rel="stylesheet" id="lottiefiles-css-css" href="css/lottiefiles-frontend.css.css" media="all">
<link rel="stylesheet" id="tovarka-style-css" href="css/style.css" media="all">
<link rel="stylesheet" id="swiper-slider-css" href="css/swiper-bundle.min.css" media="screen">
<link rel="stylesheet" id="landing-font-css" href="css/fonts.css" media="screen">
<link rel="stylesheet" id="landing-design-css" href="css/landing-style-3.css" media="screen">
<script src="js/frontend-helper.js" id="lottiefiles-block-frontend-js"></script>
<script src="js/countdown.js" id="countdown-js"></script>
<link rel="https://api.w.org/" href="https://diskounter.com.ua/wp-json/"><link rel="alternate" title="JSON" type="application/json" href="https://diskounter.com.ua/wp-json/wp/v2/posts/6445"><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://diskounter.com.ua/xmlrpc.php?rsd">
<meta name="generator" content="WordPress 6.6.1">
<link rel="canonical" href="https://diskounter.com.ua/minishvei/">
<link rel="shortlink" href="https://diskounter.com.ua/?p=6445">
<link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed" href="https://diskounter.com.ua/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fdiskounter.com.ua%2Fminishvei%2F">
<link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed" href="https://diskounter.com.ua/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fdiskounter.com.ua%2Fminishvei%2F&amp;format=xml">
        <!-- Facebook Pixel Code -->
        <script>
            !function(f,b,e,v,n,t,s)
            {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
                n.callMethod.apply(n,arguments):n.queue.push(arguments)};
                if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
                n.queue=[];t=b.createElement(e);t.async=!0;
                t.src=v;s=b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t,s)}(window, document,'script',
                'https://connect.facebook.net/en_US/fbevents.js');
            const pixels = [];
            fbq('init', '1266230777677163' );
pixels.push('1266230777677163');
fbq('init', '2748650045182921' );
pixels.push('2748650045182921');
            fbq("track", 'PageView');
            localStorage.setItem("facebook_pixels", JSON.stringify(pixels));
        </script>
        <noscript>
                    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1266230777677163&ev=PageView&noscript=1"/>
	                <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=2748650045182921&ev=PageView&noscript=1"/>
	            </noscript>
        <!-- End Facebook Pixel Code -->

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PTWF2VJ9');</script>
<!-- End Google Tag Manager -->

<!-- Google tag (gtag.js) -->
<script async="" src="https://www.googletagmanager.com/gtag/js?id=AW-16650420828"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-16650420828');
</script>
<link rel="icon" href="images/cropped-3055581cff0526602142cbb0bfba9fca-1-32x32.png" sizes="32x32">
<link rel="icon" href="images/cropped-3055581cff0526602142cbb0bfba9fca-1-192x192.png" sizes="192x192">
<link rel="apple-touch-icon" href="images/cropped-3055581cff0526602142cbb0bfba9fca-1-180x180.png">
<meta name="msapplication-TileImage" content="https://diskounter.com.ua/wp-content/uploads/2022/09/cropped-3055581cff0526602142cbb0bfba9fca-1-270x270.png">
<script src="js/wp-emoji-release.min.js" defer=""></script></head>

<body class="post-template-default single single-post postid-6445 single-format-standard">
<div id="page" class="site">
    <div class="container-body">
    <div class="content-wrap">
        <div class="top-card-wrap">

            

<div class="item-card">
    <div class="header">
                <h1 class="product-title">ШИЙ ДЕ ЗАВГОДНО</h1>
    </div>
    <div class="featured-media">
                    <div class="discount">51% знижка</div>
                <img width="955" height="1200" src="images/1-11.jpg" class="attachment-full size-full" alt="" decoding="async" fetchpriority="high">    </div>
    

            <div class="pricing-block">
                            <div class="old-price">
                    <span>Звичайна ціна</span>
                    <strong>549</strong>
                    <small>грн</small>
                </div>
            
                            <div class="new-price">
                    <span>Акційна ціна</span>
                    <strong>269</strong>
                    <small>грн</small>
                </div>
                    </div>
    </div>

                                        <div class="countdown">
    <h4>До кінця акції залишилось:</h4>
    <div class="value">
        <span class="js-countdown" data-timer="20700" data-labels="день, годин, хвилин, секунд"></span>
    </div>
    <div class="countdown-text">
        <p>*- Акція триває з 11.08.2024 по 12.08.2024</p>
            </div>
</div>
                        <div class="order-button margin20">
                <a href="#order_form" class="big-button">З�&nbsp;ОБИТИ ЗАМОВЛЕННЯ</a>
            </div>

            <div class="number-discount">
    <h3 class="block-title">ЗАОЩАДЖУЙ П�&nbsp;ЯМО ЗА�&nbsp;АЗ!</h3>
    <ol role="list" class="discount-list">
        <li>2 шт = <strong>511</strong> грн ( знижка 5% )</li><li>3 шт = <strong>726</strong> грн ( знижка 10% )</li><li>4 шт = <strong>914</strong> грн ( знижка 15% )</li>    </ol>
</div>                    </div>
    <div class="product-description">
        <h2 class="title"></h2>
        <div class="presentation-wrap">
        <div class="presentation">
            <h2 class="title" style="text-align: center;">�&nbsp;УЧНА ШВЕЙНА МАШИНКА</h2>
<p><img decoding="async" class="size-full wp-image-6450 aligncenter" src="images/7-4.jpg" alt="" width="800" height="800"></p>
<p style="text-align: center;">Якісний пластик зовні, та міцний метал всередині. Має низький рівень шуму при використанні.</p>
<p><img decoding="async" class="size-full wp-image-6451 aligncenter" src="images/2-8.jpg" alt="" width="1080" height="1461"></p>
<p style="text-align: center;">�&nbsp;учна швейна машинка яка працює від батарейок.</p>
<p style="text-align: center;">Завдяки цьому, її зручно брати в подорож або, навіть, на майстер-клас на природі.</p>
<p><img decoding="async" class="size-full wp-image-6452 aligncenter" src="images/3-10.jpg" alt="" width="1080" height="1324"></p>
<p style="text-align: center;">Всього шість простих кроків, щоб заправити нитку та можно насолоджуватись творчим процесом.</p>
<p><img decoding="async" class="size-full wp-image-6453 aligncenter" src="images/4-10.jpg" alt="" width="1080" height="1324"></p>
<p><img decoding="async" class="alignnone size-full wp-image-6454" src="images/5-11.jpg" alt="" width="1080" height="1226"></p>
<div class="presentation">
<p style="text-align: center;">Гнучке регулювання лапки дозволить працювати з усіма типами тканин.</p>
</div>
        </div>

                </div>
    </div>

               <div class="features-block">

<h1 class="title">ПЕ�&nbsp;ЕВАГИ</h1>
    <div class="feature-item-wrap">
    <div class="feature-item">
        <div class="feature-image"><img width="778" height="760" src="images/8-5.jpg" class="attachment-full size-full" alt="" decoding="async"></div>
        <div class="feature-text">
            <h4 class="feature-title">ПО�&nbsp;ТАТИВНА, МОЖНА Б�&nbsp;АТИ В ПОДО�&nbsp;ОЖ</h4>
            <div class="feature-description"></div>
        </div>
    </div>
    <div class="feature-item">
        <div class="feature-image"><img width="764" height="568" src="images/9-4.jpg" class="attachment-full size-full" alt="" decoding="async"></div>
        <div class="feature-text">
            <h4 class="feature-title">ЯКІСНЕ ШИТТЯ, ЯК І ЗВИЧАЙНОЇ ВЕЛИКОЇ ШВЕЙНОЇ МАШИНКА</h4>
            <div class="feature-description"></div>
        </div>
    </div>
    </div>
</div>       
    

        <div class="specifications">

        <h2 class="title">ХА�&nbsp;АКТЕ�&nbsp;ИСТИКА</h2>

                <div class="image">
           <img width="1080" height="892" src="images/6-6.jpg" class="attachment-full size-full" alt="" decoding="async">        </div>
        
        <ul role="list" class="characteristics__list">
                                                <li>
                
                    <b>Вага з упаковкою:</b>
                    <span>300г</span>
                </li>
                                                <li>
                
                    <b>�&nbsp;озміри:</b>
                    <span>21X6.5X3.5 см</span>
                </li>
                                                <li>
                
                    <b>Матеріал:</b>
                    <span>Пластик + метал</span>
                </li>
                                                <li>
                
                    <b>Тип живлення:</b>
                    <span>4 батареї АА</span>
                </li>
                    </ul>

        <div class="order-button margin30">
            <a href="#order_form" class="big-button">ЗАМОВИТИ ЗІ ЗНИЖКОЮ</a>
        </div>

    </div>


        
        <section class="sect_5">
    <h2 class="title">Як замовити<strong><br>ШИЙ ДЕ ЗАВГОДНО</strong></h2>
    <ul class="list" role="list">
        <li class="clearfix">
            <img src="images/order_1.jpg" alt="">
            <div class="text">
                <h4>Швидка доставка</h4>
                <p>Доставка Укр та Новою поштою протягом 1-3 днів. Вартість доставки – від 50 грн.</p>
            </div>
        </li>
        <li class="clearfix">
            <img src="images/order_2.jpg" alt="">
            <div class="text">
                <h4>Зручна оплата</h4>
                <p>Оплата провадиться тільки при отриманні замовлення на руки.</p>
            </div>
        </li>
        <li class="clearfix">
            <img src="images/order_3.jpg" alt="">
            <div class="text">
                <h4>Гарантії</h4>
                <p>Вся наша продукція пройшла перевірку якості.</p>
            </div>
        </li>
    </ul>
</section>
        <div class="top-card-wrap">

            

<div class="item-card">
    <div class="header">
                <h1 class="product-title">ШИЙ ДЕ ЗАВГОДНО</h1>
    </div>
    <div class="featured-media">
                    <div class="discount">51% знижка</div>
                <img width="955" height="1200" src="images/1-11.jpg" class="attachment-full size-full" alt="" decoding="async">    </div>
    

            <div class="pricing-block">
                            <div class="old-price">
                    <span>Звичайна ціна</span>
                    <strong>549</strong>
                    <small>грн</small>
                </div>
            
                            <div class="new-price">
                    <span>Акційна ціна</span>
                    <strong>269</strong>
                    <small>грн</small>
                </div>
                    </div>
    </div>

            <div class="contact-form" id="order_form" data-redirect="/">
                <div class="countdown">
    <h4>До кінця акції залишилось:</h4>
    <div class="value">
        <span class="js-countdown" data-timer="20700" data-labels="день, годин, хвилин, секунд"></span>
    </div>
    <div class="countdown-text">
        <p>*- Акція триває з 11.08.2024 по 12.08.2024</p>
            </div>
</div>

                <div class="order-form">
                    
<div class="wpcf7 no-js" id="wpcf7-f97-o1" lang="uk" dir="ltr">
<div class="screen-reader-response"><p role="status" aria-live="polite" aria-atomic="true"></p> <ul></ul></div>
<form id="order_form" action="zakaz.php" method="post" class="order_form wpcf7-form init" aria-label="Contact form" novalidate="novalidate" data-status="init">
<div style="display: none;">
<input type="hidden" name="_wpcf7" value="97">
<input type="hidden" name="_wpcf7_version" value="5.7.4">
<input type="hidden" name="_wpcf7_locale" value="uk">
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f97-o1">
<input type="hidden" name="_wpcf7_container_post" value="0">
<input type="hidden" name="_wpcf7_posted_data_hash" value="">
<input type="hidden" name="crm_office" value="135">
<input type="hidden" name="crm_source" value="1">
<input type="hidden" name="item_id" value="MNSHVN-188">
<input type="hidden" name="article_number" value="MNSHVN-188">
<input type="hidden" name="item_name" value=" - ШИЙ ДЕ ЗАВГОДНО">
<input type="hidden" name="item_price" value="269">
<input type="hidden" name="quantity" value="1">
<input type="hidden" name="post_id" value="6445">
</div>
<span class="wpcf7-form-control-wrap" data-name="select-discount"><select name="discount" class="input select-discount" id="select-discount"><option value="269" data-number="1" selected="">▼ Обрати кiлькiсть (шт.)</option><option value="269" data-number="1">1 шт = 269 грн ( Без знижки )</option><option value="511" data-number="2">2 шт = 511 грн ( знижка 5% )</option><option value="726" data-number="3">3 шт = 726 грн ( знижка 10% )</option><option value="914" data-number="4">4 шт = 914 грн ( знижка 15% )</option></select></span>

<span class="wpcf7-form-control-wrap" data-name="name"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required field" aria-required="true" aria-invalid="false" placeholder="Ввeдіть Ваше ім'я" value="" type="text" name="name"></span>

<span class="wpcf7-form-control-wrap" data-name="phone"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel field" aria-required="true" aria-invalid="false" placeholder="Ввeдіть Вaш тeлeфoн" value="" type="tel" name="phone"></span>

<button class="big-button button-submit">Придбати зараз</button><div class="wpcf7-response-output" aria-hidden="true"></div>
</form>
</div>

                </div>
            </div>
        </div>

    <div class="images">
                    <img width="910" height="1200" src="images/0303.png" class="attachment-full size-full" alt="" decoding="async" loading="lazy">            </div>
</div>

<footer class="footer">
    <div class="footer-text"><p style="text-align: center;"><a href="/">МАГАЗИН НАШИХ ТОВА�&nbsp;IВ</a></p>
<p style="text-align: center;">Email: <a href="mailto:cozymediateam@gmail.com">cozymediateam@gmail.com</a></p>
<p>�&nbsp;</p>
</div>
    <div class="menu-menu-1-container"><ul id="menu-menu-1" class="footer-menu"><li id="menu-item-80" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-80"><a href="https://diskounter.com.ua/">Головна</a></li>
<li id="menu-item-116" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-privacy-policy menu-item-116"><a rel="privacy-policy" href="https://diskounter.com.ua/privacy-policy/">Політика конфіденційності</a></li>
<li id="menu-item-117" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-117"><a href="https://diskounter.com.ua/cookie-policy/">Файли cookie</a></li>
<li id="menu-item-118" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-118"><a href="https://diskounter.com.ua/public-offer/">Публічна оферта</a></li>
<li id="menu-item-119" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-119"><a href="https://diskounter.com.ua/delivery-terms/">Оплата та доставка</a></li>
</ul></div></footer>
    <script>

        let redirect_thanks_page = '/thank-you/';

		let formElement = document.getElementById("order_form");
		let btn = document.querySelector('a.big-button');

		function handleButtonClick(e) {
			e.preventDefault();
   			formElement.scrollIntoView({block: "center", behavior: "smooth"});
		}

		btn.addEventListener('click', handleButtonClick);
		
        let select = document.getElementById("select-discount");
        let quantityInput = document.querySelector("input[name='quantity']");
        redirect_thanks_page = formElement.dataset.redirect;

        if (select !== null) {
            if (select.length){
                select.addEventListener("change", function (){
                    quantityInput.value = select.options[select.selectedIndex].getAttribute('data-number');
                });
            }
        } else {
            quantityInput.value = 1;
        }

        sessionStorage.setItem('tovarka_item_quantity', quantityInput.value );

        let price = document.querySelector("input[name='item_price']");

        document.addEventListener( 'wpcf7submit', function( event ) {
            let inputs = event.detail.inputs;

            for ( let i = 0; i < inputs.length; i++ ) {
                if ( 'username' === inputs[i].name ) {
                    sessionStorage.setItem('tovarka_username', inputs[i].value );
                }
                if ( 'phone' === inputs[i].name ) {
                    sessionStorage.setItem('tovarka_phone', inputs[i].value );
                }
                if ( 'crm_office' === inputs[i].name ) {
                    sessionStorage.setItem('tovarka_office', inputs[i].value );
                }
                if ( 'crm_source' === inputs[i].name ) {
                    sessionStorage.setItem('tovarka_source', inputs[i].value );
                }
                if ( 'item_price' === inputs[i].name ) {
                    sessionStorage.setItem('price', inputs[i].value );
                }
                if ( 'item_name' === inputs[i].name ) {
                    sessionStorage.setItem('tovarka_item_name', inputs[i].value );
                }
                if ( 'item_id' === inputs[i].name ) {
                    sessionStorage.setItem('tovarka_item_id', inputs[i].value );
                }
                if ( 'article_number' === inputs[i].name ) {
                    sessionStorage.setItem('tovarka_article_number', inputs[i].value );
                }
            }
        }, false );

        document.addEventListener( 'wpcf7mailsent', function( event ) {

                        if (select !== null) {
                fbq('track', 'Purchase', {currency: "UAH", value: select.value});
            } else {
                fbq('track', 'Purchase', {currency: "UAH", value: price.value });
            }

                        location = redirect_thanks_page;
        }, false );

    </script>
    <script src="js/lottie-player.js" id="lottieFilesCDN-js"></script>
<script src="js/dotlottie-player.js" id="lottieFilesDLCDN-js"></script>
<script src="js/lottiefiles-interactivity.js" id="lottieFilesInteractivityCDN-js"></script>
<script src="js/index.js" id="swv-js"></script>
<script id="contact-form-7-js-extra">
var wpcf7 = {"api":{"root":"https:\/\/diskounter.com.ua\/wp-json\/","namespace":"contact-form-7\/v1"}};
</script>
<script src="js/index_1.js" id="contact-form-7-js"></script>
<script src="js/swiper-bundle.min.js" id="swiper-slider-js"></script>
<script id="swiper-slider-js-after">
const swiper = new Swiper('.swiper-reviews', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },
  navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
});
</script>



</div></div></body></html>