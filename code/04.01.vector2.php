<?hh
/** 本例程展示了Hack中Vector的过滤Lambda函数基本使用方式。
* 详细内容见http://taylorr.gitbooks.io/learn-hack-together/content/03.04.01%20vector.html。
*/

function main() {
  $v = Vector {40, 80, 20, 60};
  $filtered_vec = $v->filter(function($x) { return $x >= 50; });
  foreach ($filtered_vec as $key => $val) {
    echo $key . " " . $val . "\n";
  }
}

main();