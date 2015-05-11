<?hh
/** 一般集合接口演示
* add(), items()及其它
* 详细内容见http://taylorr.gitbooks.io/learn-hack-together/content/03.04.05%20more.html。
*/

function process_elements<T>(ConstCollection<T> $in): OutputCollection<T> {
  $out = Vector {};
  if (!($in instanceof ConstVector)) {
   return null;
  }
  foreach ($in->items() as $elm) {
    if ($elm > 1) {
      $out->add($elm);
    }
  }
  return $out;
}

function main(): void {
  $x = Vector {1, 2, 3};
  var_dump(process_elements($x));
}


main();