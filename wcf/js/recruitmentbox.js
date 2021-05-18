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
				if((document.getElementById("recruitback").style.backgroundImage).includes('horde_logo') == true){ var fraction = "horde"};
				if((document.getElementById("recruitback").style.backgroundImage).includes('alliance_logo') == true){ var fraction = "alliance"};

				if(document.documentElement.lang == "de"){ 
					var text1 = 'Das Recruitement ist ge&oumlffnet.<br>Bewirb dich jetzt!';
					var text2 = 'Anzahl der offenen Pl&aumltze: ';
					var text3 = 'Das Recruitement f&uumlr diesen Spec ist derzeit geschlossen.';}
				else if(document.documentElement.lang == "en"){ 
					var text1 = 'The recruitment is open.<br>Apply now!';
					var text2 = 'Free Slots for Class: ';
					var text3 = 'The recruitment for this specialization is closed.';}
				else if(document.documentElement.lang == "ru"){ 
					var text1 = 'Набор открыт.<br>Присоедениться!';
					var text2 = 'Кол-во свободных мест на класс: ';
					var text3 = 'Набор персонажей данной специализации закрыт.';}	
				// To Add a Language just add another else if with language shortcut 	
					
								
				// Hover over code
				var id = jQuery(this).parent().attr('id');
				var className = jQuery(this).siblings(".className").text();
				var classIcon = '<div class="specToolTipIcon ' + fraction + '"><img src=' + jQuery(this).siblings(".classIcon").children('img:first').attr('src') + '></div>';
				var specIcon = '<div class="specToolTipIcon ' + fraction +'"><img src=' + jQuery(this).children('img:first').attr('src')+ '></div>';
				var content = '<div class="specToolTipHead" id="' + id + '">' + jQuery(this).attr('title') + ' - ' + className + '</div>';
				content = content + specIcon + classIcon;
				if (jQuery(this).children('.classSpecOverlay').attr('id') == 'active')
				{
					content = content + '<div class="specToolTipDesc" id="text_active">' + text1 + '</div>';
					content = content + '<div class="specToolTipSlots" id="text_slots">' + text2 + '';
					content = content + jQuery(this).children('.classSpecCounter').html() + '</div>';
				}
				else
				{
					content = content + '<div class="specToolTipDesc" id="text_inactive">' + text3 + '</div>';	
				}
				jQuery('<div class="specToolTip ' + fraction +'"></div>').html(content).appendTo('body').fadeIn('fast');
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