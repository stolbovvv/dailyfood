<?php
// Get params.
	
$site_phone = get_option( 'site_phone' );
$site_email = get_option( 'site_email' );
$callback_btn_text = get_option( 'callback_btn_text' );
$instagram_link = get_option( 'instagram_link' );
$vk_link = get_option( 'vk_link' );
?>
<footer class="footer">
    <div class="container flex">
        <?php
		if( has_custom_logo() ){
			$custom_logo_id = get_theme_mod( 'custom_logo' );
			$custom_logo_image = wp_get_attachment_image_src( $custom_logo_id , 'full' );

			echo '<img src="' . $custom_logo_image[0] . '" alt="" class="footer__logo">';
		} else {
			//echo '<img src="' . get_template_directory_uri() . '/images/header-logo.png" alt="" class="footer__logo">';
			echo '<img src="' . get_template_directory_uri() . '/images/logo.svg" alt="" class="footer__logo">';
		}
		?>
		<div class="footer__company">
            <div class="footer__company-item">Компания «DailyFood»</div>
            <div class="footer__company-item">ОГРНИП: 316236400057273</div>
            <div class="footer__company-item">ИНН: 232906777130</div>
        </div>
        <div class="footer__contacts">
            <div class="footer__contacts-item">© 2016-<?=date('Y');?></div>
            <div class="footer__contacts-item">
                <a href="mailto:<?php echo $site_email; ?>"><?php echo $site_email; ?></a>
            </div>
            <a href="#privacy-id" class="footer__contacts-item privacy-popup">
                <span>Политика конфиденциальности</span>
            </a>
        </div>
        <?php if( !empty( $instagram_link ) || !empty( $vk_link ) ) : ?>
		<div class="footer__social">
            <?php if( !empty( $instagram_link ) ) : ?>
			<a href="<?php echo $instagram_link; ?>" target="_blank" rel="nofollow"><img src="<?php echo get_option( 'instagram_img' ); ?>" alt="Instagram" class="footer__social-item"></a>
            <?php endif; ?>
			<?php if( !empty( $vk_link ) ) : ?>
			<a href="<?php echo $vk_link; ?>" target="_blank" rel="nofollow"><img src="<?php echo get_option( 'vk_img' ); ?>" alt="VK" class="footer__social-item"></a>
			<?php endif; ?>
		</div>
		<?php endif; ?>
        <div class="footer__phone">
            <a href="tel:+<?php echo filter_number( $site_phone ); ?>" class="footer__number"><div><?php echo $site_phone; ?></div></a>
            <div class="footer__call call-popup"><?php echo $callback_btn_text; ?></div>
        </div>
        <div class="footer__author">

        </div>
    </div>
</footer>


<div id="call-back__form-popup" class="popup popup--form">
    <div class="popup__wrapper">
        <div class="popup__close">
            <svg
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    width="20px" height="20px">
                <path fill-rule="evenodd" fill="rgb(255, 255, 255)"
                      d="M19.732,1.378 L11.124,10.000 L19.732,18.620 C20.047,18.936 20.047,19.448 19.732,19.763 C19.574,19.921 19.368,20.000 19.161,20.000 C18.955,20.000 18.749,19.921 18.591,19.763 L9.984,11.142 L1.377,19.763 C1.219,19.921 1.012,20.000 0.806,20.000 C0.600,20.000 0.393,19.921 0.236,19.763 C-0.079,19.448 -0.079,18.936 0.236,18.620 L8.843,9.999 L0.236,1.378 C-0.079,1.063 -0.079,0.551 0.236,0.236 C0.551,-0.080 1.061,-0.080 1.376,0.236 L9.984,8.857 L18.591,0.236 C18.906,-0.080 19.417,-0.080 19.732,0.236 C20.047,0.551 20.047,1.063 19.732,1.378 Z"/>
            </svg>
        </div>
        <div class="general__form">
			<?php echo do_shortcode('[contact-form-7 id="6" title="Контактная форма в всплывающем окне"]'); ?>
            <div class="general__policy">
                <input id="popup--form-policy" type="checkbox" checked>
                <label for="popup--form-policy"></label>
                <div> Я принимаю условия <a href="#privacy-id" class="privacy-popup"><span>Политики конфиденциальности</span></a></div>
            </div>
        </div>
    </div>
</div>

<div id="ration__form-popup" class="popup popup--form2">
    <div class="popup__wrapper">
        <div class="popup__close">
            <svg
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    width="20px" height="20px">
                <path fill-rule="evenodd" fill="rgb(255, 255, 255)"
                      d="M19.732,1.378 L11.124,10.000 L19.732,18.620 C20.047,18.936 20.047,19.448 19.732,19.763 C19.574,19.921 19.368,20.000 19.161,20.000 C18.955,20.000 18.749,19.921 18.591,19.763 L9.984,11.142 L1.377,19.763 C1.219,19.921 1.012,20.000 0.806,20.000 C0.600,20.000 0.393,19.921 0.236,19.763 C-0.079,19.448 -0.079,18.936 0.236,18.620 L8.843,9.999 L0.236,1.378 C-0.079,1.063 -0.079,0.551 0.236,0.236 C0.551,-0.080 1.061,-0.080 1.376,0.236 L9.984,8.857 L18.591,0.236 C18.906,-0.080 19.417,-0.080 19.732,0.236 C20.047,0.551 20.047,1.063 19.732,1.378 Z"/>
            </svg>
        </div>
        <div class="general__form">
			<?php echo do_shortcode('[contact-form-7 id="266" title="Форма заказа рациона"]'); ?>
            <div class="general__policy">
                <input id="popup--form-policy" type="checkbox" checked>
                <label for="popup--form-policy"></label>
                <div>Я принимаю условия <a href="#privacy-id" class="privacy-popup"><span>Политики конфиденциальности</span></a></div>
            </div>
        </div>
    </div>
</div>

<div class="popup popup--thanks">
    <div class="popup__wrapper">
        <div class="popup__close">
            <svg
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    width="20px" height="20px">
                <path fill-rule="evenodd" fill="rgb(255, 255, 255)"
                      d="M19.732,1.378 L11.124,10.000 L19.732,18.620 C20.047,18.936 20.047,19.448 19.732,19.763 C19.574,19.921 19.368,20.000 19.161,20.000 C18.955,20.000 18.749,19.921 18.591,19.763 L9.984,11.142 L1.377,19.763 C1.219,19.921 1.012,20.000 0.806,20.000 C0.600,20.000 0.393,19.921 0.236,19.763 C-0.079,19.448 -0.079,18.936 0.236,18.620 L8.843,9.999 L0.236,1.378 C-0.079,1.063 -0.079,0.551 0.236,0.236 C0.551,-0.080 1.061,-0.080 1.376,0.236 L9.984,8.857 L18.591,0.236 C18.906,-0.080 19.417,-0.080 19.732,0.236 C20.047,0.551 20.047,1.063 19.732,1.378 Z"/>
            </svg>
        </div>
        <div class="general__form">
            <h3 class="general__form-header">Спасибо за заявку!</h3>
            <p class="general__form-text">
                Наш специалист скоро свяжется с Вами. Пожалуйста, будьте на связи.
            </p>
        </div>
    </div>
</div>

<div id="privacy-id" class="privacy mfp-hide white-popup">
    <div class="mfp-close"></div>
	<?php
	$privacy_page = get_post( 493 );
	echo wpautop( $privacy_page->post_content );
	?>
</div>

<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/script-tab.js"></script>

<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
<!-- validate -->
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/validate/jquery.validate.min.js"></script>
<!-- magnific-popup -->
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/jquery.magnific-popup-inline.min.js"></script>

<!-- maskedinput -->
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/jquery.maskedinput.min.js"></script>

<!-- MAIN SCRIPT -->
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/main.js"></script>
<!-- CALC SCRIPT -->
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/calc.js"></script>
<script>
   function declOfNum(number, titles) { // склонение именительных рядом с числительным
    cases = [2, 0, 1, 1, 1, 2];  
    return number+" "+titles[ (number%100>4 && number%100<20)? 2 : cases[(number%10<5)?number%10:5] ];  
  }

  $( function() {
    $( "#gender" ).selectmenu({
      change: function( event, ui ) {calcIt();}
    });

    $( "#activity" ).selectmenu({
      change: function( event, ui ) {calcIt();}
    });

    $( "#target" ).selectmenu({
      change: function( event, ui ) {calcIt();}
    });
  } );

  var ageSliderTemplate = `
  <div class="slider-wrapper">
    <button type="button" class="change" data-step="-1"><img src="/wp-content/themes/DailyFood/scss/../images/minus.svg" aria-hidden="true"></button>
    <div class="slider slider-age">
      <div id="custom-handle" class="ui-slider-handle"></div>
      <div id="handle-val"></div>
    </div>
    <button type="button" class="change" data-step="+1"><img src="/wp-content/themes/DailyFood/scss/../images/add.svg" aria-hidden="true"></button>
  </div>`;

  var ageSlider = [ {
    min: 13,
    max: 80,
    value: 20
  } ];


  $('#age-slider').append(Array(ageSlider.length).fill(ageSliderTemplate).join('')).find('.slider-age').each(function(i) {
    $(this).slider(ageSlider[i]);
    var handle = $('#age-slider').find( "#handle-val" );
    handle.text( declOfNum($(this).slider( "value" ), ['год', 'года', 'лет']));
  });


  $('.change').button().click(function() {
    var
      $this = $(this),
      $handle = $this.closest('#age-slider').find('#handle-val'),
      $slider = $this.closest('#age-slider').find('.ui-slider');
    $slider.slider('option', 'value', $slider.slider('option', 'value') + +$this.data('step'));
    $handle.text( declOfNum($slider.slider( "value" ), ['год', 'года', 'лет']));
    calcIt();
  });

  $( function() {
      var handle = $('#age-slider').find( "#handle-val" );
      $( ".slider-age" ).slider({
        create: function() {
          handle.text( declOfNum($(this).slider( "value" ), ['год', 'года', 'лет']) );
          calcIt();
        },
        slide: function( event, ui ) {
          handle.text( declOfNum(ui.value, ['год', 'года', 'лет']));
          calcIt();
        }
      });
  } );

  var weightSliderTemplate = `
  <div class="slider-wrapper">
    <button class="change" data-step="-1"><img src="/wp-content/themes/DailyFood/scss/../images/minus.svg" aria-hidden="true"></button>
    <div class="slider slider-weight">
      <div id="custom-handle" class="ui-slider-handle"></div>
      <div id="handle-val"></div>
    </div>
    <button class="change" data-step="+1"><img src="/wp-content/themes/DailyFood/scss/../images/add.svg" aria-hidden="true"></button>
  </div>`;

  var weightSlider = [ {
    min: 40,
    max: 150,
    value: 60
  } ];

  $('#weight-slider').append(Array(weightSlider.length).fill(weightSliderTemplate).join('')).find('.slider-weight').each(function(i) {
    $(this).slider(weightSlider[i]);
    var handle = $('#weight-slider').find( "#handle-val" );
    handle.text( $(this).slider( "value" ) + ' кг');
  });


  $('.change').button().click(function() {
    var
      $this = $(this),
      $handle = $this.closest('#weight-slider').find('#handle-val'),
      $slider = $this.closest('#weight-slider').find('.ui-slider');
    $slider.slider('option', 'value', $slider.slider('option', 'value') + +$this.data('step'));
    $handle.text( $slider.slider( "value" ) + ' кг' );
    calcIt();
  });

  $( function() {
      var handle = $('#weight-slider').find( "#handle-val" );
      $( ".slider-weight" ).slider({
        create: function() {
          handle.text( $( this ).slider( "value" ) + ' кг' );
          calcIt();
        },
        slide: function( event, ui ) {
          handle.text( ui.value + ' кг' );
          calcIt();
        }
      });
  } );

  var heightSliderTemplate = `
  <div class="slider-wrapper">
    <button class="change" data-step="-1"><img src="/wp-content/themes/DailyFood/scss/../images/minus.svg" aria-hidden="true"></button>
    <div class="slider slider-height">
      <div id="custom-handle" class="ui-slider-handle"></div>
      <div id="handle-val"></div>
    </div>
    <button class="change" data-step="+1"><img src="/wp-content/themes/DailyFood/scss/../images/add.svg" aria-hidden="true"></button>
  </div>`;

  var heightSlider = [ {
    min: 150,
    max: 220,
    value: 170
  } ];

  $('#height-slider').append(Array(heightSlider.length).fill(heightSliderTemplate).join('')).find('.slider-height').each(function(i) {
    $(this).slider(heightSlider[i]);
    var handle = $('#height-slider').find( "#handle-val" );
    handle.text( $(this).slider( "value" ) + ' см');

  });


  $('.change').button().click(function() {
    var
      $this = $(this),
      $handle = $this.closest('#height-slider').find('#handle-val'),
      $slider = $this.closest('#height-slider').find('.ui-slider');
    $slider.slider('option', 'value', $slider.slider('option', 'value') + +$this.data('step'));
    $handle.text( $slider.slider( "value" ) + ' см' );
    calcIt();
  });

  $( function() {
      var handle = $('#height-slider').find( "#handle-val" );
      $( ".slider-height" ).slider({
        create: function() {
          handle.text( $( this ).slider( "value" ) + ' см' );
          calcIt();
        },
        slide: function( event, ui ) {
          handle.text( ui.value + ' см');
          calcIt();
        }
      });
  } );

</script>

<?php wp_footer(); ?>
<?php 
$url = get_site_url( null, '', 'https' );
if ( $url == "https://dailyfood.pro"){
?>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(49248847, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/49248847" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-87308261-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-87308261-2');
</script>
<script>
$('#add-to-cart').on('click', function(e){
  ym(49248847,'reachGoal','addtocart');
});

</script>
<?php 
    }else{
?>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(50739283, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/50739283" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-87308261-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-87308261-3');
</script>
<script>
$('#add-to-cart').on('click', function(e){
  ym(50739283,'reachGoal','addtocart');
});

</script>
<?php } ?>
</body>
</html>