<?hh
/** 本例程展示了Hack中Set的集操作函数的用法。
* 详细内容见http://taylorr.gitbooks.io/learn-hack-together/content/03.04.03%20set.html。
*/

function foo(): void {
  $s = Set {2, 3, 4};
  $v = Set {2, 3, 5};
  $s->add(6);
  
  $z = $s->removeAll($v); //difference between $v and $s
  var_dump($s, $v, $z);
}

foo();