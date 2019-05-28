// $(function(){
//         $('#phone').blur(function(){
//         var reg = /^1([38]\d|5[0-35-9]|7[3678])\d{8}$/;
//         if(!reg.test($('.number').val())){ 
//              $('.no').show()
//             return
//         }else{
//             $('.no').hide()
//         }
//         // console.log(1)
//     })
    
//         $('.butt').click(function(){
//             function Code(){
//                 var arr=new Array(0,1,2,3,4,5,6,7,8,9,'A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
//                 var c='';
//                 //$('#code').val('');
//                 for(var i=0;i<4;i++){
//                     var index=Math.floor(Math.random()*arr.length);
//                      c+=arr[index];
//                      console.log(c)
//                 }
//                 alert(c)
//                 $('.denglu').click(function(){
//                     console.log(c)
//                     if($('#phone').val()==''){
//                         alert('请输入手机号')
//                         return
//                     }
//                     if($('.nums').val()==''){
//                         alert('请输入验证码')
//                         return
//                     }
//                     if($('.nums').val()==c){
//                         alert('登录成功')
//                         localStorage.sjh=JSON.stringify({sjh:$('#phone').val()})
//                     }else{
//                         $('.yw').show()
//                     }
//                     // var reg = /^1([38]\d|5[0-35-9]|7[3678])\d{8}$/;
//                     //     if(!reg.test($('.number').val())){ 
//                     //         $('.no').show()
//                     //         return
//                     //     }else{
//                     //         $('.no').hide()
//                     //     }
//                         // if($('.no').hide()||$('.nums').val()==''){
//                         //     alert('登录成功')
//                         //     localStorage.sjh=JSON.stringify({sjh:$('#phone').val()})
//                         // }
//                 })
//             }
//             Code();
//         })
// })



$(function(){
    $('#phone').blur(function(){
    var reg = /^1([38]\d|5[0-35-9]|7[3678])\d{8}$/;
    if(!reg.test($('.number').val())){ 
         $('.no').show()
        return
    }else{
        $('.no').hide()
    }
    // console.log(1)
})

    $('.butt').click(function(){
        function Code(){
            var arr=new Array(0,1,2,3,4,5,6,7,8,9,'A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
            var c='';
            //$('#code').val('');
            for(var i=0;i<4;i++){
                var index=Math.floor(Math.random()*arr.length);
                 c+=arr[index];
                 console.log(c)
            }
            $('.nums').blur(function(){
                if($('.nums').val()==c){
                    $('.yw').hide()
                }else{
                    $('.yw').show()
                }
            })
            alert(c)
            $('.denglu').click(function(){
                if($('#phone').val()==''){
                    alert('请输入手机号')
                    return
                }
                if(c==$('.nums').val()){
                    // alert('登录成功')
                    // localStorage.sjh=JSON.stringify({sjh:$('#phone').val()})
                }else{
                    $('.yw').show()
                }
                var reg = /^1([38]\d|5[0-35-9]|7[3678])\d{8}$/;
                    if(!reg.test($('.number').val())){ 
                        $('.no').show()
                        return
                    }else{
                        $('.no').hide()
                    }
                    if($('.no').hide()&&$('.nums').val()==c){
                        alert('登录成功')
                        window.location.href="main.html"
                        // $('#phone').val('')
                        $('.nums').val('')
                        $('.no').hide()
                        localStorage.sjh=$('#phone').val();
                        console.log(localStorage.sjh)
                    }
            })
        }
        Code();
    })
})