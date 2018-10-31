<?php

namespace Debug\Contracts;

interface ExceptionHandler
{
    /**
     * 报告或者这记录错误信息.
     *
     * @param Exception $e
     */
    public function report(UserException $e);

    /**
     * 渲染错误信息到页面.
     *
     * @param Controller $request
     * @param Exception  $e
     */
    public function render(Render $render, UserException $e);
}
