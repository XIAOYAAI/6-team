<?php
/*
 * 登录控制器
 */
class LoginController{
    //上传留言板
    public function regi(){
        $data = $_POST;
        //$biao = $data['biao'];
        $shouji = $data["shouji"];
        $neirong = $data['neirong'];
        $img = $data['img'];
        $old_data = M()->query_sql("SELECT * FROM liu WHERE shouji='{$shouji}'");
        $old_data = current($old_data);
        $result = M()->add('liu',$data);
        if ($result) {
            echo ajax_return('200','插入成功','');
            exit;
        }else{
            echo ajax_return('404','插入失败','');
            exit;
        }
    }
    //查看留言板
    public function query(){
        $data = $_POST;
        $shouji = $data['shouji'];
        $old_data = M()->query_sql("SELECT * FROM liu WHERE shouji='{$shouji}'");
        //$old_data = current($old_data);//current()函数返回数组中的当前元素的值。
        $old_data1 = M()->query_sql("SELECT * FROM data WHERE shouji='{$shouji}'");
        $old_data1 = current($old_data1);
       /* $arr =[];
        while(i<=$old_data1){
            $arr[i]->$old_data1 = current($old_data1);
        };*/
        if (!empty($old_data)) {//empty()函数用于检查一个变量是否为空。
            echo ajax_return('505',$old_data,$old_data1);
            exit;   
        }else{
            echo ajax_return('404','用户不存在','');
            exit; 
        }
    }
}