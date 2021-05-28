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
 * add 3 to the $classcount in row 462
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


#To increase Classes add 3 to $classcount

$classcount=28;
$searchcount=4;


for($i=1; $i<=$classcount; $i++){
	$o = "Class".$i;
	for($j=1; $j<=$searchcount; $j++){
		if($this->config($o) == "recruit_$j"){${"Down".$i}=$j;}	
	}
}	

		
		
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
		<div class='classSpec ".$border."' alt='".$this->user->lang("wowtbcrecruit_s_Class4")."'>
			<div class='classSpecCounter'>".$Down4."</div><!-- Activate Spec here -->
			<div class='classSpecOverlay' id='inactive'></div>
			<img src='".$Imagepath."druid_spec_4.png' class='specImage'>
		</div>
		<div class='classSpec ".$border."' alt='".$this->user->lang("wowtbcrecruit_s_Class3")."'>
			<div class='classSpecCounter'>".$Down3."</div><!-- Activate Spec here -->
			<div class='classSpecOverlay' id='inactive'></div>
			<img src='".$Imagepath."druid_spec_3.png' class='specImage'>
		</div>
		<div class='classSpec ".$border."' alt='".$this->user->lang("wowtbcrecruit_s_Class2")."'>
			<div class='classSpecCounter'>".$Down2."</div><!-- Activate Spec here -->
			<div class='classSpecOverlay' id='inactive'></div>
			<img src='".$Imagepath."druid_spec_2.png' class='specImage'>
		</div>
		<div class='classSpec ".$border."' alt='".$this->user->lang("wowtbcrecruit_s_Class1")."'>
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
		<div class='classSpec ".$border."' alt='".$this->user->lang("wowtbcrecruit_s_Class7")."'>
			<div class='classSpecCounter'>".$Down7."</div><!-- Activate Spec here -->
			<div class='classSpecOverlay' id='inactive'></div>
			<img src='".$Imagepath."hunter_spec_3.png' class='classImage'>
		</div>
		<div class='classSpec ".$border."' alt='".$this->user->lang("wowtbcrecruit_s_Class6")."'>
			<div class='classSpecCounter'>".$Down6."</div><!-- Activate Spec here -->
			<div class='classSpecOverlay' id='inactive'></div>
			<img src='".$Imagepath."hunter_spec_2.png' class='classImage'>
		</div>
		<div class='classSpec ".$border."' alt='".$this->user->lang("wowtbcrecruit_s_Class5")."'>
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
		<div class='classSpec ".$border."' alt='".$this->user->lang("wowtbcrecruit_s_Class10")."'>
			<div class='classSpecCounter'>".$Down10."</div><!-- Activate Spec here -->
			<div class='classSpecOverlay' id='inactive'></div>
			<img src='".$Imagepath."mage_spec_3.png' class='classImage'>
		</div>
		<div class='classSpec ".$border."' alt='".$this->user->lang("wowtbcrecruit_s_Class9")."'>
			<div class='classSpecCounter'>".$Down9."</div><!-- Activate Spec here -->
			<div class='classSpecOverlay' id='inactive'></div>
			<img src='".$Imagepath."mage_spec_2.png' class='classImage'>
		</div>
		<div class='classSpec ".$border."' alt='".$this->user->lang("wowtbcrecruit_s_Class8")."'>
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
		<div class='classSpec ".$border."' alt='".$this->user->lang("wowtbcrecruit_s_Class13")."'>
			<div class='classSpecCounter'>".$Down13."</div><!-- Activate Spec here -->
			<div class='classSpecOverlay' id='inactive'></div>
			<img src='".$Imagepath."paladin_spec_3.png' class='classImage'>
		</div>
		<div class='classSpec ".$border."' alt='".$this->user->lang("wowtbcrecruit_s_Class12")."'>
			<div class='classSpecCounter'>".$Down12."</div><!-- Activate Spec here -->
			<div class='classSpecOverlay' id='inactive'></div>
			<img src='".$Imagepath."paladin_spec_2.png' class='classImage'>
		</div>
		<div class='classSpec ".$border."' alt='".$this->user->lang("wowtbcrecruit_s_Class11")."'>
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
		<div class='classSpec ".$border."' alt='".$this->user->lang("wowtbcrecruit_s_Class16")."'>
			<div class='classSpecCounter'>".$Down16."</div><!-- Activate Spec here -->
			<div class='classSpecOverlay' id='inactive'></div>
			<img src='".$Imagepath."priest_spec_3.png' class='classImage'>
		</div>
		<div class='classSpec ".$border."' alt='".$this->user->lang("wowtbcrecruit_s_Class15")."'>
			<div class='classSpecCounter'>".$Down15."</div><!-- Activate Spec here -->
			<div class='classSpecOverlay' id='inactive'></div>
			<img src='".$Imagepath."priest_spec_2.png' class='classImage'>
		</div>
		<div class='classSpec ".$border."' alt='".$this->user->lang("wowtbcrecruit_s_Class14")."'>
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
		<div class='classSpec ".$border."' alt='".$this->user->lang("wowtbcrecruit_s_Class19")."'>
			<div class='classSpecCounter'>".$Down19."</div><!-- Activate Spec here -->
			<div class='classSpecOverlay' id='inactive'></div>
			<img src='".$Imagepath."shaman_spec_3.png' class='classImage'>
		</div>
		<div class='classSpec ".$border."' alt='".$this->user->lang("wowtbcrecruit_s_Class18")."'>
			<div class='classSpecCounter'>".$Down18."</div><!-- Activate Spec here -->
			<div class='classSpecOverlay' id='inactive'></div>
			<img src='".$Imagepath."shaman_spec_2.png' class='classImage'>
		</div>
		<div class='classSpec ".$border."' alt='".$this->user->lang("wowtbcrecruit_s_Class17")."'>
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
		<div class='classSpec ".$border."' alt='".$this->user->lang("wowtbcrecruit_s_Class22")."'>
			<div class='classSpecCounter'>".$Down22."</div><!-- Activate Spec here -->
			<div class='classSpecOverlay' id='inactive'></div>
			<img src='".$Imagepath."rogue_spec_3.png' class='classImage'>
		</div>
		<div class='classSpec ".$border."' alt='".$this->user->lang("wowtbcrecruit_s_Class21")."'>
			<div class='classSpecCounter'>".$Down21."</div><!-- Activate Spec here -->
			<div class='classSpecOverlay' id='inactive'></div>
			<img src='".$Imagepath."rogue_spec_2.png' class='classImage'>
		</div>
		<div class='classSpec ".$border."' alt='".$this->user->lang("wowtbcrecruit_s_Class20")."'>
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
		<div class='classSpec ".$border."' alt='".$this->user->lang("wowtbcrecruit_s_Class25")."'>
			<div class='classSpecCounter'>".$Down25."</div><!-- Activate Spec here -->
			<div class='classSpecOverlay' id='inactive'></div>
			<img src='".$Imagepath."warlock_spec_3.png' class='classImage'>
		</div>
		<div class='classSpec ".$border."' alt='".$this->user->lang("wowtbcrecruit_s_Class24")."'>
			<div class='classSpecCounter'>".$Down24."</div><!-- Activate Spec here -->
			<div class='classSpecOverlay' id='inactive'></div>
			<img src='".$Imagepath."warlock_spec_2.png' class='classImage'>
		</div>
		<div class='classSpec ".$border."' alt='".$this->user->lang("wowtbcrecruit_s_Class23")."'>
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
		<div class='classSpec ".$border."' alt='".$this->user->lang("wowtbcrecruit_s_Class28")."'>
			<div class='classSpecCounter'>".$Down28."</div><!-- Activate Spec here -->
			<div class='classSpecOverlay' id='inactive'></div>
			<img src='".$Imagepath."warrior_spec_3.png' class='classImage'>
		</div>
		<div class='classSpec ".$border."' alt='".$this->user->lang("wowtbcrecruit_s_Class27")."'>
			<div class='classSpecCounter'>".$Down27."</div><!-- Activate Spec here -->
			<div class='classSpecOverlay' id='inactive'></div>
			<img src='".$Imagepath."warrior_spec_2.png' class='classImage'>
		</div>
		<div class='classSpec ".$border."' alt='".$this->user->lang("wowtbcrecruit_s_Class26")."'>
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
