<?hh
/** Enum演示。
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

function foo(): DayOfWeek {
  return DayOfWeek::Wednesday; // returns a 3
}

echo foo();
