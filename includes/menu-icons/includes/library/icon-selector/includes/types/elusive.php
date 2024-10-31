<?php
/**
 * Elusive Icons
 *
 */
class RelicWP_Icon_Picker_Type_Elusive extends RelicWP_Icon_Picker_Type_Font {

	/**
	 * Icon type ID
	 *
	 */
	protected $id = 'elusive';

	/**
	 * Icon type name
	 *
	 */
	protected $name = 'Elusive';

	/**
	 * Icon type version
	 *
	 */
	protected $version = '2.0';

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
				'id'   => 'currency',
				'name' => __( 'Currency', 'relicwp-helper' ),
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
				'id'   => 'places',
				'name' => __( 'Places', 'relicwp-helper' ),
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
				'id'    => 'el-icon-adjust',
				'name'  => __( 'Adjust', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-adjust-alt',
				'name'  => __( 'Adjust', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-align-left',
				'name'  => __( 'Align Left', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-align-center',
				'name'  => __( 'Align Center', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-align-right',
				'name'  => __( 'Align Right', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-align-justify',
				'name'  => __( 'Justify', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-arrow-up',
				'name'  => __( 'Arrow Up', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-arrow-down',
				'name'  => __( 'Arrow Down', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-arrow-left',
				'name'  => __( 'Arrow Left', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-arrow-right',
				'name'  => __( 'Arrow Right', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-fast-backward',
				'name'  => __( 'Fast Backward', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-step-backward',
				'name'  => __( 'Step Backward', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-backward',
				'name'  => __( 'Backward', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-forward',
				'name'  => __( 'Forward', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-forward-alt',
				'name'  => __( 'Forward', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-step-forward',
				'name'  => __( 'Step Forward', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-fast-forward',
				'name'  => __( 'Fast Forward', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-bold',
				'name'  => __( 'Bold', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-italic',
				'name'  => __( 'Italic', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-link',
				'name'  => __( 'Link', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-caret-up',
				'name'  => __( 'Caret Up', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-caret-down',
				'name'  => __( 'Caret Down', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-caret-left',
				'name'  => __( 'Caret Left', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-caret-right',
				'name'  => __( 'Caret Right', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-check',
				'name'  => __( 'Check', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-check-empty',
				'name'  => __( 'Check Empty', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-chevron-up',
				'name'  => __( 'Chevron Up', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-chevron-down',
				'name'  => __( 'Chevron Down', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-chevron-left',
				'name'  => __( 'Chevron Left', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-chevron-right',
				'name'  => __( 'Chevron Right', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-circle-arrow-up',
				'name'  => __( 'Circle Arrow Up', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-circle-arrow-down',
				'name'  => __( 'Circle Arrow Down', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-circle-arrow-left',
				'name'  => __( 'Circle Arrow Left', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-circle-arrow-right',
				'name'  => __( 'Circle Arrow Right', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-download',
				'name'  => __( 'Download', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-download-alt',
				'name'  => __( 'Download', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-edit',
				'name'  => __( 'Edit', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-eject',
				'name'  => __( 'Eject', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-file-new',
				'name'  => __( 'File New', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-file-new-alt',
				'name'  => __( 'File New', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-file-edit',
				'name'  => __( 'File Edit', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-file-edit-alt',
				'name'  => __( 'File Edit', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-fork',
				'name'  => __( 'Fork', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-fullscreen',
				'name'  => __( 'Fullscreen', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-indent-left',
				'name'  => __( 'Indent Left', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-indent-right',
				'name'  => __( 'Indent Right', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-list',
				'name'  => __( 'List', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-list-alt',
				'name'  => __( 'List', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-lock',
				'name'  => __( 'Lock', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-lock-alt',
				'name'  => __( 'Lock', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-unlock',
				'name'  => __( 'Unlock', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-unlock-alt',
				'name'  => __( 'Unlock', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-map-marker',
				'name'  => __( 'Map Marker', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-map-marker-alt',
				'name'  => __( 'Map Marker', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-minus',
				'name'  => __( 'Minus', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-minus-sign',
				'name'  => __( 'Minus Sign', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-move',
				'name'  => __( 'Move', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-off',
				'name'  => __( 'Off', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-ok',
				'name'  => __( 'OK', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-ok-circle',
				'name'  => __( 'OK Circle', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-ok-sign',
				'name'  => __( 'OK Sign', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-play',
				'name'  => __( 'Play', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-play-alt',
				'name'  => __( 'Play', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-pause',
				'name'  => __( 'Pause', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-pause-alt',
				'name'  => __( 'Pause', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-stop',
				'name'  => __( 'Stop', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-stop-alt',
				'name'  => __( 'Stop', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-plus',
				'name'  => __( 'Plus', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-plus-sign',
				'name'  => __( 'Plus Sign', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-print',
				'name'  => __( 'Print', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-question',
				'name'  => __( 'Question', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-question-sign',
				'name'  => __( 'Question Sign', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-record',
				'name'  => __( 'Record', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-refresh',
				'name'  => __( 'Refresh', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-remove',
				'name'  => __( 'Remove', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-repeat',
				'name'  => __( 'Repeat', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-repeat-alt',
				'name'  => __( 'Repeat', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-resize-vertical',
				'name'  => __( 'Resize Vertical', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-resize-horizontal',
				'name'  => __( 'Resize Horizontal', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-resize-full',
				'name'  => __( 'Resize Full', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-resize-small',
				'name'  => __( 'Resize Small', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-return-key',
				'name'  => __( 'Return', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-retweet',
				'name'  => __( 'Retweet', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-reverse-alt',
				'name'  => __( 'Reverse', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-search',
				'name'  => __( 'Search', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-search-alt',
				'name'  => __( 'Search', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-share',
				'name'  => __( 'Share', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-share-alt',
				'name'  => __( 'Share', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-tag',
				'name'  => __( 'Tag', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-tasks',
				'name'  => __( 'Tasks', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-text-height',
				'name'  => __( 'Text Height', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-text-width',
				'name'  => __( 'Text Width', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-thumbs-up',
				'name'  => __( 'Thumbs Up', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-thumbs-down',
				'name'  => __( 'Thumbs Down', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-tint',
				'name'  => __( 'Tint', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-trash',
				'name'  => __( 'Trash', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-trash-alt',
				'name'  => __( 'Trash', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-upload',
				'name'  => __( 'Upload', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-view-mode',
				'name'  => __( 'View Mode', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-volume-up',
				'name'  => __( 'Volume Up', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-volume-down',
				'name'  => __( 'Volume Down', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-volume-off',
				'name'  => __( 'Mute', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-warning-sign',
				'name'  => __( 'Warning Sign', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-zoom-in',
				'name'  => __( 'Zoom In', 'relicwp-helper' ),
			),
			array(
				'group' => 'actions',
				'id'    => 'el-icon-zoom-out',
				'name'  => __( 'Zoom Out', 'relicwp-helper' ),
			),
			array(
				'group' => 'currency',
				'id'    => 'el-icon-eur',
				'name'  => 'EUR',
			),
			array(
				'group' => 'currency',
				'id'    => 'el-icon-gbp',
				'name'  => 'GBP',
			),
			array(
				'group' => 'currency',
				'id'    => 'el-icon-usd',
				'name'  => 'USD',
			),
			array(
				'group' => 'media',
				'id'    => 'el-icon-video',
				'name'  => __( 'Video', 'relicwp-helper' ),
			),
			array(
				'group' => 'media',
				'id'    => 'el-icon-video-alt',
				'name'  => __( 'Video', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-adult',
				'name'  => __( 'Adult', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-address-book',
				'name'  => __( 'Address Book', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-address-book-alt',
				'name'  => __( 'Address Book', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-asl',
				'name'  => __( 'ASL', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-asterisk',
				'name'  => __( 'Asterisk', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-ban-circle',
				'name'  => __( 'Ban Circle', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-barcode',
				'name'  => __( 'Barcode', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-bell',
				'name'  => __( 'Bell', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-blind',
				'name'  => __( 'Blind', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-book',
				'name'  => __( 'Book', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-braille',
				'name'  => __( 'Braille', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-briefcase',
				'name'  => __( 'Briefcase', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-broom',
				'name'  => __( 'Broom', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-brush',
				'name'  => __( 'Brush', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-bulb',
				'name'  => __( 'Bulb', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-bullhorn',
				'name'  => __( 'Bullhorn', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-calendar',
				'name'  => __( 'Calendar', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-calendar-sign',
				'name'  => __( 'Calendar Sign', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-camera',
				'name'  => __( 'Camera', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-car',
				'name'  => __( 'Car', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-cc',
				'name'  => __( 'CC', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-certificate',
				'name'  => __( 'Certificate', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-child',
				'name'  => __( 'Child', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-cog',
				'name'  => __( 'Cog', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-cog-alt',
				'name'  => __( 'Cog', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-cogs',
				'name'  => __( 'Cogs', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-comment',
				'name'  => __( 'Comment', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-comment-alt',
				'name'  => __( 'Comment', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-compass',
				'name'  => __( 'Compass', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-compass-alt',
				'name'  => __( 'Compass', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-credit-card',
				'name'  => __( 'Credit Card', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-css',
				'name'  => 'CSS',
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-envelope',
				'name'  => __( 'Envelope', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-envelope-alt',
				'name'  => __( 'Envelope', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-error',
				'name'  => __( 'Error', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-error-alt',
				'name'  => __( 'Error', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-exclamation-sign',
				'name'  => __( 'Exclamation Sign', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-eye-close',
				'name'  => __( 'Eye Close', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-eye-open',
				'name'  => __( 'Eye Open', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-male',
				'name'  => __( 'Male', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-female',
				'name'  => __( 'Female', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-file',
				'name'  => __( 'File', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-file-alt',
				'name'  => __( 'File', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-film',
				'name'  => __( 'Film', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-filter',
				'name'  => __( 'Filter', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-fire',
				'name'  => __( 'Fire', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-flag',
				'name'  => __( 'Flag', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-flag-alt',
				'name'  => __( 'Flag', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-folder',
				'name'  => __( 'Folder', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-folder-open',
				'name'  => __( 'Folder Open', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-folder-close',
				'name'  => __( 'Folder Close', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-folder-sign',
				'name'  => __( 'Folder Sign', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-font',
				'name'  => __( 'Font', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-fontsize',
				'name'  => __( 'Font Size', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-gift',
				'name'  => __( 'Gift', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-glass',
				'name'  => __( 'Glass', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-glasses',
				'name'  => __( 'Glasses', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-globe',
				'name'  => __( 'Globe', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-globe-alt',
				'name'  => __( 'Globe', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-graph',
				'name'  => __( 'Graph', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-graph-alt',
				'name'  => __( 'Graph', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-group',
				'name'  => __( 'Group', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-group-alt',
				'name'  => __( 'Group', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-guidedog',
				'name'  => __( 'Guide Dog', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-hand-up',
				'name'  => __( 'Hand Up', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-hand-down',
				'name'  => __( 'Hand Down', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-hand-left',
				'name'  => __( 'Hand Left', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-hand-right',
				'name'  => __( 'Hand Right', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-hdd',
				'name'  => __( 'HDD', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-headphones',
				'name'  => __( 'Headphones', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-hearing-impaired',
				'name'  => __( 'Hearing Impaired', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-heart',
				'name'  => __( 'Heart', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-heart-alt',
				'name'  => __( 'Heart', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-heart-empty',
				'name'  => __( 'Heart Empty', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-hourglass',
				'name'  => __( 'Hourglass', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-idea',
				'name'  => __( 'Idea', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-idea-alt',
				'name'  => __( 'Idea', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-inbox',
				'name'  => __( 'Inbox', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-inbox-alt',
				'name'  => __( 'Inbox', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-inbox-box',
				'name'  => __( 'Inbox', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-info-sign',
				'name'  => __( 'Info', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-key',
				'name'  => __( 'Key', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-laptop',
				'name'  => __( 'Laptop', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-laptop-alt',
				'name'  => __( 'Laptop', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-leaf',
				'name'  => __( 'Leaf', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-lines',
				'name'  => __( 'Lines', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-magic',
				'name'  => __( 'Magic', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-magnet',
				'name'  => __( 'Magnet', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-mic',
				'name'  => __( 'Mic', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-music',
				'name'  => __( 'Music', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-paper-clip',
				'name'  => __( 'Paper Clip', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-paper-clip-alt',
				'name'  => __( 'Paper Clip', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-pencil',
				'name'  => __( 'Pencil', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-pencil-alt',
				'name'  => __( 'Pencil', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-person',
				'name'  => __( 'Person', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-phone',
				'name'  => __( 'Phone', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-phone-alt',
				'name'  => __( 'Phone', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-photo',
				'name'  => __( 'Photo', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-photo-alt',
				'name'  => __( 'Photo', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-picture',
				'name'  => __( 'Picture', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-plane',
				'name'  => __( 'Plane', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-podcast',
				'name'  => __( 'Podcast', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-puzzle',
				'name'  => __( 'Puzzle', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-qrcode',
				'name'  => __( 'QR Code', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-quotes',
				'name'  => __( 'Quotes', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-quotes-alt',
				'name'  => __( 'Quotes', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-random',
				'name'  => __( 'Random', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-scissors',
				'name'  => __( 'Scissors', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-screen',
				'name'  => __( 'Screen', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-screen-alt',
				'name'  => __( 'Screen', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-screenshot',
				'name'  => __( 'Screenshot', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-shopping-cart',
				'name'  => __( 'Shopping Cart', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-shopping-cart-sign',
				'name'  => __( 'Shopping Cart Sign', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-signal',
				'name'  => __( 'Signal', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-smiley',
				'name'  => __( 'Smiley', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-smiley-alt',
				'name'  => __( 'Smiley', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-speaker',
				'name'  => __( 'Speaker', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-user',
				'name'  => __( 'User', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-th',
				'name'  => __( 'Thumbnails', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-th-large',
				'name'  => __( 'Thumbnails (Large)', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-th-list',
				'name'  => __( 'Thumbnails (List)', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-time',
				'name'  => __( 'Time', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-time-alt',
				'name'  => __( 'Time', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-torso',
				'name'  => __( 'Torso', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-wheelchair',
				'name'  => __( 'Wheelchair', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-wrench',
				'name'  => __( 'Wrench', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-wrench-alt',
				'name'  => __( 'Wrench', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'el-icon-universal-access',
				'name'  => __( 'Universal Access', 'relicwp-helper' ),
			),
			array(
				'group' => 'places',
				'id'    => 'el-icon-bookmark',
				'name'  => __( 'Bookmark', 'relicwp-helper' ),
			),
			array(
				'group' => 'places',
				'id'    => 'el-icon-bookmark-empty',
				'name'  => __( 'Bookmark Empty', 'relicwp-helper' ),
			),
			array(
				'group' => 'places',
				'id'    => 'el-icon-dashboard',
				'name'  => __( 'Dashboard', 'relicwp-helper' ),
			),
			array(
				'group' => 'places',
				'id'    => 'el-icon-home',
				'name'  => __( 'Home', 'relicwp-helper' ),
			),
			array(
				'group' => 'places',
				'id'    => 'el-icon-home-alt',
				'name'  => __( 'Home', 'relicwp-helper' ),
			),
			array(
				'group' => 'places',
				'id'    => 'el-icon-iphone-home',
				'name'  => __( 'Home (iPhone)', 'relicwp-helper' ),
			),
			array(
				'group' => 'places',
				'id'    => 'el-icon-network',
				'name'  => __( 'Network', 'relicwp-helper' ),
			),
			array(
				'group' => 'places',
				'id'    => 'el-icon-tags',
				'name'  => __( 'Tags', 'relicwp-helper' ),
			),
			array(
				'group' => 'places',
				'id'    => 'el-icon-website',
				'name'  => __( 'Website', 'relicwp-helper' ),
			),
			array(
				'group' => 'places',
				'id'    => 'el-icon-website-alt',
				'name'  => __( 'Website', 'relicwp-helper' ),
			),
			array(
				'group' => 'social',
				'id'    => 'el-icon-behance',
				'name'  => 'Behance',
			),
			array(
				'group' => 'social',
				'id'    => 'el-icon-blogger',
				'name'  => 'Blogger',
			),
			array(
				'group' => 'social',
				'id'    => 'el-icon-cloud',
				'name'  => __( 'Cloud', 'relicwp-helper' ),
			),
			array(
				'group' => 'social',
				'id'    => 'el-icon-cloud-alt',
				'name'  => __( 'Cloud', 'relicwp-helper' ),
			),
			array(
				'group' => 'social',
				'id'    => 'el-icon-delicious',
				'name'  => 'Delicious',
			),
			array(
				'group' => 'social',
				'id'    => 'el-icon-deviantart',
				'name'  => 'DeviantArt',
			),
			array(
				'group' => 'social',
				'id'    => 'el-icon-digg',
				'name'  => 'Digg',
			),
			array(
				'group' => 'social',
				'id'    => 'el-icon-dribbble',
				'name'  => 'Dribbble',
			),
			array(
				'group' => 'social',
				'id'    => 'el-icon-facebook',
				'name'  => 'Facebook',
			),
			array(
				'group' => 'social',
				'id'    => 'el-icon-facetime-video',
				'name'  => 'Facetime Video',
			),
			array(
				'group' => 'social',
				'id'    => 'el-icon-flickr',
				'name'  => 'Flickr',
			),
			array(
				'group' => 'social',
				'id'    => 'el-icon-foursquare',
				'name'  => 'Foursquare',
			),
			array(
				'group' => 'social',
				'id'    => 'el-icon-friendfeed',
				'name'  => 'FriendFeed',
			),
			array(
				'group' => 'social',
				'id'    => 'el-icon-friendfeed-rect',
				'name'  => 'FriendFeed',
			),
			array(
				'group' => 'social',
				'id'    => 'el-icon-github',
				'name'  => 'GitHub',
			),
			array(
				'group' => 'social',
				'id'    => 'el-icon-github-text',
				'name'  => 'GitHub',
			),
			array(
				'group' => 'social',
				'id'    => 'el-icon-googleplus',
				'name'  => 'Google+',
			),
			array(
				'group' => 'social',
				'id'    => 'el-icon-instagram',
				'name'  => 'Instagram',
			),
			array(
				'group' => 'social',
				'id'    => 'el-icon-lastfm',
				'name'  => 'Last.fm',
			),
			array(
				'group' => 'social',
				'id'    => 'el-icon-linkedin',
				'name'  => 'LinkedIn',
			),
			array(
				'group' => 'social',
				'id'    => 'el-icon-livejournal',
				'name'  => 'LiveJournal',
			),
			array(
				'group' => 'social',
				'id'    => 'el-icon-myspace',
				'name'  => 'MySpace',
			),
			array(
				'group' => 'social',
				'id'    => 'el-icon-opensource',
				'name'  => __( 'Open Source', 'relicwp-helper' ),
			),
			array(
				'group' => 'social',
				'id'    => 'el-icon-path',
				'name'  => 'path',
			),
			array(
				'group' => 'social',
				'id'    => 'el-icon-picasa',
				'name'  => 'Picasa',
			),
			array(
				'group' => 'social',
				'id'    => 'el-icon-pinterest',
				'name'  => 'Pinterest',
			),
			array(
				'group' => 'social',
				'id'    => 'el-icon-rss',
				'name'  => 'RSS',
			),
			array(
				'group' => 'social',
				'id'    => 'el-icon-reddit',
				'name'  => 'Reddit',
			),
			array(
				'group' => 'social',
				'id'    => 'el-icon-skype',
				'name'  => 'Skype',
			),
			array(
				'group' => 'social',
				'id'    => 'el-icon-slideshare',
				'name'  => 'Slideshare',
			),
			array(
				'group' => 'social',
				'id'    => 'el-icon-soundcloud',
				'name'  => 'SoundCloud',
			),
			array(
				'group' => 'social',
				'id'    => 'el-icon-spotify',
				'name'  => 'Spotify',
			),
			array(
				'group' => 'social',
				'id'    => 'el-icon-stackoverflow',
				'name'  => 'Stack Overflow',
			),
			array(
				'group' => 'social',
				'id'    => 'el-icon-stumbleupon',
				'name'  => 'StumbleUpon',
			),
			array(
				'group' => 'social',
				'id'    => 'el-icon-twitter',
				'name'  => 'Twitter',
			),
			array(
				'group' => 'social',
				'id'    => 'el-icon-tumblr',
				'name'  => 'Tumblr',
			),
			array(
				'group' => 'social',
				'id'    => 'el-icon-viadeo',
				'name'  => 'Viadeo',
			),
			array(
				'group' => 'social',
				'id'    => 'el-icon-vimeo',
				'name'  => 'Vimeo',
			),
			array(
				'group' => 'social',
				'id'    => 'el-icon-vkontakte',
				'name'  => 'VKontakte',
			),
			array(
				'group' => 'social',
				'id'    => 'el-icon-w3c',
				'name'  => 'W3C',
			),
			array(
				'group' => 'social',
				'id'    => 'el-icon-wordpress',
				'name'  => 'WordPress',
			),
			array(
				'group' => 'social',
				'id'    => 'el-icon-youtube',
				'name'  => 'YouTube',
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
