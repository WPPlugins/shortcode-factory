<div class="scf-shortcode-wrapper">
	<h2 class="scf-shortcode-title" data-shortcode="scf-states">[scf-states]</h2>
	<p class="scf-shortcode-desc"><?=__('Outputs list of US states.', 'shortcode-factory')?></p>
	<div class="scf-controls-group">
		<div class="scf-control">
			<label for="scf-control-output" class="scf-control-label"><?=__('Output Type', 'shortcode-factory')?> <span class="optional scf-right"><?=__('(optional)', 'shortcode-factory')?></span></label>
			<select id="scf-control-output" name="scf-param-output" class="scf-control-select scf-param" data-param-name="output">
				<option value="">-- Select --</option>
				<option value="select">Dropdown List (default)</option>
				<option value="ul">Unordered List</option>
				<option value="ol">Ordered List</option>
				<option value="raw">Raw</option>
			</select>
		</div>

		<div class="scf-control">
			<label for="scf-control-format" class="scf-control-label"><?=__('Format', 'shortcode-factory')?> <span class="optional scf-right"><?=__('(optional)', 'shortcode-factory')?></span></label>
			<select id="scf-control-format" name="scf-param-format" class="scf-control-select scf-param" data-param-name="format">
				<option value="">-- Select --</option>
				<optgroup label="Dropdown List">
					<option value="dd-iso-name">Use ISO Code for Value and Name for Display (default)</option>
					<option value="dd-name-name">Use Name for Value and Display</option>
					<option value="dd-iso-iso">Use ISO Code for Value and Display</option>
					<option value="dd-name-iso">Use Name for Value and ISO Code for Display</option>
				</optgroup>
				<optgroup label="Ordered / Unordered List">
					<option value="ul-name">State Name (default)</option>
					<option value="ul-name-iso">State Name (ISO Code)</option>
					<option value="ul-iso">ISO Code</option>
					<option value="ul-iso-name">ISO Code - State Name</option>
				</optgroup>
				<optgroup label="Raw Output">
					<option value="raw-line">New Line (default)</option>
					<option value="raw-comma">Comma Separated</option>
				</optgroup>
			</select>
		</div>

		<div class="scf-control">
			<label for="scf-control-template" class="scf-control-label"><?=__('Raw Output Template', 'shortcode-factory')?> <span class="optional scf-right"><?=__('(optional)', 'shortcode-factory')?></span></label>
			<input type="text" id="scf-control-template" name="scf-param-template" class="scf-control-text scf-param" data-param-name="template" />
			<span class="notes"><?=__('<strong>%%ISO%%</strong> = ISO Code; <strong>%%NAME%%</strong> = State Name (default)', 'shortcode-factory')?></span>
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
