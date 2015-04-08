<?hh

/** 本例程展示了如何获取可反射（Reflectable）项的属性信息。
* 详细内容见http://taylorr.gitbooks.io/learn-hack-together/content/03.03%20attributes.html。
*/
class Foo {
  <<TestFunction, key("6")>>
  public function bar(string $key) {
    return baz($key);
  }
}

$rc = new ReflectionClass('Foo');
$attrs = $rc->getMethod('bar')->getAttributes();
var_dump($attrs);
$attr = $rc->getMethod('bar')->getAttribute("key");
var_dump($attr);