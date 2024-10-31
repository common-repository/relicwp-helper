<?php
/**
 * Simple Line Icons
 *
 */

require_once dirname( __FILE__ ) . '/font.php';

/**
 * Icon type: Simple Line Icons
 *
 */

class RelicWP_Icon_Picker_Type_Simple_Line_Icons extends RelicWP_Icon_Picker_Type_Font {

	/**
	 * Icon type ID
	 *
	 */
	protected $id = 'line-icon';

	/**
	 * Icon type name
	 *
	 */
	protected $name = 'Simple Line Icons';

	/**
	 * Icon type version
	 *
	 */
	protected $version = '2.4.0';

	/**
	 * Stylesheet ID
	 *
	 */
	protected $stylesheet_id = 'simple-line-icons';

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
				'id'   => 'media',
				'name' => __( 'Media', 'relicwp-helper' ),
			),
			array(
				'id'   => 'misc',
				'name' => __( 'Misc.', 'relicwp-helper' ),
			),
			array(
				'id'   => 'social',
				'name' => __( 'Social', 'relicwp-helper' ),
			),
		);

		/**
		 * Filter simple line icons groups
		 *
		 */
		$groups = apply_filters( 'pt_icon_picker_simple_line_icons_groups', $groups );

		return $groups;
	}

	/**
	 * Get icon names
	 *
	 */
	public function get_items() {
		$items = array(
			array(
				'group' => 'misc',
				'id'    => 'icon-user',
				'name'  => __( 'User', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-people',
				'name'  => __( 'People', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-user-female',
				'name'  => __( 'User Female', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-user-follow',
				'name'  => __( 'User Follow', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-user-following',
				'name'  => __( 'User Following', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-user-unfollow',
				'name'  => __( 'User Unfollow', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-login',
				'name'  => __( 'Login', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-logout',
				'name'  => __( 'Logout', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-emotsmile',
				'name'  => __( 'Emotsmile', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icon-phone',
				'name'  => __( 'Phone', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icon-call-end',
				'name'  => __( 'Call End', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icon-call-in',
				'name'  => __( 'Call In', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icon-call-out',
				'name'  => __( 'Call Out', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icon-map',
				'name'  => __( 'Map', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icon-location-pin',
				'name'  => __( 'Location Pin', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icon-direction',
				'name'  => __( 'Direction', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icon-directions',
				'name'  => __( 'Directions', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icon-compass',
				'name'  => __( 'Compass', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icon-layers',
				'name'  => __( 'Layers', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icon-menu',
				'name'  => __( 'Menu', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icon-list',
				'name'  => __( 'List', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icon-options-vertical',
				'name'  => __( 'Options Vertical', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icon-options',
				'name'  => __( 'Options', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icon-arrow-down',
				'name'  => __( 'Arrow Down', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icon-arrow-left',
				'name'  => __( 'Arrow Left', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icon-arrow-right',
				'name'  => __( 'Arrow Right', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icon-arrow-up',
				'name'  => __( 'Arrow Up', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icon-arrow-up-circle',
				'name'  => __( 'Arrow Up Circle', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icon-arrow-left-circle',
				'name'  => __( 'Arrow Left Circle', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icon-arrow-right-circle',
				'name'  => __( 'Arrow Right Circle', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icon-arrow-down-circle',
				'name'  => __( 'Arrow Down Circle', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icon-check',
				'name'  => __( 'Check', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icon-clock',
				'name'  => __( 'Clock', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icon-plus',
				'name'  => __( 'Plus', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icon-minus',
				'name'  => __( 'Minus', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icon-close',
				'name'  => __( 'Close', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icon-exclamation',
				'name'  => __( 'Exclamation', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icon-organization',
				'name'  => __( 'Organization', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icon-trophy',
				'name'  => __( 'Trophy', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icon-screen-smartphone',
				'name'  => __( 'Screen Smartphone', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icon-screen-desktop',
				'name'  => __( 'Screen Desktop', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-plane',
				'name'  => __( 'Plane', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-notebook',
				'name'  => __( 'Notebook', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-mustache',
				'name'  => __( 'Mustache', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-mouse',
				'name'  => __( 'Mouse', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-magnet',
				'name'  => __( 'Magnet', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-energy',
				'name'  => __( 'Energy', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-disc',
				'name'  => __( 'Disc', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-cursor',
				'name'  => __( 'Cursor', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-cursor-move',
				'name'  => __( 'Cursor Move', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-crop',
				'name'  => __( 'Crop', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-chemistry',
				'name'  => __( 'Chemistry', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-speedometer',
				'name'  => __( 'Speedometer', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-shield',
				'name'  => __( 'Shield', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-screen-tablet',
				'name'  => __( 'Screen Tablet', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-magic-wand',
				'name'  => __( 'Magic Wand', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-hourglass',
				'name'  => __( 'Hourglass', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-graduation',
				'name'  => __( 'Graduation', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-ghost',
				'name'  => __( 'Ghost', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-game-controller',
				'name'  => __( 'Game Controller', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-fire',
				'name'  => __( 'Fire', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-eyeglass',
				'name'  => __( 'Eyeglass', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icon-envelope-open',
				'name'  => __( 'Envelope Open', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icon-envelope-letter',
				'name'  => __( 'Envelope Letter', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-bell',
				'name'  => __( 'Bell', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-badge',
				'name'  => __( 'Badge', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-anchor',
				'name'  => __( 'Anchor', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icon-wallet',
				'name'  => __( 'Wallet', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-vector',
				'name'  => __( 'Vector', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-speech',
				'name'  => __( 'Speech', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-puzzle',
				'name'  => __( 'Puzzle', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icon-printer',
				'name'  => __( 'Printer', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-present',
				'name'  => __( 'Present', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icon-playlist',
				'name'  => __( 'Playlist', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icon-pin',
				'name'  => __( 'Pin', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-picture',
				'name'  => __( 'Picture', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icon-handbag',
				'name'  => __( 'Handbag', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icon-globe-alt',
				'name'  => __( 'Globe Alt', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icon-globe',
				'name'  => __( 'Globe', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icon-folder-alt',
				'name'  => __( 'Folder Alt', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icon-folder',
				'name'  => __( 'Folder', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-film',
				'name'  => __( 'Film', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icon-feed',
				'name'  => __( 'Feed', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-drop',
				'name'  => __( 'Drop', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-drawer',
				'name'  => __( 'Drawer', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-docs',
				'name'  => __( 'Docs', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-doc',
				'name'  => __( 'Doc', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-diamond',
				'name'  => __( 'Diamond', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-cup',
				'name'  => __( 'Cup', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-calculator',
				'name'  => __( 'Calculator', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-bubbles',
				'name'  => __( 'Bubbles', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icon-briefcase',
				'name'  => __( 'Briefcase', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icon-book-open',
				'name'  => __( 'Book Open', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icon-basket-loaded',
				'name'  => __( 'Basket Loaded', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icon-basket',
				'name'  => __( 'Basket', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icon-bag',
				'name'  => __( 'Bag', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icon-action-undo',
				'name'  => __( 'Action Undo', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'icon-action-redo',
				'name'  => __( 'Action Redo', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-wrench',
				'name'  => __( 'Wrench', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-umbrella',
				'name'  => __( 'Umbrella', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-trash',
				'name'  => __( 'Trash', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-tag',
				'name'  => __( 'Tag', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-support',
				'name'  => __( 'Support', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-frame',
				'name'  => __( 'Frame', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-size-fullscreen',
				'name'  => __( 'Size Fullscreen', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-size-actual',
				'name'  => __( 'Size Actual', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-shuffle',
				'name'  => __( 'Shuffle', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-share-alt',
				'name'  => __( 'Share Alt', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-share',
				'name'  => __( 'Share', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-rocket',
				'name'  => __( 'Rocket', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-question',
				'name'  => __( 'Question', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-pie-chart',
				'name'  => __( 'Pie Chart', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-pencil',
				'name'  => __( 'Pencil', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-note',
				'name'  => __( 'Note', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-loop',
				'name'  => __( 'Loop', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-home',
				'name'  => __( 'Home', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-grid',
				'name'  => __( 'Grid', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-graph',
				'name'  => __( 'Graph', 'relicwp-helper' ),
			),
			array(
				'group' => 'media',
				'id'    => 'icon-microphone',
				'name'  => __( 'Microphone', 'relicwp-helper' ),
			),
			array(
				'group' => 'media',
				'id'    => 'icon-music-tone-alt',
				'name'  => __( 'Music Tone Alt', 'relicwp-helper' ),
			),
			array(
				'group' => 'media',
				'id'    => 'icon-music-tone',
				'name'  => __( 'Music Tone', 'relicwp-helper' ),
			),
			array(
				'group' => 'media',
				'id'    => 'icon-earphones-alt',
				'name'  => __( 'Earphones Alt', 'relicwp-helper' ),
			),
			array(
				'group' => 'media',
				'id'    => 'icon-earphones',
				'name'  => __( 'Earphones', 'relicwp-helper' ),
			),
			array(
				'group' => 'media',
				'id'    => 'icon-equalizer',
				'name'  => __( 'Equalizer', 'relicwp-helper' ),
			),
			array(
				'group' => 'media',
				'id'    => 'icon-like',
				'name'  => __( 'Like', 'relicwp-helper' ),
			),
			array(
				'group' => 'media',
				'id'    => 'icon-dislike',
				'name'  => __( 'Dislike', 'relicwp-helper' ),
			),
			array(
				'group' => 'media',
				'id'    => 'icon-control-start',
				'name'  => __( 'Control Start', 'relicwp-helper' ),
			),
			array(
				'group' => 'media',
				'id'    => 'icon-control-rewind',
				'name'  => __( 'Control Rewind', 'relicwp-helper' ),
			),
			array(
				'group' => 'media',
				'id'    => 'icon-control-play',
				'name'  => __( 'Control Play', 'relicwp-helper' ),
			),
			array(
				'group' => 'media',
				'id'    => 'icon-control-pause',
				'name'  => __( 'Control Pause', 'relicwp-helper' ),
			),
			array(
				'group' => 'media',
				'id'    => 'icon-control-forward',
				'name'  => __( 'Control Forward', 'relicwp-helper' ),
			),
			array(
				'group' => 'media',
				'id'    => 'icon-control-end',
				'name'  => __( 'Control End', 'relicwp-helper' ),
			),
			array(
				'group' => 'media',
				'id'    => 'icon-volume-1',
				'name'  => __( 'Volume 1', 'relicwp-helper' ),
			),
			array(
				'group' => 'media',
				'id'    => 'icon-volume-2',
				'name'  => __( 'Volume 2', 'relicwp-helper' ),
			),
			array(
				'group' => 'media',
				'id'    => 'icon-volume-off',
				'name'  => __( 'Volume Off', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-calendar',
				'name'  => __( 'Calendar', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-bulb',
				'name'  => __( 'Bulb', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-chart',
				'name'  => __( 'Chart', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-ban',
				'name'  => __( 'Ban', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-bubble',
				'name'  => __( 'Bubble', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-camrecorder',
				'name'  => __( 'Camrecorder', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-camera',
				'name'  => __( 'Camera', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-cloud-download',
				'name'  => __( 'Cloud Download', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-cloud-upload',
				'name'  => __( 'Cloud Upload', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-envelope',
				'name'  => __( 'Envelope', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-eye',
				'name'  => __( 'Eye', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-flag',
				'name'  => __( 'Flag', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-heart',
				'name'  => __( 'Heart', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-info',
				'name'  => __( 'Info', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-key',
				'name'  => __( 'Key', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-link',
				'name'  => __( 'Link', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-lock',
				'name'  => __( 'Lock', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-lock-open',
				'name'  => __( 'Lock Open', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-magnifier',
				'name'  => __( 'Magnifier', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-magnifier-add',
				'name'  => __( 'Magnifier Add', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-magnifier-remove',
				'name'  => __( 'Magnifier Remove', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-paper-clip',
				'name'  => __( 'Paper Clip', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-paper-plane',
				'name'  => __( 'Paper Plane', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-power',
				'name'  => __( 'Power', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-refresh',
				'name'  => __( 'Refresh', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-reload',
				'name'  => __( 'Reload', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-settings',
				'name'  => __( 'Settings', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-star',
				'name'  => __( 'Star', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-symbol-female',
				'name'  => __( 'Symbol Female', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-symbol-male',
				'name'  => __( 'Symbol Male', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-target',
				'name'  => __( 'Target', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-credit-card',
				'name'  => __( 'Credit Card', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'icon-paypal',
				'name'  => __( 'Paypal', 'relicwp-helper' ),
			),
			array(
				'group' => 'social',
				'id'    => 'icon-social-tumblr',
				'name'  => __( 'Social Tumblr', 'relicwp-helper' ),
			),
			array(
				'group' => 'social',
				'id'    => 'icon-social-twitter',
				'name'  => __( 'Social Twitter', 'relicwp-helper' ),
			),
			array(
				'group' => 'social',
				'id'    => 'icon-social-facebook',
				'name'  => __( 'Social Facebook', 'relicwp-helper' ),
			),
			array(
				'group' => 'social',
				'id'    => 'icon-social-instagram',
				'name'  => __( 'Social Instagram', 'relicwp-helper' ),
			),
			array(
				'group' => 'social',
				'id'    => 'icon-social-linkedin',
				'name'  => __( 'Social Linkedin', 'relicwp-helper' ),
			),
			array(
				'group' => 'social',
				'id'    => 'icon-social-pinterest',
				'name'  => __( 'Social Pinterest', 'relicwp-helper' ),
			),
			array(
				'group' => 'social',
				'id'    => 'icon-social-github',
				'name'  => __( 'Social Github', 'relicwp-helper' ),
			),
			array(
				'group' => 'social',
				'id'    => 'icon-social-google',
				'name'  => __( 'Social Google', 'relicwp-helper' ),
			),
			array(
				'group' => 'social',
				'id'    => 'icon-social-reddit',
				'name'  => __( 'Social Reddit', 'relicwp-helper' ),
			),
			array(
				'group' => 'social',
				'id'    => 'icon-social-skype',
				'name'  => __( 'Social Skype', 'relicwp-helper' ),
			),
			array(
				'group' => 'social',
				'id'    => 'icon-social-dribbble',
				'name'  => __( 'Social Dribbble', 'relicwp-helper' ),
			),
			array(
				'group' => 'social',
				'id'    => 'icon-social-behance',
				'name'  => __( 'Social Behance', 'relicwp-helper' ),
			),
			array(
				'group' => 'social',
				'id'    => 'icon-social-foursqare',
				'name'  => __( 'Social Foursqare', 'relicwp-helper' ),
			),
			array(
				'group' => 'social',
				'id'    => 'icon-social-soundcloud',
				'name'  => __( 'Social Soundcloud', 'relicwp-helper' ),
			),
			array(
				'group' => 'social',
				'id'    => 'icon-social-spotify',
				'name'  => __( 'Social Spotify', 'relicwp-helper' ),
			),
			array(
				'group' => 'social',
				'id'    => 'icon-social-stumbleupon',
				'name'  => __( 'Social Stumbleupon', 'relicwp-helper' ),
			),
			array(
				'group' => 'social',
				'id'    => 'icon-social-youtube',
				'name'  => __( 'Social Youtube', 'relicwp-helper' ),
			),
			array(
				'group' => 'social',
				'id'    => 'icon-social-dropbox',
				'name'  => __( 'Social Dropbox', 'relicwp-helper' ),
			),
		);

		/**
		 * Filter simple line icons items
		 *
		 */
		$items = apply_filters( 'pt_icon_picker_simple_line_icons_items', $items );

		return $items;
	}
}
