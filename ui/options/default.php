<?php
	$scfOptionPages = array(
		__('Welcome', 'shortcode-factory') => 'welcome',		// Title => id suffix (also used for {file-name}.php)
		__('Settings', 'shortcode-factory') => 'settings',
		__('Help', 'shortcode-factory') => 'help',
		__('Support', 'shortcode-factory') => 'support'
	);

	$active_tab = isset( $_GET[ 'tab' ] ) ? $_GET[ 'tab' ] : 'welcome';
	$total_shortcodes = 0;

	foreach($scf_shortcode_groups as $group => $group_info) {
		if(isset($scf_builtin_shortcodes[$group])) {
			$total_shortcodes += sizeof($scf_builtin_shortcodes[$group]);
		}
	}
?>
<div class="wrap">
	<a href="https://www.facebook.com/wpmadeasy/" target="_blank" class="scf-right" style="margin-top: 20px;"><img src="<?=SCF_IMGURL?>/followus.png" /></a>
	<h2><?=SCF_FULLNAME?></h2>
	<p style="font-size: 11px; margin-top: 0; color: #666;">
		<?=__('Version', 'shortcode-factory')?> <?=SCF_VERSION?> -
		<?php echo $total_shortcodes.' '.__(' Active Short Codes', 'shortcode-factory'); ?>
	</p>
	<p><?=SCF_DESCRIPTION?></p>

	<h2 class="nav-tab-wrapper">
		<?php
			foreach($scfOptionPages as $pageTitle => $pageId) {
				$active_tab_class = ($active_tab == $pageId) ? 'nav-tab-active' : '';

				echo '<a href="?page=shortcode-factory/core/options.php&tab='.$pageId.'" class="nav-tab '.$active_tab_class.'">'.$pageTitle.'</a>';
			}
		?>
	</h2>


	<div id="scf-pages">
		<div id="scf-page-<?php echo $active_tab; ?>">
			<?php include(SCF_UI."/options/".$active_tab.".php"); ?>
		</div>
	</div>
</div>

<script type="text/javascript">
	jQuery(document).ready(function($){
		$('.scf-form-settings').submit(function(){
			var data =  $(this).serialize();

			$(".scf-notice")
				.removeClass("scf-error")
				.removeClass("scf-success")
				.addClass("scf-alert")
				.html("<span class='dashicons dashicons-info' style='color: #00A8EF;'></span> <?=__('Saving, please wait', 'shortcode-factory')?>")
				.show();

			$.post('options.php', data).error(function(){
				$(".scf-notice")
					.html("<?=__('Settings were not saved successfully, please try again.', 'shortcode-factory')?>")
					.removeClass("scf-alert")
					.addClass("scf-error")
					.show();
			}).success(function(){
				$(".scf-notice")
					.html("<?=__('Settings updated.', 'shortcode-factory')?>")
					.removeClass("scf-alert")
					.addClass("scf-success")
					.show();
			});

			return false;
		});
	});
</script>