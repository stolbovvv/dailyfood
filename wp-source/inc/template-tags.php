<?php
/**
 * Get sites.
 */

function dailyfood_get_sites( $modifier = null ){
	$current_site_id = get_current_blog_id();
	$sites = get_sites( array( 'site__not_in' => array( $current_site_id ) ) );
	
	$html = '';

	$html .= '<div class="site-choose' . $modifier . '">
                <div class="site-choose__title">' . get_bloginfo( 'name' ) . '</div>
				<ul class="site-choose__list">';

				foreach( $sites as $site ){
					$site_id = $site->blog_id;

					$html .= '<li class="site-choose__item"><a class="site-choose__link" href="' . get_site_url( $site_id ) . '"><span class="site-choose__name">' . get_blog_details( $site_id )->blogname . '</span></a></li>';
				}

    $html .= '</ul>';

		if( !isset( $_COOKIE['siteChooseQuestionClosed'] ) && !empty( get_option( 'city_question_popup_title' ) ) ){
			
			
			$html .= '<div class="site-choose__question site-choose-question">
					<div class="site-choose-question__inner">
						<div class="site-choose-question__title">' . get_option( 'city_question_popup_title' ) . '</div>
						<div class="site-choose-question__buttons">
							<button type="button" class="site-choose-question__btn-true">Да, верно</button>
							<button type="button" class="site-choose-question__btn-false">Выбрать другой</button>
						</div>
					</div>
				</div>';
		}
		
	$html .= '</div>';
	
	return $html;
}

/**
 * Filter number.
 */

function filter_number( $number ){
	return preg_replace( '/[^0-9]/', '', $number );
}
?>