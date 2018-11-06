<?php 
namespace Middleware;
class Test{
    public $tokenName='CSRF-TOKEN';
    public $acceptUrl=[
        '/index/test'
    ];
    public $acceptMethod=['GET'];
    public function handle($ctrl,$next){
        if($this->isAcceptmethod($ctrl)||$this->isAcceptUrl($ctrl)||$this->isToken($ctrl)){
            setcookie($this->tokenName, $ctrl->session->token(), time() + 24 * 3600 * 7,'','',true,true);       
            return $next($ctrl);
        }else{
            echo "没通过csrf校验";
            exit();
        }
        // return $next($ctrl);
    }
    public function isToken($ctrl){
        $input=$ctrl->input;
        $token=$input->header($this->tokenName)??$input->get($this->tokenName)??$input->post($this->tokenName);
        // var_dump($input);
        // echo $token;
        // exit();
        return is_string($ctrl->session->token())&&is_string($token)&&$token===$ctrl->session->token();
    }
    /**
     * 检查url是不是在允许进入的名单 
     *
     * @param [type] $url
     * @return boolean
     */
    public function isAcceptUrl($ctrl){
        $url=$ctrl->input->url();
        return in_array($url,$this->acceptUrl);
    }
    /**
     * 检查方法是不是在允许名单 get post put delete 全是大写
     *
     * @param [type] $method
     * @return boolean
     */
    public function isAcceptmethod($ctrl){
        $method=$ctrl->input->method();
        return in_array($method,$this->acceptMethod);    
    }
}

