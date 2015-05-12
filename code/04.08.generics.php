<?hh
/** 泛型入门演示。
* 详细内容见http://taylorr.gitbooks.io/learn-hack-together/content/03.08%20generics.html。
*/

class Box<T> {
  protected T $data;

  public function __construct(T $data) {
    $this->data = $data;
  }

  public function getData(): T {
    return $this->data;
  }
}

function main_gen() {
  $gi = new Box(3);
  $gs = new Box("Hi");
  $ga = new Box(array());
  echo $gi->getData()."\n";
  echo $gs->getData()."\n";
  echo $ga->getData()."\n";
}

main_gen();