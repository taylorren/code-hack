<?hh
/** 本例程展示了filter()方法的使用。
* 详细内容见http://taylorr.gitbooks.io/learn-hack-together/content/03.04.05%20more.html。
*/

function main() {
  $m = Map {'a' => 1, 'b' => 2, 'c' => 3, 'd' => 4};
  $m2 = $m->filter(function(int $x):bool { return $x % 2 == 0; });
  var_dump($m2);
}

main();