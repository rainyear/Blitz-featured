<?php
$list = array();

$alpha = join(range('a', 'z'));
for($i=0;$i<1000;$i++){
	$nameStr = '';
	for($j=0; $j<count(range(0, rand(5, 7))); $j++){
		$nameStr .= $alpha[rand(0,25)];
	}
	array_push($list, $nameStr);
}

function blitz_render(){
	Global $list;
	$View = new Blitz('index.blz');
	$View->display(array('name'=>'Blitz', 'list'=>$list));
}
function smarty_render(){
	Global $list;
	require('/usr/lib/php/Smarty/Smarty.class.php');
	$smarty = new Smarty();

	$smarty->assign(array('name'=>'Smarty', 'list'=>$list));
	$smarty->display('index.tpl');

}
$t1 = microtime(true);

blitz_render();

$t2 = microtime(true);

smarty_render();

$t3 = microtime(true);

echo "Blitz used: ".(($t2-$t1)*1000)."ms\n";
echo "Smarty used: ".(($t3-$t2)*1000)."ms\n";
?>
