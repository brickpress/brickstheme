jQuery(document).ready(function()
{
	jQuery('#bricks_menu a').click(function(){
		jQuery('#bricks_menu a').removeClass('nav-tab-active');
		jQuery(this).addClass('nav-tab-active');
		
		jQuery('.settings-section').css('display', 'none');
		jQuery(jQuery(this).attr('href')).css('display', 'block')
		jQuery(this).tabs({ fx: { opacity: "toggle",duration: "fast" } });
		jQuery('#current_tab').attr('href', 'value');
		
		return false;
	});
	
	jQuery('.settings-section').css('display', 'none');
	
	if(self.document.location.hash == '')
	{
		jQuery('#bricks_menu_general_a').click();
	}
	else
	{
		jQuery(self.document.location.hash+'_a').trigger('click');
	}
	
	jQuery('.updated-fade').fadeOut(2000, function() {
		var options = { to: { width: 0, height: 0 } };
			jQuery(this).hide('size', options, 2000 );
	});
	
	jQuery("input[type=text], textarea").each(function() {
		if (jQuery(this).val() == jQuery(this).attr("placeholder") || jQuery(this).val() == "")
			jQuery(this).css("color", "#999");
	});
	
	jQuery("input[type=text], textarea").focus(function() {
		if (jQuery(this).val() == jQuery(this).attr("placeholder") || jQuery(this).val() == "") {
			jQuery(this).val("");
			jQuery(this).css("color", "#000");
		}
	}).blur(function() {
		if (jQuery(this).val() == "" || jQuery(this).val() == jQuery(this).attr("placeholder")) {
			jQuery(this).val(jQuery(this).attr("placeholder"));
			jQuery(this).css("color", "#999");
		}
	});
	
	jQuery('.iphone_checkboxes').iphoneStyle({
		checkedLabel: 'YES',
		uncheckedLabel: 'NO'
	});
	
	jQuery('div#cc_js_required input[type=checkbox]').each(function() {
		jQuery(this).addClass('cc_checkboxes');
	});
});

// ColorPicker UI
jQuery(document).ready(function(){ 

	jQuery('input.pick-color').each(function()
	{	
		var inputID = jQuery(this).attr('id');
		var selectedID = jQuery(this).parents('div.controller_wrap').attr('id');
		
		jQuery(this).ColorPicker({
			color: jQuery(this).attr('value'),
			onShow: function (colpkr) {
				jQuery(colpkr).fadeIn(500);
				return false;
			},
			onHide: function (colpkr) {
				jQuery(colpkr).fadeOut(500);
				return false;
			},
			onChange: function (hsb, hex, rgb, el) {
				jQuery('#'+inputID).val('#' + hex);
				jQuery('#'+inputID+'_bg').css('backgroundColor', '#' + hex);
				if(selectedID) {
					jQuery('div#'+selectedID+' div.text-sample').css('color', '#' + hex);
				}
			}
		});	
		//jQuery(this).css('visibility', 'hidden');
	});	
});


// Controls for image upload interface
jQuery(document).ready(function() {

	jQuery('input.uploadimg').each(function() {
		
		var uploadID = jQuery(this).attr('id');
		
		jQuery(this).click(function() {
			inputField = jQuery('input#'+uploadID+'.uploadimg');
			formfield = jQuery(this).attr('name');
			post_id = jQuery('#post_ID').val();
			tb_show('', 'media-upload.php?TB_iframe=true');
			return false;	
		});
			
		jQuery('input#'+uploadID+'_remove').click(function() {
			jQuery('input#'+uploadID+'.uploadimg').attr('value', '' );
			jQuery('input#'+uploadID+'.uploadimg').attr('placeholder', '' );
			jQuery('div.preview-image img').attr('src', '');
			jQuery('div.preview-image').css('background-image', '');
		});
		
		jQuery('input#'+uploadID+'_reset').click(function() {
			stdVal = jQuery('input[name='+uploadID+'].std-image').attr('value');
			jQuery('input#'+uploadID+'.uploadimg').attr('value', stdVal );
			jQuery('div.preview-image img').attr('src', stdVal);
			jQuery('div.preview-image').css('background-image', 'url('+stdVal+')');
		});
		
		window.send_to_editor = function(html) {
			imgurl = jQuery('img', html).attr('src');
			jQuery(inputField).val(imgurl);
			jQuery('div.preview-image').css('background-image', 'url('+imgurl+')');
			jQuery('div.preview-image img').attr('src', imgurl);
			tb_remove();
		};
	});
});

		 
// Font Family Sample Controller

jQuery(document).ready(function() {
		
    jQuery('select.font-face').change(function() {

		var selectedID = jQuery(this).parents('div.controller_wrap').attr('id');
		
		jQuery('div#'+selectedID+' select.font-face option:selected').each(function () {
			fontFamily = jQuery(this).text();
			//fontOpacity = jQuery('div#'+selectedID+' input.jslider').attr('value');
		});
		jQuery('div#'+selectedID+' div.text-sample').css('font-family', fontFamily);
		jQuery('div#'+selectedID+' input.font-face').attr('value', fontFamily);
		//jQuery('div#'+selectedID+' div.text-sample').css('opacity', fontOpacity);
	})
	.change()
});

		
// Radio Image Highlight checked option
jQuery(document).ready(function() {
		
    jQuery('input.radio-image').change(function() {
		
		var selectedID = jQuery(this).attr('value');
		var optionID = jQuery(this).parents('div.radio-image').attr('id');
		
		jQuery('div#'+optionID+'.radio-image label#'+selectedID).each(function () {
			checkedOption = jQuery('div#'+optionID+'.radio-image input:checked').attr('value');
			//alert(checkedOption);	
		});
		jQuery('div#'+optionID+'.radio-image span.overlay').css('backgroundColor', '#ccc');
		jQuery('div#'+optionID+'.radio-image span#'+checkedOption).css('backgroundColor', '#86B5D9');
		
		var checkedVal = jQuery('input#'+checkedOption+'.default-color').attr('value');
		jQuery('input.color-picker').attr('value', checkedVal);
	}) 
	.change()
});


// Radio Image Highlight checked option
jQuery(document).ready(function() {
		
    jQuery('input.radio-button').change(function() {
		
		var selectedID = jQuery(this).attr('value');
		var optionID = jQuery(this).parents('div.radio-button').attr('id');
		
		jQuery('div#'+optionID+'.radio-button label#'+selectedID).each(function () {
			checkedOption = jQuery('div#'+optionID+'.radio-button input:checked').attr('value');
			//alert(checkedOption);	
		});
		jQuery('div#'+optionID+'.radio-button span.radio-button').css({ backgroundColor: '#EEF6FD', color: '#4B6E9E', border: '1px solid #A6C9E2' });
		jQuery('div#'+optionID+'.radio-button span#'+checkedOption).css({ backgroundColor: '#F6F9F9', color: '#E17009', border: '1px solid #79B8E5' });
	}) 
	.change()
});


// Toggle Sections Menu
jQuery(document).ready(function() {

	jQuery('input#collapse-menu-button').click(function() {
		
		jQuery('.default-state').switchClass('default-state','collapsed',300);
		jQuery('div#admin-page-header').addClass('.default-state');
		
		jQuery('div.section-nav-text').fadeOut(200, function() {
			var options1 = { to: { width: 0, height: 25 } };
			jQuery('#toggle-sections div.toggle-section-text').hide('size', options1, 200 );
		});
		
		jQuery('.collapsed').switchClass('collapsed','default-state',300);
		
		jQuery('div.section-nav-text').fadeIn(200, function() {
			var options = { to: { width: 100, height: 25 } };		
			jQuery('#toggle-sections  div.toggle-section-text').show('size', options, 200 );
		});
		
		return false;
	});
});


// Controls for image upload interface
jQuery(document).ready(function() {

	jQuery('input.constant').each(function() {
		
		var textField = jQuery(this).attr('id');
			
		jQuery('input#'+textField+'_remove').click(function() {
			jQuery('input#'+textField+'.constant').attr('value', ' ' );
			jQuery('input#'+textField+'.constant').attr('placeholder', ' ' );
		});
	});
});