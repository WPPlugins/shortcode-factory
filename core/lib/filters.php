<?php
/*
 * File: /core/lib/filters.php
 *
 * Short codes related filters
 */

function callback_filter_label_more($label) {
	return $label;
}
add_filter('filter_label_more', 'callback_filter_label_more');