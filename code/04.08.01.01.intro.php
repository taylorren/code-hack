<?hh
/** 泛型引例。
* 详细内容见http://taylorr.gitbooks.io/learn-hack-together/content/03.08.01%20intro.html。
*/

function main_vec() {
  $x = Vector {1, 2, 3, 4}; // T is associated with int
  $y = Vector {'a', 'b', 'c', 'd'}; // T is associated with string
  
  var_dump($x);
  var_dump($y);
}

main_vec();