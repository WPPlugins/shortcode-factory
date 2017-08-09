<div class="scf-shortcode-wrapper">
	<h2 class="scf-shortcode-title" data-shortcode="scf-tr" data-has-closing="1">[scf-tr]</h2>
	<p class="scf-shortcode-desc"><?=__('Outputs table row structure.', 'shortcode-factory')?></p>
	<div class="scf-controls-group">
		<div class="scf-control">
			<label for="scf-control-bgcolor" class="scf-control-label"><?=__('Background Color', 'shortcode-factory')?> <span class="optional scf-right"><?=__('(optional)', 'shortcode-factory')?></span></label>
			<input type="text" id="scf-control-bgcolor" name="scf-param-bgcolor" class="scf-control-text scf-param" data-param-name="bgcolor" />
			<span class="notes"><?=__('Any valid HTML color value, i.e. #FF000 or red', 'shortcode-factory')?></span>
		</div>

		<div class="scf-control">
			<label for="scf-control-align" class="scf-control-label"><?=__('Align', 'shortcode-factory')?> <span class="optional scf-right"><?=__('(optional)', 'shortcode-factory')?></span></label>
			<select id="scf-control-align" name="scf-param-align" class="scf-control-select scf-param" data-param-name="align">
				<option value="">-- Select --</option>
				<option value="left">Left</option>
				<option value="center">Center</option>
				<option value="right">Right</option>
			</select>
		</div>

		<div class="scf-control">
			<label for="scf-control-valign" class="scf-control-label"><?=__('Vertical Align', 'shortcode-factory')?> <span class="optional scf-right"><?=__('(optional)', 'shortcode-factory')?></span></label>
			<select id="scf-control-valign" name="scf-param-valign" class="scf-control-select scf-param" data-param-name="valign">
				<option value="">-- Select --</option>
				<option value="top">Top</option>
				<option value="middle">Middle</option>
				<option value="bottom">Bottom</option>
				<option value="baseline">Baseline</option>
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
