<?php
/**
 * Dashicons
 *
 */

require_once dirname( __FILE__ ) . '/font.php';

/**
 * Icon type: Dashicons
 *
 */
class RelicWP_Icon_Picker_Type_Dashicons extends RelicWP_Icon_Picker_Type_Font {

	/**
	 * Icon type ID
	 *
	 */
	protected $id = 'dashicons';

	/**
	 * Icon type name
	 *
	 */
	protected $name = 'Dashicons';

	/**
	 * Icon type version
	 *
	 */
	protected $version = '4.3.1';

	/**
	 * Stylesheet URI
	 *
	 */
	protected $stylesheet_uri = '';

	/**
	 * Register assets
	 *
	 */
	public function register_assets( RelicWP_Icon_Picker_Loader $loader ) {
		$loader->add_style( $this->stylesheet_id );
	}

	/**
	 * Get icon groups
	 *
	 */
	public function get_groups() {
		$groups = array(
			array(
				'id'   => 'admin',
				'name' => __( 'Admin', 'relicwp-helper' ),
			),
			array(
				'id'   => 'post-formats',
				'name' => __( 'Post Formats', 'relicwp-helper' ),
			),
			array(
				'id'   => 'welcome-screen',
				'name' => __( 'Welcome Screen', 'relicwp-helper' ),
			),
			array(
				'id'   => 'image-editor',
				'name' => __( 'Image Editor', 'relicwp-helper' ),
			),
			array(
				'id'   => 'text-editor',
				'name' => __( 'Text Editor', 'relicwp-helper' ),
			),
			array(
				'id'   => 'post',
				'name' => __( 'Post', 'relicwp-helper' ),
			),
			array(
				'id'   => 'sorting',
				'name' => __( 'Sorting', 'relicwp-helper' ),
			),
			array(
				'id'   => 'social',
				'name' => __( 'Social', 'relicwp-helper' ),
			),
			array(
				'id'   => 'jobs',
				'name' => __( 'Jobs', 'relicwp-helper' ),
			),
			array(
				'id'   => 'products',
				'name' => __( 'Internal/Products', 'relicwp-helper' ),
			),
			array(
				'id'   => 'taxonomies',
				'name' => __( 'Taxonomies', 'relicwp-helper' ),
			),
			array(
				'id'   => 'alerts',
				'name' => __( 'Alerts/Notifications', 'relicwp-helper' ),
			),
			array(
				'id'   => 'media',
				'name' => __( 'Media', 'relicwp-helper' ),
			),
			array(
				'id'   => 'misc',
				'name' => __( 'Misc./Post Types', 'relicwp-helper' ),
			),
		);

		/**
		 * Filter dashicon groups
		 *
		 */
		$groups = apply_filters( 'relicwp_icon_picker_dashicons_groups', $groups );

		return $groups;
	}

	/**
	 * Get icon names
	 *
	 */
	public function get_items() {
		$items = array(
			array(
				'group' => 'admin',
				'id'    => 'dashicons-admin-appearance',
				'name'  => __( 'Appearance', 'relicwp-helper' ),
			),
			array(
				'group' => 'admin',
				'id'    => 'dashicons-admin-collapse',
				'name'  => __( 'Collapse', 'relicwp-helper' ),
			),
			array(
				'group' => 'admin',
				'id'    => 'dashicons-admin-comments',
				'name'  => __( 'Comments', 'relicwp-helper' ),
			),
			array(
				'group' => 'admin',
				'id'    => 'dashicons-admin-customizer',
				'name'  => __( 'Customizer', 'relicwp-helper' ),
			),
			array(
				'group' => 'admin',
				'id'    => 'dashicons-dashboard',
				'name'  => __( 'Dashboard', 'relicwp-helper' ),
			),
			array(
				'group' => 'admin',
				'id'    => 'dashicons-admin-generic',
				'name'  => __( 'Generic', 'relicwp-helper' ),
			),
			array(
				'group' => 'admin',
				'id'    => 'dashicons-filter',
				'name'  => __( 'Filter', 'relicwp-helper' ),
			),
			array(
				'group' => 'admin',
				'id'    => 'dashicons-admin-home',
				'name'  => __( 'Home', 'relicwp-helper' ),
			),
			array(
				'group' => 'admin',
				'id'    => 'dashicons-admin-media',
				'name'  => __( 'Media', 'relicwp-helper' ),
			),
			array(
				'group' => 'admin',
				'id'    => 'dashicons-menu',
				'name'  => __( 'Menu', 'relicwp-helper' ),
			),
			array(
				'group' => 'admin',
				'id'    => 'dashicons-admin-multisite',
				'name'  => __( 'Multisite', 'relicwp-helper' ),
			),
			array(
				'group' => 'admin',
				'id'    => 'dashicons-admin-network',
				'name'  => __( 'Network', 'relicwp-helper' ),
			),
			array(
				'group' => 'admin',
				'id'    => 'dashicons-admin-page',
				'name'  => __( 'Page', 'relicwp-helper' ),
			),
			array(
				'group' => 'admin',
				'id'    => 'dashicons-admin-plugins',
				'name'  => __( 'Plugins', 'relicwp-helper' ),
			),
			array(
				'group' => 'admin',
				'id'    => 'dashicons-admin-settings',
				'name'  => __( 'Settings', 'relicwp-helper' ),
			),
			array(
				'group' => 'admin',
				'id'    => 'dashicons-admin-site',
				'name'  => __( 'Site', 'relicwp-helper' ),
			),
			array(
				'group' => 'admin',
				'id'    => 'dashicons-admin-tools',
				'name'  => __( 'Tools', 'relicwp-helper' ),
			),
			array(
				'group' => 'admin',
				'id'    => 'dashicons-admin-users',
				'name'  => __( 'Users', 'relicwp-helper' ),
			),
			array(
				'group' => 'post-formats',
				'id'    => 'dashicons-format-standard',
				'name'  => __( 'Standard', 'relicwp-helper' ),
			),
			array(
				'group' => 'post-formats',
				'id'    => 'dashicons-format-aside',
				'name'  => __( 'Aside', 'relicwp-helper' ),
			),
			array(
				'group' => 'post-formats',
				'id'    => 'dashicons-format-image',
				'name'  => __( 'Image', 'relicwp-helper' ),
			),
			array(
				'group' => 'post-formats',
				'id'    => 'dashicons-format-video',
				'name'  => __( 'Video', 'relicwp-helper' ),
			),
			array(
				'group' => 'post-formats',
				'id'    => 'dashicons-format-audio',
				'name'  => __( 'Audio', 'relicwp-helper' ),
			),
			array(
				'group' => 'post-formats',
				'id'    => 'dashicons-format-quote',
				'name'  => __( 'Quote', 'relicwp-helper' ),
			),
			array(
				'group' => 'post-formats',
				'id'    => 'dashicons-format-gallery',
				'name'  => __( 'Gallery', 'relicwp-helper' ),
			),
			array(
				'group' => 'post-formats',
				'id'    => 'dashicons-format-links',
				'name'  => __( 'Links', 'relicwp-helper' ),
			),
			array(
				'group' => 'post-formats',
				'id'    => 'dashicons-format-status',
				'name'  => __( 'Status', 'relicwp-helper' ),
			),
			array(
				'group' => 'post-formats',
				'id'    => 'dashicons-format-chat',
				'name'  => __( 'Chat', 'relicwp-helper' ),
			),
			array(
				'group' => 'welcome-screen',
				'id'    => 'dashicons-welcome-add-page',
				'name'  => __( 'Add page', 'relicwp-helper' ),
			),
			array(
				'group' => 'welcome-screen',
				'id'    => 'dashicons-welcome-comments',
				'name'  => __( 'Comments', 'relicwp-helper' ),
			),
			array(
				'group' => 'welcome-screen',
				'id'    => 'dashicons-welcome-edit-page',
				'name'  => __( 'Edit page', 'relicwp-helper' ),
			),
			array(
				'group' => 'welcome-screen',
				'id'    => 'dashicons-welcome-learn-more',
				'name'  => __( 'Learn More', 'relicwp-helper' ),
			),
			array(
				'group' => 'welcome-screen',
				'id'    => 'dashicons-welcome-view-site',
				'name'  => __( 'View Site', 'relicwp-helper' ),
			),
			array(
				'group' => 'welcome-screen',
				'id'    => 'dashicons-welcome-widgets-menus',
				'name'  => __( 'Widgets', 'relicwp-helper' ),
			),
			array(
				'group' => 'welcome-screen',
				'id'    => 'dashicons-welcome-write-blog',
				'name'  => __( 'Write Blog', 'relicwp-helper' ),
			),
			array(
				'group' => 'image-editor',
				'id'    => 'dashicons-image-crop',
				'name'  => __( 'Crop', 'relicwp-helper' ),
			),
			array(
				'group' => 'image-editor',
				'id'    => 'dashicons-image-filter',
				'name'  => __( 'Filter', 'relicwp-helper' ),
			),
			array(
				'group' => 'image-editor',
				'id'    => 'dashicons-image-rotate',
				'name'  => __( 'Rotate', 'relicwp-helper' ),
			),
			array(
				'group' => 'image-editor',
				'id'    => 'dashicons-image-rotate-left',
				'name'  => __( 'Rotate Left', 'relicwp-helper' ),
			),
			array(
				'group' => 'image-editor',
				'id'    => 'dashicons-image-rotate-right',
				'name'  => __( 'Rotate Right', 'relicwp-helper' ),
			),
			array(
				'group' => 'image-editor',
				'id'    => 'dashicons-image-flip-vertical',
				'name'  => __( 'Flip Vertical', 'relicwp-helper' ),
			),
			array(
				'group' => 'image-editor',
				'id'    => 'dashicons-image-flip-horizontal',
				'name'  => __( 'Flip Horizontal', 'relicwp-helper' ),
			),
			array(
				'group' => 'image-editor',
				'id'    => 'dashicons-undo',
				'name'  => __( 'Undo', 'relicwp-helper' ),
			),
			array(
				'group' => 'image-editor',
				'id'    => 'dashicons-redo',
				'name'  => __( 'Redo', 'relicwp-helper' ),
			),
			array(
				'group' => 'text-editor',
				'id'    => 'dashicons-editor-bold',
				'name'  => __( 'Bold', 'relicwp-helper' ),
			),
			array(
				'group' => 'text-editor',
				'id'    => 'dashicons-editor-italic',
				'name'  => __( 'Italic', 'relicwp-helper' ),
			),
			array(
				'group' => 'text-editor',
				'id'    => 'dashicons-editor-ul',
				'name'  => __( 'Unordered List', 'relicwp-helper' ),
			),
			array(
				'group' => 'text-editor',
				'id'    => 'dashicons-editor-ol',
				'name'  => __( 'Ordered List', 'relicwp-helper' ),
			),
			array(
				'group' => 'text-editor',
				'id'    => 'dashicons-editor-quote',
				'name'  => __( 'Quote', 'relicwp-helper' ),
			),
			array(
				'group' => 'text-editor',
				'id'    => 'dashicons-editor-alignleft',
				'name'  => __( 'Align Left', 'relicwp-helper' ),
			),
			array(
				'group' => 'text-editor',
				'id'    => 'dashicons-editor-aligncenter',
				'name'  => __( 'Align Center', 'relicwp-helper' ),
			),
			array(
				'group' => 'text-editor',
				'id'    => 'dashicons-editor-alignright',
				'name'  => __( 'Align Right', 'relicwp-helper' ),
			),
			array(
				'group' => 'text-editor',
				'id'    => 'dashicons-editor-insertmore',
				'name'  => __( 'Insert More', 'relicwp-helper' ),
			),
			array(
				'group' => 'text-editor',
				'id'    => 'dashicons-editor-spellcheck',
				'name'  => __( 'Spell Check', 'relicwp-helper' ),
			),
			array(
				'group' => 'text-editor',
				'id'    => 'dashicons-editor-distractionfree',
				'name'  => __( 'Distraction-free', 'relicwp-helper' ),
			),
			array(
				'group' => 'text-editor',
				'id'    => 'dashicons-editor-kitchensink',
				'name'  => __( 'Kitchensink', 'relicwp-helper' ),
			),
			array(
				'group' => 'text-editor',
				'id'    => 'dashicons-editor-underline',
				'name'  => __( 'Underline', 'relicwp-helper' ),
			),
			array(
				'group' => 'text-editor',
				'id'    => 'dashicons-editor-justify',
				'name'  => __( 'Justify', 'relicwp-helper' ),
			),
			array(
				'group' => 'text-editor',
				'id'    => 'dashicons-editor-textcolor',
				'name'  => __( 'Text Color', 'relicwp-helper' ),
			),
			array(
				'group' => 'text-editor',
				'id'    => 'dashicons-editor-paste-word',
				'name'  => __( 'Paste Word', 'relicwp-helper' ),
			),
			array(
				'group' => 'text-editor',
				'id'    => 'dashicons-editor-paste-text',
				'name'  => __( 'Paste Text', 'relicwp-helper' ),
			),
			array(
				'group' => 'text-editor',
				'id'    => 'dashicons-editor-removeformatting',
				'name'  => __( 'Clear Formatting', 'relicwp-helper' ),
			),
			array(
				'group' => 'text-editor',
				'id'    => 'dashicons-editor-video',
				'name'  => __( 'Video', 'relicwp-helper' ),
			),
			array(
				'group' => 'text-editor',
				'id'    => 'dashicons-editor-customchar',
				'name'  => __( 'Custom Characters', 'relicwp-helper' ),
			),
			array(
				'group' => 'text-editor',
				'id'    => 'dashicons-editor-indent',
				'name'  => __( 'Indent', 'relicwp-helper' ),
			),
			array(
				'group' => 'text-editor',
				'id'    => 'dashicons-editor-outdent',
				'name'  => __( 'Outdent', 'relicwp-helper' ),
			),
			array(
				'group' => 'text-editor',
				'id'    => 'dashicons-editor-help',
				'name'  => __( 'Help', 'relicwp-helper' ),
			),
			array(
				'group' => 'text-editor',
				'id'    => 'dashicons-editor-strikethrough',
				'name'  => __( 'Strikethrough', 'relicwp-helper' ),
			),
			array(
				'group' => 'text-editor',
				'id'    => 'dashicons-editor-unlink',
				'name'  => __( 'Unlink', 'relicwp-helper' ),
			),
			array(
				'group' => 'text-editor',
				'id'    => 'dashicons-editor-rtl',
				'name'  => __( 'RTL', 'relicwp-helper' ),
			),
			array(
				'group' => 'post',
				'id'    => 'dashicons-align-left',
				'name'  => __( 'Align Left', 'relicwp-helper' ),
			),
			array(
				'group' => 'post',
				'id'    => 'dashicons-align-right',
				'name'  => __( 'Align Right', 'relicwp-helper' ),
			),
			array(
				'group' => 'post',
				'id'    => 'dashicons-align-center',
				'name'  => __( 'Align Center', 'relicwp-helper' ),
			),
			array(
				'group' => 'post',
				'id'    => 'dashicons-align-none',
				'name'  => __( 'Align None', 'relicwp-helper' ),
			),
			array(
				'group' => 'post',
				'id'    => 'dashicons-lock',
				'name'  => __( 'Lock', 'relicwp-helper' ),
			),
			array(
				'group' => 'post',
				'id'    => 'dashicons-calendar',
				'name'  => __( 'Calendar', 'relicwp-helper' ),
			),
			array(
				'group' => 'post',
				'id'    => 'dashicons-calendar-alt',
				'name'  => __( 'Calendar', 'relicwp-helper' ),
			),
			array(
				'group' => 'post',
				'id'    => 'dashicons-hidden',
				'name'  => __( 'Hidden', 'relicwp-helper' ),
			),
			array(
				'group' => 'post',
				'id'    => 'dashicons-visibility',
				'name'  => __( 'Visibility', 'relicwp-helper' ),
			),
			array(
				'group' => 'post',
				'id'    => 'dashicons-post-status',
				'name'  => __( 'Post Status', 'relicwp-helper' ),
			),
			array(
				'group' => 'post',
				'id'    => 'dashicons-post-trash',
				'name'  => __( 'Post Trash', 'relicwp-helper' ),
			),
			array(
				'group' => 'post',
				'id'    => 'dashicons-edit',
				'name'  => __( 'Edit', 'relicwp-helper' ),
			),
			array(
				'group' => 'post',
				'id'    => 'dashicons-trash',
				'name'  => __( 'Trash', 'relicwp-helper' ),
			),
			array(
				'group' => 'sorting',
				'id'    => 'dashicons-arrow-up',
				'name'  => __( 'Arrow: Up', 'relicwp-helper' ),
			),
			array(
				'group' => 'sorting',
				'id'    => 'dashicons-arrow-down',
				'name'  => __( 'Arrow: Down', 'relicwp-helper' ),
			),
			array(
				'group' => 'sorting',
				'id'    => 'dashicons-arrow-left',
				'name'  => __( 'Arrow: Left', 'relicwp-helper' ),
			),
			array(
				'group' => 'sorting',
				'id'    => 'dashicons-arrow-right',
				'name'  => __( 'Arrow: Right', 'relicwp-helper' ),
			),
			array(
				'group' => 'sorting',
				'id'    => 'dashicons-arrow-up-alt',
				'name'  => __( 'Arrow: Up', 'relicwp-helper' ),
			),
			array(
				'group' => 'sorting',
				'id'    => 'dashicons-arrow-down-alt',
				'name'  => __( 'Arrow: Down', 'relicwp-helper' ),
			),
			array(
				'group' => 'sorting',
				'id'    => 'dashicons-arrow-left-alt',
				'name'  => __( 'Arrow: Left', 'relicwp-helper' ),
			),
			array(
				'group' => 'sorting',
				'id'    => 'dashicons-arrow-right-alt',
				'name'  => __( 'Arrow: Right', 'relicwp-helper' ),
			),
			array(
				'group' => 'sorting',
				'id'    => 'dashicons-arrow-up-alt2',
				'name'  => __( 'Arrow: Up', 'relicwp-helper' ),
			),
			array(
				'group' => 'sorting',
				'id'    => 'dashicons-arrow-down-alt2',
				'name'  => __( 'Arrow: Down', 'relicwp-helper' ),
			),
			array(
				'group' => 'sorting',
				'id'    => 'dashicons-arrow-left-alt2',
				'name'  => __( 'Arrow: Left', 'relicwp-helper' ),
			),
			array(
				'group' => 'sorting',
				'id'    => 'dashicons-arrow-right-alt2',
				'name'  => __( 'Arrow: Right', 'relicwp-helper' ),
			),
			array(
				'group' => 'sorting',
				'id'    => 'dashicons-leftright',
				'name'  => __( 'Left-Right', 'relicwp-helper' ),
			),
			array(
				'group' => 'sorting',
				'id'    => 'dashicons-sort',
				'name'  => __( 'Sort', 'relicwp-helper' ),
			),
			array(
				'group' => 'sorting',
				'id'    => 'dashicons-list-view',
				'name'  => __( 'List View', 'relicwp-helper' ),
			),
			array(
				'group' => 'sorting',
				'id'    => 'dashicons-exerpt-view',
				'name'  => __( 'Excerpt View', 'relicwp-helper' ),
			),
			array(
				'group' => 'sorting',
				'id'    => 'dashicons-grid-view',
				'name'  => __( 'Grid View', 'relicwp-helper' ),
			),
			array(
				'group' => 'social',
				'id'    => 'dashicons-share',
				'name'  => __( 'Share', 'relicwp-helper' ),
			),
			array(
				'group' => 'social',
				'id'    => 'dashicons-share-alt',
				'name'  => __( 'Share', 'relicwp-helper' ),
			),
			array(
				'group' => 'social',
				'id'    => 'dashicons-share-alt2',
				'name'  => __( 'Share', 'relicwp-helper' ),
			),
			array(
				'group' => 'social',
				'id'    => 'dashicons-twitter',
				'name'  => __( 'Twitter', 'relicwp-helper' ),
			),
			array(
				'group' => 'social',
				'id'    => 'dashicons-rss',
				'name'  => __( 'RSS', 'relicwp-helper' ),
			),
			array(
				'group' => 'social',
				'id'    => 'dashicons-email',
				'name'  => __( 'Email', 'relicwp-helper' ),
			),
			array(
				'group' => 'social',
				'id'    => 'dashicons-email-alt',
				'name'  => __( 'Email', 'relicwp-helper' ),
			),
			array(
				'group' => 'social',
				'id'    => 'dashicons-facebook',
				'name'  => __( 'Facebook', 'relicwp-helper' ),
			),
			array(
				'group' => 'social',
				'id'    => 'dashicons-facebook-alt',
				'name'  => __( 'Facebook', 'relicwp-helper' ),
			),
			array(
				'group' => 'social',
				'id'    => 'dashicons-googleplus',
				'name'  => __( 'Google+', 'relicwp-helper' ),
			),
			array(
				'group' => 'social',
				'id'    => 'dashicons-networking',
				'name'  => __( 'Networking', 'relicwp-helper' ),
			),
			array(
				'group' => 'jobs',
				'id'    => 'dashicons-art',
				'name'  => __( 'Art', 'relicwp-helper' ),
			),
			array(
				'group' => 'jobs',
				'id'    => 'dashicons-hammer',
				'name'  => __( 'Hammer', 'relicwp-helper' ),
			),
			array(
				'group' => 'jobs',
				'id'    => 'dashicons-migrate',
				'name'  => __( 'Migrate', 'relicwp-helper' ),
			),
			array(
				'group' => 'jobs',
				'id'    => 'dashicons-performance',
				'name'  => __( 'Performance', 'relicwp-helper' ),
			),
			array(
				'group' => 'products',
				'id'    => 'dashicons-wordpress',
				'name'  => __( 'WordPress', 'relicwp-helper' ),
			),
			array(
				'group' => 'products',
				'id'    => 'dashicons-wordpress-alt',
				'name'  => __( 'WordPress', 'relicwp-helper' ),
			),
			array(
				'group' => 'products',
				'id'    => 'dashicons-pressthis',
				'name'  => __( 'PressThis', 'relicwp-helper' ),
			),
			array(
				'group' => 'products',
				'id'    => 'dashicons-update',
				'name'  => __( 'Update', 'relicwp-helper' ),
			),
			array(
				'group' => 'products',
				'id'    => 'dashicons-screenoptions',
				'name'  => __( 'Screen Options', 'relicwp-helper' ),
			),
			array(
				'group' => 'products',
				'id'    => 'dashicons-info',
				'name'  => __( 'Info', 'relicwp-helper' ),
			),
			array(
				'group' => 'products',
				'id'    => 'dashicons-cart',
				'name'  => __( 'Cart', 'relicwp-helper' ),
			),
			array(
				'group' => 'products',
				'id'    => 'dashicons-feedback',
				'name'  => __( 'Feedback', 'relicwp-helper' ),
			),
			array(
				'group' => 'products',
				'id'    => 'dashicons-cloud',
				'name'  => __( 'Cloud', 'relicwp-helper' ),
			),
			array(
				'group' => 'products',
				'id'    => 'dashicons-translation',
				'name'  => __( 'Translation', 'relicwp-helper' ),
			),
			array(
				'group' => 'taxonomies',
				'id'    => 'dashicons-tag',
				'name'  => __( 'Tag', 'relicwp-helper' ),
			),
			array(
				'group' => 'taxonomies',
				'id'    => 'dashicons-category',
				'name'  => __( 'Category', 'relicwp-helper' ),
			),
			array(
				'group' => 'alerts',
				'id'    => 'dashicons-yes',
				'name'  => __( 'Yes', 'relicwp-helper' ),
			),
			array(
				'group' => 'alerts',
				'id'    => 'dashicons-no',
				'name'  => __( 'No', 'relicwp-helper' ),
			),
			array(
				'group' => 'alerts',
				'id'    => 'dashicons-no-alt',
				'name'  => __( 'No', 'relicwp-helper' ),
			),
			array(
				'group' => 'alerts',
				'id'    => 'dashicons-plus',
				'name'  => __( 'Plus', 'relicwp-helper' ),
			),
			array(
				'group' => 'alerts',
				'id'    => 'dashicons-minus',
				'name'  => __( 'Minus', 'relicwp-helper' ),
			),
			array(
				'group' => 'alerts',
				'id'    => 'dashicons-dismiss',
				'name'  => __( 'Dismiss', 'relicwp-helper' ),
			),
			array(
				'group' => 'alerts',
				'id'    => 'dashicons-marker',
				'name'  => __( 'Marker', 'relicwp-helper' ),
			),
			array(
				'group' => 'alerts',
				'id'    => 'dashicons-star-filled',
				'name'  => __( 'Star: Filled', 'relicwp-helper' ),
			),
			array(
				'group' => 'alerts',
				'id'    => 'dashicons-star-half',
				'name'  => __( 'Star: Half', 'relicwp-helper' ),
			),
			array(
				'group' => 'alerts',
				'id'    => 'dashicons-star-empty',
				'name'  => __( 'Star: Empty', 'relicwp-helper' ),
			),
			array(
				'group' => 'alerts',
				'id'    => 'dashicons-flag',
				'name'  => __( 'Flag', 'relicwp-helper' ),
			),
			array(
				'group' => 'media',
				'id'    => 'dashicons-controls-skipback',
				'name'  => __( 'Skip Back', 'relicwp-helper' ),
			),
			array(
				'group' => 'media',
				'id'    => 'dashicons-controls-back',
				'name'  => __( 'Back', 'relicwp-helper' ),
			),
			array(
				'group' => 'media',
				'id'    => 'dashicons-controls-play',
				'name'  => __( 'Play', 'relicwp-helper' ),
			),
			array(
				'group' => 'media',
				'id'    => 'dashicons-controls-pause',
				'name'  => __( 'Pause', 'relicwp-helper' ),
			),
			array(
				'group' => 'media',
				'id'    => 'dashicons-controls-forward',
				'name'  => __( 'Forward', 'relicwp-helper' ),
			),
			array(
				'group' => 'media',
				'id'    => 'dashicons-controls-skipforward',
				'name'  => __( 'Skip Forward', 'relicwp-helper' ),
			),
			array(
				'group' => 'media',
				'id'    => 'dashicons-controls-repeat',
				'name'  => __( 'Repeat', 'relicwp-helper' ),
			),
			array(
				'group' => 'media',
				'id'    => 'dashicons-controls-volumeon',
				'name'  => __( 'Volume: On', 'relicwp-helper' ),
			),
			array(
				'group' => 'media',
				'id'    => 'dashicons-controls-volumeoff',
				'name'  => __( 'Volume: Off', 'relicwp-helper' ),
			),
			array(
				'group' => 'media',
				'id'    => 'dashicons-media-archive',
				'name'  => __( 'Archive', 'relicwp-helper' ),
			),
			array(
				'group' => 'media',
				'id'    => 'dashicons-media-audio',
				'name'  => __( 'Audio', 'relicwp-helper' ),
			),
			array(
				'group' => 'media',
				'id'    => 'dashicons-media-code',
				'name'  => __( 'Code', 'relicwp-helper' ),
			),
			array(
				'group' => 'media',
				'id'    => 'dashicons-media-default',
				'name'  => __( 'Default', 'relicwp-helper' ),
			),
			array(
				'group' => 'media',
				'id'    => 'dashicons-media-document',
				'name'  => __( 'Document', 'relicwp-helper' ),
			),
			array(
				'group' => 'media',
				'id'    => 'dashicons-media-interactive',
				'name'  => __( 'Interactive', 'relicwp-helper' ),
			),
			array(
				'group' => 'media',
				'id'    => 'dashicons-media-spreadsheet',
				'name'  => __( 'Spreadsheet', 'relicwp-helper' ),
			),
			array(
				'group' => 'media',
				'id'    => 'dashicons-media-text',
				'name'  => __( 'Text', 'relicwp-helper' ),
			),
			array(
				'group' => 'media',
				'id'    => 'dashicons-media-video',
				'name'  => __( 'Video', 'relicwp-helper' ),
			),
			array(
				'group' => 'media',
				'id'    => 'dashicons-playlist-audio',
				'name'  => __( 'Audio Playlist', 'relicwp-helper' ),
			),
			array(
				'group' => 'media',
				'id'    => 'dashicons-playlist-video',
				'name'  => __( 'Video Playlist', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'dashicons-album',
				'name'  => __( 'Album', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'dashicons-analytics',
				'name'  => __( 'Analytics', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'dashicons-awards',
				'name'  => __( 'Awards', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'dashicons-backup',
				'name'  => __( 'Backup', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'dashicons-building',
				'name'  => __( 'Building', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'dashicons-businessman',
				'name'  => __( 'Businessman', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'dashicons-camera',
				'name'  => __( 'Camera', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'dashicons-carrot',
				'name'  => __( 'Carrot', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'dashicons-chart-pie',
				'name'  => __( 'Chart: Pie', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'dashicons-chart-bar',
				'name'  => __( 'Chart: Bar', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'dashicons-chart-line',
				'name'  => __( 'Chart: Line', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'dashicons-chart-area',
				'name'  => __( 'Chart: Area', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'dashicons-desktop',
				'name'  => __( 'Desktop', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'dashicons-forms',
				'name'  => __( 'Forms', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'dashicons-groups',
				'name'  => __( 'Groups', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'dashicons-id',
				'name'  => __( 'ID', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'dashicons-id-alt',
				'name'  => __( 'ID', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'dashicons-images-alt',
				'name'  => __( 'Images', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'dashicons-images-alt2',
				'name'  => __( 'Images', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'dashicons-index-card',
				'name'  => __( 'Index Card', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'dashicons-layout',
				'name'  => __( 'Layout', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'dashicons-location',
				'name'  => __( 'Location', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'dashicons-location-alt',
				'name'  => __( 'Location', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'dashicons-products',
				'name'  => __( 'Products', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'dashicons-portfolio',
				'name'  => __( 'Portfolio', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'dashicons-book',
				'name'  => __( 'Book', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'dashicons-book-alt',
				'name'  => __( 'Book', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'dashicons-download',
				'name'  => __( 'Download', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'dashicons-upload',
				'name'  => __( 'Upload', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'dashicons-clock',
				'name'  => __( 'Clock', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'dashicons-lightbulb',
				'name'  => __( 'Lightbulb', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'dashicons-money',
				'name'  => __( 'Money', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'dashicons-palmtree',
				'name'  => __( 'Palm Tree', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'dashicons-phone',
				'name'  => __( 'Phone', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'dashicons-search',
				'name'  => __( 'Search', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'dashicons-shield',
				'name'  => __( 'Shield', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'dashicons-shield-alt',
				'name'  => __( 'Shield', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'dashicons-slides',
				'name'  => __( 'Slides', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'dashicons-smartphone',
				'name'  => __( 'Smartphone', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'dashicons-smiley',
				'name'  => __( 'Smiley', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'dashicons-sos',
				'name'  => __( 'S.O.S.', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'dashicons-sticky',
				'name'  => __( 'Sticky', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'dashicons-store',
				'name'  => __( 'Store', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'dashicons-tablet',
				'name'  => __( 'Tablet', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'dashicons-testimonial',
				'name'  => __( 'Testimonial', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'dashicons-tickets-alt',
				'name'  => __( 'Tickets', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'dashicons-thumbs-up',
				'name'  => __( 'Thumbs Up', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'dashicons-thumbs-down',
				'name'  => __( 'Thumbs Down', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'dashicons-unlock',
				'name'  => __( 'Unlock', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'dashicons-vault',
				'name'  => __( 'Vault', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'dashicons-video-alt',
				'name'  => __( 'Video', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'dashicons-video-alt2',
				'name'  => __( 'Video', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'dashicons-video-alt3',
				'name'  => __( 'Video', 'relicwp-helper' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'dashicons-warning',
				'name'  => __( 'Warning', 'relicwp-helper' ),
			),
		);

		/**
		 * Filter dashicon items
		 *
		 */
		$items = apply_filters( 'relicwp_icon_picker_dashicons_items', $items );

		return $items;
	}
}
