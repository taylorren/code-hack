<?hh
/** Map演示
* 详细内容见http://taylorr.gitbooks.io/learn-hack-together/content/03.04.05%20more.html。
*/

function main() {
  $map = Map {'a' => 11};
  $map->setAll(Map {'b' => 22, 'c' => 33});
  var_dump($map);
}

main();