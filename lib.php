<?php

class codeTraverse
{
    public function traverse()
    {
        $dir=__DIR__.'/code';
        $files=array_diff(scandir($dir), ['..', '.']);
        
        return $files;
    }
}