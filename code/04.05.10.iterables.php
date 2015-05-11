<?hh
/** 所有的可遍历集合都支持map()和filter()的操作。
* 详细内容见http://taylorr.gitbooks.io/learn-hack-together/content/03.04.05%20more.html。
*/

function main() {
  $m = Map {'a' => 1, 'b' => 2, 'c' => 3, 'd' => 4};
  $result = $m->filter(function(int $x):bool { return $x % 2 == 0; })
              ->map(function(int $x):int { return $x + 1; });
  foreach ($result as $key => $value) {
    echo $key . " => " . $value . "\n";
  }
}

main();