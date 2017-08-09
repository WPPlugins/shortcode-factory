<?php
	global $scf_shortcode_groups;
	global $scf_builtin_shortcodes;

	$options = get_option('scf_options');
	$active_shortcodes = $options["general"]["active_shortcodes"];
	$quick_links = '<button class="scf-quick-link is-checked" data-filter="*"><span class="dashicons dashicons-menu"></span> All</button>';
	$shortcodes = '';

	if($active_shortcodes) {
		foreach ($scf_shortcode_groups as $group => $group_info) {
			if (in_array($group, $active_shortcodes)) {
				$quick_links .= '<button class="scf-quick-link '.$group.'" data-filter=".'.$group.'"><span class="dashicons '.$group_info[2].'"></span> '.$group_info[0].'</button>';

				foreach ($scf_builtin_shortcodes[$group] as $shortcode) {
					$hasUi = 0;

					if ($shortcode[4]) {
						$hasUi = 1;
					}

					$shortcodes .= '
						<div class="scf-grid-item '.$group.'">
							<a href="#" class="' . SCF_INITIALS . 'shortcode" title="' . $shortcode[3] . '" data-slug="' . $shortcode[0] . '" data-ui="' . $hasUi . '">
								<span class="scf-shortcode-ui-title">' . $shortcode[2] . '</span>
								<span class="scf-shortcode-ui-desc">'.$shortcode[3].'</span>
							</a>
						</div>
					';
				}
			}
		}
	}
?>
<script type="text/javascript">
	jQuery(document).ready(function($){
		$("#scf-close").on("click", function(e){
			e.preventDefault();
			scf_close_ui();
		});
	});
</script>
<div id="scf-shortcodes-ui">
	<div id="scf-shortcodes-ui-header">
		<img src="<?php echo SCF_IMGURL; ?>/icon-scfactory.png" style="width: 24px; margin-top: 12px;" />
		<?php echo SCF_FULLNAME; ?>
		<span id="scf-close" class="dashicons dashicons-dismiss"></span>
		<span id="header-links">
			<a href="http://shortcodefactory.com/users-guide/" target="_blank">User's Guide</a> |
			<a href="admin.php?page=shortcode-factory/core/options.php&tab=settings">Settings</a>
		</span>
	</div>

	<?php if(!isset($_REQUEST["ui"]) || empty($_REQUEST["ui"]) || $_REQUEST["ui"] == 'main') { ?>
		<div id="scf-shortcodes-ui-topbar">
			<?php echo $quick_links; ?>

			<input type="text" id="scf-shortcodes-ui-search" placeholder="Search..." style="float: right;" />
		</div>
	<?php } ?>

	<div id="scf-shortcodes-ui-content">