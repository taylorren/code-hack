<?hh
/** Continuation演示。
* 详细内容见http://taylorr.gitbooks.io/learn-hack-together/content/03.06%20continuation.html。
*/

function yieldInfiniteInts(): Generator<int, int, void> {
  $i = 0;
  while ($i<5) {
    yield $i++;
  }
}

$generator = yieldInfiniteInts();
foreach ($generator as $value) {
  echo "$value\n";
}