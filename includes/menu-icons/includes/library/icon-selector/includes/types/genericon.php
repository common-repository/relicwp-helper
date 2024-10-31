<?php
/**
 * Genericons
 *
 */
class RelicWP_Icon_Picker_Type_Genericons extends RelicWP_Icon_Picker_Type_Font {

	/**
	 * Icon type ID
	 *
	 */
	protected $id = 'genericon';

	/**
	 * Icon type name
	 *
	 */
	protected $name = 'Genericons';

	/**
	 * Icon type version
	 *
	 */
	protected $version = '3.4';

	/**
	 * Stylesheet ID
	 *
	 */
	protected $stylesheet_id = 'genericons';


	/**
	 * Get icon groups
	 *
	 */
	public function get_groups() {
		$groups = array(
			array(
				'id'   => 'actions',
				'name' => __( 'Actions', 'relicwp-helper' ),
			),
			array(
				'id'   => 'media-player',
				'name' => __( 'Media Player', 'relicwp-helper' ),
			),
			array(
				'id'   => 'meta',
				'name' => __( 'Meta', 'relicwp-helper' ),
			),
			array(
				'id'   => 'misc',
				'name' => __( 'Misc.', 'relicwp-helper' ),
			),
			array(
				'id'   => 'places',
				'name' => __( 'Places', 'relicwp-helper' ),
			),
			array(
				'id'   => 'post-formats',
				'name' => __( 'Post Formats', 'relicwp-helper' ),
			),
			array(
				'id'   => 'text-editor',
				'name' => __( 'Text Editor', 'relicwp-helper' ),
			),
			array(
				'id'   => 'social',
				'name' => __( 'Social', 'relicwp-helper' ),
			),
		);

		/**
		 * Filter genericon groups
		 *
		 */
		$groups = apply_filters( 'relicwp_icon_picker_genericon_groups', $groups );

		return $groups;
	}

	/**
	 * Get icon names
	 *
	 */
	public function get_items() {
		$items = array(
			array(
				'group' => 'actions',
				'id'    => 'genericon-checkmark',
				'name'  => __( 'Checkmark', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'genericon-close',
				'name'  => __( 'Close', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'genericon-close-alt',
				'name'  => __( 'Close', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'genericon-dropdown',
				'name'  => __( 'Dropdown', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'genericon-dropdown-left',
				'name'  => __( 'Dropdown left', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'genericon-collapse',
				'name'  => __( 'Collapse', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'genericon-expand',
				'name'  => __( 'Expand', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'genericon-help',
				'name'  => __( 'Help', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'genericon-info',
				'name'  => __( 'Info', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'genericon-lock',
				'name'  => __( 'Lock', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'genericon-maximize',
				'name'  => __( 'Maximize', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'genericon-minimize',
				'name'  => __( 'Minimize', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'genericon-plus',
				'name'  => __( 'Plus', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'genericon-minus',
				'name'  => __( 'Minus', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'genericon-previous',
				'name'  => __( 'Previous', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'genericon-next',
				'name'  => __( 'Next', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'genericon-move',
				'name'  => __( 'Move', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'genericon-hide',
				'name'  => __( 'Hide', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'genericon-show',
				'name'  => __( 'Show', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'genericon-print',
				'name'  => __( 'Print', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'genericon-rating-empty',
				'name'  => __( 'Rating: Empty', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'genericon-rating-half',
				'name'  => __( 'Rating: Half', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'genericon-rating-full',
				'name'  => __( 'Rating: Full', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'genericon-refresh',
				'name'  => __( 'Refresh', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'genericon-reply',
				'name'  => __( 'Reply', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'genericon-reply-alt',
				'name'  => __( 'Reply alt', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'genericon-reply-single',
				'name'  => __( 'Reply single', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'genericon-search',
				'name'  => __( 'Search', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'genericon-send-to-phone',
				'name'  => __( 'Send to', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'genericon-send-to-tablet',
				'name'  => __( 'Send to', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'genericon-share',
				'name'  => __( 'Share', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'genericon-shuffle',
				'name'  => __( 'Shuffle', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'genericon-spam',
				'name'  => __( 'Spam', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'genericon-subscribe',
				'name'  => __( 'Subscribe', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'genericon-subscribed',
				'name'  => __( 'Subscribed', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'genericon-unsubscribe',
				'name'  => __( 'Unsubscribe', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'genericon-top',
				'name'  => __( 'Top', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'genericon-unapprove',
				'name'  => __( 'Unapprove', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'genericon-zoom',
				'name'  => __( 'Zoom', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'genericon-unzoom',
				'name'  => __( 'Unzoom', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'genericon-xpost',
				'name'  => __( 'X-Post', 'relicwp-helper' ),
			),
			array(
				'group' => 'media-player',
				'id'    => 'genericon-skip-back',
				'name'  => __( 'Skip back', 'relicwp-helper' ),
			),
			array(
				'group' => 'media-player',
				'id'    => 'genericon-rewind',
				'name'  => __( 'Rewind', 'relicwp-helper' ),
			),
			array(
				'group' => 'media-player',
				'id'    => 'genericon-play',
				'name'  => __( 'Play', 'relicwp-helper' ),
			),
			array(
				'group' => 'media-player',
				'id'    => 'genericon-pause',
				'name'  => __( 'Pause', 'relicwp-helper' ),
			),
			array(
				'group' => 'media-player',
				'id'    => 'genericon-stop',
				'name'  => __( 'Stop', 'relicwp-helper' ),
			),
			array(
				'group' => 'media-player',
				'id'    => 'genericon-fastforward',
				'name'  => __( 'Fast Forward', 'relicwp-helper' ),
			),
			array(
				'group' => 'media-player',
				'id'    => 'genericon-skip-ahead',
				'name'  => __( 'Skip ahead', 'relicwp-helper' ),
			),
			array(
				'group' => 'meta',
				'id'    => 'genericon-comment',
				'name'  => __( 'Comment', 'relicwp-helper' ),
			),
			array(
				'group' => 'meta',
				'id'    => 'genericon-category',
				'name'  => __( 'Category', 'relicwp-helper' ),
			),
			array(
				'group' => 'meta',
				'id'    => 'genericon-hierarchy',
				'name'  => __( 'Hierarchy', 'relicwp-helper' ),
			),
			array(
				'group' => 'meta',
				'id'    => 'genericon-tag',
				'name'  => __( 'Tag', 'relicwp-helper' ),
			),
			array(
				'group' => 'meta',
				'id'    => 'genericon-time',
				'name'  => __( 'Time', 'relicwp-helper' ),
			),
			array(
				'group' => 'meta',
				'id'    => 'genericon-user',
				'name'  => __( 'User', 'relicwp-helper' ),
			),
			array(
				'group' => 'meta',
				'id'    => 'genericon-day',
				'name'  => __( 'Day', 'relicwp-helper' ),
			),
			array(
				'group' => 'meta',
				'id'    => 'genericon-week',
				'name'  => __( 'Week', 'relicwp-helper' ),
			),
			array(
				'group' => 'meta',
				'id'    => 'genericon-month',
				'name'  => __( 'Month', 'relicwp-helper' ),
			),
			array(
				'group' => 'meta',
				'id'    => 'genericon-pinned',
				'name'  => __( 'Pinned', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'genericon-uparrow',
				'name'  => __( 'Arrow Up', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'genericon-downarrow',
				'name'  => __( 'Arrow Down', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'genericon-leftarrow',
				'name'  => __( 'Arrow Left', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'genericon-rightarrow',
				'name'  => __( 'Arrow Right', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'genericon-activity',
				'name'  => __( 'Activity', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'genericon-bug',
				'name'  => __( 'Bug', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'genericon-book',
				'name'  => __( 'Book', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'genericon-cart',
				'name'  => __( 'Cart', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'genericon-cloud-download',
				'name'  => __( 'Cloud Download', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'genericon-cloud-upload',
				'name'  => __( 'Cloud Upload', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'genericon-cog',
				'name'  => __( 'Cog', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'genericon-document',
				'name'  => __( 'Document', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'genericon-dot',
				'name'  => __( 'Dot', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'genericon-download',
				'name'  => __( 'Download', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'genericon-draggable',
				'name'  => __( 'Draggable', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'genericon-ellipsis',
				'name'  => __( 'Ellipsis', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'genericon-external',
				'name'  => __( 'External', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'genericon-feed',
				'name'  => __( 'Feed', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'genericon-flag',
				'name'  => __( 'Flag', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'genericon-fullscreen',
				'name'  => __( 'Fullscreen', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'genericon-handset',
				'name'  => __( 'Handset', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'genericon-heart',
				'name'  => __( 'Heart', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'genericon-key',
				'name'  => __( 'Key', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'genericon-mail',
				'name'  => __( 'Mail', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'genericon-menu',
				'name'  => __( 'Menu', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'genericon-microphone',
				'name'  => __( 'Microphone', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'genericon-notice',
				'name'  => __( 'Notice', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'genericon-paintbrush',
				'name'  => __( 'Paint Brush', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'genericon-phone',
				'name'  => __( 'Phone', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'genericon-picture',
				'name'  => __( 'Picture', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'genericon-plugin',
				'name'  => __( 'Plugin', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'genericon-portfolio',
				'name'  => __( 'Portfolio', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'genericon-star',
				'name'  => __( 'Star', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'genericon-summary',
				'name'  => __( 'Summary', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'genericon-tablet',
				'name'  => __( 'Tablet', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'genericon-videocamera',
				'name'  => __( 'Video Camera', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'genericon-warning',
				'name'  => __( 'Warning', 'relicwp-helper' ),
			),
			array(
				'group' => 'places',
				'id'    => 'genericon-404',
				'name'  => __( '404', 'relicwp-helper' ),
			),
			array(
				'group' => 'places',
				'id'    => 'genericon-trash',
				'name'  => __( 'Trash', 'relicwp-helper' ),
			),
			array(
				'group' => 'places',
				'id'    => 'genericon-cloud',
				'name'  => __( 'Cloud', 'relicwp-helper' ),
			),
			array(
				'group' => 'places',
				'id'    => 'genericon-home',
				'name'  => __( 'Home', 'relicwp-helper' ),
			),
			array(
				'group' => 'places',
				'id'    => 'genericon-location',
				'name'  => __( 'Location', 'relicwp-helper' ),
			),
			array(
				'group' => 'places',
				'id'    => 'genericon-sitemap',
				'name'  => __( 'Sitemap', 'relicwp-helper' ),
			),
			array(
				'group' => 'places',
				'id'    => 'genericon-website',
				'name'  => __( 'Website', 'relicwp-helper' ),
			),
			array(
				'group' => 'post-formats',
				'id'    => 'genericon-standard',
				'name'  => __( 'Standard', 'relicwp-helper' ),
			),
			array(
				'group' => 'post-formats',
				'id'    => 'genericon-aside',
				'name'  => __( 'Aside', 'relicwp-helper' ),
			),
			array(
				'group' => 'post-formats',
				'id'    => 'genericon-image',
				'name'  => __( 'Image', 'relicwp-helper' ),
			),
			array(
				'group' => 'post-formats',
				'id'    => 'genericon-gallery',
				'name'  => __( 'Gallery', 'relicwp-helper' ),
			),
			array(
				'group' => 'post-formats',
				'id'    => 'genericon-video',
				'name'  => __( 'Video', 'relicwp-helper' ),
			),
			array(
				'group' => 'post-formats',
				'id'    => 'genericon-status',
				'name'  => __( 'Status', 'relicwp-helper' ),
			),
			array(
				'group' => 'post-formats',
				'id'    => 'genericon-quote',
				'name'  => __( 'Quote', 'relicwp-helper' ),
			),
			array(
				'group' => 'post-formats',
				'id'    => 'genericon-link',
				'name'  => __( 'Link', 'relicwp-helper' ),
			),
			array(
				'group' => 'post-formats',
				'id'    => 'genericon-chat',
				'name'  => __( 'Chat', 'relicwp-helper' ),
			),
			array(
				'group' => 'post-formats',
				'id'    => 'genericon-audio',
				'name'  => __( 'Audio', 'relicwp-helper' ),
			),
			array(
				'group' => 'text-editor',
				'id'    => 'genericon-anchor',
				'name'  => __( 'Anchor', 'relicwp-helper' ),
			),
			array(
				'group' => 'text-editor',
				'id'    => 'genericon-attachment',
				'name'  => __( 'Attachment', 'relicwp-helper' ),
			),
			array(
				'group' => 'text-editor',
				'id'    => 'genericon-edit',
				'name'  => __( 'Edit', 'relicwp-helper' ),
			),
			array(
				'group' => 'text-editor',
				'id'    => 'genericon-code',
				'name'  => __( 'Code', 'relicwp-helper' ),
			),
			array(
				'group' => 'text-editor',
				'id'    => 'genericon-bold',
				'name'  => __( 'Bold', 'relicwp-helper' ),
			),
			array(
				'group' => 'text-editor',
				'id'    => 'genericon-italic',
				'name'  => __( 'Italic', 'relicwp-helper' ),
			),
			array(
				'group' => 'social',
				'id'    => 'genericon-codepen',
				'name'  => 'CodePen',
			),
			array(
				'group' => 'social',
				'id'    => 'genericon-digg',
				'name'  => 'Digg',
			),
			array(
				'group' => 'social',
				'id'    => 'genericon-dribbble',
				'name'  => 'Dribbble',
			),
			array(
				'group' => 'social',
				'id'    => 'genericon-dropbox',
				'name'  => 'DropBox',
			),
			array(
				'group' => 'social',
				'id'    => 'genericon-facebook',
				'name'  => 'Facebook',
			),
			array(
				'group' => 'social',
				'id'    => 'genericon-facebook-alt',
				'name'  => 'Facebook',
			),
			array(
				'group' => 'social',
				'id'    => 'genericon-flickr',
				'name'  => 'Flickr',
			),
			array(
				'group' => 'social',
				'id'    => 'genericon-foursquare',
				'name'  => 'Foursquare',
			),
			array(
				'group' => 'social',
				'id'    => 'genericon-github',
				'name'  => 'GitHub',
			),
			array(
				'group' => 'social',
				'id'    => 'genericon-googleplus',
				'name'  => 'Google+',
			),
			array(
				'group' => 'social',
				'id'    => 'genericon-googleplus-alt',
				'name'  => 'Google+',
			),
			array(
				'group' => 'social',
				'id'    => 'genericon-instagram',
				'name'  => 'Instagram',
			),
			array(
				'group' => 'social',
				'id'    => 'genericon-linkedin',
				'name'  => 'LinkedIn',
			),
			array(
				'group' => 'social',
				'id'    => 'genericon-linkedin-alt',
				'name'  => 'LinkedIn',
			),
			array(
				'group' => 'social',
				'id'    => 'genericon-path',
				'name'  => 'Path',
			),
			array(
				'group' => 'social',
				'id'    => 'genericon-pinterest',
				'name'  => 'Pinterest',
			),
			array(
				'group' => 'social',
				'id'    => 'genericon-pinterest-alt',
				'name'  => 'Pinterest',
			),
			array(
				'group' => 'social',
				'id'    => 'genericon-pocket',
				'name'  => 'Pocket',
			),
			array(
				'group' => 'social',
				'id'    => 'genericon-polldaddy',
				'name'  => 'PollDaddy',
			),
			array(
				'group' => 'social',
				'id'    => 'genericon-reddit',
				'name'  => 'Reddit',
			),
			array(
				'group' => 'social',
				'id'    => 'genericon-skype',
				'name'  => 'Skype',
			),
			array(
				'group' => 'social',
				'id'    => 'genericon-spotify',
				'name'  => 'Spotify',
			),
			array(
				'group' => 'social',
				'id'    => 'genericon-stumbleupon',
				'name'  => 'StumbleUpon',
			),
			array(
				'group' => 'social',
				'id'    => 'genericon-tumblr',
				'name'  => 'Tumblr',
			),
			array(
				'group' => 'social',
				'id'    => 'genericon-twitch',
				'name'  => 'Twitch',
			),
			array(
				'group' => 'social',
				'id'    => 'genericon-twitter',
				'name'  => 'Twitter',
			),
			array(
				'group' => 'social',
				'id'    => 'genericon-vimeo',
				'name'  => 'Vimeo',
			),
			array(
				'group' => 'social',
				'id'    => 'genericon-wordpress',
				'name'  => 'WordPress',
			),
			array(
				'group' => 'social',
				'id'    => 'genericon-youtube',
				'name'  => 'Youtube',
			),
		);

		/**
		 * Filter genericon items
		 *
		 */
		$items = apply_filters( 'relicwp_icon_picker_genericon_items', $items );

		return $items;
	}
}
