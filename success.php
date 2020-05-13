
<!DOCTYPE html>
        <html>
         <head>
           <title>Страница благодарности</title>
           <meta charset="utf-8">
         </head>
         <body style="background: aliceblue;"> 
          <h2 style="width: 100%;
            text-align: center;
            margin-top: 50px;">Благодарим за Ваш заказ. Наш оператор позвонит Вам в ближайшее время</h2>
            <?php
// Metrika
if ( $_GET['mtrk'] && $mtrk = (int) $_GET['mtrk'] ) {
setcookie( 'mtrk', $mtrk, $now + 300, '/' );
} else $mtrk = $_COOKIE['mtrk'] ? (int) $_COOKIE['mtrk'] : false;
// Google Analytics
if ( $_GET['ga'] && $ga = preg_replace( '#[^0-9A-Za-z\_\-]+#i', '', $_GET['ga'] ) ) {
setcookie( 'ga', $ga, $now + 300, '/' );
} else $ga = $_COOKIE['ga'] ? preg_replace( '#[^0-9A-Za-z\_\-]+#i', '', $_COOKIE['ga'] ) : false;
// Facebook
if ( $_GET['fb'] && $fb = preg_replace( '#[^0-9A-Za-z\_\-]+#i', '', $_GET['fb'] ) ) {
setcookie( 'fb', $fb, $now + 300, '/' );
} else $fb = $_COOKIE['fb'] ? preg_replace( '#[^0-9A-Za-z\_\-]+#i', '', $_COOKIE['fb'] ) : false;
// VK
if ( $_GET['vk'] && $vk = preg_replace( '#[^0-9A-Za-z\_\-]+#i', '', $_GET['vk'] ) ) {
setcookie( 'vk', $vk, $now + 300, '/' );
} else $vk = $_COOKIE['vk'] ? preg_replace( '#[^0-9A-Za-z\_\-]+#i', '', $_COOKIE['vk'] ) : false;
if ( $mtrk ) : ?><!-- Yandex.Metrika counter --> <script type="text/javascript" > (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter<?=$mtrk;?> = new Ya.Metrika({ id:<?=$mtrk;?>, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/<?=$mtrk;?>" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter --><?
elseif (defined( 'METRIKA' )) : ?><!-- Yandex.Metrika counter --> <script type="text/javascript" > (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter<?=METRIKA;?> = new Ya.Metrika({ id:<?=METRIKA;?>, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/<?=METRIKA;?>" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter --><? endif;
if ( $ga ) : ?><script async src="https://www.googletagmanager.com/gtag/js?id=<?=$ga;?>"></script><script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments)}; gtag('js', new Date()); gtag('config', '<?=$ga;?>'); </script><?
elseif (defined( 'GA' )) : ?><script async src="https://www.googletagmanager.com/gtag/js?id=<?=GA;?>"></script><script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments)}; gtag('js', new Date()); gtag('config', '<?=GA;?>'); </script><? endif;
if ( $fb ) : ?><script>!function(f,b,e,v,n,t,s) {if(f.fbq)return;n=f.fbq=function(){n.callMethod?n.callMethod.apply(n,arguments):n.queue.push(arguments)}; if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0'; n.queue=[];t=b.createElement(e);t.async=!0; t.src=v;s=b.getElementsByTagName(e)[0]; s.parentNode.insertBefore(t,s)}(window, document,'script','https://connect.facebook.net/en_US/fbevents.js'); fbq('init', '<?=$fb;?>'); fbq('track', 'PageView'); fbq('track', 'Lead'); </script><noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=<?=$fb;?>&ev=Lead&noscript=1" /></noscript><?
elseif (defined( 'FB' )) : ?><script>!function(f,b,e,v,n,t,s) {if(f.fbq)return;n=f.fbq=function(){n.callMethod?n.callMethod.apply(n,arguments):n.queue.push(arguments)}; if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0'; n.queue=[];t=b.createElement(e);t.async=!0; t.src=v;s=b.getElementsByTagName(e)[0]; s.parentNode.insertBefore(t,s)}(window, document,'script','https://connect.facebook.net/en_US/fbevents.js'); fbq('init', '<?=FB;?>'); fbq('track', 'PageView'); fbq('track', 'Lead'); </script><noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=<?=FB;?>&ev=Lead&noscript=1" /></noscript><? endif;
if ( $vk ) : ?><script type="text/javascript">(window.Image ? (new Image()) : document.createElement('img')).src = 'https://vk.com/rtrg?p=<?=$vk;?>&event=lead';</script><?
elseif (defined( 'VK' )) : ?><script type="text/javascript">(window.Image ? (new Image()) : document.createElement('img')).src = 'https://vk.com/rtrg?p=<?=VK;?>&event=lead';</script><? endif;
?>
         </body> 
        </html>