<div class="pdwp-mb-desc">
	<# if ( data.label ) { #>
		<span class="butterbean-label">{{ data.label }}</span>
	<# } #>

	<# if ( data.description ) { #>
		<span class="butterbean-description">{{{ data.description }}}</span>
	<# } #>
</div>

<div class="pdwp-mb-field">
	<div class="uploader">
		<input type="text" {{{ data.attr }}} name="{{ data.field_name }}" value="{{ data.value }}" />
		<button type="button" class="button button-secondary pdwp-add-media">{{ data.l10n.upload }}</button>
	</div>
</div>