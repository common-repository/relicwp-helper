<?php
/**
 * PdWP News
 *
 * @package PdWP WordPress theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'PdWP_Dashboard_News' ) ) :

	class PdWP_Dashboard_News {

		/**
		 * Feed URL.
		 *
		 * @since   1.0.0
		 */
		private static $feed = 'https://relicwp.com/feed/';

		/**
		 * Setup class.
		 *
		 * @since   1.0.0
		 */
		public function __construct() {
			add_action( 'wp_dashboard_setup', array( $this, 'register_dashboard_news' ) );
			add_action( 'admin_enqueue_scripts', array( $this, 'script' ) );
		}

		/**
		 * Register the news block on the WordPress dashboard
		 *
		 * @since   1.0.0
		 */
		public function register_dashboard_news() {
			if ( apply_filters( 'pdwp_news_enabled', false ) ) {
				return;
			}

			wp_add_dashboard_widget( 'owp_dashboard_news', __( 'RelicWP Overview', 'relicwp-helper' ), array( $this, 'dashboard_news_widget' ) );

			// Move our widget to top.
			global $wp_meta_boxes;

			$dashboard = $wp_meta_boxes['dashboard']['normal']['core'];
			$widget = array(
				'owp_dashboard_news' => $dashboard['owp_dashboard_news'],
			);

			$wp_meta_boxes['dashboard']['normal']['core'] = array_merge( $widget, $dashboard );
		}

		/**
		 * PdWP News & Updates
		 *
		 * @since   1.0.0
		 */
		public function dashboard_news_widget() {

			// Get theme
			$owp = wp_get_theme( 'relicwp' );

			// PdWP img url
			$owp_img = RTHP_URL . 'assets/img/relicwp.png'; ?>

			<div class="owp-dashboard-widget">
				<div class="owp-header">
					<div class="owp-logo"><img src="<?php echo esc_url( $owp_img ); ?>" alt="RelicWP" /></div>
					<div class="owp-versions"><?php echo __( 'RelicWP', 'relicwp-helper' ); ?> v<?php echo esc_html( $owp->get( 'Version' ) ); ?></div>
				</div>
				<div class="rss-widget">
					<h3 class="owp-heading"><?php echo __( 'News & Updates', 'relicwp-helper' ); ?></h3>
					<?php
					$this->pdwp_cached_rss_widget( 'owp_dashboard_news', array( $this, 'pdwp_news_output' ) ); ?>
				</div>
				<div class="owp-news-footer">
					<?php
					printf(
						'<a href="%1$s" class="owp-post-link" target="_blank">%2$s <span class="screen-reader-text">%3$s</span><span aria-hidden="true" class="dashicons dashicons-external"></span></a>',
						'https://relicwp.com/demos/',
						__( 'Demos' ),
						/* translators: accessibility text */
						__( '(opens in a new window)' )
					);
					printf(
						'<a href="%1$s" class="owp-post-link" target="_blank">%2$s <span class="screen-reader-text">%3$s</span><span aria-hidden="true" class="dashicons dashicons-external"></span></a>',
						'https://relicwp.com/blog/',
						__( 'Blog' ),
						/* translators: accessibility text */
						__( '(opens in a new window)' )
					);
					printf(
						'<a href="%1$s" class="owp-post-link" target="_blank">%2$s <span class="screen-reader-text">%3$s</span><span aria-hidden="true" class="dashicons dashicons-external"></span></a>',
						'https://relicwp.com/support/',
						__( 'Help' ),
						/* translators: accessibility text */
						__( '(opens in a new window)' )
					);

					// If no premium extensions
					if ( true != apply_filters( 'pdwp_licence_tab_enable', false ) ) {
						printf(
							'<a href="%1$s" class="owp-post-link" target="_blank"><span style="color: #fe5252;">%2$s <span class="screen-reader-text">%3$s</span><span aria-hidden="true" class="dashicons dashicons-external"></span></span></a>',
							'https://relicwp.com/extensions/?utm_source=extensions&utm_medium=wp-dash&utm_campaign=news-feed',
							__( 'Extensions' ),
							/* translators: accessibility text */
							__( '(opens in a new window)' )
						);
					} ?>
				</div>
			</div>
			<?php
		}

		/**
		 * Display the WordPress news feeds.
		 *
		 * @since   1.0.0
		 */
		public function pdwp_news_output() {
			$this->pdwp_rss_output( self::$feed );
		}

		/**
		 * Display the RSS entries in a list.
		 *
		 * @since   1.0.0
		 */
		public function pdwp_rss_output( $rss, $args = array() ) {
			if ( is_string( $rss ) ) {
				$rss = fetch_feed($rss);
			} elseif ( is_array($rss) && isset($rss['url']) ) {
				$args = $rss;
				$rss = fetch_feed($rss['url']);
			} elseif ( !is_object($rss) ) {
				return;
			}

			if ( is_wp_error($rss) ) {
				if ( is_admin() || current_user_can('manage_options') )
					echo '<p><strong>' . __( 'RSS Error:', 'relicwp-helper' ) . '</strong> ' . $rss->get_error_message() . '</p>';
				return;
			}

			$default_args = array( 'show_summary' => 1, 'items' => 4 );
			$args = wp_parse_args( $args, $default_args );

			$items = (int) $args['items'];
			$show_summary = (int) $args['show_summary'];

			if ( !$rss->get_item_quantity() ) {
				echo '<ul><li>' . __( 'An error has occurred, which probably means the feed is down. Try again later.', 'relicwp-helper' ) . '</li></ul>';
				$rss->__destruct();
				unset($rss);
				return;
			}

			echo '<ul>';
				foreach ( $rss->get_items( 0, $items ) as $item ) {
					$link = $item->get_link();
					while ( stristr( $link, 'http' ) != $link ) {
						$link = substr( $link, 1 );
					}
					$link = esc_url( strip_tags( $link ) );

					$title = esc_html( trim( strip_tags( $item->get_title() ) ) );
					if ( empty( $title ) ) {
						$title = __( 'Untitled' );
					}

					$desc = @html_entity_decode( $item->get_description(), ENT_QUOTES, get_option( 'blog_charset' ) );
					$desc = esc_attr( wp_trim_words( $desc, 30, '&hellip;' ) );

					$summary = '';
					if ( $show_summary ) {
						$summary = $desc;
						$summary = '<div class="rssSummary">' . esc_html( $summary ) . '</div>';
					}

					echo "<li><a class='rsswidget' href='$link?utm_source=wp-news-widget&utm_medium=wp-dash&utm_campaign=news-feed' target='_blank'>$title</a>{$summary}</li>";
				}
			echo '</ul>';
			$rss->__destruct();
			unset($rss);
		}

		/**
		 * Checks to see if all of the feed url in $check_urls are cached.
		 *
		 * @since   1.0.0
		 *
		 * @param string $widget_id
		 * @param callable $callback
		 * @param array $check_urls RSS feeds
		 * @return bool False on failure. True on success.
		 */
		function pdwp_cached_rss_widget( $widget_id, $callback ) {
			$loading = '<p class="widget-loading hide-if-no-js">' . __( 'Loading&#8230;' ) . '</p><div class="hide-if-js notice notice-error inline"><p>' . __( 'This widget requires JavaScript.', 'relicwp-helper' ) . '</p></div>';
			$check_urls = self::$feed;

			$locale = get_user_locale();
			$cache_key = 'owp_feed_data_' . md5( $widget_id . '_' . $locale );
			if ( false !== ( $output = get_transient( $cache_key ) ) ) {
				echo wp_kses_post( $output );
				return true;
			}

			if ( empty( $check_urls ) ) {
				echo wp_kses_post( $loading );
				return false;
			}

			if ( $callback && is_callable( $callback ) ) {
				$args = array_slice( func_get_args(), 3 );
				array_unshift( $args, $widget_id, $check_urls );
				ob_start();
				call_user_func_array( $callback, $args );
				set_transient( $cache_key, ob_get_flush(), 12 * HOUR_IN_SECONDS ); // Default lifetime in cache of 12 hours (same as the feeds)
			}

			return true;
		}

		/**
		 * Script
		 *
		 * @since   1.0.0
		 */
		public function script( $hook ) {
			$screen = get_current_screen();
			if ( 'dashboard' === $screen->id ) {
				wp_enqueue_style( 'pdwp-news', plugins_url( '/assets/css/admin.min.css', dirname( __FILE__ ) ) );
			}
		}

	}

endif;

new PdWP_Dashboard_News();