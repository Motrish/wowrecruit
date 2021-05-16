<?php
/*	Project:			EQdkp-Plus
 *	Package:			wow recruit Module - Portal
 *
 *	Copyright (C) 2021 Motrish & Mothman from Blackmoore-EU
 *
 * Guide for more Classes:
 * 
 * Add in the public function get_settings($state)  -> $settings 
 * three Extra Elements and increase the "ClassXX" by 1
 * As an Example Deathknight is already there as comment.
 *  
 * Copy paste a part of the HTML Code and Enter it directly unter it (Example: <!-- Warrior --> .......to..... <!-- Warrior END -->)
 * 
 * Add some Images with 60x60 into portal/wowtbcrecruit/wcf/images/recruitment/ and name it like "class_warrior.png" or "warrior_spec_2.png"
 * 
 * Uncomment /Add lines in the language File (Example in: "portal/wowtbcrecruit/language/english.php")
 * 
 * 
 */

if ( !defined('EQDKP_INC') ){
	header('HTTP/1.0 404 Not Found');exit;
	header ('Content-Length:'. Filesize($cache_file));
}

class wowtbcrecruit_portal extends portal_generic {

	protected static $path		= 'wowtbcrecruit';
	protected static $data		= array(
		'name'			=> 'WoW TBC Recruit',
		'version'		=> '1.0',
		'author'		=> 'Motrish',
		'icon'			=> 'fa-code',
		'contact'		=> 'nehmer.michael@gmx.de',
		'description'	=> 'Shows the actual recruit of the wow Raid',
		'multiple'		=> false,
		'lang_prefix'	=> 'wowtbcrecruit_'
	);

	protected static $positions = array( 'left1', 'left2', 'right');
	public function get_settings($state){
		$settings	= array(


		#Fraction
		'Fraction'	=> array(
			'type'		=> 'radio',
			'class'		=> 'js_reload',
			'options'	=> array(
				'recruit_Alliance'	=> $this->user->lang('recruit_Alliance'),
				'recruit_Horde'	=> $this->user->lang('recruit_Horde'),

			),
		),

			
		#Druid1
			'Class1'	=> array(
				'type'		=> 'dropdown',
				'class'		=> 'js_reload',
				'options'	=> array(
					'recruit_0'	=> $this->user->lang('recruit_0'),
					'recruit_1'	=> $this->user->lang('recruit_1'),
					'recruit_2'	=> $this->user->lang('recruit_2'),
					'recruit_3'	=> $this->user->lang('recruit_3'),
					'recruit_4'	=> $this->user->lang('recruit_4'),
				),
			),
		#Druid2
			'Class2'	=> array(
				'type'		=> 'dropdown',
				'class'		=> 'js_reload',
				'options'	=> array(
					'recruit_0'	=> $this->user->lang('recruit_0'),
					'recruit_1'	=> $this->user->lang('recruit_1'),
					'recruit_2'	=> $this->user->lang('recruit_2'),
					'recruit_3'	=> $this->user->lang('recruit_3'),
					'recruit_4'	=> $this->user->lang('recruit_4'),	
				),
			),
		#Druid3
			'Class3'	=> array(
				'type'		=> 'dropdown',
				'class'		=> 'js_reload',
				'options'	=> array(
					'recruit_0'	=> $this->user->lang('recruit_0'),
					'recruit_1'	=> $this->user->lang('recruit_1'),
					'recruit_2'	=> $this->user->lang('recruit_2'),
					'recruit_3'	=> $this->user->lang('recruit_3'),
					'recruit_4'	=> $this->user->lang('recruit_4'),	
				),
			),	
		#Druid4
		'Class4'	=> array(
			'type'		=> 'dropdown',
			'class'		=> 'js_reload',
			'options'	=> array(
				'recruit_0'	=> $this->user->lang('recruit_0'),
				'recruit_1'	=> $this->user->lang('recruit_1'),
				'recruit_2'	=> $this->user->lang('recruit_2'),
				'recruit_3'	=> $this->user->lang('recruit_3'),
				'recruit_4'	=> $this->user->lang('recruit_4'),	
			),
		),									
		#Hunter1
			'Class5'	=> array(
				'type'		=> 'dropdown',
				'class'		=> 'js_reload',			
				'options'	=> array(
					'recruit_0'	=> $this->user->lang('recruit_0'),
					'recruit_1'	=> $this->user->lang('recruit_1'),
					'recruit_2'	=> $this->user->lang('recruit_2'),
					'recruit_3'	=> $this->user->lang('recruit_3'),
					'recruit_4'	=> $this->user->lang('recruit_4'),
				),
			),				
		#Hunter2
			'Class6'	=> array(
				'type'		=> 'dropdown',	
				'class'		=> 'js_reload',			
				'options'	=> array(
					'recruit_0'	=> $this->user->lang('recruit_0'),
					'recruit_1'	=> $this->user->lang('recruit_1'),
					'recruit_2'	=> $this->user->lang('recruit_2'),
					'recruit_3'	=> $this->user->lang('recruit_3'),
					'recruit_4'	=> $this->user->lang('recruit_4'),
				),
			),
		#Hunter3
			'Class7'	=> array(
				'type'		=> 'dropdown',		
				'class'		=> 'js_reload',
				'options'	=> array(
					'recruit_0'	=> $this->user->lang('recruit_0'),
					'recruit_1'	=> $this->user->lang('recruit_1'),
					'recruit_2'	=> $this->user->lang('recruit_2'),
					'recruit_3'	=> $this->user->lang('recruit_3'),
					'recruit_4'	=> $this->user->lang('recruit_4'),
				),
			),
		#Mage1
			'Class8'	=> array(
				'type'		=> 'dropdown',	
				'class'		=> 'js_reload',			
				'options'	=> array(
					'recruit_0'	=> $this->user->lang('recruit_0'),
					'recruit_1'	=> $this->user->lang('recruit_1'),
					'recruit_2'	=> $this->user->lang('recruit_2'),
					'recruit_3'	=> $this->user->lang('recruit_3'),
					'recruit_4'	=> $this->user->lang('recruit_4'),
				),
			),
		#Mage2
			'Class9'	=> array(
				'type'		=> 'dropdown',	
				'class'		=> 'js_reload',			
				'options'	=> array(
					'recruit_0'	=> $this->user->lang('recruit_0'),
					'recruit_1'	=> $this->user->lang('recruit_1'),
					'recruit_2'	=> $this->user->lang('recruit_2'),
					'recruit_3'	=> $this->user->lang('recruit_3'),
					'recruit_4'	=> $this->user->lang('recruit_4'),
				),
			),
		#Mage3
			'Class10'	=> array(
				'type'		=> 'dropdown',	
				'class'		=> 'js_reload',			
				'options'	=> array(
					'recruit_0'	=> $this->user->lang('recruit_0'),
					'recruit_1'	=> $this->user->lang('recruit_1'),
					'recruit_2'	=> $this->user->lang('recruit_2'),
					'recruit_3'	=> $this->user->lang('recruit_3'),
					'recruit_4'	=> $this->user->lang('recruit_4'),
				),
			),	
		#Paladin1
			'Class11'	=> array(
				'type'		=> 'dropdown',	
				'class'		=> 'js_reload',			
				'options'	=> array(
					'recruit_0'	=> $this->user->lang('recruit_0'),
					'recruit_1'	=> $this->user->lang('recruit_1'),
					'recruit_2'	=> $this->user->lang('recruit_2'),
					'recruit_3'	=> $this->user->lang('recruit_3'),
					'recruit_4'	=> $this->user->lang('recruit_4'),
				),
			),
		#Paladin2
			'Class12'	=> array(
				'type'		=> 'dropdown',	
				'class'		=> 'js_reload',			
				'options'	=> array(
					'recruit_0'	=> $this->user->lang('recruit_0'),
					'recruit_1'	=> $this->user->lang('recruit_1'),
					'recruit_2'	=> $this->user->lang('recruit_2'),
					'recruit_3'	=> $this->user->lang('recruit_3'),
					'recruit_4'	=> $this->user->lang('recruit_4'),
				),
			),
		#Paladin3
			'Class13'	=> array(
				'type'		=> 'dropdown',
				'class'		=> 'js_reload',			
				'options'	=> array(
					'recruit_0'	=> $this->user->lang('recruit_0'),
					'recruit_1'	=> $this->user->lang('recruit_1'),
					'recruit_2'	=> $this->user->lang('recruit_2'),
					'recruit_3'	=> $this->user->lang('recruit_3'),
					'recruit_4'	=> $this->user->lang('recruit_4'),
				),
			),				
		#Priest1
			'Class14'	=> array(
				'type'		=> 'dropdown',	
				'class'		=> 'js_reload',			
				'options'	=> array(
					'recruit_0'	=> $this->user->lang('recruit_0'),
					'recruit_1'	=> $this->user->lang('recruit_1'),
					'recruit_2'	=> $this->user->lang('recruit_2'),
					'recruit_3'	=> $this->user->lang('recruit_3'),
					'recruit_4'	=> $this->user->lang('recruit_4'),

				),
			),
		#Priest2
			'Class15'	=> array(
				'type'		=> 'dropdown',		
				'class'		=> 'js_reload',
				'options'	=> array(
					'recruit_0'	=> $this->user->lang('recruit_0'),
					'recruit_1'	=> $this->user->lang('recruit_1'),
					'recruit_2'	=> $this->user->lang('recruit_2'),
					'recruit_3'	=> $this->user->lang('recruit_3'),
					'recruit_4'	=> $this->user->lang('recruit_4'),
				),
			),
		#Priest3
			'Class16'	=> array(
				'type'		=> 'dropdown',	
				'class'		=> 'js_reload',			
				'options'	=> array(
					'recruit_0'	=> $this->user->lang('recruit_0'),
					'recruit_1'	=> $this->user->lang('recruit_1'),
					'recruit_2'	=> $this->user->lang('recruit_2'),
					'recruit_3'	=> $this->user->lang('recruit_3'),
					'recruit_4'	=> $this->user->lang('recruit_4'),
				),
			),
		#Shaman1
			'Class17'	=> array(
				'type'		=> 'dropdown',	
				'class'		=> 'js_reload',			
				'options'	=> array(
					'recruit_0'	=> $this->user->lang('recruit_0'),
					'recruit_1'	=> $this->user->lang('recruit_1'),
					'recruit_2'	=> $this->user->lang('recruit_2'),
					'recruit_3'	=> $this->user->lang('recruit_3'),
					'recruit_4'	=> $this->user->lang('recruit_4'),
				),
			),
		#Shaman2
			'Class18'	=> array(
				'type'		=> 'dropdown',	
				'class'		=> 'js_reload',			
				'options'	=> array(
					'recruit_0'	=> $this->user->lang('recruit_0'),
					'recruit_1'	=> $this->user->lang('recruit_1'),
					'recruit_2'	=> $this->user->lang('recruit_2'),
					'recruit_3'	=> $this->user->lang('recruit_3'),
					'recruit_4'	=> $this->user->lang('recruit_4'),
				),
			),	
		#Shaman3
			'Class19'	=> array(
				'type'		=> 'dropdown',	
				'class'		=> 'js_reload',			
				'options'	=> array(
					'recruit_0'	=> $this->user->lang('recruit_0'),
					'recruit_1'	=> $this->user->lang('recruit_1'),
					'recruit_2'	=> $this->user->lang('recruit_2'),
					'recruit_3'	=> $this->user->lang('recruit_3'),
					'recruit_4'	=> $this->user->lang('recruit_4'),
				),
			),
		#Rogue1
			'Class20'	=> array(
				'type'		=> 'dropdown',	
				'class'		=> 'js_reload',			
				'options'	=> array(
					'recruit_0'	=> $this->user->lang('recruit_0'),
					'recruit_1'	=> $this->user->lang('recruit_1'),
					'recruit_2'	=> $this->user->lang('recruit_2'),
					'recruit_3'	=> $this->user->lang('recruit_3'),
					'recruit_4'	=> $this->user->lang('recruit_4'),
				),
			),	
		#Rogue2
			'Class21'	=> array(
				'type'		=> 'dropdown',
				'class'		=> 'js_reload',			
				'options'	=> array(
					'recruit_0'	=> $this->user->lang('recruit_0'),
					'recruit_1'	=> $this->user->lang('recruit_1'),
					'recruit_2'	=> $this->user->lang('recruit_2'),
					'recruit_3'	=> $this->user->lang('recruit_3'),
					'recruit_4'	=> $this->user->lang('recruit_4'),
				),
			),				
		#Rogue3
			'Class22'	=> array(
				'type'		=> 'dropdown',	
				'class'		=> 'js_reload',			
				'options'	=> array(
					'recruit_0'	=> $this->user->lang('recruit_0'),
					'recruit_1'	=> $this->user->lang('recruit_1'),
					'recruit_2'	=> $this->user->lang('recruit_2'),
					'recruit_3'	=> $this->user->lang('recruit_3'),
					'recruit_4'	=> $this->user->lang('recruit_4'),
				),
			),
		#Warlock1
			'Class23'	=> array(
				'type'		=> 'dropdown',		
				'class'		=> 'js_reload',
				'options'	=> array(
					'recruit_0'	=> $this->user->lang('recruit_0'),
					'recruit_1'	=> $this->user->lang('recruit_1'),
					'recruit_2'	=> $this->user->lang('recruit_2'),
					'recruit_3'	=> $this->user->lang('recruit_3'),
					'recruit_4'	=> $this->user->lang('recruit_4'),
				),
			),
		#Warlock2
			'Class24'	=> array(
				'type'		=> 'dropdown',	
				'class'		=> 'js_reload',			
				'options'	=> array(
					'recruit_0'	=> $this->user->lang('recruit_0'),
					'recruit_1'	=> $this->user->lang('recruit_1'),
					'recruit_2'	=> $this->user->lang('recruit_2'),
					'recruit_3'	=> $this->user->lang('recruit_3'),
					'recruit_4'	=> $this->user->lang('recruit_4'),

				),
			),
		#Warlock3
			'Class25'	=> array(
				'type'		=> 'dropdown',	
				'class'		=> 'js_reload',			
				'options'	=> array(
					'recruit_0'	=> $this->user->lang('recruit_0'),
					'recruit_1'	=> $this->user->lang('recruit_1'),
					'recruit_2'	=> $this->user->lang('recruit_2'),
					'recruit_3'	=> $this->user->lang('recruit_3'),
					'recruit_4'	=> $this->user->lang('recruit_4'),
				),
			),
		#Warrior1
			'Class26'	=> array(
				'type'		=> 'dropdown',	
				'class'		=> 'js_reload',			
				'options'	=> array(
					'recruit_0'	=> $this->user->lang('recruit_0'),
					'recruit_1'	=> $this->user->lang('recruit_1'),
					'recruit_2'	=> $this->user->lang('recruit_2'),
					'recruit_3'	=> $this->user->lang('recruit_3'),
					'recruit_4'	=> $this->user->lang('recruit_4'),
				),
			),	
		#Warrior2
			'Class27'	=> array(
				'type'		=> 'dropdown',	
				'class'		=> 'js_reload',			
				'options'	=> array(
					'recruit_0'	=> $this->user->lang('recruit_0'),
					'recruit_1'	=> $this->user->lang('recruit_1'),
					'recruit_2'	=> $this->user->lang('recruit_2'),
					'recruit_3'	=> $this->user->lang('recruit_3'),
					'recruit_4'	=> $this->user->lang('recruit_4'),
				),
			),
		#Warrior3
			'Class28'	=> array(
				'type'		=> 'dropdown',	
				'class'		=> 'js_reload',			
				'options'	=> array(
					'recruit_0'	=> $this->user->lang('recruit_0'),
					'recruit_1'	=> $this->user->lang('recruit_1'),
					'recruit_2'	=> $this->user->lang('recruit_2'),
					'recruit_3'	=> $this->user->lang('recruit_3'),
					'recruit_4'	=> $this->user->lang('recruit_4'),

				),
				),

#		#Death-Knight1
#			'Class30'	=> array(
#				'type'		=> 'dropdown',	
#				'class'		=> 'js_reload',			
#				'options'	=> array(
#					'recruit_0'	=> $this->user->lang('recruit_0'),
#					'recruit_1'	=> $this->user->lang('recruit_1'),
#					'recruit_2'	=> $this->user->lang('recruit_2'),
#					'recruit_3'	=> $this->user->lang('recruit_3'),
#					'recruit_4'	=> $this->user->lang('recruit_4'),#
#
#				),
#				),
#		#Death-Knight2
#			'Class31'	=> array(
#				'type'		=> 'dropdown',	
#				'class'		=> 'js_reload',			
#				'options'	=> array(
#					'recruit_0'	=> $this->user->lang('recruit_0'),
#					'recruit_1'	=> $this->user->lang('recruit_1'),
#					'recruit_2'	=> $this->user->lang('recruit_2'),
#					'recruit_3'	=> $this->user->lang('recruit_3'),
#					'recruit_4'	=> $this->user->lang('recruit_4'),
#
#				),
#				),
#		#Death-Knight3
#		'Class32'	=> array(
#			'type'		=> 'dropdown',	
#			'class'		=> 'js_reload',			
#			'options'	=> array(
#				'recruit_0'	=> $this->user->lang('recruit_0'),
#				'recruit_1'	=> $this->user->lang('recruit_1'),
#				'recruit_2'	=> $this->user->lang('recruit_2'),
#				'recruit_3'	=> $this->user->lang('recruit_3'),
#				'recruit_4'	=> $this->user->lang('recruit_4'),

#			),
#			),

#For More Classes uncomment the Example and add more
								

				);
		
		return $settings;
	}
	protected static $install	= array(
		'autoenable'		=> '0',
		'defaultposition'	=> 'left',
		'defaultnumber'		=> '8',
	);
	
	protected static $apiLevel = 20;

	public function output() {


#For "1" More Class just uncomment 3 Rows. (Demonhunter 2)



		
		if($this->config('Class1') == 'recruit_0'){$Down1=0;}	
		if($this->config('Class2') == 'recruit_0'){$Down2=0;}
		if($this->config('Class3') == 'recruit_0'){$Down3=0;}
		if($this->config('Class4') == 'recruit_0'){$Down4=0;}
		if($this->config('Class5') == 'recruit_0'){$Down5=0;}
		if($this->config('Class6') == 'recruit_0'){$Down6=0;}
		if($this->config('Class7') == 'recruit_0'){$Down7=0;}
		if($this->config('Class8') == 'recruit_0'){$Down8=0;}
		if($this->config('Class9') == 'recruit_0'){$Down9=0;}
		if($this->config('Class10') == 'recruit_0'){$Down10=0;}
		if($this->config('Class11') == 'recruit_0'){$Down11=0;}
		if($this->config('Class12') == 'recruit_0'){$Down12=0;}
		if($this->config('Class13') == 'recruit_0'){$Down13=0;}
		if($this->config('Class14') == 'recruit_0'){$Down14=0;}
		if($this->config('Class15') == 'recruit_0'){$Down15=0;}
		if($this->config('Class16') == 'recruit_0'){$Down16=0;}
		if($this->config('Class17') == 'recruit_0'){$Down17=0;}
		if($this->config('Class18') == 'recruit_0'){$Down18=0;}
		if($this->config('Class19') == 'recruit_0'){$Down19=0;}
		if($this->config('Class20') == 'recruit_0'){$Down20=0;}
		if($this->config('Class21') == 'recruit_0'){$Down21=0;}
		if($this->config('Class22') == 'recruit_0'){$Down22=0;}
		if($this->config('Class23') == 'recruit_0'){$Down23=0;}
		if($this->config('Class24') == 'recruit_0'){$Down24=0;}
		if($this->config('Class25') == 'recruit_0'){$Down25=0;}
		if($this->config('Class26') == 'recruit_0'){$Down26=0;}
		if($this->config('Class27') == 'recruit_0'){$Down27=0;}
		if($this->config('Class28') == 'recruit_0'){$Down28=0;}
		#if($this->config('Class29') == 'recruit_0'){$Down19=0;}
		#if($this->config('Class30') == 'recruit_0'){$Down20=0;}
		#if($this->config('Class31') == 'recruit_0'){$Down21=0;}
		#if($this->config('Class32') == 'recruit_0'){$Down22=0;}
		#if($this->config('Class33') == 'recruit_0'){$Down23=0;}
		#if($this->config('Class34') == 'recruit_0'){$Down24=0;}
		#if($this->config('Class35') == 'recruit_0'){$Down25=0;}
		#if($this->config('Class36') == 'recruit_0'){$Down26=0;}
		#if($this->config('Class37') == 'recruit_0'){$Down27=0;}
		#if($this->config('Class38') == 'recruit_0'){$Down28=0;}		
		#if($this->config('Class39') == 'recruit_0'){$Down19=0;}
		#if($this->config('Class40') == 'recruit_0'){$Down20=0;}
		#if($this->config('Class41') == 'recruit_0'){$Down21=0;}
		#if($this->config('Class42') == 'recruit_0'){$Down22=0;}
		#if($this->config('Class43') == 'recruit_0'){$Down23=0;}
		#if($this->config('Class44') == 'recruit_0'){$Down24=0;}
		#if($this->config('Class45') == 'recruit_0'){$Down25=0;}
		#if($this->config('Class46') == 'recruit_0'){$Down26=0;}
		#if($this->config('Class47') == 'recruit_0'){$Down27=0;}
		#if($this->config('Class48') == 'recruit_0'){$Down28=0;}

		if($this->config('Class1') == 'recruit_1'){$Down1=1;}	
		if($this->config('Class2') == 'recruit_1'){$Down2=1;}
		if($this->config('Class3') == 'recruit_1'){$Down3=1;}
		if($this->config('Class4') == 'recruit_1'){$Down4=1;}
		if($this->config('Class5') == 'recruit_1'){$Down5=1;}
		if($this->config('Class6') == 'recruit_1'){$Down6=1;}
		if($this->config('Class7') == 'recruit_1'){$Down7=1;}
		if($this->config('Class8') == 'recruit_1'){$Down8=1;}
		if($this->config('Class9') == 'recruit_1'){$Down9=1;}
		if($this->config('Class10') == 'recruit_1'){$Down11=1;}
		if($this->config('Class11') == 'recruit_1'){$Down11=1;}
		if($this->config('Class12') == 'recruit_1'){$Down12=1;}
		if($this->config('Class13') == 'recruit_1'){$Down13=1;}
		if($this->config('Class14') == 'recruit_1'){$Down14=1;}
		if($this->config('Class15') == 'recruit_1'){$Down15=1;}
		if($this->config('Class16') == 'recruit_1'){$Down16=1;}
		if($this->config('Class17') == 'recruit_1'){$Down17=1;}
		if($this->config('Class18') == 'recruit_1'){$Down18=1;}
		if($this->config('Class19') == 'recruit_1'){$Down19=1;}
		if($this->config('Class20') == 'recruit_1'){$Down21=1;}
		if($this->config('Class21') == 'recruit_1'){$Down21=1;}
		if($this->config('Class22') == 'recruit_1'){$Down22=1;}
		if($this->config('Class23') == 'recruit_1'){$Down23=1;}
		if($this->config('Class24') == 'recruit_1'){$Down24=1;}
		if($this->config('Class25') == 'recruit_1'){$Down25=1;}
		if($this->config('Class26') == 'recruit_1'){$Down26=1;}
		if($this->config('Class27') == 'recruit_1'){$Down27=1;}
		if($this->config('Class28') == 'recruit_1'){$Down28=1;}
		#if($this->config('Class29') == 'recruit_1'){$Down19=1;}
		#if($this->config('Class30') == 'recruit_1'){$Down20=1;}
		#if($this->config('Class31') == 'recruit_1'){$Down21=1;}
		#if($this->config('Class32') == 'recruit_1'){$Down22=1;}
		#if($this->config('Class33') == 'recruit_1'){$Down23=1;}
		#if($this->config('Class34') == 'recruit_1'){$Down24=1;}
		#if($this->config('Class35') == 'recruit_1'){$Down25=1;}
		#if($this->config('Class36') == 'recruit_1'){$Down26=1;}
		#if($this->config('Class37') == 'recruit_1'){$Down27=1;}
		#if($this->config('Class38') == 'recruit_1'){$Down28=1;}		
		#if($this->config('Class39') == 'recruit_1'){$Down19=1;}
		#if($this->config('Class40') == 'recruit_1'){$Down20=1;}
		#if($this->config('Class41') == 'recruit_1'){$Down21=1;}
		#if($this->config('Class42') == 'recruit_1'){$Down22=1;}
		#if($this->config('Class43') == 'recruit_1'){$Down23=1;}
		#if($this->config('Class44') == 'recruit_1'){$Down24=1;}
		#if($this->config('Class45') == 'recruit_1'){$Down25=1;}
		#if($this->config('Class46') == 'recruit_1'){$Down26=1;}
		#if($this->config('Class47') == 'recruit_1'){$Down27=1;}
		#if($this->config('Class48') == 'recruit_1'){$Down28=1;}

		if($this->config('Class1') == 'recruit_2'){$Down1=2;}	
		if($this->config('Class2') == 'recruit_2'){$Down2=2;}
		if($this->config('Class3') == 'recruit_2'){$Down3=2;}
		if($this->config('Class4') == 'recruit_2'){$Down4=2;}
		if($this->config('Class5') == 'recruit_2'){$Down5=2;}
		if($this->config('Class6') == 'recruit_2'){$Down6=2;}
		if($this->config('Class7') == 'recruit_2'){$Down7=2;}
		if($this->config('Class8') == 'recruit_2'){$Down8=2;}
		if($this->config('Class9') == 'recruit_2'){$Down9=2;}
		if($this->config('Class10') == 'recruit_2'){$Down12=2;}
		if($this->config('Class11') == 'recruit_2'){$Down11=2;}
		if($this->config('Class12') == 'recruit_2'){$Down12=2;}
		if($this->config('Class13') == 'recruit_2'){$Down13=2;}
		if($this->config('Class14') == 'recruit_2'){$Down14=2;}
		if($this->config('Class15') == 'recruit_2'){$Down15=2;}
		if($this->config('Class16') == 'recruit_2'){$Down16=2;}
		if($this->config('Class17') == 'recruit_2'){$Down17=2;}
		if($this->config('Class18') == 'recruit_2'){$Down18=2;}
		if($this->config('Class19') == 'recruit_2'){$Down19=2;}
		if($this->config('Class20') == 'recruit_2'){$Down22=2;}
		if($this->config('Class21') == 'recruit_2'){$Down21=2;}
		if($this->config('Class22') == 'recruit_2'){$Down22=2;}
		if($this->config('Class23') == 'recruit_2'){$Down23=2;}
		if($this->config('Class24') == 'recruit_2'){$Down24=2;}
		if($this->config('Class25') == 'recruit_2'){$Down25=2;}
		if($this->config('Class26') == 'recruit_2'){$Down26=2;}
		if($this->config('Class27') == 'recruit_2'){$Down27=2;}
		if($this->config('Class28') == 'recruit_2'){$Down28=2;}
		#if($this->config('Class29') == 'recruit_2'){$Down19=2;}
		#if($this->config('Class30') == 'recruit_2'){$Down20=2;}
		#if($this->config('Class31') == 'recruit_2'){$Down21=2;}
		#if($this->config('Class32') == 'recruit_2'){$Down22=2;}
		#if($this->config('Class33') == 'recruit_2'){$Down23=2;}
		#if($this->config('Class34') == 'recruit_2'){$Down24=2;}
		#if($this->config('Class35') == 'recruit_2'){$Down25=2;}
		#if($this->config('Class36') == 'recruit_2'){$Down26=2;}
		#if($this->config('Class37') == 'recruit_2'){$Down27=2;}
		#if($this->config('Class38') == 'recruit_2'){$Down28=2;}		
		#if($this->config('Class39') == 'recruit_2'){$Down19=2;}
		#if($this->config('Class40') == 'recruit_2'){$Down20=2;}
		#if($this->config('Class41') == 'recruit_2'){$Down21=2;}
		#if($this->config('Class42') == 'recruit_2'){$Down22=2;}
		#if($this->config('Class43') == 'recruit_2'){$Down23=2;}
		#if($this->config('Class44') == 'recruit_2'){$Down24=2;}
		#if($this->config('Class45') == 'recruit_2'){$Down25=2;}
		#if($this->config('Class46') == 'recruit_2'){$Down26=2;}
		#if($this->config('Class47') == 'recruit_2'){$Down27=2;}
		#if($this->config('Class48') == 'recruit_2'){$Down28=2;}

		if($this->config('Class1') == 'recruit_3'){$Down1=3;}	
		if($this->config('Class2') == 'recruit_3'){$Down2=3;}
		if($this->config('Class3') == 'recruit_3'){$Down3=3;}
		if($this->config('Class4') == 'recruit_3'){$Down4=3;}
		if($this->config('Class5') == 'recruit_3'){$Down5=3;}
		if($this->config('Class6') == 'recruit_3'){$Down6=3;}
		if($this->config('Class7') == 'recruit_3'){$Down7=3;}
		if($this->config('Class8') == 'recruit_3'){$Down8=3;}
		if($this->config('Class9') == 'recruit_3'){$Down9=3;}
		if($this->config('Class10') == 'recruit_3'){$Down13=3;}
		if($this->config('Class11') == 'recruit_3'){$Down11=3;}
		if($this->config('Class12') == 'recruit_3'){$Down12=3;}
		if($this->config('Class13') == 'recruit_3'){$Down13=3;}
		if($this->config('Class14') == 'recruit_3'){$Down14=3;}
		if($this->config('Class15') == 'recruit_3'){$Down15=3;}
		if($this->config('Class16') == 'recruit_3'){$Down16=3;}
		if($this->config('Class17') == 'recruit_3'){$Down17=3;}
		if($this->config('Class18') == 'recruit_3'){$Down18=3;}
		if($this->config('Class19') == 'recruit_3'){$Down19=3;}
		if($this->config('Class20') == 'recruit_3'){$Down23=3;}
		if($this->config('Class21') == 'recruit_3'){$Down21=3;}
		if($this->config('Class22') == 'recruit_3'){$Down22=3;}
		if($this->config('Class23') == 'recruit_3'){$Down23=3;}
		if($this->config('Class24') == 'recruit_3'){$Down24=3;}
		if($this->config('Class25') == 'recruit_3'){$Down25=3;}
		if($this->config('Class26') == 'recruit_3'){$Down26=3;}
		if($this->config('Class27') == 'recruit_3'){$Down27=3;}	
		if($this->config('Class28') == 'recruit_3'){$Down28=3;}	
		#if($this->config('Class29') == 'recruit_3'){$Down29=3;}
		#if($this->config('Class30') == 'recruit_3'){$Down30=3;}
		#if($this->config('Class31') == 'recruit_3'){$Down31=3;}
		#if($this->config('Class32') == 'recruit_3'){$Down32=3;}
		#if($this->config('Class33') == 'recruit_3'){$Down33=3;}
		#if($this->config('Class34') == 'recruit_3'){$Down34=3;}
		#if($this->config('Class35') == 'recruit_3'){$Down35=3;}
		#if($this->config('Class36') == 'recruit_3'){$Down36=3;}
		#if($this->config('Class37') == 'recruit_3'){$Down37=3;}
		#if($this->config('Class38') == 'recruit_3'){$Down38=3;}		
		#if($this->config('Class39') == 'recruit_3'){$Down39=3;}
		#if($this->config('Class40') == 'recruit_3'){$Down40=3;}
		#if($this->config('Class41') == 'recruit_3'){$Down41=3;}
		#if($this->config('Class42') == 'recruit_3'){$Down42=3;}
		#if($this->config('Class43') == 'recruit_3'){$Down43=3;}
		#if($this->config('Class44') == 'recruit_3'){$Down44=3;}
		#if($this->config('Class45') == 'recruit_3'){$Down45=3;}
		#if($this->config('Class46') == 'recruit_3'){$Down46=3;}
		#if($this->config('Class47') == 'recruit_3'){$Down47=3;}
		#if($this->config('Class48') == 'recruit_3'){$Down48=3;}
	
		if($this->config('Class1') == 'recruit_4'){$Down1=4;}	
		if($this->config('Class2') == 'recruit_4'){$Down2=4;}
		if($this->config('Class3') == 'recruit_4'){$Down3=4;}
		if($this->config('Class4') == 'recruit_4'){$Down4=4;}
		if($this->config('Class5') == 'recruit_4'){$Down5=4;}
		if($this->config('Class6') == 'recruit_4'){$Down6=4;}
		if($this->config('Class7') == 'recruit_4'){$Down7=4;}
		if($this->config('Class8') == 'recruit_4'){$Down8=4;}
		if($this->config('Class9') == 'recruit_4'){$Down9=4;}
		if($this->config('Class10') == 'recruit_4'){$Down10=4;}
		if($this->config('Class11') == 'recruit_4'){$Down11=4;}
		if($this->config('Class12') == 'recruit_4'){$Down12=4;}
		if($this->config('Class13') == 'recruit_4'){$Down13=4;}
		if($this->config('Class14') == 'recruit_4'){$Down14=4;}
		if($this->config('Class15') == 'recruit_4'){$Down15=4;}
		if($this->config('Class16') == 'recruit_4'){$Down16=4;}
		if($this->config('Class17') == 'recruit_4'){$Down17=4;}
		if($this->config('Class18') == 'recruit_4'){$Down18=4;}
		if($this->config('Class19') == 'recruit_4'){$Down19=4;}
		if($this->config('Class20') == 'recruit_4'){$Down20=4;}
		if($this->config('Class21') == 'recruit_4'){$Down21=4;}
		if($this->config('Class22') == 'recruit_4'){$Down22=4;}
		if($this->config('Class23') == 'recruit_4'){$Down23=4;}
		if($this->config('Class24') == 'recruit_4'){$Down24=4;}
		if($this->config('Class25') == 'recruit_4'){$Down25=4;}
		if($this->config('Class26') == 'recruit_4'){$Down26=4;}
		if($this->config('Class27') == 'recruit_4'){$Down27=4;}
		if($this->config('Class28') == 'recruit_4'){$Down28=4;}
		#if($this->config('Class29') == 'recruit_4'){$Down29=4;}
		#if($this->config('Class30') == 'recruit_4'){$Down30=4;}
		#if($this->config('Class31') == 'recruit_4'){$Down31=4;}
		#if($this->config('Class32') == 'recruit_4'){$Down32=4;}
		#if($this->config('Class33') == 'recruit_4'){$Down33=4;}
		#if($this->config('Class34') == 'recruit_4'){$Down34=4;}
		#if($this->config('Class35') == 'recruit_4'){$Down35=4;}
		#if($this->config('Class36') == 'recruit_4'){$Down36=4;}
		#if($this->config('Class37') == 'recruit_4'){$Down37=4;}
		#if($this->config('Class38') == 'recruit_4'){$Down38=4;}		
		#if($this->config('Class39') == 'recruit_4'){$Down39=4;}
		#if($this->config('Class40') == 'recruit_4'){$Down40=4;}
		#if($this->config('Class41') == 'recruit_4'){$Down41=4;}
		#if($this->config('Class42') == 'recruit_4'){$Down42=4;}
		#if($this->config('Class43') == 'recruit_4'){$Down43=4;}
		#if($this->config('Class44') == 'recruit_4'){$Down44=4;}
		#if($this->config('Class45') == 'recruit_4'){$Down45=4;}
		#if($this->config('Class46') == 'recruit_4'){$Down46=4;}
		#if($this->config('Class47') == 'recruit_4'){$Down47=4;}
		#if($this->config('Class48') == 'recruit_4'){$Down48=4;}
		
$jspath=$this->server_path."portal/wowtbcrecruit/wcf/style/";
$csspath=$this->server_path."portal/wowtbcrecruit/wcf/js/";
$Imagepath=$this->server_path."portal/wowtbcrecruit/wcf/images/recruitment/";

		if($this->config('Fraction') == 'recruit_Alliance'){$fraction="alliance_logo.png";}	
		if($this->config('Fraction') == 'recruit_Horde'){$fraction="horde_logo.png";}
		if($this->config('Fraction') == 'recruit_Alliance'){$border='alliance';}
		if($this->config('Fraction') == 'recruit_Horde'){$border='horde';}


 $out= "<div class='containerContent'>
<link rel='stylesheet' type='text/css' href='".$jspath."recruitmentbox.css'>
<script type='text/javascript' src='".$csspath."recruitmentbox.js'></script>

<div class='recruitmentBox'>

	<div class='recruitmentBack' id='recruitback'style='background-image:url(".$Imagepath."".$fraction.");'></div>
	<!-- Druid -->
	<div class='classType' id='druid'>
		<div class='classIcon ".$border."'>
			<img src='".$Imagepath."class_druid.png' class='classImage'>
		</div>
		<div class='className'>".$this->user->lang("wowtbcrecruit_c_Class1")."</div>
		<div class='classSpec ".$border."' title='".$this->user->lang("wowtbcrecruit_s_Class4")."'>
			<div class='classSpecCounter'>".$Down4."</div><!-- Activate Spec here -->
			<div class='classSpecOverlay' id='inactive'></div>
			<img src='".$Imagepath."druid_spec_4.png' class='specImage'>
		</div>
		<div class='classSpec ".$border."' title='".$this->user->lang("wowtbcrecruit_s_Class3")."'>
			<div class='classSpecCounter'>".$Down3."</div><!-- Activate Spec here -->
			<div class='classSpecOverlay' id='inactive'></div>
			<img src='".$Imagepath."druid_spec_3.png' class='specImage'>
		</div>
		<div class='classSpec ".$border."' title='".$this->user->lang("wowtbcrecruit_s_Class2")."'>
			<div class='classSpecCounter'>".$Down2."</div><!-- Activate Spec here -->
			<div class='classSpecOverlay' id='inactive'></div>
			<img src='".$Imagepath."druid_spec_2.png' class='specImage'>
		</div>
		<div class='classSpec ".$border."' title='".$this->user->lang("wowtbcrecruit_s_Class1")."'>
			<div class='classSpecCounter'>".$Down1."</div><!-- Activate Spec here -->
			<div class='classSpecOverlay' id='inactive'></div>
			<img src='".$Imagepath."druid_spec_1.png' class='specImage'>
		</div>
	</div>
	<!-- Hunter -->
	<div class='classType' id='hunter'>
		<div class='classIcon ".$border."'>
			<img src='".$Imagepath."class_hunter.png' class='classImage'>
		</div>
		<div class='className'>".$this->user->lang("wowtbcrecruit_c_Class2")."</div>
		<div class='classSpec ".$border."' title='".$this->user->lang("wowtbcrecruit_s_Class7")."'>
			<div class='classSpecCounter'>".$Down7."</div><!-- Activate Spec here -->
			<div class='classSpecOverlay' id='inactive'></div>
			<img src='".$Imagepath."hunter_spec_3.png' class='classImage'>
		</div>
		<div class='classSpec ".$border."' title='".$this->user->lang("wowtbcrecruit_s_Class6")."'>
			<div class='classSpecCounter'>".$Down6."</div><!-- Activate Spec here -->
			<div class='classSpecOverlay' id='inactive'></div>
			<img src='".$Imagepath."hunter_spec_2.png' class='classImage'>
		</div>
		<div class='classSpec ".$border."' title='".$this->user->lang("wowtbcrecruit_s_Class5")."'>
			<div class='classSpecCounter'>".$Down5."</div><!-- Activate Spec here -->
			<div class='classSpecOverlay' id='inactive'></div>
			<img src='".$Imagepath."hunter_spec_1.png' class='classImage'>
		</div>
	</div>
	<!-- Mage -->
	<div class='classType' id='mage'>
		<div class='classIcon ".$border."'>
			<img src='".$Imagepath."class_mage.png' class='classImage'>
		</div>
		<div class='className'>".$this->user->lang("wowtbcrecruit_c_Class3")."</div>
		<div class='classSpec ".$border."' title='".$this->user->lang("wowtbcrecruit_s_Class10")."'>
			<div class='classSpecCounter'>".$Down10."</div><!-- Activate Spec here -->
			<div class='classSpecOverlay' id='inactive'></div>
			<img src='".$Imagepath."mage_spec_3.png' class='classImage'>
		</div>
		<div class='classSpec ".$border."' title='".$this->user->lang("wowtbcrecruit_s_Class9")."'>
			<div class='classSpecCounter'>".$Down9."</div><!-- Activate Spec here -->
			<div class='classSpecOverlay' id='inactive'></div>
			<img src='".$Imagepath."mage_spec_2.png' class='classImage'>
		</div>
		<div class='classSpec ".$border."' title='".$this->user->lang("wowtbcrecruit_s_Class8")."'>
			<div class='classSpecCounter'>".$Down8."</div><!-- Activate Spec here -->
			<div class='classSpecOverlay' id='inactive'></div>
			<img src='".$Imagepath."mage_spec_1.png' class='classImage'>
		</div>
	</div>
	<!-- Paladin -->
	<div class='classType' id='paladin'>
		<div class='classIcon ".$border."'>
			<img src='".$Imagepath."class_paladin.png' class='classImage'>
		</div>
		<div class='className'>".$this->user->lang("wowtbcrecruit_c_Class4")."</div>
		<div class='classSpec ".$border."' title='".$this->user->lang("wowtbcrecruit_s_Class13")."'>
			<div class='classSpecCounter'>".$Down13."</div><!-- Activate Spec here -->
			<div class='classSpecOverlay' id='inactive'></div>
			<img src='".$Imagepath."paladin_spec_3.png' class='classImage'>
		</div>
		<div class='classSpec ".$border."' title='".$this->user->lang("wowtbcrecruit_s_Class12")."'>
			<div class='classSpecCounter'>".$Down12."</div><!-- Activate Spec here -->
			<div class='classSpecOverlay' id='inactive'></div>
			<img src='".$Imagepath."paladin_spec_2.png' class='classImage'>
		</div>
		<div class='classSpec ".$border."' title='".$this->user->lang("wowtbcrecruit_s_Class11")."'>
			<div class='classSpecCounter'>".$Down11."</div><!-- Activate Spec here -->
			<div class='classSpecOverlay' id='inactive'></div>
			<img src='".$Imagepath."paladin_spec_1.png' class='classImage'>
		</div>
	</div>
	<!-- Priest -->
	<div class='classType' id='priest'>
		<div class='classIcon ".$border."'>
			<img src='".$Imagepath."class_priest.png' class='classImage'>
		</div>
		<div class='className'>".$this->user->lang("wowtbcrecruit_c_Class5")."</div>
		<div class='classSpec ".$border."' title='".$this->user->lang("wowtbcrecruit_s_Class16")."'>
			<div class='classSpecCounter'>".$Down16."</div><!-- Activate Spec here -->
			<div class='classSpecOverlay' id='inactive'></div>
			<img src='".$Imagepath."priest_spec_3.png' class='classImage'>
		</div>
		<div class='classSpec ".$border."' title='".$this->user->lang("wowtbcrecruit_s_Class15")."'>
			<div class='classSpecCounter'>".$Down15."</div><!-- Activate Spec here -->
			<div class='classSpecOverlay' id='inactive'></div>
			<img src='".$Imagepath."priest_spec_2.png' class='classImage'>
		</div>
		<div class='classSpec ".$border."' title='".$this->user->lang("wowtbcrecruit_s_Class14")."'>
			<div class='classSpecCounter'>".$Down14."</div><!-- Activate Spec here -->
			<div class='classSpecOverlay' id='inactive'></div>
			<img src='".$Imagepath."priest_spec_1.png' class='classImage'>
		</div>
	</div>
	<!-- Shaman -->
	<div class='classType' id='shaman'>
		<div class='classIcon ".$border."'>
			<img src='".$Imagepath."class_shaman.png' class='classImage'>
		</div>
		<div class='className'>".$this->user->lang("wowtbcrecruit_c_Class6")."</div>
		<div class='classSpec ".$border."' title='".$this->user->lang("wowtbcrecruit_s_Class19")."'>
			<div class='classSpecCounter'>".$Down19."</div><!-- Activate Spec here -->
			<div class='classSpecOverlay' id='inactive'></div>
			<img src='".$Imagepath."shaman_spec_3.png' class='classImage'>
		</div>
		<div class='classSpec ".$border."' title='".$this->user->lang("wowtbcrecruit_s_Class18")."'>
			<div class='classSpecCounter'>".$Down18."</div><!-- Activate Spec here -->
			<div class='classSpecOverlay' id='inactive'></div>
			<img src='".$Imagepath."shaman_spec_2.png' class='classImage'>
		</div>
		<div class='classSpec ".$border."' title='".$this->user->lang("wowtbcrecruit_s_Class17")."'>
			<div class='classSpecCounter'>".$Down17."</div><!-- Activate Spec here -->
			<div class='classSpecOverlay' id='inactive'></div>
			<img src='".$Imagepath."shaman_spec_1.png' class='classImage'>
		</div>
	</div>
	<!-- Rogue -->
	<div class='classType' id='rogue'>
		<div class='classIcon ".$border."'>
			<img src='".$Imagepath."class_rogue.png' class='classImage'>
		</div>
		<div class='className'>".$this->user->lang("wowtbcrecruit_c_Class7")."</div>
		<div class='classSpec ".$border."' title='".$this->user->lang("wowtbcrecruit_s_Class22")."'>
			<div class='classSpecCounter'>".$Down22."</div><!-- Activate Spec here -->
			<div class='classSpecOverlay' id='inactive'></div>
			<img src='".$Imagepath."rogue_spec_3.png' class='classImage'>
		</div>
		<div class='classSpec ".$border."' title='".$this->user->lang("wowtbcrecruit_s_Class21")."'>
			<div class='classSpecCounter'>".$Down21."</div><!-- Activate Spec here -->
			<div class='classSpecOverlay' id='inactive'></div>
			<img src='".$Imagepath."rogue_spec_2.png' class='classImage'>
		</div>
		<div class='classSpec ".$border."' title='".$this->user->lang("wowtbcrecruit_s_Class20")."'>
			<div class='classSpecCounter'>".$Down20."</div><!-- Activate Spec here -->
			<div class='classSpecOverlay' id='inactive'></div>
			<img src='".$Imagepath."rogue_spec_1.png' class='classImage'>
		</div>
	</div>
	<!-- Warlock -->
	<div class='classType' id='warlock'>
		<div class='classIcon ".$border."'>
			<img src='".$Imagepath."class_warlock.png' class='classImage'>
		</div>
		<div class='className'>".$this->user->lang("wowtbcrecruit_c_Class8")."</div>
		<div class='classSpec ".$border."' title='".$this->user->lang("wowtbcrecruit_s_Class25")."'>
			<div class='classSpecCounter'>".$Down25."</div><!-- Activate Spec here -->
			<div class='classSpecOverlay' id='inactive'></div>
			<img src='".$Imagepath."warlock_spec_3.png' class='classImage'>
		</div>
		<div class='classSpec ".$border."' title='".$this->user->lang("wowtbcrecruit_s_Class24")."'>
			<div class='classSpecCounter'>".$Down24."</div><!-- Activate Spec here -->
			<div class='classSpecOverlay' id='inactive'></div>
			<img src='".$Imagepath."warlock_spec_2.png' class='classImage'>
		</div>
		<div class='classSpec ".$border."' title='".$this->user->lang("wowtbcrecruit_s_Class23")."'>
			<div class='classSpecCounter'>".$Down23."</div><!-- Activate Spec here -->
			<div class='classSpecOverlay' id='inactive'></div>
			<img src='".$Imagepath."warlock_spec_1.png' class='classImage'>
		</div>
	</div>
	<!-- Warrior -->
	<div class='classType' id='warrior'>
		<div class='classIcon ".$border."'>
			<img src='".$Imagepath."class_warrior.png' class='classImage'>
		</div>
		<div class='className'>".$this->user->lang("wowtbcrecruit_c_Class9")."</div>
		<div class='classSpec ".$border."' title='".$this->user->lang("wowtbcrecruit_s_Class28")."'>
			<div class='classSpecCounter'>".$Down28."</div><!-- Activate Spec here -->
			<div class='classSpecOverlay' id='inactive'></div>
			<img src='".$Imagepath."warrior_spec_3.png' class='classImage'>
		</div>
		<div class='classSpec ".$border."' title='".$this->user->lang("wowtbcrecruit_s_Class27")."'>
			<div class='classSpecCounter'>".$Down27."</div><!-- Activate Spec here -->
			<div class='classSpecOverlay' id='inactive'></div>
			<img src='".$Imagepath."warrior_spec_2.png' class='classImage'>
		</div>
		<div class='classSpec ".$border."' title='".$this->user->lang("wowtbcrecruit_s_Class26")."'>
			<div class='classSpecCounter'>".$Down26."</div><!-- Activate Spec here -->
			<div class='classSpecOverlay' id='inactive'></div>
			<img src='".$Imagepath."warrior_spec_1.png' class='classImage'>
		</div>
	</div>
	<!-- Warrior END -->



	</div></div>" ;
		
/*For More Classes Copy from Warrior to Warrior END and put it directly under it. Alter the variables like this example:
wowtbcrecruit_s_Class26	---> wowtbcrecruit_s_Class27
$Down26					---> $Down27
warrior_spec_1.png  	---> monk_spec_1.png
*/


		return $out;
	}
}
?>
