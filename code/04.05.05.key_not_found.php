<?hh
/** 本例程展示了Hack中，无法找到键而触发的异常。
* 使用"$c[$k]"或者用at()方法，在键不存在时都会触发异常。如果使用get()方法，那么在键不存在时返回NULL。
* 详细内容见http://taylorr.gitbooks.io/learn-hack-together/content/03.04.05%20more.html。
*/

function main() {
  $m = Vector {};
  try {
    var_dump($m[0]);
  } catch (OutOfBoundsException $e) {
    echo "Caught exception 1\n";
  }

  try {
    var_dump($m->at(0));
  } catch (OutOfBoundsException $e) {
    echo "Caught exception 2\n";
  }

  try {
    var_dump($m->get(0));
  } catch (OutOfBoundsException $e) {
    echo "Caught exception 3\n";
  }
}

main();

