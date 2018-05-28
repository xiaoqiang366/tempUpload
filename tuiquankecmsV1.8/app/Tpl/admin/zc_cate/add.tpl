<!--添加栏目-->
<div class="dialog_content col_tab">
	<form id="info_form" action="{:U('zc_cate/add')}" method="post">
 
		<div class="J_panes">
        <div class="content_list pad_10">
	<table width="100%" class="table_form">
		<tr>
			<th>专场名称 :</th>
			<td>
				<input type="text" name="name" id="J_name" class="input-text" size="30">
			</td>
		</tr>
		<tr>
			<th>专场英文 :</th>
			<td>
				<input type="text" name="ename" id="J_ename" class="input-text" size="30">
			</td>
		</tr>
		
		<tr id="pic_url" class="bill_media">
      <th>图片290X190 :</th>
      <td>
          <input type="text" name="pic_url" id="J_img" class="input-text fl mr10" size="30">
          <div id="J_upload_img" class="upload_btn"><span>{:L('upload')}</span></div>
      </td>
    </tr>
    
    <tr id="banner_pic" class="bill_media">
      <th>图片1000X150 :</th>
      <td>
          <input type="text" name="banner_pic" id="J_imgs" class="input-text fl mr10" size="30">
          <div id="J_upload_imgs" class="upload_btn"><span>{:L('upload')}</span></div>
      </td>
    </tr>
    
    
		
		

		<tr>
			<th>状态 :</th>
            <td>
                <label><input type="radio" name="status" value="0" > 不显示</label>&nbsp;&nbsp;
                <label><input type="radio" name="status" value="1" checked> 显示</label>
            </td>
        </tr>

		 
	</table>
	</div>
        
        </div>
	</form>
</div>
<script src="__STATIC__/js/fileuploader.js"></script>
<script>
$(function(){
	$.formValidator.initConfig({formid:"info_form",autotip:true});
	$('#J_name').formValidator({onshow:lang.please_input+lang.items_cate_name,onfocus:lang.please_input+lang.items_cate_name}).inputValidator({min:1,onerror:lang.please_input+lang.items_cate_name});
	
	$('#info_form').ajaxForm({success:complate, dataType:'json'});
	function complate(result){
		if(result.status == 1){
			$.dialog.get(result.dialog).close();
			$.yhxia.tip({content:result.msg});
			window.location.reload();
		} else {
			$.yhxia.tip({content:result.msg, icon:'alert'});
		}
	}
	 //上传图片
    var img_uploader = new qq.FileUploaderBasic({
        allowedExtensions: ['jpg','gif','jpeg','png','bmp','pdg'],
        button: document.getElementById('J_upload_img'),
        multiple: false,
        action: "{:U('zc_cate/ajax_upload_img', array('type'=>'pic_url'))}",
        inputName: 'pic_url',
        forceMultipart: true, //用$_FILES
        messages: {
            typeError: lang.upload_type_error,
            sizeError: lang.upload_size_error,
            minSizeError: lang.upload_minsize_error,
            emptyError: lang.upload_empty_error,
            noFilesError: lang.upload_nofile_error,
            onLeave: lang.upload_onLeave
        },
        showMessage: function(message){
            $.yhxia.tip({content:message, icon:'error'});
        },
        onSubmit: function(id, fileName){
            $('#J_upload_img').addClass('btn_disabled').find('span').text(lang.uploading);
        },
        onComplete: function(id, fileName, result){
            $('#J_upload_img').removeClass('btn_disabled').find('span').text(lang.upload);
            if(result.status == '1'){
                $('#J_img').val(result.data);
            } else {
                $.yhxia.tip({content:result.msg, icon:'error'});
            }
        }
    });

    var extimg_uploader = new qq.FileUploaderBasic({
        allowedExtensions: ['jpg','gif','jpeg','png','bmp','pdg'],
        button: document.getElementById('J_upload_imgs'),
        multiple: false,
        action: "{:U('zc_cate/ajax_upload_img', array('type'=>'banner_pic'))}",
        inputName: 'banner_pic',
        forceMultipart: true, //用$_FILES
        messages: {
            typeError: lang.upload_type_error,
            sizeError: lang.upload_size_error,
            minSizeError: lang.upload_minsize_error,
            emptyError: lang.upload_empty_error,
            noFilesError: lang.upload_nofile_error,
            onLeave: lang.upload_onLeave
        },
        showMessage: function(message){
            $.yhxia.tip({content:message, icon:'error'});
        },
        onSubmit: function(id, fileName){
            $('#J_upload_imgs').addClass('btn_disabled').find('span').text(lang.uploading);
        },
        onComplete: function(id, fileName, result){
            $('#J_upload_imgs').removeClass('btn_disabled').find('span').text(lang.upload);
            if(result.status == '1'){
                $('#J_imgs').val(result.data);
            } else {
                $.yhxia.tip({content:result.msg, icon:'error'});
            }
        }
    });

});
</script>