<?hh
/**本例演示了Hack中的集合是对象这一事实。
* 详细内容见http://taylorr.gitbooks.io/learn-hack-together/content/03.04%20collections.html。
*/
$a = array(1, 2);
$v = Vector {1, 2};
var_dump(is_object($a));
var_dump(is_object($v));