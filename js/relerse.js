//上传照片
var imgStr = [];
    $('#myUpload').upload({
        uploadPath:'php/upload.php',
        isMulti:true,
        width:'2.7rem',
        height:'2.7rem',
        callback:function(data){
            imgStr.push(data)
            console.log(data)
        }
});
$('#nei').on('click',function(){
	console.log('duan')
	$(this).html('')
})
$('.btn').on('click',function(){

})