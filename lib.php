<?php

class codeTraverse
{

    public function traverse()
    {
        $dir   = __DIR__ . '/code';
        $files = array_diff(scandir($dir), ['..', '.']);

        return $files;
    }

}

class codeFile
{

    public $src;
    public $out;
    public $desc;
    public $file;
    public $times = [];

    public function __construct($file)
    {
        $this->file = $file;
        $srcfile    = 'code/' . $file;

        $this->desc  = $this->stripComment($srcfile);
        $this->src   = highlight_file($srcfile, TRUE);
        $this->times = $this->getTimes($srcfile);
    }
    
    function getTimes($file)
    {
        $times = [];

        $times['ct'] = filectime($file);
        $times['at'] = fileatime($file);

        return $times;
    }

    public function stripComment($file)
    {
        $raw   = $this->getComment($file);
        $step1 = explode("\x0D", $raw);

        foreach ($step1 as &$line)
        {
            $line = str_replace("/**", "", $line);
            $line = str_replace("*", "", $line);
            $line = trim($line);

            //preg_match("/((([A-Za-z]{3,9}:(?:\/\/)?)(?:[\-;:&=\+\$,\w]+@)?[A-Za-z0-9\.\-]+|(?:www\.|[\-;:&=\+\$,\w]+@)[A-Za-z0-9\.\-]+)((?:\/[\+~%\/\.\w\-_]*)?\??(?:[\-\+=&;%@\.\w_]*)#?(?:[\.\!\/\\\w]*))?)/", $line, $matches);

            $line = preg_replace("/((([A-Za-z]{3,9}:(?:\/\/)?)(?:[\-;:&=\+\$,\w]+@)?[A-Za-z0-9\.\-]+|(?:www\.|[\-;:&=\+\$,\w]+@)[A-Za-z0-9\.\-]+)((?:\/[\+~%\/\.\w\-_]*)?\??(?:[\-\+=&;%@\.\w_]*)#?(?:[\.\!\/\\\w]*))?)/", "<a href='\${1}'>电子书文档相关章节</a>", $line);
        }

        return $step1;
    }

    private function getComment($file)
    {
        $contents = file_get_contents($file);
        $sp       = strpos($contents, '/**');
        $ep       = strpos($contents, '*/');

        $fp       = fopen($file, 'r');
        fseek($fp, $sp);
        $comments = fread($fp, $ep - $sp);
        return $comments;
    }
}

