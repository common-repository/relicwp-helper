<?php
/**
 * Foundation Icons
 *
 */
class RelicWP_Icon_Picker_Type_Foundation extends RelicWP_Icon_Picker_Type_Font {

	/**
	 * Icon type ID
	 *
	 */
	protected $id = 'foundation-icons';

	/**
	 * Icon type name
	 *
	 */
	protected $name = 'Foundation';

	/**
	 * Icon type version
	 *
	 */
	protected $version = '3.0';

	/**
	 * Get icon groups
	 *
	 */
	public function get_groups() {
		$groups = array(
			array(
				'id'   => 'accessibility',
				'name' => __( 'Accessibility', 'relicwp-helper' ),
			),
			array(
				'id'   => 'arrows',
				'name' => __( 'Arrows', 'relicwp-helper' ),
			),
			array(
				'id'   => 'devices',
				'name' => __( 'Devices', 'relicwp-helper' ),
			),
			array(
				'id'   => 'ecommerce',
				'name' => __( 'Ecommerce', 'relicwp-helper' ),
			),
			array(
				'id'   => 'editor',
				'name' => __( 'Editor', 'relicwp-helper' ),
			),
			array(
				'id'   => 'file-types',
				'name' => __( 'File Types', 'relicwp-helper' ),
			),
			array(
				'id'   => 'general',
				'name' => __( 'General', 'relicwp-helper' ),
			),
			array(
				'id'   => 'media-control',
				'name' => __( 'Media Controls', 'relicwp-helper' ),
			),
			array(
				'id'   => 'misc',
				'name' => __( 'Miscellaneous', 'relicwp-helper' ),
			),
			array(
				'id'   => 'people',
				'name' => __( 'People', 'relicwp-helper' ),
			),
			array(
				'id'   => 'social',
				'name' => __( 'Social/Brand', 'relicwp-helper' ),
			),
		);
		/**
		 * Filter genericon groups
		 *
		 */
		$groups = apply_filters( 'relicwp_icon_picker_foundations_groups', $groups );

		return $groups;
	}

	/**
	 * Get icon names
	 *
	 */
	public function get_items() {
		$items = array(
			array(
				'group' => 'accessibility',
				'id'    => 'fi-asl',
				'name'  => __( 'ASL', 'relicwp-helper' ),
			),
			array(
				'group' => 'accessibility',
				'id'    => 'fi-blind',
				'name'  => __( 'Blind', 'relicwp-helper' ),
			),
			array(
				'group' => 'accessibility',
				'id'    => 'fi-braille',
				'name'  => __( 'Braille', 'relicwp-helper' ),
			),
			array(
				'group' => 'accessibility',
				'id'    => 'fi-closed-caption',
				'name'  => __( 'Closed Caption', 'relicwp-helper' ),
			),
			array(
				'group' => 'accessibility',
				'id'    => 'fi-elevator',
				'name'  => __( 'Elevator', 'relicwp-helper' ),
			),
			array(
				'group' => 'accessibility',
				'id'    => 'fi-guide-dog',
				'name'  => __( 'Guide Dog', 'relicwp-helper' ),
			),
			array(
				'group' => 'accessibility',
				'id'    => 'fi-hearing-aid',
				'name'  => __( 'Hearing Aid', 'relicwp-helper' ),
			),
			array(
				'group' => 'accessibility',
				'id'    => 'fi-universal-access',
				'name'  => __( 'Universal Access', 'relicwp-helper' ),
			),
			array(
				'group' => 'accessibility',
				'id'    => 'fi-male',
				'name'  => __( 'Male', 'relicwp-helper' ),
			),
			array(
				'group' => 'accessibility',
				'id'    => 'fi-female',
				'name'  => __( 'Female', 'relicwp-helper' ),
			),
			array(
				'group' => 'accessibility',
				'id'    => 'fi-male-female',
				'name'  => __( 'Male & Female', 'relicwp-helper' ),
			),
			array(
				'group' => 'accessibility',
				'id'    => 'fi-male-symbol',
				'name'  => __( 'Male Symbol', 'relicwp-helper' ),
			),
			array(
				'group' => 'accessibility',
				'id'    => 'fi-female-symbol',
				'name'  => __( 'Female Symbol', 'relicwp-helper' ),
			),
			array(
				'group' => 'accessibility',
				'id'    => 'fi-wheelchair',
				'name'  => __( 'Wheelchair', 'relicwp-helper' ),
			),
			array(
				'group' => 'arrows',
				'id'    => 'fi-arrow-up',
				'name'  => __( 'Arrow: Up', 'relicwp-helper' ),
			),
			array(
				'group' => 'arrows',
				'id'    => 'fi-arrow-down',
				'name'  => __( 'Arrow: Down', 'relicwp-helper' ),
			),
			array(
				'group' => 'arrows',
				'id'    => 'fi-arrow-left',
				'name'  => __( 'Arrow: Left', 'relicwp-helper' ),
			),
			array(
				'group' => 'arrows',
				'id'    => 'fi-arrow-right',
				'name'  => __( 'Arrow: Right', 'relicwp-helper' ),
			),
			array(
				'group' => 'arrows',
				'id'    => 'fi-arrows-out',
				'name'  => __( 'Arrows: Out', 'relicwp-helper' ),
			),
			array(
				'group' => 'arrows',
				'id'    => 'fi-arrows-in',
				'name'  => __( 'Arrows: In', 'relicwp-helper' ),
			),
			array(
				'group' => 'arrows',
				'id'    => 'fi-arrows-expand',
				'name'  => __( 'Arrows: Expand', 'relicwp-helper' ),
			),
			array(
				'group' => 'arrows',
				'id'    => 'fi-arrows-compress',
				'name'  => __( 'Arrows: Compress', 'relicwp-helper' ),
			),
			array(
				'group' => 'devices',
				'id'    => 'fi-bluetooth',
				'name'  => __( 'Bluetooth', 'relicwp-helper' ),
			),
			array(
				'group' => 'devices',
				'id'    => 'fi-camera',
				'name'  => __( 'Camera', 'relicwp-helper' ),
			),
			array(
				'group' => 'devices',
				'id'    => 'fi-compass',
				'name'  => __( 'Compass', 'relicwp-helper' ),
			),
			array(
				'group' => 'devices',
				'id'    => 'fi-laptop',
				'name'  => __( 'Laptop', 'relicwp-helper' ),
			),
			array(
				'group' => 'devices',
				'id'    => 'fi-megaphone',
				'name'  => __( 'Megaphone', 'relicwp-helper' ),
			),
			array(
				'group' => 'devices',
				'id'    => 'fi-microphone',
				'name'  => __( 'Microphone', 'relicwp-helper' ),
			),
			array(
				'group' => 'devices',
				'id'    => 'fi-mobile',
				'name'  => __( 'Mobile', 'relicwp-helper' ),
			),
			array(
				'group' => 'devices',
				'id'    => 'fi-mobile-signal',
				'name'  => __( 'Mobile Signal', 'relicwp-helper' ),
			),
			array(
				'group' => 'devices',
				'id'    => 'fi-monitor',
				'name'  => __( 'Monitor', 'relicwp-helper' ),
			),
			array(
				'group' => 'devices',
				'id'    => 'fi-tablet-portrait',
				'name'  => __( 'Tablet: Portrait', 'relicwp-helper' ),
			),
			array(
				'group' => 'devices',
				'id'    => 'fi-tablet-landscape',
				'name'  => __( 'Tablet: Landscape', 'relicwp-helper' ),
			),
			array(
				'group' => 'devices',
				'id'    => 'fi-telephone',
				'name'  => __( 'Telephone', 'relicwp-helper' ),
			),
			array(
				'group' => 'devices',
				'id'    => 'fi-usb',
				'name'  => __( 'USB', 'relicwp-helper' ),
			),
			array(
				'group' => 'devices',
				'id'    => 'fi-video',
				'name'  => __( 'Video', 'relicwp-helper' ),
			),
			array(
				'group' => 'ecommerce',
				'id'    => 'fi-bitcoin',
				'name'  => __( 'Bitcoin', 'relicwp-helper' ),
			),
			array(
				'group' => 'ecommerce',
				'id'    => 'fi-bitcoin-circle',
				'name'  => __( 'Bitcoin', 'relicwp-helper' ),
			),
			array(
				'group' => 'ecommerce',
				'id'    => 'fi-dollar',
				'name'  => __( 'Dollar', 'relicwp-helper' ),
			),
			array(
				'group' => 'ecommerce',
				'id'    => 'fi-euro',
				'name'  => __( 'EURO', 'relicwp-helper' ),
			),
			array(
				'group' => 'ecommerce',
				'id'    => 'fi-pound',
				'name'  => __( 'Pound', 'relicwp-helper' ),
			),
			array(
				'group' => 'ecommerce',
				'id'    => 'fi-yen',
				'name'  => __( 'Yen', 'relicwp-helper' ),
			),
			array(
				'group' => 'ecommerce',
				'id'    => 'fi-burst',
				'name'  => __( 'Burst', 'relicwp-helper' ),
			),
			array(
				'group' => 'ecommerce',
				'id'    => 'fi-burst-new',
				'name'  => __( 'Burst: New', 'relicwp-helper' ),
			),
			array(
				'group' => 'ecommerce',
				'id'    => 'fi-burst-sale',
				'name'  => __( 'Burst: Sale', 'relicwp-helper' ),
			),
			array(
				'group' => 'ecommerce',
				'id'    => 'fi-credit-card',
				'name'  => __( 'Credit Card', 'relicwp-helper' ),
			),
			array(
				'group' => 'ecommerce',
				'id'    => 'fi-dollar-bill',
				'name'  => __( 'Dollar Bill', 'relicwp-helper' ),
			),
			array(
				'group' => 'ecommerce',
				'id'    => 'fi-paypal',
				'name'  => 'PayPal',
			),
			array(
				'group' => 'ecommerce',
				'id'    => 'fi-price-tag',
				'name'  => __( 'Price Tag', 'relicwp-helper' ),
			),
			array(
				'group' => 'ecommerce',
				'id'    => 'fi-pricetag-multiple',
				'name'  => __( 'Price Tag: Multiple', 'relicwp-helper' ),
			),
			array(
				'group' => 'ecommerce',
				'id'    => 'fi-shopping-bag',
				'name'  => __( 'Shopping Bag', 'relicwp-helper' ),
			),
			array(
				'group' => 'ecommerce',
				'id'    => 'fi-shopping-cart',
				'name'  => __( 'Shopping Cart', 'relicwp-helper' ),
			),
			array(
				'group' => 'editor',
				'id'    => 'fi-bold',
				'name'  => __( 'Bold', 'relicwp-helper' ),
			),
			array(
				'group' => 'editor',
				'id'    => 'fi-italic',
				'name'  => __( 'Italic', 'relicwp-helper' ),
			),
			array(
				'group' => 'editor',
				'id'    => 'fi-underline',
				'name'  => __( 'Underline', 'relicwp-helper' ),
			),
			array(
				'group' => 'editor',
				'id'    => 'fi-strikethrough',
				'name'  => __( 'Strikethrough', 'relicwp-helper' ),
			),
			array(
				'group' => 'editor',
				'id'    => 'fi-text-color',
				'name'  => __( 'Text Color', 'relicwp-helper' ),
			),
			array(
				'group' => 'editor',
				'id'    => 'fi-background-color',
				'name'  => __( 'Background Color', 'relicwp-helper' ),
			),
			array(
				'group' => 'editor',
				'id'    => 'fi-superscript',
				'name'  => __( 'Superscript', 'relicwp-helper' ),
			),
			array(
				'group' => 'editor',
				'id'    => 'fi-subscript',
				'name'  => __( 'Subscript', 'relicwp-helper' ),
			),
			array(
				'group' => 'editor',
				'id'    => 'fi-align-left',
				'name'  => __( 'Align Left', 'relicwp-helper' ),
			),
			array(
				'group' => 'editor',
				'id'    => 'fi-align-center',
				'name'  => __( 'Align Center', 'relicwp-helper' ),
			),
			array(
				'group' => 'editor',
				'id'    => 'fi-align-right',
				'name'  => __( 'Align Right', 'relicwp-helper' ),
			),
			array(
				'group' => 'editor',
				'id'    => 'fi-align-justify',
				'name'  => __( 'Justify', 'relicwp-helper' ),
			),
			array(
				'group' => 'editor',
				'id'    => 'fi-list-number',
				'name'  => __( 'List: Number', 'relicwp-helper' ),
			),
			array(
				'group' => 'editor',
				'id'    => 'fi-list-bullet',
				'name'  => __( 'List: Bullet', 'relicwp-helper' ),
			),
			array(
				'group' => 'editor',
				'id'    => 'fi-indent-more',
				'name'  => __( 'Indent', 'relicwp-helper' ),
			),
			array(
				'group' => 'editor',
				'id'    => 'fi-indent-less',
				'name'  => __( 'Outdent', 'relicwp-helper' ),
			),
			array(
				'group' => 'editor',
				'id'    => 'fi-page-add',
				'name'  => __( 'Add Page', 'relicwp-helper' ),
			),
			array(
				'group' => 'editor',
				'id'    => 'fi-page-copy',
				'name'  => __( 'Copy Page', 'relicwp-helper' ),
			),
			array(
				'group' => 'editor',
				'id'    => 'fi-page-multiple',
				'name'  => __( 'Duplicate Page', 'relicwp-helper' ),
			),
			array(
				'group' => 'editor',
				'id'    => 'fi-page-delete',
				'name'  => __( 'Delete Page', 'relicwp-helper' ),
			),
			array(
				'group' => 'editor',
				'id'    => 'fi-page-remove',
				'name'  => __( 'Remove Page', 'relicwp-helper' ),
			),
			array(
				'group' => 'editor',
				'id'    => 'fi-page-edit',
				'name'  => __( 'Edit Page', 'relicwp-helper' ),
			),
			array(
				'group' => 'editor',
				'id'    => 'fi-page-export',
				'name'  => __( 'Export', 'relicwp-helper' ),
			),
			array(
				'group' => 'editor',
				'id'    => 'fi-page-export-csv',
				'name'  => __( 'Export to CSV', 'relicwp-helper' ),
			),
			array(
				'group' => 'editor',
				'id'    => 'fi-page-export-pdf',
				'name'  => __( 'Export to PDF', 'relicwp-helper' ),
			),
			array(
				'group' => 'editor',
				'id'    => 'fi-page-filled',
				'name'  => __( 'Fill Page', 'relicwp-helper' ),
			),
			array(
				'group' => 'editor',
				'id'    => 'fi-crop',
				'name'  => __( 'Crop', 'relicwp-helper' ),
			),
			array(
				'group' => 'editor',
				'id'    => 'fi-filter',
				'name'  => __( 'Filter', 'relicwp-helper' ),
			),
			array(
				'group' => 'editor',
				'id'    => 'fi-paint-bucket',
				'name'  => __( 'Paint Bucket', 'relicwp-helper' ),
			),
			array(
				'group' => 'editor',
				'id'    => 'fi-photo',
				'name'  => __( 'Photo', 'relicwp-helper' ),
			),
			array(
				'group' => 'editor',
				'id'    => 'fi-print',
				'name'  => __( 'Print', 'relicwp-helper' ),
			),
			array(
				'group' => 'editor',
				'id'    => 'fi-save',
				'name'  => __( 'Save', 'relicwp-helper' ),
			),
			array(
				'group' => 'editor',
				'id'    => 'fi-link',
				'name'  => __( 'Link', 'relicwp-helper' ),
			),
			array(
				'group' => 'editor',
				'id'    => 'fi-unlink',
				'name'  => __( 'Unlink', 'relicwp-helper' ),
			),
			array(
				'group' => 'editor',
				'id'    => 'fi-quote',
				'name'  => __( 'Quote', 'relicwp-helper' ),
			),
			array(
				'group' => 'editor',
				'id'    => 'fi-page-search',
				'name'  => __( 'Search in Page', 'relicwp-helper' ),
			),
			array(
				'group' => 'file-types',
				'id'    => 'fi-page',
				'name'  => __( 'File', 'relicwp-helper' ),
			),
			array(
				'group' => 'file-types',
				'id'    => 'fi-page-csv',
				'name'  => __( 'CSV', 'relicwp-helper' ),
			),
			array(
				'group' => 'file-types',
				'id'    => 'fi-page-doc',
				'name'  => __( 'Doc', 'relicwp-helper' ),
			),
			array(
				'group' => 'file-types',
				'id'    => 'fi-page-pdf',
				'name'  => __( 'PDF', 'relicwp-helper' ),
			),
			array(
				'group' => 'general',
				'id'    => 'fi-address-book',
				'name'  => __( 'Addressbook', 'relicwp-helper' ),
			),
			array(
				'group' => 'general',
				'id'    => 'fi-alert',
				'name'  => __( 'Alert', 'relicwp-helper' ),
			),
			array(
				'group' => 'general',
				'id'    => 'fi-annotate',
				'name'  => __( 'Annotate', 'relicwp-helper' ),
			),
			array(
				'group' => 'general',
				'id'    => 'fi-archive',
				'name'  => __( 'Archive', 'relicwp-helper' ),
			),
			array(
				'group' => 'general',
				'id'    => 'fi-bookmark',
				'name'  => __( 'Bookmark', 'relicwp-helper' ),
			),
			array(
				'group' => 'general',
				'id'    => 'fi-calendar',
				'name'  => __( 'Calendar', 'relicwp-helper' ),
			),
			array(
				'group' => 'general',
				'id'    => 'fi-clock',
				'name'  => __( 'Clock', 'relicwp-helper' ),
			),
			array(
				'group' => 'general',
				'id'    => 'fi-cloud',
				'name'  => __( 'Cloud', 'relicwp-helper' ),
			),
			array(
				'group' => 'general',
				'id'    => 'fi-comment',
				'name'  => __( 'Comment', 'relicwp-helper' ),
			),
			array(
				'group' => 'general',
				'id'    => 'fi-comment-minus',
				'name'  => __( 'Comment: Minus', 'relicwp-helper' ),
			),
			array(
				'group' => 'general',
				'id'    => 'fi-comment-quotes',
				'name'  => __( 'Comment: Quotes', 'relicwp-helper' ),
			),
			array(
				'group' => 'general',
				'id'    => 'fi-comment-video',
				'name'  => __( 'Comment: Video', 'relicwp-helper' ),
			),
			array(
				'group' => 'general',
				'id'    => 'fi-comments',
				'name'  => __( 'Comments', 'relicwp-helper' ),
			),
			array(
				'group' => 'general',
				'id'    => 'fi-contrast',
				'name'  => __( 'Contrast', 'relicwp-helper' ),
			),
			array(
				'group' => 'general',
				'id'    => 'fi-database',
				'name'  => __( 'Database', 'relicwp-helper' ),
			),
			array(
				'group' => 'general',
				'id'    => 'fi-folder',
				'name'  => __( 'Folder', 'relicwp-helper' ),
			),
			array(
				'group' => 'general',
				'id'    => 'fi-folder-add',
				'name'  => __( 'Folder: Add', 'relicwp-helper' ),
			),
			array(
				'group' => 'general',
				'id'    => 'fi-folder-lock',
				'name'  => __( 'Folder: Lock', 'relicwp-helper' ),
			),
			array(
				'group' => 'general',
				'id'    => 'fi-eye',
				'name'  => __( 'Eye', 'relicwp-helper' ),
			),
			array(
				'group' => 'general',
				'id'    => 'fi-heart',
				'name'  => __( 'Heart', 'relicwp-helper' ),
			),
			array(
				'group' => 'general',
				'id'    => 'fi-plus',
				'name'  => __( 'Plus', 'relicwp-helper' ),
			),
			array(
				'group' => 'general',
				'id'    => 'fi-minus',
				'name'  => __( 'Minus', 'relicwp-helper' ),
			),
			array(
				'group' => 'general',
				'id'    => 'fi-minus-circle',
				'name'  => __( 'Minus', 'relicwp-helper' ),
			),
			array(
				'group' => 'general',
				'id'    => 'fi-x',
				'name'  => __( 'X', 'relicwp-helper' ),
			),
			array(
				'group' => 'general',
				'id'    => 'fi-x-circle',
				'name'  => __( 'X', 'relicwp-helper' ),
			),
			array(
				'group' => 'general',
				'id'    => 'fi-check',
				'name'  => __( 'Check', 'relicwp-helper' ),
			),
			array(
				'group' => 'general',
				'id'    => 'fi-checkbox',
				'name'  => __( 'Check', 'relicwp-helper' ),
			),
			array(
				'group' => 'general',
				'id'    => 'fi-download',
				'name'  => __( 'Download', 'relicwp-helper' ),
			),
			array(
				'group' => 'general',
				'id'    => 'fi-upload',
				'name'  => __( 'Upload', 'relicwp-helper' ),
			),
			array(
				'group' => 'general',
				'id'    => 'fi-upload-cloud',
				'name'  => __( 'Upload to Cloud', 'relicwp-helper' ),
			),
			array(
				'group' => 'general',
				'id'    => 'fi-flag',
				'name'  => __( 'Flag', 'relicwp-helper' ),
			),
			array(
				'group' => 'general',
				'id'    => 'fi-foundation',
				'name'  => __( 'Foundation', 'relicwp-helper' ),
			),
			array(
				'group' => 'general',
				'id'    => 'fi-graph-bar',
				'name'  => __( 'Graph: Bar', 'relicwp-helper' ),
			),
			array(
				'group' => 'general',
				'id'    => 'fi-graph-horizontal',
				'name'  => __( 'Graph: Horizontal', 'relicwp-helper' ),
			),
			array(
				'group' => 'general',
				'id'    => 'fi-graph-pie',
				'name'  => __( 'Graph: Pie', 'relicwp-helper' ),
			),
			array(
				'group' => 'general',
				'id'    => 'fi-graph-trend',
				'name'  => __( 'Graph: Trend', 'relicwp-helper' ),
			),
			array(
				'group' => 'general',
				'id'    => 'fi-home',
				'name'  => __( 'Home', 'relicwp-helper' ),
			),
			array(
				'group' => 'general',
				'id'    => 'fi-layout',
				'name'  => __( 'Layout', 'relicwp-helper' ),
			),
			array(
				'group' => 'general',
				'id'    => 'fi-like',
				'name'  => __( 'Like', 'relicwp-helper' ),
			),
			array(
				'group' => 'general',
				'id'    => 'fi-dislike',
				'name'  => __( 'Dislike', 'relicwp-helper' ),
			),
			array(
				'group' => 'general',
				'id'    => 'fi-list',
				'name'  => __( 'List', 'relicwp-helper' ),
			),
			array(
				'group' => 'general',
				'id'    => 'fi-list-thumbnails',
				'name'  => __( 'List: Thumbnails', 'relicwp-helper' ),
			),
			array(
				'group' => 'general',
				'id'    => 'fi-lock',
				'name'  => __( 'Lock', 'relicwp-helper' ),
			),
			array(
				'group' => 'general',
				'id'    => 'fi-unlock',
				'name'  => __( 'Unlock', 'relicwp-helper' ),
			),
			array(
				'group' => 'general',
				'id'    => 'fi-marker',
				'name'  => __( 'Marker', 'relicwp-helper' ),
			),
			array(
				'group' => 'general',
				'id'    => 'fi-magnifying-glass',
				'name'  => __( 'Magnifying Glass', 'relicwp-helper' ),
			),
			array(
				'group' => 'general',
				'id'    => 'fi-refresh',
				'name'  => __( 'Refresh', 'relicwp-helper' ),
			),
			array(
				'group' => 'general',
				'id'    => 'fi-paperclip',
				'name'  => __( 'Paperclip', 'relicwp-helper' ),
			),
			array(
				'group' => 'general',
				'id'    => 'fi-pencil',
				'name'  => __( 'Pencil', 'relicwp-helper' ),
			),
			array(
				'group' => 'general',
				'id'    => 'fi-play-video',
				'name'  => __( 'Play Video', 'relicwp-helper' ),
			),
			array(
				'group' => 'general',
				'id'    => 'fi-results',
				'name'  => __( 'Results', 'relicwp-helper' ),
			),
			array(
				'group' => 'general',
				'id'    => 'fi-results-demographics',
				'name'  => __( 'Results: Demographics', 'relicwp-helper' ),
			),
			array(
				'group' => 'general',
				'id'    => 'fi-rss',
				'name'  => __( 'RSS', 'relicwp-helper' ),
			),
			array(
				'group' => 'general',
				'id'    => 'fi-share',
				'name'  => __( 'Share', 'relicwp-helper' ),
			),
			array(
				'group' => 'general',
				'id'    => 'fi-sound',
				'name'  => __( 'Sound', 'relicwp-helper' ),
			),
			array(
				'group' => 'general',
				'id'    => 'fi-star',
				'name'  => __( 'Star', 'relicwp-helper' ),
			),
			array(
				'group' => 'general',
				'id'    => 'fi-thumbnails',
				'name'  => __( 'Thumbnails', 'relicwp-helper' ),
			),
			array(
				'group' => 'general',
				'id'    => 'fi-trash',
				'name'  => __( 'Trash', 'relicwp-helper' ),
			),
			array(
				'group' => 'general',
				'id'    => 'fi-web',
				'name'  => __( 'Web', 'relicwp-helper' ),
			),
			array(
				'group' => 'general',
				'id'    => 'fi-widget',
				'name'  => __( 'Widget', 'relicwp-helper' ),
			),
			array(
				'group' => 'general',
				'id'    => 'fi-wrench',
				'name'  => __( 'Wrench', 'relicwp-helper' ),
			),
			array(
				'group' => 'general',
				'id'    => 'fi-zoom-out',
				'name'  => __( 'Zoom Out', 'relicwp-helper' ),
			),
			array(
				'group' => 'general',
				'id'    => 'fi-zoom-in',
				'name'  => __( 'Zoom In', 'relicwp-helper' ),
			),
			array(
				'group' => 'media-control',
				'id'    => 'fi-record',
				'name'  => __( 'Record', 'relicwp-helper' ),
			),
			array(
				'group' => 'media-control',
				'id'    => 'fi-play-circle',
				'name'  => __( 'Play', 'relicwp-helper' ),
			),
			array(
				'group' => 'media-control',
				'id'    => 'fi-play',
				'name'  => __( 'Play', 'relicwp-helper' ),
			),
			array(
				'group' => 'media-control',
				'id'    => 'fi-pause',
				'name'  => __( 'Pause', 'relicwp-helper' ),
			),
			array(
				'group' => 'media-control',
				'id'    => 'fi-stop',
				'name'  => __( 'Stop', 'relicwp-helper' ),
			),
			array(
				'group' => 'media-control',
				'id'    => 'fi-previous',
				'name'  => __( 'Previous', 'relicwp-helper' ),
			),
			array(
				'group' => 'media-control',
				'id'    => 'fi-rewind',
				'name'  => __( 'Rewind', 'relicwp-helper' ),
			),
			array(
				'group' => 'media-control',
				'id'    => 'fi-fast-forward',
				'name'  => __( 'Fast Forward', 'relicwp-helper' ),
			),
			array(
				'group' => 'media-control',
				'id'    => 'fi-next',
				'name'  => __( 'Next', 'relicwp-helper' ),
			),
			array(
				'group' => 'media-control',
				'id'    => 'fi-volume',
				'name'  => __( 'Volume', 'relicwp-helper' ),
			),
			array(
				'group' => 'media-control',
				'id'    => 'fi-volume-none',
				'name'  => __( 'Volume: Low', 'relicwp-helper' ),
			),
			array(
				'group' => 'media-control',
				'id'    => 'fi-volume-strike',
				'name'  => __( 'Volume: Mute', 'relicwp-helper' ),
			),
			array(
				'group' => 'media-control',
				'id'    => 'fi-loop',
				'name'  => __( 'Loop', 'relicwp-helper' ),
			),
			array(
				'group' => 'media-control',
				'id'    => 'fi-shuffle',
				'name'  => __( 'Shuffle', 'relicwp-helper' ),
			),
			array(
				'group' => 'media-control',
				'id'    => 'fi-eject',
				'name'  => __( 'Eject', 'relicwp-helper' ),
			),
			array(
				'group' => 'media-control',
				'id'    => 'fi-rewind-ten',
				'name'  => __( 'Rewind 10', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'fi-anchor',
				'name'  => __( 'Anchor', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'fi-asterisk',
				'name'  => __( 'Asterisk', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'fi-at-sign',
				'name'  => __( '@', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'fi-battery-full',
				'name'  => __( 'Battery: Full', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'fi-battery-half',
				'name'  => __( 'Battery: Half', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'fi-battery-empty',
				'name'  => __( 'Battery: Empty', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'fi-book',
				'name'  => __( 'Book', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'fi-book-bookmark',
				'name'  => __( 'Bookmark', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'fi-clipboard',
				'name'  => __( 'Clipboard', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'fi-clipboard-pencil',
				'name'  => __( 'Clipboard: Pencil', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'fi-clipboard-notes',
				'name'  => __( 'Clipboard: Notes', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'fi-crown',
				'name'  => __( 'Crown', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'fi-die-one',
				'name'  => __( 'Dice: 1', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'fi-die-two',
				'name'  => __( 'Dice: 2', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'fi-die-three',
				'name'  => __( 'Dice: 3', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'fi-die-four',
				'name'  => __( 'Dice: 4', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'fi-die-five',
				'name'  => __( 'Dice: 5', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'fi-die-six',
				'name'  => __( 'Dice: 6', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'fi-safety-cone',
				'name'  => __( 'Cone', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'fi-first-aid',
				'name'  => __( 'Firs Aid', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'fi-foot',
				'name'  => __( 'Foot', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'fi-info',
				'name'  => __( 'Info', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'fi-key',
				'name'  => __( 'Key', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'fi-lightbulb',
				'name'  => __( 'Lightbulb', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'fi-map',
				'name'  => __( 'Map', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'fi-mountains',
				'name'  => __( 'Mountains', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'fi-music',
				'name'  => __( 'Music', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'fi-no-dogs',
				'name'  => __( 'No Dogs', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'fi-no-smoking',
				'name'  => __( 'No Smoking', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'fi-paw',
				'name'  => __( 'Paw', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'fi-power',
				'name'  => __( 'Power', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'fi-prohibited',
				'name'  => __( 'Prohibited', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'fi-projection-screen',
				'name'  => __( 'Projection Screen', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'fi-puzzle',
				'name'  => __( 'Puzzle', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'fi-sheriff-badge',
				'name'  => __( 'Sheriff Badge', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'fi-shield',
				'name'  => __( 'Shield', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'fi-skull',
				'name'  => __( 'Skull', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'fi-target',
				'name'  => __( 'Target', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'fi-target-two',
				'name'  => __( 'Target', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'fi-ticket',
				'name'  => __( 'Ticket', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'fi-trees',
				'name'  => __( 'Trees', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'fi-trophy',
				'name'  => __( 'Trophy', 'relicwp-helper' ),
			),
			array(
				'group' => 'people',
				'id'    => 'fi-torso',
				'name'  => __( 'Torso', 'relicwp-helper' ),
			),
			array(
				'group' => 'people',
				'id'    => 'fi-torso-business',
				'name'  => __( 'Torso: Business', 'relicwp-helper' ),
			),
			array(
				'group' => 'people',
				'id'    => 'fi-torso-female',
				'name'  => __( 'Torso: Female', 'relicwp-helper' ),
			),
			array(
				'group' => 'people',
				'id'    => 'fi-torsos',
				'name'  => __( 'Torsos', 'relicwp-helper' ),
			),
			array(
				'group' => 'people',
				'id'    => 'fi-torsos-all',
				'name'  => __( 'Torsos: All', 'relicwp-helper' ),
			),
			array(
				'group' => 'people',
				'id'    => 'fi-torsos-all-female',
				'name'  => __( 'Torsos: All Female', 'relicwp-helper' ),
			),
			array(
				'group' => 'people',
				'id'    => 'fi-torsos-male-female',
				'name'  => __( 'Torsos: Male & Female', 'relicwp-helper' ),
			),
			array(
				'group' => 'people',
				'id'    => 'fi-torsos-female-male',
				'name'  => __( 'Torsos: Female & Male', 'relicwp-helper' ),
			),
			array(
				'group' => 'social',
				'id'    => 'fi-social-500px',
				'name'  => '500px',
			),
			array(
				'group' => 'social',
				'id'    => 'fi-social-adobe',
				'name'  => 'Adobe',
			),
			array(
				'group' => 'social',
				'id'    => 'fi-social-amazon',
				'name'  => 'Amazon',
			),
			array(
				'group' => 'social',
				'id'    => 'fi-social-android',
				'name'  => 'Android',
			),
			array(
				'group' => 'social',
				'id'    => 'fi-social-apple',
				'name'  => 'Apple',
			),
			array(
				'group' => 'social',
				'id'    => 'fi-social-behance',
				'name'  => 'Behance',
			),
			array(
				'group' => 'social',
				'id'    => 'fi-social-bing',
				'name'  => 'bing',
			),
			array(
				'group' => 'social',
				'id'    => 'fi-social-blogger',
				'name'  => 'Blogger',
			),
			array(
				'group' => 'social',
				'id'    => 'fi-css3',
				'name'  => 'CSS3',
			),
			array(
				'group' => 'social',
				'id'    => 'fi-social-delicious',
				'name'  => 'Delicious',
			),
			array(
				'group' => 'social',
				'id'    => 'fi-social-designer-news',
				'name'  => 'Designer News',
			),
			array(
				'group' => 'social',
				'id'    => 'fi-social-deviant-art',
				'name'  => 'deviantArt',
			),
			array(
				'group' => 'social',
				'id'    => 'fi-social-digg',
				'name'  => 'Digg',
			),
			array(
				'group' => 'social',
				'id'    => 'fi-social-dribbble',
				'name'  => 'dribbble',
			),
			array(
				'group' => 'social',
				'id'    => 'fi-social-drive',
				'name'  => 'Drive',
			),
			array(
				'group' => 'social',
				'id'    => 'fi-social-dropbox',
				'name'  => 'DropBox',
			),
			array(
				'group' => 'social',
				'id'    => 'fi-social-evernote',
				'name'  => 'Evernote',
			),
			array(
				'group' => 'social',
				'id'    => 'fi-social-facebook',
				'name'  => 'Facebook',
			),
			array(
				'group' => 'social',
				'id'    => 'fi-social-flickr',
				'name'  => 'flickr',
			),
			array(
				'group' => 'social',
				'id'    => 'fi-social-forrst',
				'name'  => 'forrst',
			),
			array(
				'group' => 'social',
				'id'    => 'fi-social-foursquare',
				'name'  => 'Foursquare',
			),
			array(
				'group' => 'social',
				'id'    => 'fi-social-game-center',
				'name'  => 'Game Center',
			),
			array(
				'group' => 'social',
				'id'    => 'fi-social-github',
				'name'  => 'GitHub',
			),
			array(
				'group' => 'social',
				'id'    => 'fi-social-google-plus',
				'name'  => 'Google+',
			),
			array(
				'group' => 'social',
				'id'    => 'fi-social-hacker-news',
				'name'  => 'Hacker News',
			),
			array(
				'group' => 'social',
				'id'    => 'fi-social-hi5',
				'name'  => 'hi5',
			),
			array(
				'group' => 'social',
				'id'    => 'fi-html5',
				'name'  => 'HTML5',
			),
			array(
				'group' => 'social',
				'id'    => 'fi-social-instagram',
				'name'  => 'Instagram',
			),
			array(
				'group' => 'social',
				'id'    => 'fi-social-joomla',
				'name'  => 'Joomla!',
			),
			array(
				'group' => 'social',
				'id'    => 'fi-social-lastfm',
				'name'  => 'last.fm',
			),
			array(
				'group' => 'social',
				'id'    => 'fi-social-linkedin',
				'name'  => 'LinkedIn',
			),
			array(
				'group' => 'social',
				'id'    => 'fi-social-medium',
				'name'  => 'Medium',
			),
			array(
				'group' => 'social',
				'id'    => 'fi-social-myspace',
				'name'  => 'My Space',
			),
			array(
				'group' => 'social',
				'id'    => 'fi-social-orkut',
				'name'  => 'Orkut',
			),
			array(
				'group' => 'social',
				'id'    => 'fi-social-path',
				'name'  => 'path',
			),
			array(
				'group' => 'social',
				'id'    => 'fi-social-picasa',
				'name'  => 'Picasa',
			),
			array(
				'group' => 'social',
				'id'    => 'fi-social-pinterest',
				'name'  => 'Pinterest',
			),
			array(
				'group' => 'social',
				'id'    => 'fi-social-rdio',
				'name'  => 'rdio',
			),
			array(
				'group' => 'social',
				'id'    => 'fi-social-reddit',
				'name'  => 'reddit',
			),
			array(
				'group' => 'social',
				'id'    => 'fi-social-skype',
				'name'  => 'Skype',
			),
			array(
				'group' => 'social',
				'id'    => 'fi-social-skillshare',
				'name'  => 'SkillShare',
			),
			array(
				'group' => 'social',
				'id'    => 'fi-social-smashing-mag',
				'name'  => 'Smashing Mag.',
			),
			array(
				'group' => 'social',
				'id'    => 'fi-social-snapchat',
				'name'  => 'Snapchat',
			),
			array(
				'group' => 'social',
				'id'    => 'fi-social-spotify',
				'name'  => 'Spotify',
			),
			array(
				'group' => 'social',
				'id'    => 'fi-social-squidoo',
				'name'  => 'Squidoo',
			),
			array(
				'group' => 'social',
				'id'    => 'fi-social-stack-overflow',
				'name'  => 'StackOverflow',
			),
			array(
				'group' => 'social',
				'id'    => 'fi-social-steam',
				'name'  => 'Steam',
			),
			array(
				'group' => 'social',
				'id'    => 'fi-social-stumbleupon',
				'name'  => 'StumbleUpon',
			),
			array(
				'group' => 'social',
				'id'    => 'fi-social-treehouse',
				'name'  => 'TreeHouse',
			),
			array(
				'group' => 'social',
				'id'    => 'fi-social-tumblr',
				'name'  => 'Tumblr',
			),
			array(
				'group' => 'social',
				'id'    => 'fi-social-twitter',
				'name'  => 'Twitter',
			),
			array(
				'group' => 'social',
				'id'    => 'fi-social-windows',
				'name'  => 'Windows',
			),
			array(
				'group' => 'social',
				'id'    => 'fi-social-xbox',
				'name'  => 'XBox',
			),
			array(
				'group' => 'social',
				'id'    => 'fi-social-yahoo',
				'name'  => 'Yahoo!',
			),
			array(
				'group' => 'social',
				'id'    => 'fi-social-yelp',
				'name'  => 'Yelp',
			),
			array(
				'group' => 'social',
				'id'    => 'fi-social-youtube',
				'name'  => 'YouTube',
			),
			array(
				'group' => 'social',
				'id'    => 'fi-social-zerply',
				'name'  => 'Zerply',
			),
			array(
				'group' => 'social',
				'id'    => 'fi-social-zurb',
				'name'  => 'Zurb',
			),
		);

		/**
		 * Filter genericon items
		 *
		 */
		$items = apply_filters( 'relicwp_icon_picker_foundations_items', $items );

		return $items;
	}
}
