<?php
/*	Project:			EQdkp-Plus
 *	Package:			wow recruit Module - Portal
 *
 *	Copyright (C) 2021 Motrish & Mothman from Blackmoore-EU
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

###############################################
$classes	= array(
	1 => array(0 => "druid",1 => 4,),
	2 => array (0 => "hunter",1 => 3,),
	3 => array (0 => "mage",1 => 3,),
	4 => array (0 => "paladin",1 => 3,),
	5 => array(0 => "priest",1 => 3,),
	6 => array (0 => "shaman",1 => 3,),
	7 => array (0 => "rogue",1 => 3,),
	8 => array (0 => "warlock",1 => 3,),
	9 => array(0 => "warrior",1 => 3,),
	10 => array(0 => "deathknight",1 => 3,),
	11 => array(0 => "monk",1 => 3,),
	12 => array(0 => "demonhunter",1 => 2,),
);
###############################################
foreach($classes as $value) {
	$classcount += $value[1];
}
###############################################
$arrlength = count($classes);
###############################################


		$settings	= array();
		$settings['Fraction'] = array(
			'type'		=> 'radio',
			'class'		=> 'js_reload',
			'options'	=> array(
				'recruit_Alliance'	=> $this->user->lang('recruit_Alliance'),
				'recruit_Horde'	=> $this->user->lang('recruit_Horde'),
			),
		);

		$settings['Expansion'] = array(
			'type'		=> 'radio',
			'class'		=> 'js_reload',
			'options'	=> array(
				'recruit_Classic'	=> $this->user->lang('recruit_Classic'),
				'recruit_TBC'	=> $this->user->lang('recruit_TBC'),
				'recruit_WotLK'	=> $this->user->lang('recruit_WotLK'),
				'recruit_MoP'	=> $this->user->lang('recruit_MoP'),
				'recruit_Legion'	=> $this->user->lang('recruit_Legion'),
			),
		);

		for ($i=1;$i<=$classcount;$i++) { 
			$recruit = array();
			for ($j=0;$j<=4;$j++){
				$recruit['recruit_'.$j] = $this->user->lang('recruit_'.$j);
			}
			$settings['Class'.$i] = array(
				'type'		=> 'dropdown',
				'class'		=> 'js_reload',
				'options'	=> $recruit,
			);
		}

		return $settings;
		}
	protected static $install	= array(
		'autoenable'		=> '0',
		'defaultposition'	=> 'left',
		'defaultnumber'		=> '8',
	);
	
	protected static $apiLevel = 20;

	public function output() {

###############################################
$classes	= array(
	1 => array(0 => "druid",1 => 4,),
	2 => array (0 => "hunter",1 => 3,),
	3 => array (0 => "mage",1 => 3,),
	4 => array (0 => "paladin",1 => 3,),
	5 => array(0 => "priest",1 => 3,),
	6 => array (0 => "shaman",1 => 3,),
	7 => array (0 => "rogue",1 => 3,),
	8 => array (0 => "warlock",1 => 3,),
	9 => array(0 => "warrior",1 => 3,),
	10 => array(0 => "deathknight",1 => 3,),
	11 => array(0 => "monk",1 => 3,),
	12 => array(0 => "demonhunter",1 => 2,),
);
###############################################
foreach($classes as $value) {
	$classcount += $value[1];
}
###############################################
$arrlength = count($classes);
if($this->config('Expansion') == 'recruit_Classic'){$arrlength = $arrlength-3;}
if($this->config('Expansion') == 'recruit_TBC'){$arrlength = $arrlength-3;}
if($this->config('Expansion') == 'recruit_WotLK'){$arrlength = $arrlength-2;}	
if($this->config('Expansion') == 'recruit_MoP'){$arrlength = $arrlength-1;}		
###############################################
$searchcount=4;
for($i=1; $i<=$classcount; $i++){
	$o = "Class".$i;
	for($j=1; $j<=$searchcount; $j++){
		if($this->config($o) == "recruit_$j"){${"Down".$i}=$j;}	
	}
}	
###############################################		
$jspath=$this->server_path."portal/wowtbcrecruit/wcf/style/";
$csspath=$this->server_path."portal/wowtbcrecruit/wcf/js/";
$Imagepath=$this->server_path."portal/wowtbcrecruit/wcf/images/recruitment/";
###############################################
		if($this->config('Fraction') == 'recruit_Alliance'){$fraction="alliance_logo.png";$border='alliance';}	
		if($this->config('Fraction') == 'recruit_Horde'){$fraction="horde_logo.png";$border='horde';}
###############################################

#Start Oben
$out= 
"<div class='containerContent'>
<link rel='stylesheet' type='text/css' href='".$jspath."recruitmentbox.css'>
<script type='text/javascript' src='".$csspath."recruitmentbox.js'></script>
<div class='recruitmentBox'>
	<div class='recruitmentBack' id='recruitback'style='background-image:url(".$Imagepath."".$fraction.");'></div>";

	$count = 1;
for ($i = 1; $i <= $arrlength; $i++) {
	#Classstart
	$out .=" 
		<div class='classType' id='".$classes[$i][0]."'>
			<div class='classIcon ".$border."'>
				<img src='".$Imagepath."class_".$classes[$i][0].".png' class='classImage'>
			</div>
			<div class='className'>".$this->user->lang("wowtbcrecruit_c_Class".$i."")."</div>";

			for ($j = 1; $j <=  $classes[$i][1]; $j++) {
				#Speccstart
				$out .=" 	
						<div class='classSpec ".$border."' alt='".$this->user->lang("wowtbcrecruit_s_Class".$count."")."'>
							<div class='classSpecCounter'>".${"Down".$count}."</div><!-- Activate Spec here -->
							<div class='classSpecOverlay' id='inactive'></div>
							<img src='".$Imagepath."".$classes[$i][0]."_spec_".$j.".png' class='specImage'>
						</div>";
					$count++;
					}	
#Classend
$out .="</div>";

if($this->config('Expansion') == 'recruit_Classic'){
	if($border=='alliance'){		if($i == 5){$i++;}}
	if($border=='horde'){		if($i == 3){$i++;}}
}








}
#Ende
$out .="</div></div>" ;
		return $out;
	}
}
?>
