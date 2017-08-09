<div class="scf-shortcode-wrapper">
	<h2 class="scf-shortcode-title" data-shortcode="scf-form-select" data-has-closing="1">[scf-form-select]</h2>
	<p class="scf-shortcode-desc"><?=__('Outputs drop-down list.', 'shortcode-factory')?></p>
	<div class="scf-controls-group">
		<div class="scf-control">
			<label for="scf-control-name" class="scf-control-label"><?=__('Name', 'shortcode-factory')?> <span class="optional scf-right"><?=__('(optional)', 'shortcode-factory')?></span></label>
			<input type="text" id="scf-control-name" name="scf-param-name" class="scf-control-text scf-param" data-param-name="name" />
			<span class="notes"><?=__('Default is short code name.', 'shortcode-factory')?></span>
		</div>

		<div class="scf-control">
			<label for="scf-control-multiple" class="scf-control-label"><?=__('Multiple', 'shortcode-factory')?> <span class="optional scf-right"><?=__('(optional)', 'shortcode-factory')?></span></label>
			<select id="scf-control-multiple" name="scf-param-multiple" class="scf-control-select scf-param" data-param-name="multiple">
				<option value="">No</option>
				<option value="multiple">Yes</option>
			</select>
			<span class="notes"><?=__('If yes, multiple options can be selected at once.', 'shortcode-factory')?></span>
		</div>

		<div class="scf-control">
			<label for="scf-control-size" class="scf-control-label"><?=__('Size', 'shortcode-factory')?> <span class="optional scf-right"><?=__('(optional)', 'shortcode-factory')?></span></label>
			<input type="text" id="scf-control-size" name="scf-param-size" class="scf-control-text scf-param" data-param-name="size" />
			<span class="notes"><?=__('Number of visible options in a drop-down list.', 'shortcode-factory')?></span>
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
