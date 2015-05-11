<?hh
/** Concrete Collection演示
* Concrete Collection可以通过Iterable或者KeyedIterable构造
* 详细内容见http://taylorr.gitbooks.io/learn-hack-together/content/03.04.05%20more.html。
*/

function main() {
  $m = Map {'a' => 11, 'b' => 22, 'c' => 33};
  $v = new Vector($m);
  var_dump($v);
}

main();