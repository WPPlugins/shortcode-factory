<div class="scf-shortcode-wrapper">
	<h2 class="scf-shortcode-title" data-shortcode="scf-form-week">[scf-form-week]</h2>
	<p class="scf-shortcode-desc"><?=__('Outputs week input field.', 'shortcode-factory')?></p>
	<div class="scf-controls-group">
		<div class="scf-control">
			<label for="scf-control-name" class="scf-control-label"><?=__('Name', 'shortcode-factory')?> <span class="optional scf-right"><?=__('(optional)', 'shortcode-factory')?></span></label>
			<input type="text" id="scf-control-name" name="scf-param-name" class="scf-control-text scf-param" data-param-name="name" />
			<span class="notes"><?=__('Default is short code name.', 'shortcode-factory')?></span>
		</div>

		<div class="scf-control">
			<label for="scf-control-value" class="scf-control-label"><?=__('Default Value', 'shortcode-factory')?> <span class="optional scf-right"><?=__('(optional)', 'shortcode-factory')?></span></label>
			<input type="text" id="scf-control-value" name="scf-param-value" class="scf-control-text scf-param" data-param-name="value" />
		</div>

		<div class="scf-control">
			<label for="scf-control-min" class="scf-control-label"><?=__('Minimum Value', 'shortcode-factory')?> <span class="optional scf-right"><?=__('(optional)', 'shortcode-factory')?></span></label>
			<input type="text" id="scf-control-min" name="scf-param-min" class="scf-control-text scf-param" data-param-name="min" />
		</div>

		<div class="scf-control">
			<label for="scf-control-max" class="scf-control-label"><?=__('Maximum Value', 'shortcode-factory')?> <span class="optional scf-right"><?=__('(optional)', 'shortcode-factory')?></span></label>
			<input type="text" id="scf-control-max" name="scf-param-max" class="scf-control-text scf-param" data-param-name="max" />
		</div>

		<div class="scf-control">
			<label for="scf-control-placeholder" class="scf-control-label"><?=__('Placeholder Text', 'shortcode-factory')?> <span class="optional scf-right"><?=__('(optional)', 'shortcode-factory')?></span></label>
			<input type="text" id="scf-control-placeholder" name="scf-param-placeholder" class="scf-control-text scf-param" data-param-name="placeholder" />
		</div>

		<div class="scf-control">
			<label for="scf-control-autocomplete" class="scf-control-label"><?=__('Auto Complete', 'shortcode-factory')?> <span class="optional scf-right"><?=__('(optional)', 'shortcode-factory')?></span></label>
			<select id="scf-control-autocomplete" name="scf-param-autocomplete" class="scf-control-select scf-param" data-param-name="autocomplete">
				<option value="">-- Select --</option>
				<option value="on">On</option>
				<option value="off">Off</option>
			</select>
		</div>

		<div class="scf-control">
			<label for="scf-control-id" class="scf-control-label"><?=__('CSS ID', 'shortcode-factory')?> <span class="optional scf-right"><?=__('(optional)', 'shortcode-factory')?></span></label>
			<input type="text" id="scf-control-id" name="scf-param-id" class="scf-control-text scf-param" data-param-name="id" />
		</div>

		<div class="scf-control">
			<label for="scf-control-class" class="scf-control-label"><?=__('CSS Class', 'shortcode-factory')?> <span class="optional scf-right"><?=__('(optional)', 'shortcode-factory')?></span></label>
			<input type="text" id="scf-control-class" name="scf-param-class" class="scf-control-text scf-param" data-param-name="class" />
			<span class="notes"><?=__('Default is short code name. Separate one or more class names with a space.', 'shortcode-factory')?></span>
		</div>

		<div class="scf-control separator">
			<button type="button" id="scf-action-back" class="button button-large scf-control-button">&lt; <?=__('Back', 'shortcode-factory')?></button>
			<button type="button" id="scf-action-insert" class="button button-primary button-large scf-control-button scf-right"><?=__('Insert', 'shortcode-factory')?></button>
		</div>
	</div>
</div>

<script type="text/javascript">
	jQuery(document).ready(function($){
		//scf_hook_output_change();
		scf_go_back();
		scf_insert();
	});
</script>
