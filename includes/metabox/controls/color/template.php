<label>
	<div class="pdwp-mb-desc">
		<# if ( data.label ) { #>
			<span class="butterbean-label">{{ data.label }}</span>
		<# } #>

		<# if ( data.description ) { #>
			<span class="butterbean-description">{{{ data.description }}}</span>
		<# } #>
	</div>

	<div class="pdwp-mb-field">
		<input class="widefat butterbean-color-picker" {{{ data.attr }}} value="<# if ( data.value ) { #>#{{ data.value }}<# } #>" />
	</div>
</label>
