<?hh
/** 本例程展示了Hack中对集合进行类似引用的操作。
* 详细内容见http://taylorr.gitbooks.io/learn-hack-together/content/03.04.05%20more.html。
*/

function foo($v) {
  $v[1] = 7;
}

function main() {
  $v1 = Vector {1, 2, 3};
  $v2 = $v1;
  foo($v2);
  var_dump($v1);
  echo "\n";
  foreach ($v1 as $key => $value) {
    echo $key . " => " . $value . "\n";
    if ($key == 0) {
      $v1[2] = 9;
    }
  }
}

main();