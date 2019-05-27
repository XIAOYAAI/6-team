//上传照片
var imgStr = [];
    $('#myUpload').upload({
        uploadPath:'php/upload.php',
        isMulti:true,
        width:'2.7rem',
        height:'2.7rem',
        callback:function(data){
            imgStr.push(data)
        }
});
$('#nei').on('click',function(){
	console.log('duan')
	$(this).html('')
})
$('.btn').on('click',function(){
    var time = new Date();
    imgStr= imgStr.join('-');
     console.log(imgStr)
    console.log('chenggong')
   $.ajax({
      url:'mvc/index.php?c=Login&a=regi',
      type:'post',
      data:{
        neirong:$('#nei').val(),
        shouji:localStorage.sjh,
        img:imgStr,
        time:formatDateTime(time)
      },success:function(data){
        var datas = JSON.parse(data)
        console.log(datas)
        if (datas.code=='200') {
            alert('发布成功')
            window.location.href='rji1.html'
        };
      }
   })
})
var formatDateTime = function (date) {  
                var y = date.getFullYear();  
                var m = date.getMonth() + 1;  
                m = m < 10 ? ('0' + m) : m;  
                var d = date.getDate();  
                d = d < 10 ? ('0' + d) : d;  
                var h = date.getHours();  
                h=h < 10 ? ('0' + h) : h;  
                var minute = date.getMinutes();  
                minute = minute < 10 ? ('0' + minute) : minute;  
                var second=date.getSeconds();  
                second=second < 10 ? ('0' + second) : second;  
                return y + '-' + m + '-' + d+' '+h+':'+minute+':'+second;  
            };