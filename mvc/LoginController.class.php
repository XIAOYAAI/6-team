<?php
/*
 * 登录控制器
 */
class LoginController{
    /*
     * 插入方法
     */
    public function register(){
            $data = $_POST;
            $shouji = $data["shouji"];
            $name=$data["name"];
            $neirong=$data["neirong"];
            $img=$data["img"];
            $old_data = M()->query_sql("SELECT * FROM data WHERE shouji='{$shouji}'");
            $old_data = current($old_data);
            $result = M()->add("data", $data);
                if ($result) {
                    echo ajax_return("200", "插入成功", "");
                    exit;
                } else {
                    echo ajax_return("404", "插入失败", "");
                    exit;
                }
        }
    //查询数据库
    public function querysj(){
        $data = $_POST;
        $shouji = $data["shouji"];
        $old_data= M()->query_sql("SELECT * FROM data WHERE shouji='{$shouji}'");
        $old_data= current($old_data);
        if (!empty($old_data)) {
            echo ajax_return("505", "用户名已存在", "");
            exit;
        }
    }

    /*
     * 搜索方法
     */
    public function sousuo(){
        $data = $_POST;
        $shouji = $data["shouji"];
        $old_data = M()->query_sql("SELECT * FROM data WHERE shouji='{$shouji}'");
        $counta=count($old_data);
        echo ajax_return($counta,'',$old_data);
    }
    /*
     * 修改方法
     */
    public function update(){
        $data = $_POST;
        $id = $data["id"];
        $shouji=$data["shouji"];
        $name=$data["name"];
        $neirong=$data["neirong"];
        $img=$data["img"];
        $result=M()->update("data",Array('shouji'=>"$shouji",'name'=>"$name",'neirong'=>"$neirong",'img'=>"$img"),$id);
        echo "1";
    }





    /*
     * 加密方法
     */
    public function verify($str){
        $str=md5(md5($str)."bokan");
        return $str;
    }
}