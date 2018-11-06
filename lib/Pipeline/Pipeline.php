<?php

namespace Pipeline;

use Closure;
use CO_Input;

class Pipeline
{
    /**
     * 要调用的的中间件的方法.
     *
     * @var string
     */
    public $method = 'handle';
    /**
     * 需要处理的载荷.
     *
     * @var string||mixed
     */
    public $payload = '';
    /**
     * 中间件的集合.
     *
     * @var array
     */
    public $pipes = [];

    public function __construct()
    {
        // $this->pipes=$pipes;
    }

    /**
     * 设置要调用的中间件的方法.
     *
     * @param strng $method
     *
     * @return this
     */
    public function via($method)
    {
        $this->method = $method;

        return $this;
    }

    /**
     * 设置需要通过的中间件.
     *
     * @param array $pipes
     *
     * @return this
     */
    public function throuth($pipes = [])
    {
        $this->pipes = $pipes;

        return $this;
    }

    /**
     * 设置最终处理这个载荷的回调.
     *
     * @param Closure $stack
     *
     * @return
     */
    public function then(Closure $stack)
    {
        $pipes = array_reduce(array_reverse($this->pipes), $this->carry(), $this->prepareStack($stack));

        return $pipes($this->payload);
    }
    /**
     * 设置要处理的对象
     *
     * @param CO_Input $payload
     * @return void
     */
    public function send($payload)
    {
        $this->payload = $payload;

        return $this;
    }
    /**
     * 解析中间件,并设定中间件的调用关系
     *
     * @return void
     */
    public function carry()
    {
        return function ($stack, $next) {
            return function ($payload) use ($stack,$next) {
                if (is_callable($next)) {
                    return $next($payload, $stack);
                } elseif(!is_object($next)) {
                    list($name,$params)=$this->parsePipeString($next);
                    $next=new $name();
                    $params=array_merge([$payload,$stack],$params);
                }else{
                    $params =[$payload,$stack];  
                }
                return method_exists($next, $this->method) ?
                        call_user_func([$next, $this->method], ...$params) :
                        $next(...$params);
            };
        };
    }
    /**
     * 将then中的参数处理成要用到的格式
     *
     * @param [type] $stack
     * @return void
     */
    public function prepareStack($stack){
        return function($payload) use ($stack){
            return $stack($payload);
        };
    }
    /**
     * 将 Debug\Handler:$a,$b 这样的字符串格式化成通用的中间件模式
     *
     * @param [type] $pipe
     * @return void
     */
    protected function parsePipeString($pipe)
    {
        list($name, $parameters) = array_pad(explode(':', $pipe, 2), 2, []);

        if (is_string($parameters)) {
            $parameters = explode(',', $parameters);
        }

        return [$name, $parameters];
    }
}
