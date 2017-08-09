<div class="scf-shortcode-wrapper">
	<h2 class="scf-shortcode-title" data-shortcode="scf-form" data-has-closing="1">[scf-form]</h2>
	<p class="scf-shortcode-desc"><?=__('Outputs form structure.', 'shortcode-factory')?></p>
	<div class="scf-controls-group">
		<div class="scf-control">
			<label for="scf-control-action" class="scf-control-label"><?=__('Action', 'shortcode-factory')?> <span class="required scf-right"><?=__('(required)', 'shortcode-factory')?></span></label>
			<input type="text" id="scf-control-action" name="scf-param-action" class="scf-control-text scf-param" data-param-name="action" data-required="1" placeholder="This field is required" />
			<span class="notes"><?=__('Full qualified URL to post the form to.', 'shortcode-factory')?></span>
		</div>

		<div class="scf-control">
			<label for="scf-control-method" class="scf-control-label"><?=__('Method', 'shortcode-factory')?> <span class="optional scf-right"><?=__('(optional)', 'shortcode-factory')?></span></label>
			<select id="scf-control-method" name="scf-param-method" class="scf-control-select scf-param" data-param-name="method">
				<option value="GET">GET</option>
				<option value="POST">POST</option>
			</select>
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
			<label for="scf-control-name" class="scf-control-label"><?=__('Form Name', 'shortcode-factory')?> <span class="optional scf-right"><?=__('(optional)', 'shortcode-factory')?></span></label>
			<input type="text" id="scf-control-name" name="scf-param-name" class="scf-control-text scf-param" data-param-name="name" />
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
