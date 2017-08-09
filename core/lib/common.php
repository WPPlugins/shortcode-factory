<?php
/*
 * File: /core/lib/common.php
 *
 * Common functions.
 */

/**
 * @param array $params
 * @return string
 *
 * @since 2.2
 */
function scf_get_posts($params=array()) {
	if(is_array($params) && sizeof($params) > 0) {
		extract($params);
	}

	$args = array(
		'post_type' => $type,
		'post_status' => $status,
		'posts_per_page' => $show,
		'orderby' => $orderby,
		'order'   => $order,
	);

	// Adjust category parameter
	$cats = explode(",", $category);

	if(is_of_same_type($cats, "STRING")) {
		$args['category_name'] = $category;
	}

	if(is_of_same_type($cats, "NUMERIC")) {
		$args['cat'] = $category;
	}

	$output = strtolower(scf_sanitize_output_tag($output));

	$scf_posts = new WP_Query($args);
	$return_items = explode(",", strtolower($return));
	$data = "";

	while($scf_posts->have_posts()) {
		$scf_posts->the_post();

		$item_data = "";

		foreach($return_items as $item) {

			// title, link-title, link, content, excerpt, date-publish, date-modified, author
			switch($item) {
				case 'title':
					$item_data .= '<h2 class="scf-post-title">'.get_the_title().'</h2>';
					break;

				case 'link-title':
					$item_data .= '<h2 class="scf-post-title"><a href="'.get_permalink().'" class="scf-post-link">'.get_the_title().'</a></h2>';
					break;

				case 'link':
					$item_data .= '<a href="'.get_permalink().'" class="scf-post-link">'.apply_filters('filter_label_more', '[More]').'</a>';
					break;

				case 'content':
					$item_data .= '<div class="scf-post-content">'.apply_filters("the_content", get_the_content()).'</div>';
					break;

				case 'excerpt':
					$item_data .= '<div class="scf-post-excerpt">'.get_the_excerpt().'</div>';
					break;

				case 'date-publish':
					$item_data .= '<div class="scf-post-meta scf-post-date-publish">'.get_the_date().'</div>';
					break;

				case 'date-modified':
					$item_data .= '<div class="scf-post-meta scf-post-date-modified">'.get_the_modified_date().'</div>';
					break;

				case 'author':
					$item_data .= '<a href="'.get_author_posts_url(get_the_author_meta('ID')).'" class="scf-post-author">'.get_the_author().'</a>';
					break;
			}
		}

		// Assemble a post
		switch($output) {
			case "li":
				$data .= '<li class="'.$class.'">'.$item_data.'</li>';
				break;

			case "div":
				$data .= '<div class="'.$class.'">'.$item_data.'</div>';
				break;
		}
	}

	if(!empty($data)) {
		switch($output) {
			case "li":
				$data = '<ul class="scf-posts-wrapper">'.$data.'</ul>';
				break;

			case "div":
				$data = '<div class="scf-posts-wrapper">'.$data.'</div>';
				break;
		}
	}

	wp_reset_postdata();

	/*foreach($args as $key=>$val) {
		$data .= "{$key} => {$val}<br>";
	}*/

	return $data;
}

function scf_get_post($post_slug_or_id, $return_data="title", $params=array()) {
	if(is_array($params) && sizeof($params) > 0) {
		extract($params);
	}

	$args = array(
		'post_status'    => 'publish',
		'posts_per_page' => 1,
		'post_type' => get_post_type()
	);

	$id = "";
	$slug = "";

	if(is_numeric($post_slug_or_id)) {
		$id = $post_slug_or_id;
		$args["p"] = $id;
		$args["post_type"] = get_post_type($id);
	} else {
		$slug = $post_slug_or_id;
		$args["name"] = $slug;
	}

	$scf_post = new WP_Query($args);
	$return_data = strtolower($return_data);
	$data = "";

	while($scf_post->have_posts()) {
		$scf_post->the_post();
		$post_id = get_the_ID();

	    switch($return_data) {
	    	case "id":
	    		$data = $post_id;
	    		break;

	    	case "title":
	    		$data = get_the_title($post_id);
	    		break;

	    	case "content":
	    		$data = apply_filters("the_content", get_the_content());
	    		break;

	    	case "excerpt":
	    		$data = get_the_excerpt();
	    		break;

	    	case "meta":
	    		if($type == "post-date") {
	    			$data = get_the_date($format);
	    		}

	    		if($type == "post-modified") {
	    			$data = get_the_modified_date($format);
	    		}

	    		if($type == "comments-feed") {
	    			// format: atom, rdf, rss, rss2
	    			$data = get_post_comments_feed_link($format);
	    		}

	    		break;

	    	case "permalink":
	    		$data = get_permalink();
	    		break;

	    	case "author":
	    		$data = array_to_list(get_the_author_meta($type));
	    		break;

	    	case "image":
	    		if($type == "id") {
	    			$data = get_post_thumbnail_id();
	    		}

	    		if($type == "url") {
	    			$tmpdata = wp_get_attachment_image_src(get_post_thumbnail_id(), $size);
	    			$data = $tmpdata[0];
	    		}

	    		if($type == "html") {
	    			$data = get_the_post_thumbnail($post_id, $size);
	    		}

	    		break;

	    	case "field":
	    		$data = array_to_list(get_post_meta($post_id, $name, true), $separator);
	    		break;

			case "category":
				$categories = get_the_category($post_id);
				$out = array();

				if($categories) {
					foreach($categories as $category) {
						if($type == "link") {
							$out[] = '<a href="'.get_category_link($category->term_id).'">'.$category->name.'</a>';
						} else {
							$out[] = $category->name;
						}
					}
				}

				$data = array_to_list($out, $separator);
				break;

			case "tag":
				$tags = get_the_terms($post_id, "post_tag");
				$out = array();

				if($tags) {
					foreach($tags as $tag) {

						if($type == "link") {
							$out[] = '<a href="'.get_term_link($tag).'">'.$tag->name.'</a>';
						} else {
							$out[] = $tag->name;
						}
					}
				}

				$data = array_to_list($out, $separator);
				break;

			case "taxonomy":
				$terms = get_the_terms($post_id, $taxonomy);
				$out = array();

				if($terms) {
					foreach($terms as $term) {

						if($type == "link") {
							$out[] = '<a href="'.get_term_link($term).'">'.$term->name.'</a>';
						} else {
							$out[] = $term->name;
						}
					}
				}

				$data = array_to_list($out, $separator);
				break;

			case "attachment":
				$children = get_posts(
					array(
						'post_parent' => $post_id,
						'post_type' => 'attachment'
					)
				);

				$out = array();
				$childId = 0;

				foreach($children as $child) {
					$childId = $child->ID;

					if($type == "link") {
						$out[] = get_permalink($childId);
					} elseif($type == "title") {
						$out[] = get_the_title($childId);
					} elseif($type == "id") {
						$out[] = $childId;
					} else { // linktitle
						$out[] = '<a href="'.get_permalink($childId).'">'.get_the_title($childId).'</a>';
					}
				}


				$data = array_to_list($out, $separator);
				break;

	    	default:
	    		$data = get_the_title($post_id);
	    		break;
	    }
	}

	wp_reset_postdata();

	return $data;
}

/**
 * Returns a comma separated list, if $arr is an array, otherwise returns $arr.
 *
 * @param Array|String $arr Single dimension, index based array
 */
function array_to_list($arr, $separator=", ") {
	$ret = $arr;

	// if it's serialized?
	if(is_string($arr)) {
		$ser = unserialize($arr);

		if(is_array($ser)) {
			$arr = $ser;
		}
	}

	if(is_array($arr)) {
		$ret = implode($separator, $arr);
	}

	return $ret;
}

/**
 * Get included content from files
 *
 * @param String $filename File to get contents from.
 *
 * @return File contents.
 */
function get_include_contents($filename) {
	if (is_file($filename)) {
		ob_start();
		include $filename;
		return ob_get_clean();
	}

	return false;
}

/**
 * Returns content if current user has one of the supplied roles.
 *
 * If role attribute is set, the content is returned for those roles only.
 * Otherwise, content is returned, regardless of roles.
 *
 * @param String $role Comma separated list of effective user roles
 * @param String $content Content
 *
 * @return String Content.
 */
function scf_allow($role="", $content) {
	$ret = do_shortcode($content);

	if(!empty($role)) {
		$roles = explode(",", $role);
		$allowed = false;

		// Check if user falls under any of supplied roles
		foreach($roles as $r) {
			$r = trim(strtolower($r));

			// If user falls under any of the roles, allow the content
			if(current_user_can($r)) {
				$allowed = true;
			}
		}

		if(!$allowed) {
			$ret = "";
		}
	}

	return $ret;
}

function scf_format_output($content, $type="raw", $class="scf-shortcode", $paramsArray=array()) {
	$ret = $content;

	if($type != "raw") {
		$type = scf_sanitize_output_tag($type);
		$extraAtts = params_to_html_atts($paramsArray, true, array("class"));
		$ret = '<'.$type.' class="'.$class.'"'.$extraAtts.'>'.$content.'</'.$type.'>';
	}

	return $ret;
}

function scf_sanitize_output_tag($tag) {
	$invalidChars = array(" ", ",", "<", ">", "&lt;", "&gt;", "/");

	return str_ireplace($invalidChars, "", $tag);
}

/**
 * Returns the formatted HTML tag, based on options/attributes and with rendered content.
 *
 * @param string $tag Tag name to produce the HTML tag.
 * @param array $params Array of tag attributes and options.
 * @param string $content Enclosed content.
 * @param bool $enclosure If true closes tag like </tag>, otherwise self-close the tag like <tag />. Ignores $content in this case.
 *
 * @return string Formatted tag structure.
 *
 * @since 2.3
 */
function scf_html_tag($tag, $params, $content, $enclosure=true) {
	$ret = '<'.$tag;
	$ret .= params_to_html_atts($params);

	if($enclosure) {
		$ret .= ">";
		$ret .= do_shortcode($content);
		$ret .= '</'.$tag.'>';
	} else {
		$ret .= ' /> ';
	}


	return $ret;
}

/**
 * Returns a formatted string of HTML attributes to use with an HTML tag.
 *
 * @param Array $paramsArray An array of attributes and values. Array must contain key/value pairs.
 * @param Boolean $ignoreEmpty Set to true, to ignore attributes with no value. False to include empty ones too.
 * @param Array $ignoreArray An array containing an ignore list. These attributes will not be included in output.
 *
 * @return string Formatted string of attributes, i.e. id="..." class="..." and etc.
 *
 * @since 2.0
 */
function params_to_html_atts($paramsArray, $ignoreEmpty=true, $ignoreArray=array()) {
	$ret = "";

	if(is_array($paramsArray) && sizeof($paramsArray) > 0) {
		foreach($paramsArray as $item => $value) {
			if(!in_array($item, $ignoreArray)) {
				if(!$ignoreEmpty || !empty($value)) {
					$ret .= " {$item}=\"$value\"";
				}
			}
		}
	}

	return $ret;
}

/**
 * Checks for all items in an array, if they are of the same type.
 * Currently supports STRING and NUMERIC only.
 *
 * @param array $haystack An array of items to go through
 * @param string $checkType Type to verify each item against. STRING or NUMERIC.
 *
 * @return bool True on success, False on failure
 *
 * @since 2.2
 */
function is_of_same_type($haystack=array(), $checkType='STRING') {
	$isOk = true;
	$checkTypes = array('STRING', 'NUMERIC');

	if(!in_array($checkType, $checkTypes)) {
		return false;
	}

	for($i=0; $i<sizeof($haystack); $i++) {
		$tmp = trim($haystack[$i]);

		if('STRING'==$checkType && !empty($tmp) && is_numeric($tmp)) {
			return false;
		}

		if('NUMERIC'==$checkType && !empty($tmp)  && !is_numeric($tmp)) {
			return false;
		}
	}

	return $isOk;
}

/**
 * Returns the countries/US states list based on selected options.
 *
 * @param Array $params An array of attributes and options.
 * @param String $output Output type (SELECT box, Ordered/Unordered List or Raw).
 * @param String $format Output format identifier.
 * @param String $template In case of raw output.
 * @param String $caller Identifier to decide which short code is using this function as callback.
 *
 * @return string Formatted list of countries/US States.
 *
 * @since 2.3
 * @see /data/countries.txt
 * @see /data/states-us.txt
 *
 */
function scf_countries($params, $output, $format, $template, $caller) {
	$file = ($caller=='countries')?'countries.txt':'states-us.txt';
	$data = SCF_DATA.'/'.$file;
	$ret = '';

	if($buffer = file($data, FILE_IGNORE_NEW_LINES)) {
		$countries = separate_iso_country($buffer);
		$tag_open = '';
		$tag_close = '';
		$content = '';

		foreach ($countries as $iso => $country) {
			if('select' == $output) {
				$tag_open = '<select id="'.$params['id'].'" name="'.$params['id'].'" class="'.$params['class'].'">';
				$tag_close = '</select>';

				switch($format) {
					case 'dd-iso-name':
						$content .= '<option value="'.$iso.'">'.$country.'</option>';
						break;

					case 'dd-name-name':
						$content .= '<option value="'.$country.'">'.$country.'</option>';
						break;

					case 'dd-iso-iso':
						$content .= '<option value="'.$iso.'">'.$iso.'</option>';
						break;

					case 'dd-name-iso':
						$content .= '<option value="'.$country.'">'.$iso.'</option>';
						break;
				}
			}

			if('ul' == $output || 'ol' == $output) {
				$tag_open = '<'.$output.' id="'.$params['id'].'" class="'.$params['class'].'">';
				$tag_close = '</'.$output.'>';

				switch($format) {
					case 'ul-name':
						$content .= '<li>'.$country.'</li>';
						break;

					case 'ul-name-iso':
						$content .= '<li>'.$country.' ('.$iso.')</li>';
						break;

					case 'ul-iso':
						$content .= '<li>'.$iso.'</li>';
						break;

					case 'ul-iso-name':
						$content .= '<li>'.$iso.' - '.$country.'</li>';
						break;
				}
			}

			if('raw' == $output) {
				$identifiers = array('%%ISO%%', '%%NAME%%');
				$replacement = array($iso, $country);
				$inflated_text = str_replace($identifiers, $replacement, $template);

				switch($format) {
					case 'raw-line':
						$content .= $inflated_text.'<br />';
						break;

					case 'raw-comma':
						$content .= $inflated_text.', ';
						break;
				}
			}
		}

		if('raw' == $output && 'raw-comma' == $format) {
			// Remove unnecessary comma and space from end of the output.
			$content = substr($content, 0, strlen($content) - 2);
		}

		$ret = $tag_open.$content.$tag_close;
	} else {
		return __('Unable to read '.$data.' file. Please make sure the file exists and readable.', 'shortcode-factory');
	}

	return $ret;
}

/**
 * Separates ISO code and Country name and returns a key->value pair based array.
 * Where ISO code is the key, while Country name is the value.
 *
 * @param Array $countries An array of country names and ISO codes in ISO|Country format.
 *
 * @return Array Key/Value paired array of ISO Code -> Country Name
 *
 * @since 2.3
 */
function separate_iso_country($countries) {
	$ret = array();

	foreach ($countries as $country) {
		$sep = explode("|", $country);
		$ret[$sep[0]] = $sep[1];
	}

	return $ret;
}