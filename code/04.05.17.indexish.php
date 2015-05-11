<?hh
/** 实际代码。将两个映射类型的数组合并为一个。
* 详细内容见http://taylorr.gitbooks.io/learn-hack-together/content/03.04.05%20more.html。
*/

function array_compose($f, $g): array {
  $ret = array();
  foreach ($f as $x => $y) {
    if (array_key_exists($y, $g)) {
      $ret[$x] = $g[$y];
    }
  }
  return $ret;
}

function main()
{
    $f=Map{1=>3,2=>6,3=>9};
    $g=Map{1=>4,2=>8,3=>12};
    $ret=array_compose($f, $g);
    var_dump($ret);
    
}
main();