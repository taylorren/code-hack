<?hh
/** 关于数组的讨论之一。
* 本例程讨论的是一般意义上的数组。
* 详细内容见http://taylorr.gitbooks.io/learn-hack-together/content/03.01%20arrays.html。
*/
class Foo
{
    
}

;

class HackArrays<T> {
    private array $arr = array();
    private array<T> $arr2 = array();
    private array<string, Foo> $arr3 = array();

    public function __construct(T $data)
    {
        $this->arr2[0] = $data;
    }

    public function bar(T $data): void
    {
        $this->arr        = array();
        var_dump($this->arr);
        $this->arr2[]     = $data;
        var_dump($this->arr2);
        $this->arr3["hi"] = new Foo();
        var_dump($this->arr3);
    }
}

function main_arr()
{
    $ha = new HackArrays("Facebook");
    $ha->bar("Food");
}

main_arr();
