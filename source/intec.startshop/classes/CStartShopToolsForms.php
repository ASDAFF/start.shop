<? $GLOBALS['_302860236_']=Array('i' .'s_array','s' .'trv' .'al','i' .'mplo' .'d' .'e','is_array','is_a' .'rra' .'y','' .'i' .'s_a' .'rray','is_arr' .'a' .'y','' .'in_' .'array'); ?><? function _929387986($i){$a=Array('="','"',"<select",' ',' ','','>',"","",'<option value="','','>',"</select>");return $a[$i];} ?><? class CStartShopToolsForms{public static function SelectBox($_0,$_1=array(),$_2=array(),$_3=null,$_4=false,$_5=false){$_1['name']=$_0;$_6=array();foreach($_1 as $_7 => $_8)if(!$GLOBALS['_302860236_'][0]($_8))$_6[]=$_7 ._929387986(0) .htmlspecialcharsbx($GLOBALS['_302860236_'][1]($_8)) ._929387986(1);$_9=_929387986(2) .(!empty($_6)?_929387986(3) .$GLOBALS['_302860236_'][2](_929387986(4),$_6):_929387986(5)) ._929387986(6);foreach($_2 as $_10 => $_11){if($GLOBALS['_302860236_'][3]($_11)){$_12=!empty($_4)?$_11[$_4]:$_10;$_13=$_11[$_5];}else{$_12=$_10;$_13=$_11;}if($GLOBALS['_302860236_'][4]($_12))$_12=_929387986(7);if($GLOBALS['_302860236_'][5]($_13))$_13=_929387986(8);$_14=false;if($GLOBALS['_302860236_'][6]($_3)){$_14=$GLOBALS['_302860236_'][7]($_12,$_3);}else{$_14=$_12 == $_3;}$_9 .= _929387986(9) .htmlspecialcharsbx($_12) .'"' .($_14?' selected="selected"':_929387986(10)) ._929387986(11) .htmlspecialcharsbx($_13) .'</option>';}$_9 .= _929387986(12);return $_9;}} ?>
