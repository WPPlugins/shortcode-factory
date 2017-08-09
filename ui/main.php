<div class="<?=SCF_INITIALS?>shortcodes">
	<?php
		if(!empty($shortcodes)) {
			echo $shortcodes;
		}
	?>
</div>


<script type="text/javascript">
	jQuery(document).ready(function($){
		$(".scf_shortcode").on("click", function(e) {
			e.preventDefault();

			var slug = $(this).attr("data-slug");
			var ui = $(this).attr("data-ui");
			//console.log(slug);

			if(ui == 1) {
				var data = {
					action: 'scf_load_shortcode_ui',
					ui: slug,
					screen_id: scf_ajax.screen_id
				};

				scf_load_ui(data);
				//console.log("data:" + $.param(data));
			} else {
				scf_insert_shortcode(slug);
			}
		});

		// init Isotope
		var $grid = $('.scf_shortcodes').isotope({
			itemSelector: '.scf-grid-item',
			layoutMode: 'fitRows',
			filter: '*'
		});

		// Bind filter buttons
		$('#scf-shortcodes-ui-topbar').each( function( i, buttonGroup ) {
			var $buttonGroup = $( buttonGroup );
			$buttonGroup.on( 'click', 'button', function() {
				$buttonGroup.find('.is-checked').removeClass('is-checked');
				$( this ).addClass('is-checked');

				var filterValue = $(this).attr('data-filter');
				$grid.isotope({ filter: filterValue });
			});
		});

		// use value of search field to filter
		var $quicksearch = $('#scf-shortcodes-ui-search').on('keyup', function() {
			var search_text = $quicksearch.val();

			if(search_text) {
				var qsRegex = new RegExp( search_text, 'gi' );

				$grid.isotope({
					filter: function() {
						return qsRegex ? $(this).text().match( qsRegex ) : true;
					}
				});
			} else {
				$grid.isotope({filter: '*'});
			}
		});

		$(document).bind('cbox_complete', function(){
			$grid.isotope();
		});
	});
</script>
