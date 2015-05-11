<?hh
/** 本例程展示了Hack中集合的常量构造的用法。
* 详细内容见http://taylorr.gitbooks.io/learn-hack-together/content/03.04.05%20more.html。
*/

function f() {
  $vec = Vector {1, 2, 3};
  var_dump($vec);
  $map = Map {42 => 'foo', 73 => 'bar', 144 => 'baz'};
  var_dump($map);
}

f();