<div class="pdwp-mb-desc">
	<# if ( data.label ) { #>
		<span class="butterbean-label">{{ data.label }}</span>
	<# } #>

	<# if ( data.description ) { #>
		<span class="butterbean-description">{{{ data.description }}}</span>
	<# } #>
</div>

<div class="pdwp-mb-field">
	<textarea class="tinymce widefat" {{{ data.attr }}}>{{{ data.value }}}</textarea>
</div>