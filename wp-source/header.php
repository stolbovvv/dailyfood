<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" href="<?=get_template_directory_uri();?>/images/apple-touch-icon.png">
<!-- 180x180 - ставим первым для safari --> 
<link rel="icon" href="<?=get_template_directory_uri();?>/images/favicon.ico" sizes="any"><!-- 32x32 --> 
<link rel="icon" href="<?=get_template_directory_uri();?>/images/icon.svg" type="image/svg+xml"> 
<link rel="manifest" href="<?=get_template_directory_uri();?>/images/manifest.webmanifest">
<link rel="yandex-tableau-widget" href="<?=get_template_directory_uri();?>/images/tableau.json">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/main.css">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <?php wp_head(); ?>
  <meta name="facebook-domain-verification" content="c3666lq94q1qzusg2dxuc6z83nqeau" />
	<!-- Facebook Pixel Code -->
	<!--<script>
	  !function(f,b,e,v,n,t,s)
	  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	  n.queue=[];t=b.createElement(e);t.async=!0;
	  t.src=v;s=b.getElementsByTagName(e)[0];
	  s.parentNode.insertBefore(t,s)}(window, document,'script',
	  'https://connect.facebook.net/en_US/fbevents.js');
	  fbq('init', '1960888050608907');
	  fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none"
	  src="https://www.facebook.com/tr?id=1960888050608907&ev=PageView&noscript=1"
	/></noscript>-->
	<!-- End Facebook Pixel Code -->
<?php 
$url = get_site_url( null, '', 'https' );
if ( $url == "https://dailyfood.pro"){
?>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-MRXLCQ9');</script>
	<!-- End Google Tag Manager -->
	<script type="text/javascript">!function(){var t=document.createElement("script");t.type="text/javascript",t.async=!0,t.src="https://vk.com/js/api/openapi.js?154",t.onload=function(){VK.Retargeting.Init("VK-RTRG-248214-fn9X4"),VK.Retargeting.Hit()},document.head.appendChild(t)}();</script><noscript><img src="https://vk.com/rtrg?p=VK-RTRG-248214-fn9X4" style="position:fixed; left:-999px;" alt=""/></noscript>
<?php 
    }else{
?>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-W5R9RCB');</script>
	<!-- End Google Tag Manager -->
	<script type="text/javascript">!function(){var t=document.createElement("script");t.type="text/javascript",t.async=!0,t.src='https://vk.com/js/api/openapi.js?169',t.onload=function(){VK.Retargeting.Init("VK-RTRG-1281235-8FxbK"),VK.Retargeting.Hit()},document.head.appendChild(t)}();</script><noscript><img src="https://vk.com/rtrg?p=VK-RTRG-1281235-8FxbK" style="position:fixed; left:-999px;" alt=""/></noscript>
<?php } ?>
	
<script>
  //fbq('track', 'Lead');
</script>
<script type="text/javascript">
   $(document).ready(function(){
        calcIt();
        $('#main_form').submit(function(e){
            e.preventDefault();
        }); 
    });  
</script>
<style>
	.wpcf7-display-none {
		display: none !important;
	}
	.popup__wrapper {
		height: initial;
	}
	.popup__wrapper .general__form {
		padding: 20px;
	}
	.popup__wrapper .general__form-header {
		margin-bottom: 10px;
	}
	.popup--form2 .general__form-text, .popup--form .general__form-text {
		margin-bottom: 10px;
	}
	.popup--form2 .general__form form div, .popup--form .general__form form div {
		margin-bottom: 5px;
	}
	.popup__wrapper .general__label, .popup__wrapper .general label {
		margin-bottom: 5px;
	}
	.popup__wrapper .general__input, .popup__wrapper .general input {
		width: 100%;
		height: 30px;
	}
	.popup--form2 .general__form-button, .popup--form .general__form-button {
		width: 100%;
	    margin-top: 10px;
	}
	div.wpcf7 .ajax-loader {
		display: none;
	}
	.popup__wrapper .general__form form p {
		display: block;
	}
	.popup--form2 .general__policy, .popup--form .general__policy {
	    margin-top: 10px;
	}



	/*	@media screen and (max-width: 767px) {

		}*/
</style>
</head>

<?php if ( is_page('thanks-for-form') ) { ?>

<body <?php body_class( 'thanks' ); ?>>

<?php } else { ?>
<body <?php body_class(); ?>>
<?php } ?>
<?php 
$url = get_site_url( null, '', 'https' );
if ( $url == "https://dailyfood.pro"){
?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MRXLCQ9"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php 
    }else{
?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W5R9RCB"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php } ?>

<header class="header">
    <div class="container flex">
    	
        <a href="<?php bloginfo('url');?>" class="header__logo">
			<?php
			if( has_custom_logo() ){
				$custom_logo_id = get_theme_mod( 'custom_logo' );
				$custom_logo_image = wp_get_attachment_image_src( $custom_logo_id , 'full' );

				echo '<img src="' . $custom_logo_image[0] . '" alt="" class="header__logo">';
			} else {
				//echo '<img src="' . get_template_directory_uri() . '/images/header-logo.png" alt="" class="header__logo">';
				echo '<img src="' . get_template_directory_uri() . '/images/logo.svg" alt="" class="header__logo">';
			}
			?>
		</a>
        <?php
		echo dailyfood_get_sites( ' site-choose_desktop' );
		
		if( has_nav_menu( 'header_menu' ) ){
			$args = array(
				'theme_location' => 'header_menu',
				'container' => false,
				'menu_id' => 'sidebar-desc',
				'menu_class' => 'header__menu',
				'items_wrap' => '<ul class="%2$s">%3$s</ul>',
				'walker' => new DailyFood_Header_Nav_Menu()
			);

			wp_nav_menu( $args );
		}
		
		// Get params.
		
		$site_phone = get_option( 'site_phone' );
		$callback_btn_text = get_option( 'callback_btn_text' );
		?>
		<div>
		<?php echo dailyfood_get_sites( ' site-choose_mobile' ); ?>
        <div class="header__phone">
            <a href="tel:+<?php echo filter_number( $site_phone ); ?>" class="header__number"><?php echo $site_phone; ?></a>
            <div class="header__call call-popup"><?php echo $callback_btn_text; ?></div>
        </div>
		</div>
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/burger.svg" alt="" class="header__burger">
        <?php
		if( has_nav_menu( 'header_menu' ) ){
			$mobile_args = array(
				'theme_location' => 'header_menu',
				'container' => false,
				'menu_id' => 'sidebar-mobile',
				'menu_class' => 'header__menu-mobile',
				'items_wrap' => '<ul class="%2$s">%3$s</ul>',
				'walker' => new DailyFood_Header_Mobile_Nav_Menu()
			);

			wp_nav_menu( $mobile_args );
		}
		?>
    </div>
</header>