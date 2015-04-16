<?hh
/**本例演示了Hack中的Vector。
* 详细内容见http://taylorr.gitbooks.io/learn-hack-together/content/03.04%20collections.html。
*/

function main_col() {

  $vector = Vector {5, 10};

  $vector->add(15);
  $vector->add(20);

  $vector[] = 25;

  $vector->removeKey(2);

  foreach ($vector as $item) {
    echo $item . "\n";
  }
}

main_col();