<?hh
/** Enum函数演示。
* 详细内容见http://taylorr.gitbooks.io/learn-hack-together/content/03.07%20enum.html。
*/

enum DayOfWeek: int {
  Sunday = 0;
  Monday = 1;
  Tuesday = 2;
  Wednesday = 3;
  Thursday = 4;
  Friday = 5;
  Saturday = 6;
}

function main ()
{
    // Assert one value
    var_dump(DayOfWeek::assert(2));
    
    // getNames
    var_dump(DayOfWeek::getNames());
    
    // getValues
    var_dump(DayOfWeek::getValues());
}

main();