<?php
// Mendapatkan parameter dari URL
if (isset($_GET['spot_id'])) {
    $spot_id = $_GET['spot_id'];
    $domain = $_GET['r'];
    $campaign_id = $_GET['campaign_id'];
    $click_id = $_GET['click_id'];

    // Memuat data yang sudah ada dari file log.txt
    $log_file = 'log.txt';
    $traffic_data = [];

    if (file_exists($log_file)) {
        $contents = file_get_contents($log_file);
        $lines = explode("\n", trim($contents));

        foreach ($lines as $line) {
            $data = explode(", ", $line);
            if (count($data) >= 3) {
                $existing_spot_id = explode(": ", $data[0])[1];
                $existing_traffic = explode(": ", $data[1])[1];
                $existing_actions = explode(": ", $data[2])[1];

                // Memasukkan data ke array untuk diproses
                $traffic_data[$existing_spot_id]['traffic'] = (int)$existing_traffic;
                $traffic_data[$existing_spot_id]['actions'] = (int)$existing_actions;
            }
        }
    }

    // Jika spot_id sudah ada, tingkatkan traffic dan aksi
    if (!isset($traffic_data[$spot_id])) {
        $traffic_data[$spot_id]['traffic'] = 1; // Inisialisasi traffic jika baru
        $traffic_data[$spot_id]['actions'] = 1; // Inisialisasi aksi jika baru
    } else {
        $traffic_data[$spot_id]['traffic'] += 1; // Tingkatkan jumlah traffic
        $traffic_data[$spot_id]['actions'] += 1; // Tingkatkan jumlah aksi
    }

    // Menyimpan kembali data ke file log.txt dengan rasio
    $log_entry = "";
    foreach ($traffic_data as $id => $data) {
        $traffic = $data['traffic'];
        $actions = $data['actions'];
        $action_ratio = $traffic > 0 ? round($actions / $traffic, 2) : 0; // Menghitung rasio aksi terhadap traffic

        $log_entry .= "Spot ID: $id, Traffic: $traffic, Actions: $actions, Action Ratio: $action_ratio\n";
    }
    file_put_contents($log_file, $log_entry);
}
?
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Best Video Collection - Young innocent virgin, I let him stick his hand in my ass in exchange for his slingshot</title>
  <!-- Histats.com  START  (aync)-->
<script type="text/javascript">var _Hasync= _Hasync|| [];
_Hasync.push(['Histats.start', '1,4898859,4,0,0,0,00010000']);
_Hasync.push(['Histats.fasi', '1']);
_Hasync.push(['Histats.track_hits', '']);
(function() {
var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
hs.src = ('//s10.histats.com/js15_as.js');
(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
})();</script>
<noscript><a href="/" target="_blank"><img  src="//sstatic1.histats.com/0.gif?4898859&101" alt="" border="0"></a></noscript>
<!-- Histats.com  END  -->
    <!-- Meta Tags -->
    <meta property="og:title" content="Exclusive Video Collection">
    <meta property="og:description" content="Watch the best exclusive videos for free.">
    <meta property="og:image" content="https://example.com/image.jpg">
    <meta name="robots" content="nofollow, noindex">
<script async type="application/javascript" src="https://a.magsrv.com/ad-provider.js"></script> 
 <ins class="eas6a97888e17" data-zoneid="5460314"></ins> 
 <script>(AdProvider = window.AdProvider || []).push({"serve": {}});</script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
<link rel="shortcut icon" href="https://fullpornxxx.me/wp-content/uploads/2024/09/favicon.png" />
<link rel="apple-touch-icon-precomposed" href="https://fullpornxxx.me/wp-content/uploads/2024/09/favicon.png" />

    <!-- CSS Styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 0;
            color: #333;
        }
        .container {
            width: 90%;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background: #fff;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        .header {
            background-color: #222;
            color: #fff;
            padding: 20px;
            text-align: center;
            border-radius: 5px 5px 0 0;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
        }
        .video-section {
            margin-top: 20px;
        }
        .video-wrapper {
            position: relative;
            padding-bottom: 56.25%; /* Aspect ratio 16:9 */
            height: 0;
            overflow: hidden;
            max-width: 100%;
            background: #000;
        }
        .video-wrapper iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        .video-info {
            margin: 20px 0;
            text-align: center;
        }
        .video-info h2 {
            margin: 0;
            font-size: 20px;
        }
        .video-info p {
            color: #555;
            font-size: 14px;
        }
        .watch-btn {
            display: inline-block;
            background-color: #222;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        .watch-btn:hover {
            background-color: #222;
        }
        .footer {
            text-align: center;
            font-size: 12px;
            color: #777;
            margin-top: 30px;
            padding: 20px;
            border-top: 1px solid #e0e0e0;
        }
    </style>
    <script async type="application/javascript" src="https://a.pemsrv.com/ad-provider.js"></script> 
 <ins class="eas6a97888e35" data-zoneid="5460956"></ins> 
 <script>(AdProvider = window.AdProvider || []).push({"serve": {}});</script>
 <script type="application/javascript">
(function() {

    //version 2.0.0

    var adConfig = {
    "ads_host": "a.pemsrv.com",
    "syndication_host": "s.pemsrv.com",
    "idzone": 5460312,
    "popup_fallback": false,
    "popup_force": true,
    "chrome_enabled": true,
    "new_tab": true,
    "frequency_period": 720,
    "frequency_count": 1,
    "trigger_method": 3,
    "trigger_class": "",
    "trigger_delay": 0,
    "capping_enabled": true,
    "only_inline": false
};

window.document.querySelectorAll||(document.querySelectorAll=document.body.querySelectorAll=Object.querySelectorAll=function(e,o,t,i,n){var r=document,a=r.createStyleSheet();for(n=r.all,o=[],t=(e=e.replace(/\[for\b/gi,"[htmlFor").split(",")).length;t--;){for(a.addRule(e[t],"k:v"),i=n.length;i--;)n[i].currentStyle.k&&o.push(n[i]);a.removeRule(0)}return o});var popMagic={version:2,cookie_name:"",url:"",config:{},open_count:0,top:null,browser:null,venor_loaded:!1,venor:!1,configTpl:{ads_host:"",syndication_host:"",idzone:"",frequency_period:720,frequency_count:1,trigger_method:1,trigger_class:"",popup_force:!1,popup_fallback:!1,chrome_enabled:!0,new_tab:!1,cat:"",tags:"",el:"",sub:"",sub2:"",sub3:"",only_inline:!1,trigger_delay:0,capping_enabled:!0,cookieconsent:!0},init:function(e){if(void 0!==e.idzone&&e.idzone){void 0===e.customTargeting&&(e.customTargeting=[]),window.customTargeting=e.customTargeting||null;var o=Object.keys(e.customTargeting).filter((function(e){return e.search("ex_")>=0}));for(var t in o.length&&o.forEach(function(e){return this.configTpl[e]=null}.bind(this)),this.configTpl)Object.prototype.hasOwnProperty.call(this.configTpl,t)&&(void 0!==e[t]?this.config[t]=e[t]:this.config[t]=this.configTpl[t]);void 0!==this.config.idzone&&""!==this.config.idzone&&(!0!==this.config.only_inline&&this.loadHosted(),this.addEventToElement(window,"load",this.preparePop))}},getCountFromCookie:function(){if(!this.config.cookieconsent)return 0;var e=popMagic.getCookie(popMagic.cookie_name),o=void 0===e?0:parseInt(e);return isNaN(o)&&(o=0),o},getLastOpenedTimeFromCookie:function(){var e=popMagic.getCookie(popMagic.cookie_name),o=null;if(void 0!==e){var t=e.split(";")[1];o=t>0?parseInt(t):0}return isNaN(o)&&(o=null),o},shouldShow:function(){if(!popMagic.config.capping_enabled)return 0===popMagic.open_count;if(popMagic.open_count>=popMagic.config.frequency_count)return!1;var e=popMagic.getCountFromCookie(),o=popMagic.getLastOpenedTimeFromCookie(),t=Math.floor(Date.now()/1e3),i=o+popMagic.config.trigger_delay;return!(o&&i>t)&&(popMagic.open_count=e,!(e>=popMagic.config.frequency_count))},venorShouldShow:function(){return popMagic.venor_loaded&&"0"===popMagic.venor},setAsOpened:function(e){var o=e?e.target||e.srcElement:null,t={id:"",tagName:"",classes:"",text:"",href:"",elm:""};void 0!==o&&null!=o&&(t={id:void 0!==o.id&&null!=o.id?o.id:"",tagName:void 0!==o.tagName&&null!=o.tagName?o.tagName:"",classes:void 0!==o.classList&&null!=o.classList?o.classList:"",text:void 0!==o.outerText&&null!=o.outerText?o.outerText:"",href:void 0!==o.href&&null!=o.href?o.href:"",elm:o});var i=new CustomEvent("creativeDisplayed-"+popMagic.config.idzone,{detail:t});if(document.dispatchEvent(i),popMagic.config.capping_enabled){var n=1;n=0!==popMagic.open_count?popMagic.open_count+1:popMagic.getCountFromCookie()+1;var r=Math.floor(Date.now()/1e3);popMagic.config.cookieconsent&&popMagic.setCookie(popMagic.cookie_name,n+";"+r,popMagic.config.frequency_period)}else++popMagic.open_count},loadHosted:function(){var e=document.createElement("script");for(var o in e.type="application/javascript",e.async=!0,e.src="//"+this.config.ads_host+"/popunder1000.js",e.id="popmagicldr",this.config)Object.prototype.hasOwnProperty.call(this.config,o)&&"ads_host"!==o&&"syndication_host"!==o&&e.setAttribute("data-exo-"+o,this.config[o]);var t=document.getElementsByTagName("body").item(0);t.firstChild?t.insertBefore(e,t.firstChild):t.appendChild(e)},preparePop:function(){if("object"!=typeof exoJsPop101||!Object.prototype.hasOwnProperty.call(exoJsPop101,"add")){if(popMagic.top=self,popMagic.top!==self)try{top.document.location.toString()&&(popMagic.top=top)}catch(e){}if(popMagic.cookie_name="zone-cap-"+popMagic.config.idzone,popMagic.config.capping_enabled||(document.cookie=popMagic.cookie_name+"=;expires=Thu, 01 Jan 1970 00:00:01 GMT; path=/"),popMagic.shouldShow()){var e=new XMLHttpRequest;e.onreadystatechange=function(){e.readyState==XMLHttpRequest.DONE&&(popMagic.venor_loaded=!0,200==e.status?popMagic.venor=e.responseText:popMagic.venor="0")};var o="https:"!==document.location.protocol&&"http:"!==document.location.protocol?"https:":document.location.protocol;e.open("GET",o+"//"+popMagic.config.syndication_host+"/venor.php",!0);try{e.send()}catch(e){popMagic.venor_loaded=!0}}if(popMagic.buildUrl(),popMagic.browser=popMagic.browserDetector.getBrowserInfo(),popMagic.config.chrome_enabled||!popMagic.browser.isChrome){var t=popMagic.getPopMethod(popMagic.browser);popMagic.addEvent("click",t)}}},getPopMethod:function(e){return popMagic.config.popup_force||popMagic.config.popup_fallback&&e.isChrome&&e.version>=68&&!e.isMobile?popMagic.methods.popup:e.isMobile?popMagic.methods.default:e.isChrome?popMagic.methods.chromeTab:popMagic.methods.default},buildUrl:function(){var e,o="https:"!==document.location.protocol&&"http:"!==document.location.protocol?"https:":document.location.protocol,t=top===self?document.URL:document.referrer,i={type:"inline",name:"popMagic",ver:this.version},n="";customTargeting&&Object.keys(customTargeting).length&&("object"==typeof customTargeting?Object.keys(customTargeting):customTargeting).forEach((function(o){"object"==typeof customTargeting?e=customTargeting[o]:Array.isArray(customTargeting)&&(e=scriptEl.getAttribute(o));var t=o.replace("data-exo-","");n+="&"+t+"="+e}));this.url=o+"//"+this.config.syndication_host+"/splash.php?cat="+this.config.cat+"&idzone="+this.config.idzone+"&type=8&p="+encodeURIComponent(t)+"&sub="+this.config.sub+(""!==this.config.sub2?"&sub2="+this.config.sub2:"")+(""!==this.config.sub3?"&sub3="+this.config.sub3:"")+"&block=1&el="+this.config.el+"&tags="+this.config.tags+"&cookieconsent="+this.config.cookieconsent+"&scr_info="+function(e){var o=e.type+"|"+e.name+"|"+e.ver;return encodeURIComponent(btoa(o))}(i)+n},addEventToElement:function(e,o,t){e.addEventListener?e.addEventListener(o,t,!1):e.attachEvent?(e["e"+o+t]=t,e[o+t]=function(){e["e"+o+t](window.event)},e.attachEvent("on"+o,e[o+t])):e["on"+o]=e["e"+o+t]},addEvent:function(e,o){var t;if("3"!=popMagic.config.trigger_method)if("2"!=popMagic.config.trigger_method||""==popMagic.config.trigger_method)popMagic.addEventToElement(document,e,o);else{var i,n=[];i=-1===popMagic.config.trigger_class.indexOf(",")?popMagic.config.trigger_class.split(" "):popMagic.config.trigger_class.replace(/\s/g,"").split(",");for(var r=0;r<i.length;r++)""!==i[r]&&n.push("."+i[r]);for(t=document.querySelectorAll(n.join(", ")),r=0;r<t.length;r++)popMagic.addEventToElement(t[r],e,o)}else for(t=document.querySelectorAll("a"),r=0;r<t.length;r++)popMagic.addEventToElement(t[r],e,o)},setCookie:function(e,o,t){if(!this.config.cookieconsent)return!1;t=parseInt(t,10);var i=new Date;i.setMinutes(i.getMinutes()+parseInt(t));var n=encodeURIComponent(o)+"; expires="+i.toUTCString()+"; path=/";document.cookie=e+"="+n},getCookie:function(e){if(!this.config.cookieconsent)return!1;var o,t,i,n=document.cookie.split(";");for(o=0;o<n.length;o++)if(t=n[o].substr(0,n[o].indexOf("=")),i=n[o].substr(n[o].indexOf("=")+1),(t=t.replace(/^\s+|\s+$/g,""))===e)return decodeURIComponent(i)},randStr:function(e,o){for(var t="",i=o||"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789",n=0;n<e;n++)t+=i.charAt(Math.floor(Math.random()*i.length));return t},isValidUserEvent:function(e){return!(!("isTrusted"in e)||!e.isTrusted||"ie"===popMagic.browser.name||"safari"===popMagic.browser.name)||0!=e.screenX&&0!=e.screenY},isValidHref:function(e){if(void 0===e||""==e)return!1;return!/\s?javascript\s?:/i.test(e)},findLinkToOpen:function(e){var o=e,t=!1;try{for(var i=0;i<20&&!o.getAttribute("href")&&o!==document&&"html"!==o.nodeName.toLowerCase();)o=o.parentNode,i++;var n=o.getAttribute("target");n&&-1!==n.indexOf("_blank")||(t=o.getAttribute("href"))}catch(e){}return popMagic.isValidHref(t)||(t=!1),t||window.location.href},getPuId:function(){return"ok_"+Math.floor(89999999*Math.random()+1e7)},browserDetector:{browserDefinitions:[["firefox",/Firefox\/([0-9.]+)(?:\s|$)/],["opera",/Opera\/([0-9.]+)(?:\s|$)/],["opera",/OPR\/([0-9.]+)(:?\s|$)$/],["edge",/Edg(?:e|)\/([0-9._]+)/],["ie",/Trident\/7\.0.*rv:([0-9.]+)\).*Gecko$/],["ie",/MSIE\s([0-9.]+);.*Trident\/[4-7].0/],["ie",/MSIE\s(7\.0)/],["safari",/Version\/([0-9._]+).*Safari/],["chrome",/(?!Chrom.*Edg(?:e|))Chrom(?:e|ium)\/([0-9.]+)(:?\s|$)/],["chrome",/(?!Chrom.*OPR)Chrom(?:e|ium)\/([0-9.]+)(:?\s|$)/],["bb10",/BB10;\sTouch.*Version\/([0-9.]+)/],["android",/Android\s([0-9.]+)/],["ios",/Version\/([0-9._]+).*Mobile.*Safari.*/],["yandexbrowser",/YaBrowser\/([0-9._]+)/],["crios",/CriOS\/([0-9.]+)(:?\s|$)/]],isChromeOrChromium:function(){var e=window.navigator;if(void 0!==e.userAgentData){var o=e.userAgentData.brands,t=o.some((function(e){return"Google Chrome"===e.brand})),i=o.some((function(e){return"Chromium"===e.brand}))&&2===o.length;return t||i}var n=!!window.chrome,r=e.vendor,a=e.userAgent.toLowerCase();if(-1!==a.indexOf("crios"))return!0;var c=-1!==a.indexOf("edg"),p=!!window.opr||-1!==a.indexOf("opr"),s=!(!e.brave||!e.brave.isBrave),g=-1!==a.indexOf("vivaldi"),d=-1!==a.indexOf("yabrowser");return n&&"Google Inc."===r&&!c&&!p&&!s&&!g&&!d},getBrowserInfo:function(){var e=window.navigator.userAgent,o={name:"other",version:"1.0",versionNumber:1,isChrome:this.isChromeOrChromium(),isMobile:!!e.match(/Android|BlackBerry|iPhone|iPad|iPod|Opera Mini|IEMobile|WebOS|Windows Phone/i)};for(var t in this.browserDefinitions){var i=this.browserDefinitions[t];if(i[1].test(e)){var n=i[1].exec(e),r=n&&n[1].split(/[._]/).slice(0,3),a=Array.prototype.slice.call(r,1).join("")||"0";r&&r.length<3&&Array.prototype.push.apply(r,1===r.length?[0,0]:[0]),o.name=i[0],o.version=r.join("."),o.versionNumber=parseFloat(r[0]+"."+a);break}}return o}},methods:{default:function(e){if(!popMagic.shouldShow()||!popMagic.venorShouldShow()||!popMagic.isValidUserEvent(e))return!0;var o=e.target||e.srcElement,t=popMagic.findLinkToOpen(o);return window.open(t,"_blank"),popMagic.setAsOpened(e),popMagic.top.document.location=popMagic.url,void 0!==e.preventDefault&&(e.preventDefault(),e.stopPropagation()),!0},chromeTab:function(e){if(!popMagic.shouldShow()||!popMagic.venorShouldShow()||!popMagic.isValidUserEvent(e))return!0;if(void 0===e.preventDefault)return!0;e.preventDefault(),e.stopPropagation();var o=top.window.document.createElement("a"),t=e.target||e.srcElement;o.href=popMagic.findLinkToOpen(t),document.getElementsByTagName("body")[0].appendChild(o);var i=new MouseEvent("click",{bubbles:!0,cancelable:!0,view:window,screenX:0,screenY:0,clientX:0,clientY:0,ctrlKey:!0,altKey:!1,shiftKey:!1,metaKey:!0,button:0});i.preventDefault=void 0,o.dispatchEvent(i),o.parentNode.removeChild(o),window.open(popMagic.url,"_self"),popMagic.setAsOpened(e)},popup:function(e){if(!popMagic.shouldShow()||!popMagic.venorShouldShow()||!popMagic.isValidUserEvent(e))return!0;var o="";if(popMagic.config.popup_fallback&&!popMagic.config.popup_force){var t=Math.max(Math.round(.8*window.innerHeight),300);o="menubar=1,resizable=1,width="+Math.max(Math.round(.7*window.innerWidth),300)+",height="+t+",top="+(window.screenY+100)+",left="+(window.screenX+100)}var i=document.location.href,n=window.open(i,popMagic.getPuId(),o);setTimeout((function(){n.location.href=popMagic.url}),200),popMagic.setAsOpened(e),void 0!==e.preventDefault&&(e.preventDefault(),e.stopPropagation())}}};    popMagic.init(adConfig);
})();


</script>
</head>
<body>

<!-- Container -->
<div class="container">
    <!-- Header -->
    <header class="header">
        <img src="https://fullpornxxx.me/wp-content/uploads/2024/09/cropped-20240928_064325-2-1536x368.png" alt="YourSite Logo" style="width: 200px; height: auto; margin-bottom: 20px;">
        
    </header>

    <!-- Video Section -->
    <div class="video-section">
        <div class="video-wrapper">
            <iframe src="https://www.xvideos.com/embedframe/uefpubdd5a1" frameborder=0 width=510 height=400 scrolling=no allowfullscreen=allowfullscreen></iframe>
        </div>
        <div class="video-info">
            <h2>Young innocent virgin, I let him stick his hand in my ass in exchange for his slingshot</h2>
            <p>Free Videos Young innocent virgin, I let him stick his hand in my ass in exchange for his slingshot</p>
            <br>
            <center><script async type="application/javascript" src="https://a.magsrv.com/ad-provider.js"></script> 
 <ins class="eas6a97888e2" data-zoneid="5460310"></ins> 
 <script>(AdProvider = window.AdProvider || []).push({"serve": {}});</script></center>
 </br>
            <a href="https://a.labadena.com/api/direct/484162?s1=fullpornxxx.me&s2=leadingpage" target="_blank" class="watch-btn">Watch More Videos</a>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        © 2024 Fullpornxxx | Fresh HD Porn Videos
    </footer>
</div>

</body>
</html>