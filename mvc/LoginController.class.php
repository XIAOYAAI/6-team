<?php
/*
 * 登录控制器
 */
class LoginController{
    /*
     * 注册方法
     */
    public function register(){
        //if(IS_AJAX) {
            $data = $_POST;
            $username = $data["username"];
            $old_data = M()->query_sql("SELECT * FROM users WHERE username='{$username}'");
            //p($old_data);
            $old_data = current($old_data);//old_data返回的是多维数组，用current方法取数组指针为1的值
            //p($old_data);
            if (!empty($old_data)) {
                echo ajax_return("505", "用户名已存在", "");
                exit;
            } else {
                // $new_password = $this->verify($password);
                // $data["password"] = $new_password;
                $result = M()->add("users", $data);
                if ($result) {
                    echo ajax_return("200", "注册成功", "");
                    exit;
                } else {
                    echo ajax_return("404", "注册失败", "");
                    exit;
                }
            }
        }
    //}
    /*
     * 登录方法
     */
    public function login(){
        //if(IS_AJAX) {
            //p($_SERVER);die;
            //sleep(10);
            $data = $_POST;
            $username = $data["username"];
            $password = $data["password"];
            //p($data);
            $old_data = M()->query_sql("SELECT * FROM users WHERE username='{$username}'");
            //p($old_data);
            $old_data = current($old_data);
            //p($old_data);
            if (empty($old_data)) {
                echo ajax_return("505", "用户名不存在", "");
            } else {
                $new_password=$this->verify($password);
                if ($new_password !== $old_data['password']) {
                    echo ajax_return("403", "密码不正确", "");
                } else {
                    session_start();
                    $_SESSION["username"] = $username;
                    echo ajax_return("200", "登录成功", $username);
                }
            }
        }
    //}
    /*
     * 退出登录
     */
    public function logout(){
        //if(IS_AJAX){
            session_start();
            session_unset();
            session_destroy();
            echo ajax_return("200","退出成功","");
        //}
    }
    /*
     * 加密方法
     */
    public function verify($str){
        $str=md5(md5($str)."bokan");
        return $str;
    }
}