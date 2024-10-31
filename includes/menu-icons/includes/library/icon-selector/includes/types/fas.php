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
class RelicWP_Icon_Picker_Type_Font_Awesome_Solid extends RelicWP_Icon_Picker_Type_Font {

	/**
	 * Icon type ID
	 *
	 */
	protected $id = 'fas';

	/**
	 * Icon type name
	 *
	 */
	protected $name = 'FontAwesome Solid';

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
				'id'   => 'solid',
				'name' => __( 'Solid', 'relicwp-helper' ),
			),
		);

		/**
		 * Filter genericon groups
		 *
		 */
		$groups = apply_filters( 'relicwp_icon_picker_fas_groups', $groups );

		return $groups;
	}

	/**
	 * Get icon names
	 *
	 */
	public function get_items() {
		$items = array(
			array(
				'group' => 'solid',
				'id'    => 'fa-ad',
				'name'  => __( 'AD', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-address-book',
				'name'  => __( 'Address Book', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-address-card',
				'name'  => __( 'Address Card', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-adjust',
				'name'  => __( 'Adjust', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-air-freshener',
				'name'  => __( 'Air Freshener', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-align-center',
				'name'  => __( 'Align Center', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-align-justify',
				'name'  => __( 'Align Justify', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-align-left',
				'name'  => __( 'Align Left', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-align-right',
				'name'  => __( 'Align Right', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-ambulance',
				'name'  => __( 'Ambulance', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-american-sign-language-interpreting',
				'name'  => __( 'American Sign Language', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-anchor',
				'name'  => __( 'Anchor', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-angle-double-down',
				'name'  => __( 'Angle Double Down', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-angle-double-left',
				'name'  => __( 'Angle Double Left', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-angle-double-right',
				'name'  => __( 'Angle Double Right', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-angle-double-up',
				'name'  => __( 'Angle Double Up', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-angle-down',
				'name'  => __( 'Angle Down', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-angle-left',
				'name'  => __( 'Angle Left', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-angle-right',
				'name'  => __( 'Angle Right', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-angle-up',
				'name'  => __( 'Angle Up', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-ankh',
				'name'  => __( 'Ankh', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-apple-alt',
				'name'  => __( 'Apple Alt', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-archive',
				'name'  => __( 'Archive', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-archway',
				'name'  => __( 'Archway', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-arrow-alt-circle-down',
				'name'  => __( 'Arrow Alt Circle Down', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-arrow-alt-circle-left',
				'name'  => __( 'Arrow Alt Circle Left', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-arrow-alt-circle-right',
				'name'  => __( 'Arrow Alt Circle Right', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-arrow-alt-circle-up',
				'name'  => __( 'Arrow Alt Circle up', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-arrow-circle-down',
				'name'  => __( 'Arrow Circle Down', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-arrow-circle-left',
				'name'  => __( 'Arrow Circle Left', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-arrow-circle-right',
				'name'  => __( 'Arrow Circle Right', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-arrow-circle-up',
				'name'  => __( 'Arrow Circle up', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-arrow-down',
				'name'  => __( 'Arrow Down', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-arrow-left',
				'name'  => __( 'Arrow Left', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-arrow-right',
				'name'  => __( 'Arrow Right', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-arrow-up',
				'name'  => __( 'Arrow up', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-arrows-alt',
				'name'  => __( 'Arrow Alt', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-assistive-listening-systems',
				'name'  => __( 'Assistive Listening Systems', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-asterisk',
				'name'  => __( 'Asterisk', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-asterisk',
				'name'  => __( 'Asterisk', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-at',
				'name'  => __( 'At', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-atlas',
				'name'  => __( 'Atlas', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-atom',
				'name'  => __( 'Atom', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-audio-description',
				'name'  => __( 'Audio Description', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-award',
				'name'  => __( 'Award', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-baby',
				'name'  => __( 'Baby', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-baby-carriage',
				'name'  => __( 'Baby Carriage', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-backspace',
				'name'  => __( 'Backspace', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-backward',
				'name'  => __( 'Backward', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-balance-scale',
				'name'  => __( 'Balance Scale', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-ban',
				'name'  => __( 'Ban', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-barcode',
				'name'  => __( 'Barcode', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-bars',
				'name'  => __( 'Bars', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-baseball-ball',
				'name'  => __( 'Baseball Ball', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-basketball-ball',
				'name'  => __( 'Basketball Ball', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-bath',
				'name'  => __( 'Bath', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-battery-empty',
				'name'  => __( 'Battery Empty', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-battery-full',
				'name'  => __( 'Battery Full', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-bed',
				'name'  => __( 'Bed', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-beer',
				'name'  => __( 'Beer', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-bell',
				'name'  => __( 'Bell', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-bell-slash',
				'name'  => __( 'Bell Slash', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-bezier-curve',
				'name'  => __( 'Bezier Curve', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-bicycle',
				'name'  => __( 'Bicycle', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-biking',
				'name'  => __( 'Biking', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-binoculars',
				'name'  => __( 'Binoculars', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-biohazard',
				'name'  => __( 'Biohazard', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-birthday-cake',
				'name'  => __( 'Birthday Cake', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-blender',
				'name'  => __( 'Blender', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-blind',
				'name'  => __( 'Blind', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-blog',
				'name'  => __( 'Blog', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-bold',
				'name'  => __( 'Bold', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-bolt',
				'name'  => __( 'Bolt', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-bomb',
				'name'  => __( 'Bomb', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-bong',
				'name'  => __( 'Bong', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-book',
				'name'  => __( 'Book', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-bookmark',
				'name'  => __( 'Bookmark', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-border-all',
				'name'  => __( 'Border All', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-border-none',
				'name'  => __( 'Border None', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-bowling-ball',
				'name'  => __( 'Bowling Ball', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-box',
				'name'  => __( 'Box', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-box-open',
				'name'  => __( 'Box Open', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-boxes',
				'name'  => __( 'Boxes', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-braille',
				'name'  => __( 'Braille', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-brain',
				'name'  => __( 'Brain', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-bread-slice',
				'name'  => __( 'Bread Slice', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-briefcase',
				'name'  => __( 'Briefcase', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-briefcase-medical',
				'name'  => __( 'Briefcase Medical', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-broadcast-tower',
				'name'  => __( 'Broadcast Tower', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-broom',
				'name'  => __( 'Broom', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-brush',
				'name'  => __( 'Brush', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-bug',
				'name'  => __( 'Bug', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-building',
				'name'  => __( 'Building', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-bullhorn',
				'name'  => __( 'Bullhorn', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-bullseye',
				'name'  => __( 'Bullseye', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-burn',
				'name'  => __( 'Burn', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-bus-alt',
				'name'  => __( 'Bus Alt', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-business-time',
				'name'  => __( 'Business Time', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-calculator',
				'name'  => __( 'Calculator', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-calendar',
				'name'  => __( 'Calendar', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-calendar-alt',
				'name'  => __( 'Calendar Alt', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-calendar-check',
				'name'  => __( 'Calendar Check', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-calendar-day',
				'name'  => __( 'Calendar Day', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-calendar-minus',
				'name'  => __( 'Calendar Minus', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-calendar-plus',
				'name'  => __( 'Calendar Plus', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-calendar-times',
				'name'  => __( 'Calendar Times', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-camera',
				'name'  => __( 'Camera', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-camera-retro',
				'name'  => __( 'Camera Retro', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-campground',
				'name'  => __( 'Campground', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-cannabis',
				'name'  => __( 'Cannabis', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-capsules',
				'name'  => __( 'Capsules', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-car',
				'name'  => __( 'Car', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-caret-down',
				'name'  => __( 'Caret Down', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-caret-left',
				'name'  => __( 'Caret Left', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-caret-right',
				'name'  => __( 'Caret Right', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-caret-square-down',
				'name'  => __( 'Caret Square Down', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-caret-square-left',
				'name'  => __( 'Caret Square Left', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-caret-square-right',
				'name'  => __( 'Caret Square Right', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-caret-square-up',
				'name'  => __( 'Caret Square Up', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-caret-up',
				'name'  => __( 'Caret Up', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-carrot',
				'name'  => __( 'Carrot', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-cart-plus',
				'name'  => __( 'Cart Plus', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-certificate',
				'name'  => __( 'Certificate', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-chart-area',
				'name'  => __( 'Chart Area', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-chart-bar',
				'name'  => __( 'Chart Bar', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-chart-line',
				'name'  => __( 'Chart Line', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-chart-pie',
				'name'  => __( 'Chart Pie', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-check',
				'name'  => __( 'Check', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-check-circle',
				'name'  => __( 'Check Circle', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-check-double',
				'name'  => __( 'Check Double', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-check-square',
				'name'  => __( 'Check Square', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-cheese',
				'name'  => __( 'Cheese', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-chess',
				'name'  => __( 'Chess', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-chess-king',
				'name'  => __( 'Chess King', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-chess-queen',
				'name'  => __( 'Chess Queen', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-chevron-circle-down',
				'name'  => __( 'Chevron Circle Down', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-chevron-circle-left',
				'name'  => __( 'Chevron Circle Left', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-chevron-circle-right',
				'name'  => __( 'Chevron Circle Right', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-chevron-circle-up',
				'name'  => __( 'Chevron Circle Up', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-chevron-down',
				'name'  => __( 'Chevron Down', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-chevron-left',
				'name'  => __( 'Chevron Left', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-chevron-right',
				'name'  => __( 'Chevron Right', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-chevron-up',
				'name'  => __( 'Chevron Up', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-child',
				'name'  => __( 'Child', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-circle',
				'name'  => __( 'Circle', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-circle-notch',
				'name'  => __( 'Circle Notch', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-clinic-medical',
				'name'  => __( 'Clinic Medical', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-clipboard',
				'name'  => __( 'Clipboard', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-clipboard-check',
				'name'  => __( 'Clipboard Check', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-clipboard-list',
				'name'  => __( 'Clipboard List', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-clock',
				'name'  => __( 'Clock', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-clone',
				'name'  => __( 'Clone', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-closed-captioning',
				'name'  => __( 'Closed Captioning', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-cloud',
				'name'  => __( 'Cloud', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-cloud-download-alt',
				'name'  => __( 'Cloud Download Alt', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-cloud-upload-alt',
				'name'  => __( 'Cloud Upload Alt', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-cocktail',
				'name'  => __( 'Cocktail', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-code',
				'name'  => __( 'Code', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-code-branch',
				'name'  => __( 'Code Branch', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-coffee',
				'name'  => __( 'Coffee', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-cog',
				'name'  => __( 'Cog', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-cogs',
				'name'  => __( 'Cogs', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-coins',
				'name'  => __( 'Coins', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-columns',
				'name'  => __( 'Columns', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-comment',
				'name'  => __( 'Comment', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-comment-alt',
				'name'  => __( 'Comment Alt', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-comment-dots',
				'name'  => __( 'Comment Dots', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-comment-slash',
				'name'  => __( 'Comment Slash', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-comments',
				'name'  => __( 'comments', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-compact-disc',
				'name'  => __( 'Compact Disc', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-compass',
				'name'  => __( 'Compass', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-compress',
				'name'  => __( 'Compress', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-compress-arrows-alt',
				'name'  => __( 'Compress Arrows Alt', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-concierge-bell',
				'name'  => __( 'Concierge Bell', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-cookie',
				'name'  => __( 'Cookie', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-cookie-bite',
				'name'  => __( 'Cookie Bite', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-copy',
				'name'  => __( 'Copy', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-copyright',
				'name'  => __( 'Copyright', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-credit-card',
				'name'  => __( 'Credit Card', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-crop',
				'name'  => __( 'Crop', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-crosshairs',
				'name'  => __( 'Crosshairs', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-crown',
				'name'  => __( 'Crown', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-cube',
				'name'  => __( 'Cube', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-cubes',
				'name'  => __( 'Cubes', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-cut',
				'name'  => __( 'Cut', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-database',
				'name'  => __( 'Database', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-deaf',
				'name'  => __( 'Deaf', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-desktop',
				'name'  => __( 'Desktop', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-dice',
				'name'  => __( 'Dice', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-dice-d6',
				'name'  => __( 'Dice D6', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-directions',
				'name'  => __( 'Directions', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-dog',
				'name'  => __( 'Dog', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-dollar-sign',
				'name'  => __( 'Dollar Sign', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-dolly',
				'name'  => __( 'Dolly', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-donate',
				'name'  => __( 'Donate', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-download',
				'name'  => __( 'Download', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-drafting-compass',
				'name'  => __( 'Drafting Compass', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-drum',
				'name'  => __( 'Drum', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-drum-steelpan',
				'name'  => __( 'Drum Steelpan', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-dumbbell',
				'name'  => __( 'Dumbbell', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-dumpster',
				'name'  => __( 'Dumpster', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-edit',
				'name'  => __( 'Edit', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-egg',
				'name'  => __( 'Egg', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-eject',
				'name'  => __( 'Eject', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-ellipsis-v',
				'name'  => __( 'Ellipsis V', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-envelope',
				'name'  => __( 'Envelope', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-envelope-open',
				'name'  => __( 'Envelope Open', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-envelope-open-text',
				'name'  => __( 'Envelope Open Text', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-envelope-square',
				'name'  => __( 'Envelope Square', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-equals',
				'name'  => __( 'Equals', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-eraser',
				'name'  => __( 'Eraser', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-euro-sign',
				'name'  => __( 'Euro Sign', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-exclamation',
				'name'  => __( 'Exclamation', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-exchange-alt',
				'name'  => __( 'Exchange Alt', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-exclamation-circle',
				'name'  => __( 'Exclamation Circle', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-exclamation-triangle',
				'name'  => __( 'Exclamation Triangle', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-expand',
				'name'  => __( 'Expand', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-expand-arrows-alt',
				'name'  => __( 'Expand Arrows Alt', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-external-link-alt',
				'name'  => __( 'External Link Alt', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-external-link-square-alt',
				'name'  => __( 'External Link Square Alt', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-eye',
				'name'  => __( 'Eye', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-eye-dropper',
				'name'  => __( 'Eye Dropper', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-eye-slash',
				'name'  => __( 'Eye Slash', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-fan',
				'name'  => __( 'Fan', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-fast-backward',
				'name'  => __( 'Fast Backward', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-fast-forward',
				'name'  => __( 'Fast Forward', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-fax',
				'name'  => __( 'Fax', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-feather',
				'name'  => __( 'Feather', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-feather-alt',
				'name'  => __( 'Feather Alt', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-female',
				'name'  => __( 'Female', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-fighter-jet',
				'name'  => __( 'Fighter Jet', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-file',
				'name'  => __( 'File', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-file-alt',
				'name'  => __( 'File Alt', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-file-archive',
				'name'  => __( 'File Archive', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-file-audio',
				'name'  => __( 'File Audio', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-file-code',
				'name'  => __( 'File Code', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-file-contract',
				'name'  => __( 'File Contract', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-file-csv',
				'name'  => __( 'File CSV', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-file-download',
				'name'  => __( 'File Download', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-file-excel',
				'name'  => __( 'File Excel', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-file-export',
				'name'  => __( 'File Export', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-file-image',
				'name'  => __( 'File Image', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-file-import',
				'name'  => __( 'File Import', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-file-invoice',
				'name'  => __( 'File Invoice', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-file-invoice-dollar',
				'name'  => __( 'File Invoice Dollar', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-file-pdf',
				'name'  => __( 'File Pdf', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-file-powerpoint',
				'name'  => __( 'File Powerpoint', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-file-prescription',
				'name'  => __( 'File Prescription', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-file-signature',
				'name'  => __( 'File Signature', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-file-upload',
				'name'  => __( 'File Upload', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-file-video',
				'name'  => __( 'File Video', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-file-word',
				'name'  => __( 'File Word', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-fill',
				'name'  => __( 'Fill', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-fill-drip',
				'name'  => __( 'Fill Drip', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-film',
				'name'  => __( 'Film', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-filter',
				'name'  => __( 'Filter', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-fingerprint',
				'name'  => __( 'Fingerprint', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-fire',
				'name'  => __( 'Fire', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-fire-alt',
				'name'  => __( 'Fire Alt', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-flag',
				'name'  => __( 'Flag', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-flag-usa',
				'name'  => __( 'Flag USA', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-flask',
				'name'  => __( 'Flask', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-folder',
				'name'  => __( 'Folder', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-folder-open',
				'name'  => __( 'Folder Open', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-font',
				'name'  => __( 'Font', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-football-ball',
				'name'  => __( 'Football Ball', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-forward',
				'name'  => __( 'Forward', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-futbol',
				'name'  => __( 'Futbol', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-gamepad',
				'name'  => __( 'Gamepad', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-gem',
				'name'  => __( 'Gem', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-genderless',
				'name'  => __( 'Genderless', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-ghost',
				'name'  => __( 'Ghost', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-gift',
				'name'  => __( 'Gift', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-gifts',
				'name'  => __( 'Gifts', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-glass-cheers',
				'name'  => __( 'Glass Cheers', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-glass-martini',
				'name'  => __( 'Glass Martini', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-glass-martini-alt',
				'name'  => __( 'Glass Martini Alt', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-glasses',
				'name'  => __( 'Glasses', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-globe',
				'name'  => __( 'Globe', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-globe-africa',
				'name'  => __( 'Globe Africa', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-globe-americas',
				'name'  => __( 'Globe Americas', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-globe-asia',
				'name'  => __( 'Globe Asia', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-globe-europe',
				'name'  => __( 'Globe Europe', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-graduation-cap',
				'name'  => __( 'Graduation Cap', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-grin',
				'name'  => __( 'Grin', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-grin-alt',
				'name'  => __( 'Grin Alt', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-grin-beam',
				'name'  => __( 'Grin Beam', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-grin-beam-sweat',
				'name'  => __( 'Grin Beam Sweat', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-grin-hearts',
				'name'  => __( 'Grin Hearts', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-grip-horizontal',
				'name'  => __( 'Grip Horizontal', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-guitar',
				'name'  => __( 'Guitar', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-h-square',
				'name'  => __( 'H-Square', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-hamburger',
				'name'  => __( 'Hamburger', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-hand-holding',
				'name'  => __( 'Hand Holding', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-hand-holding-heart',
				'name'  => __( 'Hand Holding Heart', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-hand-holding-usd',
				'name'  => __( 'Hand Holding USD', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-hand-lizard',
				'name'  => __( 'Hand-Lizard', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-hand-middle-finger',
				'name'  => __( 'Hand Middle Finger', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-hand-paper',
				'name'  => __( 'Hand Paper', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-hand-peace',
				'name'  => __( 'Hand Peace', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-hand-point-down',
				'name'  => __( 'Hand Point Down', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-hand-point-left',
				'name'  => __( 'Hand Point Left', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-hand-point-right',
				'name'  => __( 'Hand Point Right', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-hand-point-up',
				'name'  => __( 'Hand Point Up', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-hand-pointer',
				'name'  => __( 'Hand Pointer', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-hands',
				'name'  => __( 'Hands', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-hands-helping',
				'name'  => __( 'Hands Helping', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-handshake',
				'name'  => __( 'Handshake', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-hashtag',
				'name'  => __( 'Hashtag', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-hat-cowboy',
				'name'  => __( 'Hat Cowboy', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-hdd',
				'name'  => __( 'HDD', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-heading',
				'name'  => __( 'Heading', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-headphones',
				'name'  => __( 'Headphones', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-headphones-alt',
				'name'  => __( 'Headphones Alt', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-headset',
				'name'  => __( 'Headset', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-heart',
				'name'  => __( 'Heart', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-heartbeat',
				'name'  => __( 'Heartbeat', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-hiking',
				'name'  => __( 'Hiking', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-history',
				'name'  => __( 'History', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-home',
				'name'  => __( 'Home', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-hospital',
				'name'  => __( 'Hospital', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-hotel',
				'name'  => __( 'Hotel', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-hourglass',
				'name'  => __( 'Hourglass', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-hourglass-end',
				'name'  => __( 'Hourglass End', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-hourglass-half',
				'name'  => __( 'Hourglass Half', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-hourglass-start',
				'name'  => __( 'Hourglass Start', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-ice-cream',
				'name'  => __( 'Ice Cream', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-icons',
				'name'  => __( 'Icons', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-id-badge',
				'name'  => __( 'Id Badge', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-id-card',
				'name'  => __( 'Id Card', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-id-card-alt',
				'name'  => __( 'Id Card Alt', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-image',
				'name'  => __( 'Image', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-images',
				'name'  => __( 'Images', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-inbox',
				'name'  => __( 'Inbox', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-indent',
				'name'  => __( 'Indent', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-industry',
				'name'  => __( 'Industry', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-infinity',
				'name'  => __( 'Infinity', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-info',
				'name'  => __( 'Info', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-info-circle',
				'name'  => __( 'Info Circle', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-italic',
				'name'  => __( 'Italic', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-key',
				'name'  => __( 'Key', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-keyboard',
				'name'  => __( 'Keyboard', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-landmark',
				'name'  => __( 'Landmark', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-language',
				'name'  => __( 'Language', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-laptop',
				'name'  => __( 'Laptop', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-laptop-code',
				'name'  => __( 'Laptop Code', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-layer-group',
				'name'  => __( 'Layer Group', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-leaf',
				'name'  => __( 'Leaf', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-level-down-alt',
				'name'  => __( 'Level Down Alt', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-level-up-alt',
				'name'  => __( 'Level Up Alt', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-life-ring',
				'name'  => __( 'Life Ring', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-lightbulb',
				'name'  => __( 'Lightbulb', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-link',
				'name'  => __( 'Link', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-list',
				'name'  => __( 'List', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-location-arrow',
				'name'  => __( 'Location Arrow', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-lock',
				'name'  => __( 'Lock', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-lock-open',
				'name'  => __( 'Lock Open', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-long-arrow-alt-down',
				'name'  => __( 'Long Arrow Alt Down', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-long-arrow-alt-left',
				'name'  => __( 'Long Arrow Alt Left', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-long-arrow-alt-right',
				'name'  => __( 'Long Arrow Alt Right', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-long-arrow-alt-up',
				'name'  => __( 'Long Arrow Alt Up', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-magic',
				'name'  => __( 'Magic', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-magnet',
				'name'  => __( 'Magnet', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-male',
				'name'  => __( 'Male', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-map',
				'name'  => __( 'Map', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-map-marked-alt',
				'name'  => __( 'Map Marked Alt', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-map-marker-alt',
				'name'  => __( 'Map Marker Alt', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-mars',
				'name'  => __( 'Mars', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-mars-double',
				'name'  => __( 'Mars Double', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-mars-stroke',
				'name'  => __( 'Mars Stroke', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-medal',
				'name'  => __( 'Medal', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-medkit',
				'name'  => __( 'Medkit', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-mercury',
				'name'  => __( 'Mercury', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-microchip',
				'name'  => __( 'Microchip', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-microphone',
				'name'  => __( 'Microphone', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-microphone-alt',
				'name'  => __( 'Microphone Alt', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-microphone-alt-slash',
				'name'  => __( 'Microphone Alt Slash', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-microphone-slash',
				'name'  => __( 'Microphone Slash', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-microscope',
				'name'  => __( 'Microscope', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-mobile-alt',
				'name'  => __( 'Mobile Alt', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-money-bill',
				'name'  => __( 'Money Bill', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-money-check-alt',
				'name'  => __( 'Money Check Alt', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-motorcycle',
				'name'  => __( 'Motorcycle', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-mountain',
				'name'  => __( 'Mountain', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-mug-hot',
				'name'  => __( 'Mug Hot', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-music',
				'name'  => __( 'Music', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-network-wired',
				'name'  => __( 'Network Wired', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-notes-medical',
				'name'  => __( 'Notes Medical', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-om',
				'name'  => __( 'Om', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-outdent',
				'name'  => __( 'Outdent', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-paint-brush',
				'name'  => __( 'Paint Brush', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-palette',
				'name'  => __( 'Palette', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-paper-plane',
				'name'  => __( 'Paper Plane', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-paperclip',
				'name'  => __( 'Paperclip', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-paragraph',
				'name'  => __( 'Paragraph', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-passport',
				'name'  => __( 'Passport', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-paste',
				'name'  => __( 'Paste', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-pause',
				'name'  => __( 'Pause', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-paw',
				'name'  => __( 'Paw', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-pen-nib',
				'name'  => __( 'Pen Nib', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-pen-square',
				'name'  => __( 'Pen Square', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-pencil-ruler',
				'name'  => __( 'Pencil Ruler', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-phone-alt',
				'name'  => __( 'Phone Alt', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-phone-slash',
				'name'  => __( 'Phone Slash', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-phone-square-alt',
				'name'  => __( 'Phone Square Alt', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-phone-volume',
				'name'  => __( 'Phone Volume', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-piggy-bank',
				'name'  => __( 'Piggy Bank', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-pizza-slice',
				'name'  => __( 'Pizza Slice', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-plane-departure',
				'name'  => __( 'Plane Departure', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-play',
				'name'  => __( 'Play', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-play-circle',
				'name'  => __( 'Play Circle', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-plug',
				'name'  => __( 'Plug', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-plus-circle',
				'name'  => __( 'Plus Circle', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-plus-square',
				'name'  => __( 'Plus Square', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-podcast',
				'name'  => __( 'Podcast', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-poll',
				'name'  => __( 'Poll', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-poll-h',
				'name'  => __( 'Poll-H', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-poo',
				'name'  => __( 'Poo', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-portrait',
				'name'  => __( 'Portrait', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-pound-sign',
				'name'  => __( 'Pound Sign', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-power-off',
				'name'  => __( 'Power Off', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-print',
				'name'  => __( 'Print', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-project-diagram',
				'name'  => __( 'Project Diagram', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-qrcode',
				'name'  => __( 'Qrcode', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-question-circle',
				'name'  => __( 'Question Circle', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-quote-left',
				'name'  => __( 'Quote Left', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-quote-right',
				'name'  => __( 'Quote Right', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-radiation',
				'name'  => __( 'Radiation', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-radiation-alt',
				'name'  => __( 'Radiation Alt', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-random',
				'name'  => __( 'Random', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-receipt',
				'name'  => __( 'Receipt', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-redo',
				'name'  => __( 'Redo', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-redo-alt',
				'name'  => __( 'Redo Alt', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-registered',
				'name'  => __( 'Registered', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-reply',
				'name'  => __( 'Reply', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-reply-all',
				'name'  => __( 'Reply All', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-retweet',
				'name'  => __( 'Retweet', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-rocket',
				'name'  => __( 'Rocket', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-route',
				'name'  => __( 'Route', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-rss',
				'name'  => __( 'RSS', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-ruble-sign',
				'name'  => __( 'Ruble Sign', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-running',
				'name'  => __( 'Running', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-rupee-sign',
				'name'  => __( 'Rupee Sign', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-satellite',
				'name'  => __( 'Satellite', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-save',
				'name'  => __( 'Save', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-sd-card',
				'name'  => __( 'SD Card', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-search',
				'name'  => __( 'Search', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-search-location',
				'name'  => __( 'Search Location', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-server',
				'name'  => __( 'Server', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-share',
				'name'  => __( 'Share', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-share-alt',
				'name'  => __( 'Share Alt', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-share-alt-square',
				'name'  => __( 'Share Alt Square', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-share-square',
				'name'  => __( 'Share Square', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-shield-alt',
				'name'  => __( 'Shield Alt', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-shipping-fast',
				'name'  => __( 'Shipping Fast', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-shopping-bag',
				'name'  => __( 'Shopping Bag', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-shopping-basket',
				'name'  => __( 'Shopping Basket', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-shopping-cart',
				'name'  => __( 'Shopping Cart', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-sign-in-alt',
				'name'  => __( 'Sign In Alt', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-sign-language',
				'name'  => __( 'Sign Language', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-sign-out-alt',
				'name'  => __( 'Sign Out Alt', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-signal',
				'name'  => __( 'Signal', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-sitemap',
				'name'  => __( 'Sitemap', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-skating',
				'name'  => __( 'Skating', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-skiing',
				'name'  => __( 'Skiing', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-skiing-nordic',
				'name'  => __( 'Skiing Nordic', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-sliders-h',
				'name'  => __( 'Sliders-H', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-smile',
				'name'  => __( 'Smile', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-smoking-ban',
				'name'  => __( 'Smoking Ban', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-snowboarding',
				'name'  => __( 'Snowboarding', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-snowflake',
				'name'  => __( 'Snowflake', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-snowman',
				'name'  => __( 'Snowman', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-socks',
				'name'  => __( 'Socks', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-sort',
				'name'  => __( 'Sort', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-sort-alpha-down',
				'name'  => __( 'Sort Alpha Down', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-sort-alpha-down-alt',
				'name'  => __( 'Sort Alpha Down Alt', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-sort-alpha-up',
				'name'  => __( 'Sort Alpha Up', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-sort-alpha-up-alt',
				'name'  => __( 'Sort Alpha Up Alt', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-spell-check',
				'name'  => __( 'Spell Check', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-spider',
				'name'  => __( 'Spider', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-spinner',
				'name'  => __( 'Spinner', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-star',
				'name'  => __( 'Star', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-star-half',
				'name'  => __( 'Star Half', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-star-half-alt',
				'name'  => __( 'Star Half Alt', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-stethoscope',
				'name'  => __( 'Stethoscope', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-sticky-note',
				'name'  => __( 'Sticky Note', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-store',
				'name'  => __( 'Store', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-store-alt',
				'name'  => __( 'Store Alt', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-street-view',
				'name'  => __( 'Street View', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-subway',
				'name'  => __( 'Subway', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-suitcase',
				'name'  => __( 'Suitcase', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-suitcase-rolling',
				'name'  => __( 'Suitcase Rolling', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-sync',
				'name'  => __( 'Sync', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-sync-alt',
				'name'  => __( 'Sync Alt', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-table',
				'name'  => __( 'Table', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-tag',
				'name'  => __( 'Tag', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-tags',
				'name'  => __( 'Tags', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-tasks',
				'name'  => __( 'Tasks', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-taxi',
				'name'  => __( 'Taxi', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-th',
				'name'  => __( 'Th', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-th-large',
				'name'  => __( 'Th Large', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-th-list',
				'name'  => __( 'Th List', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-thumbs-down',
				'name'  => __( 'Thumbs Down', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-thumbs-up',
				'name'  => __( 'Thumbs Up', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-thumbtack',
				'name'  => __( 'Thumbtack', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-ticket-alt',
				'name'  => __( 'Ticket Alt', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-tint',
				'name'  => __( 'Tint', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-tools',
				'name'  => __( 'Tools', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-traffic-light',
				'name'  => __( 'Traffic Light', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-tooth',
				'name'  => __( 'Tooth', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-train',
				'name'  => __( 'Train', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-tram',
				'name'  => __( 'Tram', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-train',
				'name'  => __( 'Train', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-transgender',
				'name'  => __( 'Transgender', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-transgender-alt',
				'name'  => __( 'Transgender Alt', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-trash',
				'name'  => __( 'Trash', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-trash-alt',
				'name'  => __( 'Trash Alt', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-trophy',
				'name'  => __( 'Trophy', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-truck',
				'name'  => __( 'Truck', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-tshirt',
				'name'  => __( 'Tshirt', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-umbrella',
				'name'  => __( 'Umbrella', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-universal-access',
				'name'  => __( 'Universal Access', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-university',
				'name'  => __( 'University', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-unlink',
				'name'  => __( 'Unlink', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-unlock',
				'name'  => __( 'Unlock', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-unlock-alt',
				'name'  => __( 'Unlock Alt', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-upload',
				'name'  => __( 'Upload', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-user',
				'name'  => __( 'User', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-user-circle',
				'name'  => __( 'User Circle', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-user-graduate',
				'name'  => __( 'User Graduate', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-user-lock',
				'name'  => __( 'User Lock', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-user-md',
				'name'  => __( 'User Md', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-user-tie',
				'name'  => __( 'User Tie', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-users',
				'name'  => __( 'Users', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-utensils',
				'name'  => __( 'Utensils', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-vector-square',
				'name'  => __( 'Vector Square', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-venus',
				'name'  => __( 'Venus', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-venus-double',
				'name'  => __( 'Venus Double', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-venus-mars',
				'name'  => __( 'Venus Mars', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-video',
				'name'  => __( 'Video', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-voicemail',
				'name'  => __( 'Voicemail', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-walking',
				'name'  => __( 'Walking', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-wallet',
				'name'  => __( 'Wallet', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-wheelchair',
				'name'  => __( 'Wheelchair', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-wifi',
				'name'  => __( 'Wifi', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-wine-glass',
				'name'  => __( 'Wine Glass', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-wine-glass-alt',
				'name'  => __( 'Wine Glass Alt', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-wrench',
				'name'  => __( 'Wrench', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-yen-sign',
				'name'  => __( 'Yen Sign', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-yin-yang',
				'name'  => __( 'Yin Yang', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-window-restore',
				'name'  => __( 'Window Restore', 'relicwp-helper' ),
			),
			array(
				'group' => 'solid',
				'id'    => 'fa-school',
				'name'  => __( 'School', 'relicwp-helper' ),
			),
		);

		/**
		 * Filter FontAwesome items
		 *
		 */
		$items = apply_filters( 'relicwp_icon_picker_fas_items', $items );

		return $items;
	}
}
