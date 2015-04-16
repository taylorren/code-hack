<?hh

/** 本例程展示了异步编程的基本特性。
* 特别是描述了await/async配对使用的实例。
* 详细内容见http://taylorr.gitbooks.io/learn-hack-together/content/03.02%20async.html。
*/


class Foo{
}
class Bar {
  public function getFoo(): Foo {
    return new Foo();
  }
}

async function gen_foo(int $a): Awaitable<?Foo> {
  if ($a === 0) {
    return null;
  }

  $bar = await gen_bar($a);
  if ($bar !== null) {
    return $bar->getFoo();
  }

  return null;
}

async function gen_bar(int $a): Awaitable<?Bar> {
  if ($a === 0) {
    return null;
  }

  return new Bar();
}


$res=gen_foo(4);
var_dump($res);