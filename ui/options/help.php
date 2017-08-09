<p>This page describes the usage of all available short codes in the plugin.</p>

<p class="notes">For a detailed information see online guide at official website of the plugin (<a href="http://shortcodefactory.com/users-guide/" target="_blank">http://shortcodefactory.com/users-guide/</a>).</p>

<?php
foreach ($scf_shortcode_groups as $group => $group_info) {
	echo '<strong style="display: block; margin-top: 20px;">';
	echo $group_info[0];
	echo '</strong>';
	echo ' <span class="notes" style="display: block;">' . $group_info[1] . '</span>';

	if(isset($scf_builtin_shortcodes[$group])) {
		foreach ($scf_builtin_shortcodes[$group] as $shortcode) {
			echo '<div class="scf-shortcode-help">';
			echo '<h4>['.$shortcode[0].']</h4>';
			echo '<span class="notes">'.$shortcode[3].'</span>';
			echo '</div>';
		}
	} else {
		echo '<p style="color: #AA0000; font-weight: bold;">Activate short codes from Settings tab.</p>';
	}
}
?>
