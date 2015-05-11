<?hh
/** 本例程展示了用keys()方法获得向量和映射的键
* 详细内容见http://taylorr.gitbooks.io/learn-hack-together/content/03.04.05%20more.html。
*/

function main() {
  $m = Map {'a' => 1, 'b' => 2, 'c' => 3, 'd' => 4};
  $v = $m->keys();
  var_dump($v);
}

main();