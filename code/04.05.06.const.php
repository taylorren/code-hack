<?hh
/** 本例程展示了Hack中的常量集合接口。
* 详细内容见http://taylorr.gitbooks.io/learn-hack-together/content/03.04.05%20more.html。
* 原文档中例子有误，无法运行。
*/

function foo(ConstMap<string,int> $m, string $k): int {
  return $m[$k] ;
}

function main() {
  $m = Map {'a' => 1, 'b' => 2, 'c' => 3, 'd' => 4};
  
  echo foo($m, 'c');
}

main();