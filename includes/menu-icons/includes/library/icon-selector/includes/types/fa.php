<?php
/**
 * Font Awesome
 *
 */

require_once dirname( __FILE__ ) . '/font.php';

/**
 * Icon type: Font Awesome
 *
 */
class RelicWP_Icon_Picker_Type_Font_Awesome extends RelicWP_Icon_Picker_Type_Font {

	/**
	 * Icon type ID
	 *
	 */
	protected $id = 'far';

	/**
	 * Icon type name
	 *
	 */
	protected $name = 'FontAwesome Regular';

	/**
	 * Icon type version
	 *
	 */
	protected $version = '5.11.2';

	/**
	 * Stylesheet ID
	 *
	 */
	protected $stylesheet_id = 'font-awesome';

	/**
	 * Get icon groups
	 *
	 */
	public function get_groups() {
		$groups = array(
			array(
				'id'   => 'regular',
				'name' => __( 'Regular', 'relicwp-helper' ),
			),
		);

		/**
		 * Filter genericon groups
		 *
		 */
		$groups = apply_filters( 'relicwp_icon_picker_fa_groups', $groups );

		return $groups;
	}

	/**
	 * Get icon names
	 *
	 */
	public function get_items() {
		$items = array(
			array(
				'group' => 'regular',
				'id'    => 'fa-address-book',
				'name'  => __( 'Address Book', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-address-card',
				'name'  => __( 'Address Card', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-angry',
				'name'  => __( 'Angry', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-arrow-alt-circle-down',
				'name'  => __( 'Arrow Circle Down', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-arrow-alt-circle-left',
				'name'  => __( 'Arrow Circle Left', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-arrow-alt-circle-right',
				'name'  => __( 'Arrow Circle Right', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-arrow-alt-circle-up',
				'name'  => __( 'Arrow Circle Up', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-bell',
				'name'  => __( 'Bell', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-bell-slash',
				'name'  => __( 'Bell Slash', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-bookmark',
				'name'  => __( 'Bookmark', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-building',
				'name'  => __( 'Building', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-calendar',
				'name'  => __( 'Calendar', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-calendar-alt',
				'name'  => __( 'Calendar Alt', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-calendar-check',
				'name'  => __( 'Calendar Check', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-calendar-minus',
				'name'  => __( 'Calendar Minus', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-calendar-plus',
				'name'  => __( 'Calendar Plus', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-calendar-times',
				'name'  => __( 'Calendar Times', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-caret-square-down',
				'name'  => __( 'Caret Square Down', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-caret-square-left',
				'name'  => __( 'Caret Square Left', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-caret-square-right',
				'name'  => __( 'Caret Square Right', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-caret-square-up',
				'name'  => __( 'Caret Square Up', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-chart-bar',
				'name'  => __( 'Chart Bar', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-check-circle',
				'name'  => __( 'Check Circle', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-check-square',
				'name'  => __( 'Check Square', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-circle',
				'name'  => __( 'Circle', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-clipboard',
				'name'  => __( 'Clipboard', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-clock',
				'name'  => __( 'Clock', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-clone',
				'name'  => __( 'Clone', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-closed-captioning',
				'name'  => __( 'Closed Captioning', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-comment',
				'name'  => __( 'Comment', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-comment-alt',
				'name'  => __( 'Comment Alt', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-comment-dots',
				'name'  => __( 'Comment Dots', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-comments',
				'name'  => __( 'Comments', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-compass',
				'name'  => __( 'Compass', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-copy',
				'name'  => __( 'Copy', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-copyright',
				'name'  => __( 'Copyright', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-credit-card',
				'name'  => __( 'Credit Card', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-dizzy',
				'name'  => __( 'Dizzy', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-dot-circle',
				'name'  => __( 'Dot Circle', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-edit',
				'name'  => __( 'Edit', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-envelope',
				'name'  => __( 'Envelope', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-envelope-open',
				'name'  => __( 'Envelope Open', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-eye',
				'name'  => __( 'Eye', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-eye-slash',
				'name'  => __( 'Eye Slash', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-file',
				'name'  => __( 'File', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-file-alt',
				'name'  => __( 'File Alt', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-file-archive',
				'name'  => __( 'File Archive', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-file-audio',
				'name'  => __( 'File Audio', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-file-code',
				'name'  => __( 'File Code', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-file-excel',
				'name'  => __( 'File Excel', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-file-image',
				'name'  => __( 'File Image', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-file-pdf',
				'name'  => __( 'File PDF', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-file-powerpoint',
				'name'  => __( 'File Powerpoint', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-file-video',
				'name'  => __( 'File Video', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-file-word',
				'name'  => __( 'File Word', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-flag',
				'name'  => __( 'Flag', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-flushed',
				'name'  => __( 'Flushed', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-folder',
				'name'  => __( 'Folder', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-folder-open',
				'name'  => __( 'Folder Open', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-frown',
				'name'  => __( 'Frown', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-frown-open',
				'name'  => __( 'Frown Open', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-futbol',
				'name'  => __( 'Futbol', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-gem',
				'name'  => __( 'Gem', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-grimace',
				'name'  => __( 'Grimace', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-grin',
				'name'  => __( 'Grin', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-grin-alt',
				'name'  => __( 'Grin Alt', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-grin-beam',
				'name'  => __( 'Grin Beam', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-grin-beam-sweat',
				'name'  => __( 'Grin Beam Sweat', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-grin-hearts',
				'name'  => __( 'Grin Hearts', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-grin-squint',
				'name'  => __( 'Grin Squint', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-grin-squint-tears',
				'name'  => __( 'Grin Squint Tears', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-grin-stars',
				'name'  => __( 'Grin Stars', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-grin-tears',
				'name'  => __( 'Grin Tears', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-grin-tongue',
				'name'  => __( 'Grin Tongue', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-grin-tongue-squint',
				'name'  => __( 'Grin Tongue Squint', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-grin-tongue-wink',
				'name'  => __( 'Grin Tongue Wink', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-grin-wink',
				'name'  => __( 'Grin Wink', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-hand-lizard',
				'name'  => __( 'Hand Lizard', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-hand-paper',
				'name'  => __( 'Hand Paper', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-hand-peace',
				'name'  => __( 'Hand Peace', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-hand-point-down',
				'name'  => __( 'Hand Point Down', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-hand-point-left',
				'name'  => __( 'Hand Point Left', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-hand-point-right',
				'name'  => __( 'Hand Point Right', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-hand-point-up',
				'name'  => __( 'Hand Point Up', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-hand-pointer',
				'name'  => __( 'Hand Pointer', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-hand-rock',
				'name'  => __( 'Hand Rock', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-hand-scissors',
				'name'  => __( 'Hand Scissors', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-hand-spock',
				'name'  => __( 'Hand Spock', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-handshake',
				'name'  => __( 'Handshake', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-hdd',
				'name'  => __( 'HDD', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-heart',
				'name'  => __( 'Heart', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-hospital',
				'name'  => __( 'Hospital', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-hourglass',
				'name'  => __( 'Hourglass', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-id-badge',
				'name'  => __( 'Id Badge', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-id-card',
				'name'  => __( 'Id Card', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-image',
				'name'  => __( 'Image', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-images',
				'name'  => __( 'Images', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-keyboard',
				'name'  => __( 'Keyboard', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-kiss',
				'name'  => __( 'Kiss', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-kiss-beam',
				'name'  => __( 'Kiss Beam', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-kiss-wink-heart',
				'name'  => __( 'Kiss Wink Heart', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-laugh',
				'name'  => __( 'Laugh', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-laugh-beam',
				'name'  => __( 'Laugh Beam', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-laugh-squint',
				'name'  => __( 'Laugh Squint', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-laugh-wink',
				'name'  => __( 'Laugh Wink', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-lemon',
				'name'  => __( 'Lemon', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-life-ring',
				'name'  => __( 'Life Ring', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-lightbulb',
				'name'  => __( 'Lightbulb', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-list-alt',
				'name'  => __( 'List Alt', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-map',
				'name'  => __( 'Map', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-meh',
				'name'  => __( 'Meh', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-meh-blank',
				'name'  => __( 'Me Blank', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-meh-rolling-eyes',
				'name'  => __( 'Meh Rolling Eyes', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-minus-square',
				'name'  => __( 'Minus Square', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-money-bill-alt',
				'name'  => __( 'Money Bill Alt', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-moon',
				'name'  => __( 'Moon', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-newspaper',
				'name'  => __( 'Newspaper', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-object-group',
				'name'  => __( 'Object Group', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-object-ungroup',
				'name'  => __( 'Object Ungroup', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-paper-plane',
				'name'  => __( 'Paper Plane', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-pause-circle',
				'name'  => __( 'Pause Circle', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-play-circle',
				'name'  => __( 'Play Circle', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-plus-square',
				'name'  => __( 'Plus Square', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-question-circle',
				'name'  => __( 'Question Circle', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-registered',
				'name'  => __( 'Registered', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-save',
				'name'  => __( 'Save', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-share-square',
				'name'  => __( 'Share Square', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-smile',
				'name'  => __( 'Smile', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-smile-beam',
				'name'  => __( 'Smile Beam', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-smile-wink',
				'name'  => __( 'Smile Wink', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-snowflake',
				'name'  => __( 'Snowflake', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-square',
				'name'  => __( 'Square', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-snowflake',
				'name'  => __( 'Snowflake', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-star',
				'name'  => __( 'Star', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-star-half',
				'name'  => __( 'Star Half', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-sticky-note',
				'name'  => __( 'Sticky Note', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-stop-circle',
				'name'  => __( 'Stop Circle', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-sun',
				'name'  => __( 'Sun', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-surprise',
				'name'  => __( 'Surprise', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-thumbs-down',
				'name'  => __( 'Thumbs Down', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-thumbs-up',
				'name'  => __( 'Thumbs Up', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-times-circle',
				'name'  => __( 'Times Circle', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-tired',
				'name'  => __( 'Tired', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-trash-alt',
				'name'  => __( 'Trash Alt', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-user',
				'name'  => __( 'User', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-user-circle',
				'name'  => __( 'User Circle', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-window-close',
				'name'  => __( 'Window Close', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-window-maximize',
				'name'  => __( 'Window Maximize', 'relicwp-helper' ),
			),
			array(
				'group' => 'regular',
				'id'    => 'fa-window-restore',
				'name'  => __( 'Window Restore', 'relicwp-helper' ),
			),
		);

		/**
		 * Filter FontAwesome items
		 *
		 */
		$items = apply_filters( 'relicwp_icon_picker_fa_items', $items );

		return $items;
	}
}
