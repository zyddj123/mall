<?php

namespace Debug\Contracts;

class Render
{
    public function render($file, $param = [])
    {
        if (file_exists($file)) {
            ob_end_clean();
            ob_start();
            ob_clean();
            extract($param);
            include $file;
            ob_end_flush();
            return true;
        } else {
            echo '出错了';
        }
    }
}
