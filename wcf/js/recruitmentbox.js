jQuery(document).ready
(
	function()
	{
		jQuery('.classType .classSpec .classSpecCounter').each
		(
			function()
			{
				if (jQuery(this).html() == '' || jQuery(this).html() == '0')
				{
					jQuery(this).siblings('.classSpecOverlay').attr('id', 'inactive');
				}
				else
				{
					jQuery(this).siblings('.classSpecOverlay').attr('id', 'active');
				}
			}
		);

		// Tooltip only Text
		jQuery('.classSpec').hover
		(
			function()
			{
				if((document.getElementById("recruitback").style.backgroundImage).includes('horde_logo') == true){
				// Hover over code
				var id = jQuery(this).parent().attr('id');
				var className = jQuery(this).siblings(".className").text();
				var classIcon = '<div class="specToolTipIcon horde"><img src=' + jQuery(this).siblings(".classIcon").children('img:first').attr('src') + '></div>';
				var specIcon = '<div class="specToolTipIcon horde"><img src=' + jQuery(this).children('img:first').attr('src')+ '></div>';
				var content = '<div class="specToolTipHead" id="' + id + '">' + jQuery(this).attr('title') + ' ' + className + '</div>';
				content = content + specIcon + classIcon;
				if (jQuery(this).children('.classSpecOverlay').attr('id') == 'active')
				{
					if(document.documentElement.lang == "de"){
					content = content + '<div class="specToolTipDesc" id="text_active">Das Recruitement ist ge&oumlffnet.<br>Bewirb dich jetzt!</div>';
					content = content + '<div class="specToolTipSlots" id="text_slots">Anzahl der offenen Pl&aumltze: ';
					content = content + jQuery(this).children('.classSpecCounter').html() + '</div>';
					}
					else if(document.documentElement.lang == "en"){
					content = content + '<div class="specToolTipDesc" id="text_active">The recruitment is open.<br>Apply now!</div>';
					content = content + '<div class="specToolTipSlots" id="text_slots">Free Slots for Class: ';
					content = content + jQuery(this).children('.classSpecCounter').html() + '</div>';
					}
					else{
					content = content + '<div class="specToolTipDesc" id="text_active">The recruitment is open.<br>Apply now!</div>';
					content = content + '<div class="specToolTipSlots" id="text_slots">Free Slots for Class: ';
					content = content + jQuery(this).children('.classSpecCounter').html() + '</div>';
					}
				}
				else
				{
					if(document.documentElement.lang == "de"){
					content = content + '<div class="specToolTipDesc" id="text_inactive">Das Recruitement f&uumlr diesen Spec ist derzeit geschlossen.</div>';
					}
					else if(document.documentElement.lang == "en"){
					content = content + '<div class="specToolTipDesc" id="text_inactive">The recruitment for this specialization is closed.</div>';
					}
					else{
					content = content + '<div class="specToolTipDesc" id="text_inactive">The recruitment for this specialization is closed.</div>';
					}	
				}
				jQuery('<div class="specToolTip horde"></div>').html(content).appendTo('body').fadeIn('fast');



				}
				if((document.getElementById("recruitback").style.backgroundImage).includes('alliance_logo') == true){

				
				// Hover over code
				var id = jQuery(this).parent().attr('id');
				var className = jQuery(this).siblings(".className").text();
				var classIcon = '<div class="specToolTipIcon alliance"><img src=' + jQuery(this).siblings(".classIcon").children('img:first').attr('src') + '></div>';
				var specIcon = '<div class="specToolTipIcon alliance"><img src=' + jQuery(this).children('img:first').attr('src')+ '></div>';
				var content = '<div class="specToolTipHead" id="' + id + '">' + jQuery(this).attr('title') + ' ' + className + '</div>';
				content = content + specIcon + classIcon;
				if (jQuery(this).children('.classSpecOverlay').attr('id') == 'active')
				{
					if(document.documentElement.lang == "de"){
					content = content + '<div class="specToolTipDesc" id="text_active">Das Recruitement ist ge&oumlffnet.<br>Bewirb dich jetzt!</div>';
					content = content + '<div class="specToolTipSlots" id="text_slots">Anzahl der offenen Pl&aumltze: ';
					content = content + jQuery(this).children('.classSpecCounter').html() + '</div>';
					}
					else if(document.documentElement.lang == "en"){
					content = content + '<div class="specToolTipDesc" id="text_active">The recruitment is open.<br>Apply now!</div>';
					content = content + '<div class="specToolTipSlots" id="text_slots">Free Slots for Class: ';
					content = content + jQuery(this).children('.classSpecCounter').html() + '</div>';
					}
					else{
					content = content + '<div class="specToolTipDesc" id="text_active">The recruitment is open.<br>Apply now!</div>';
					content = content + '<div class="specToolTipSlots" id="text_slots">Free Slots for Class: ';
					content = content + jQuery(this).children('.classSpecCounter').html() + '</div>';
					}
				}
				else
				{
					if(document.documentElement.lang == "de"){
					content = content + '<div class="specToolTipDesc" id="text_inactive">Das Recruitement f&uumlr diesen Spec ist derzeit geschlossen.</div>';
					}
					else if(document.documentElement.lang == "en"){
					content = content + '<div class="specToolTipDesc" id="text_inactive">The recruitment for this specialization is closed.</div>';
					}
					else{
					content = content + '<div class="specToolTipDesc" id="text_inactive">The recruitment for this specialization is closed.</div>';
					}	
				}
				jQuery('<div class="specToolTip alliance"></div>').html(content).appendTo('body').fadeIn('fast');

				}


			},
			function()
			{
				// Hover out code
				jQuery('.specToolTip').remove();
			}
		)
		.mousemove
		(
			function(e)
			{
				var mousex = e.pageX - 280; //Get X coordinates
				var mousey = e.pageY + 10; //Get Y coordinates
				jQuery('.specToolTip').css({ top: mousey, left: mousex })
			}
		);
	}
);
