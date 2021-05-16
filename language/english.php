<?php
/*	Project:			EQdkp-Plus
 *	Package:			recruit wow Module - Portal
 *
 *	Copyright (C) 2021 Motrish	
 *
 */

if ( !defined('EQDKP_INC') ){
	header('HTTP/1.0 404 Not Found');exit;
}

$lang['wowtbcrecruit']				= 'WoW TBC Recruit';
$lang['wowtbcrecruit_name']		= 'WoW TBC Recruit';
$lang['wowtbcrecruit_desc']		= 'Configure your Recruitment';
$lang['wowtbcrecruit_f_Fraction']		= 'Fraction';
$lang['wowtbcrecruit_f_Class1']		= 'Druid - Balance';
$lang['wowtbcrecruit_f_Class2']		= 'Druid - Feral';
$lang['wowtbcrecruit_f_Class3']		= 'Druid - Guardian';
$lang['wowtbcrecruit_f_Class4']		= 'Druid - Restoration';
$lang['wowtbcrecruit_f_Class5']		= 'Hunter - Beastmastery';
$lang['wowtbcrecruit_f_Class6']		= 'Hunter - Marksmanship';
$lang['wowtbcrecruit_f_Class7']		= 'Hunter - Survival';
$lang['wowtbcrecruit_f_Class8']		= 'Mage - Arcane';
$lang['wowtbcrecruit_f_Class9']		= 'Mage - Fire';
$lang['wowtbcrecruit_f_Class10']		= 'Mage - Ice';
$lang['wowtbcrecruit_f_Class11']		= 'Paladin - Holy';
$lang['wowtbcrecruit_f_Class12']		= 'Paladin - Protection';
$lang['wowtbcrecruit_f_Class13']		= 'Paladin - Retribution';
$lang['wowtbcrecruit_f_Class14']		= 'Priest - Discipline';
$lang['wowtbcrecruit_f_Class15']		= 'Priest - Holy';
$lang['wowtbcrecruit_f_Class16']		= 'Priest - Shadow';
$lang['wowtbcrecruit_f_Class17']		= 'Shaman - Elemental';
$lang['wowtbcrecruit_f_Class18']		= 'Shaman - Enhancement';
$lang['wowtbcrecruit_f_Class19']		= 'Shaman - Restoration';
$lang['wowtbcrecruit_f_Class20']		= 'Rogue - Assasionation';
$lang['wowtbcrecruit_f_Class21']		= 'Rogue - Combat';
$lang['wowtbcrecruit_f_Class22']		= 'Rogue - Subtlety';
$lang['wowtbcrecruit_f_Class23']		= 'Warlock - Affliction';
$lang['wowtbcrecruit_f_Class24']		= 'Warlock - Demonology';
$lang['wowtbcrecruit_f_Class25']		= 'Warlock - Destruction';
$lang['wowtbcrecruit_f_Class26']		= 'Warrior - Arms';
$lang['wowtbcrecruit_f_Class27']		= 'Warrior - Fury';
$lang['wowtbcrecruit_f_Class28']		= 'Warrior - Arms';
/*	
$lang['wowtbcrecruit_f_Class29']		= 'Deathknight - Blood';
$lang['wowtbcrecruit_f_Class30']		= 'Deathknight - Frost';
$lang['wowtbcrecruit_f_Class31']		= 'Deathknight - Unholy';
*/

$lang['wowtbcrecruit_c_Class1']		= 'Druid';
$lang['wowtbcrecruit_c_Class2']		= 'Hunter';
$lang['wowtbcrecruit_c_Class3']		= 'Mage';
$lang['wowtbcrecruit_c_Class4']		= 'Paladin';
$lang['wowtbcrecruit_c_Class5']		= 'Priest';
$lang['wowtbcrecruit_c_Class6']		= 'Shaman';
$lang['wowtbcrecruit_c_Class7']		= 'Rogue';
$lang['wowtbcrecruit_c_Class8']		= 'Warlock';
$lang['wowtbcrecruit_c_Class9']		= 'Warrior';
/*	
$lang['wowtbcrecruit_c_Class10']		= 'Deathknight';
*/

$lang['wowtbcrecruit_s_Class1']		= 'Balance';
$lang['wowtbcrecruit_s_Class2']		= 'Feral';
$lang['wowtbcrecruit_s_Class3']		= 'Guardian';
$lang['wowtbcrecruit_s_Class4']		= 'Restoration';
$lang['wowtbcrecruit_s_Class5']		= 'Beastmastery';
$lang['wowtbcrecruit_s_Class6']		= 'Marksmanship';
$lang['wowtbcrecruit_s_Class7']		= 'Survival';
$lang['wowtbcrecruit_s_Class8']		= 'Arcane';
$lang['wowtbcrecruit_s_Class9']		= 'Fire';
$lang['wowtbcrecruit_s_Class10']		= 'Ice';
$lang['wowtbcrecruit_s_Class11']		= 'Holy';
$lang['wowtbcrecruit_s_Class12']		= 'Protection';
$lang['wowtbcrecruit_s_Class13']		= 'Retribution';
$lang['wowtbcrecruit_s_Class14']		= 'Discipline';
$lang['wowtbcrecruit_s_Class15']		= 'Holy';
$lang['wowtbcrecruit_s_Class16']		= 'Shadow';
$lang['wowtbcrecruit_s_Class17']		= 'Elemental';
$lang['wowtbcrecruit_s_Class18']		= 'Enhancement';
$lang['wowtbcrecruit_s_Class19']		= 'Restoration';
$lang['wowtbcrecruit_s_Class20']		= 'Assasionation';
$lang['wowtbcrecruit_s_Class21']		= 'Combat';
$lang['wowtbcrecruit_s_Class22']		= 'Subtlety';
$lang['wowtbcrecruit_s_Class23']		= 'Affliction';
$lang['wowtbcrecruit_s_Class24']		= 'Demonology';
$lang['wowtbcrecruit_s_Class25']		= 'Destruction';
$lang['wowtbcrecruit_s_Class26']		= 'WaffenArms';
$lang['wowtbcrecruit_s_Class27']		= 'Fury';
$lang['wowtbcrecruit_s_Class28']		= 'Arms';
/*	
$lang['wowtbcrecruit_s_Class29']		= 'Blood';
$lang['wowtbcrecruit_s_Class30']		= 'Frost';
$lang['wowtbcrecruit_s_Class31']		= 'Unholy';
*/
$lang['recruit_Alliance']			= 'Alliance';
$lang['recruit_Horde']				= 'Horde';

$lang['recruit_0']		= '0';
$lang['recruit_1']		= '1';
$lang['recruit_2']		= '2';
$lang['recruit_3']		= '3';
$lang['recruit_4']		= '4';

$lang['test']						= array('Open','DOWN');
?>