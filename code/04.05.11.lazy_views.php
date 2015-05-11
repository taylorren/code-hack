<?hh
/** 通过view()和itmes()返回的Iterable对象是原来的集合的一个'lazy'视图。
* 这就是说，如果底层集合的某个值改变了，则lazy view会反应出这个改变。
* 另外，某些改变如果使得遍历子失效，也会使得lazy view失效
* 详细内容见http://taylorr.gitbooks.io/learn-hack-together/content/03.04.05%20more.html。
*/

function main() {
  $m = Map {'a' => 1, 'b' => 2, 'c' => 3, 'd' => 4};
  $iterable = $m->items();
  $m['a'] = 100;
  $i = 0;
  foreach ($iterable as $t) {
    echo $t[0] . " => " . $t[1] . "\n";
    if ($i == 2) {
      echo "Removing key 'a'\n";
      $m->remove('a');
    }
    ++$i;
  }
}

//main();

echo "This won't run.\n";
echo "Running this in CLI will display:\n";
$str= <<<EOT
a => 100
b => 2
c => 3
Removing key 'a'

Fatal error: Uncaught exception 'InvalidOperationException' with message 'Collection was modified during iteration' in :
Stack trace:
#0 (): MapIterator->next()
#1 /vagrant/hhvm/code/04.05.11.lazy_views.php(20): LazyKVZipIterator->next()
#2 /vagrant/hhvm/code/04.05.11.lazy_views.php(22): main()
#3 {main}

EOT;

echo $str;