<?hh
/** 本例程展示了Hack中Pair的用法。
* 详细内容见http://taylorr.gitbooks.io/learn-hack-together/content/03.04.04%20pair.html。
*/

function main() {
  $p = Pair {7, 'a'};
  echo $p[0] . "\n";
  echo $p[1] . "\n";
  echo "\n";
  foreach ($p as $val) {
    echo $val . "\n";
  }
}

main();