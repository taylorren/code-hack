<?hh
/** 本例程展示了Hack中，由于某些操作使得遍历子失效。
* 详细内容见http://taylorr.gitbooks.io/learn-hack-together/content/03.04.05%20more.html。
*/


function main() {
  $m = Map {'a' => 1, 'b' => 2, 'c' => 3, 'd' => 4};
  foreach ($m as $key => $value) {
    echo $key . " => " . $value . "\n";
    if ($key == 'a') {
      $m->remove('d');
    }
  }
}

//main(); It won't run

echo "This won't run.\n"; 
echo "Running in CLI will tell you this:\n"; 
echo "Uncaught exception 'InvalidOperationException' with message 'Collection was modified during iteration'.\n";


