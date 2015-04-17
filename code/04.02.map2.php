<?hh
/** 本例程展示了Hack中Map的过滤Lambda函数的用法。
* 详细内容见http://taylorr.gitbooks.io/learn-hack-together/content/03.04.02%20map.html。
*/

function main() {
  $m = Map {1 => 'a', 2 => 'b', 3 => 'c', 4 => 'd'};
  var_dump($m->filterWithKey(function($k, $v) { return $v <>'d'; }));
}

main();