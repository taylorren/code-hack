<?hh
/** Vector演示
* 详细内容见http://taylorr.gitbooks.io/learn-hack-together/content/03.04.05%20more.html。
*/

function main() {
  $vec = Vector {11};
  $vec->addAll(Vector {22, 33, 44});
  var_dump($vec);
}

main();