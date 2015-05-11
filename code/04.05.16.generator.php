<?hh
/** 生成子实现了Iterator接口。任何传递Iterator的地方都可以传递一个生成子。
* 详细内容见http://taylorr.gitbooks.io/learn-hack-together/content/03.04.05%20more.html。
*/

function foo(Iterator<int> $it) { var_dump($it); }
function g() { yield 1; yield 2; }

function main() {
  $gen = g();
  foo($gen);
}

main();