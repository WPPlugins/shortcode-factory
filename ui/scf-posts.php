<div class="scf-shortcode-wrapper">
	<h2 class="scf-shortcode-title" data-shortcode="scf-posts">[scf-posts]</h2>
	<p class="scf-shortcode-desc"><?=__('Outputs posts.', 'shortcode-factory')?></p>
	<div class="scf-controls-group">
		<div class="scf-control">
			<label for="scf-control-type" class="scf-control-label"><?=__('Post Type', 'shortcode-factory')?> <span class="optional scf-right"><?=__('(optional)', 'shortcode-factory')?></span></label>
			<select id="scf-control-type" name="scf-param-type" class="scf-control-select scf-param" data-param-name="type">
				<option value="">-- Select --</option>
				<option value="post">Post (default)</option>
				<option value="page">Page</option>
				<option value="custom">Custom...</option>
			</select>

			<input type="text" id="scf-control-type" name="scf-param-type" class="scf-control-text scf-param scf-opt-a" style="display: none;" data-param-name="type" />
			<span class="notes scf-opt-a" style="display: none;"><?=__('Enter slug of the custom post type.', 'shortcode-factory')?></span>
		</div>

		<div class="scf-control">
			<label for="scf-control-category" class="scf-control-label"><?=__('Post Category', 'shortcode-factory')?> <span class="optional scf-right"><?=__('(optional)', 'shortcode-factory')?></span></label>
			<input type="text" id="scf-control-category" name="scf-param-category" class="scf-control-text scf-param" data-param-name="category" />
			<span class="notes"><?=__('Comma separated list of category names (slugs) or IDs. Do not use both.', 'shortcode-factory')?></span>
		</div>

		<div class="scf-control">
			<label for="scf-control-status" class="scf-control-label"><?=__('Post Status', 'shortcode-factory')?> <span class="optional scf-right"><?=__('(optional)', 'shortcode-factory')?></span></label>
			<select id="scf-control-status" name="scf-param-status" class="scf-control-select scf-param" data-param-name="status">
				<option value="">-- Select --</option>
				<option value="publish">Publish (default)</option>
				<option value="pending">Pending</option>
				<option value="draft">Draft</option>
				<option value="auto-draft">Auto-Draft</option>
				<option value="future">Future</option>
				<option value="private">Private</option>
				<option value="trash">Trash</option>
				<option value="any">Any (except those from post statuses with 'exclude_from_search' set to true)</option>
			</select>
		</div>

		<div class="scf-control">
			<label for="scf-control-show" class="scf-control-label"><?=__('Number of Posts', 'shortcode-factory')?> <span class="optional scf-right"><?=__('(optional)', 'shortcode-factory')?></span></label>
			<input type="number" id="scf-control-show" name="scf-param-show" min="-1" max="999" value="3" class="scf-control-text scf-param" data-param-name="show" />
			<span class="notes"><?=__('Default is 3. Enter -1 to show all posts.', 'shortcode-factory')?></span>
		</div>

		<div class="scf-control">
			<label for="scf-control-orderby" class="scf-control-label"><?=__('Order By', 'shortcode-factory')?> <span class="optional scf-right"><?=__('(optional)', 'shortcode-factory')?></span></label>
			<select id="scf-control-orderby" name="scf-param-orderby" class="scf-control-select scf-param" data-param-name="orderby">
				<option value="">-- Select --</option>
				<option value="ID">Post ID</option>
				<option value="title">Post Title</option>
				<option value="name">Post Name/Slug</option>
				<option value="date">Publish Date (default)</option>
				<option value="modified">Modified Date</option>
				<option value="menu_order">Menu Order</option>
				<option value="author">Author</option>
				<option value="rand">Random</option>
			</select>
		</div>

		<div class="scf-control">
			<label for="scf-control-order" class="scf-control-label"><?=__('Order', 'shortcode-factory')?> <span class="optional scf-right"><?=__('(optional)', 'shortcode-factory')?></span></label>
			<select id="scf-control-order" name="scf-param-order" class="scf-control-select scf-param" data-param-name="order">
				<option value="">-- Select --</option>
				<option value="ASC">Ascending</option>
				<option value="DESC">Descending (default)</option>
			</select>
		</div>

		<div class="scf-control">
			<label for="scf-control-return" class="scf-control-label"><?=__('Return Output', 'shortcode-factory')?> <span class="optional scf-right"><?=__('(optional)', 'shortcode-factory')?></span></label>
			<select id="scf-control-return" name="scf-param-return" class="scf-control-select scf-param" data-param-name="return" multiple>
				<option value="">-- Select --</option>
				<option value="title">Post Title</option>
				<option value="link-title">Post Title as Link (default)</option>
				<option value="link">Post Link</option>
				<option value="content">Post Content</option>
				<option value="excerpt">Post Excerpt</option>
				<option value="date-publish">Publish Date</option>
				<option value="date-modified">Modified Date</option>
				<option value="author">Post Author</option>
			</select>
			<span class="notes"><?=__('Select multiple items to include in the output (for a post). After inserting the short code, you can rearrange the comma separated items, in the desired order. Look for <strong>return</strong> attribute.', 'shortcode-factory')?></span>
		</div>

		<div class="scf-control">
			<label for="scf-control-output" class="scf-control-label"><?=__('Output HTML Tag', 'shortcode-factory')?> <span class="optional scf-right"><?=__('(optional)', 'shortcode-factory')?></span></label>
			<select id="scf-control-output" name="scf-param-output" class="scf-control-select scf-param" data-param-name="output">
				<option value="">-- Select --</option>
				<option value="li">Unordered List (default)</option>
				<option value="div">&lt;div&gt;</option>
			</select>
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
		$("#scf-control-type").on("change", function(e) {
			var v = $(this).val();

			if(v == "" || v == "custom") {
				$(".scf-opt-a").show();
				$("input.scf-opt-a").focus();
			} else {
				$(".scf-opt-a").val("");
				$(".scf-opt-a").hide();
			}
		});

		//scf_hook_output_change();
		scf_go_back();
		scf_insert();
	});
</script>
