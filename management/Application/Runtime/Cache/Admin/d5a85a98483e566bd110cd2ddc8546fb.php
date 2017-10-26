<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="renderer" content="webkit">
<title></title>
<link rel="stylesheet" href="<?php echo (ADMIN_CSS_URL); ?>pintuer.css">
<link rel="stylesheet" href="<?php echo (ADMIN_CSS_URL); ?>admin.css">
<link rel="stylesheet" href="<?php echo (ADMIN_CSS_URL); ?>foundation-datepicker.css">
<script src="<?php echo (ADMIN_JS_URL); ?>jquery.js"></script>
<script src="<?php echo (ADMIN_JS_URL); ?>pintuer.js"></script>
<script src="<?php echo (ADMIN_JS_URL); ?>jquery.cityselect.js"></script>
<script type="text/javascript" charset="utf-8" src="/health/management/Application/Public/Ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/health/management/Application/Public/Ueditor/ueditor.all.min.js"> </script>
<script type="text/javascript" charset="utf-8" src="/health/management/Application/Public/Ueditor/lang/zh-cn/zh-cn.js"></script>
<script src="<?php echo (ADMIN_JS_URL); ?>foundation-datepicker.min.js"></script>
<script src="<?php echo (ADMIN_JS_URL); ?>locales/foundation-datepicker.zh-CN.js"></script> 
<style type="text/css">
    .tips{
      color: red;
      line-height: 40px;
      margin-left: 20px;
    }
    #nav{ width:100%; height:30px; background:#00A2CA;} 
    #nav li{display:inline; height:60px} 
    #nav li {display:inline-block; padding:0 20px; height:30px; line-height:30px;
                color:#FFF; font-family:"5FAE8F6F96C59ED1"; font-size:12px} 
    #nav li:hover{background:#0095BB;cursor: pointer;}
    /*设置鼠标滑过或悬停时变化的背景颜色 */
    .tab-front{
      background:#0095BB;
    }
    
</style>
</head>
<body>
<div class="panel admin-panel">
      <div class="panel-head" id="add">
       <ul id="nav"> 
          <li class="tab-front">基本信息</li>
      </ul> 
      </div>
    <div class="body-content">
    <form method="post" class="form-x" action="/health/management/Application/index.php/Admin/Relative/edit/relative_id/11" name="fileUploadForm" enctype="multipart/form-data">
    <input type="hidden" value="<?php echo $data['relative_id']; ?>" name="relative_id" />
    <div class="div_tab" style="display:block;">  
     <div class="form-group">
        <div class="label">
          <label>所属用户ID：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="<?php echo $data['user_id']; ?>" name="user_id" />
          <span class="tips">*</span>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>姓名：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="<?php echo $data['relative_name']; ?>" name="relative_name" />
          <span class="tips">*</span>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>性别：</label>
        </div>
        <div class="field">
          <label><input <?php echo $data['relative_sex']=='男'?'checked="checked"':null ?> name="relative_sex" type="radio" value="男"/>男</label>
          <label><input <?php echo $data['relative_sex']=='女'?'checked="checked"':null ?> name="relative_sex" type="radio" value="女"/>女</label>
          <span class="tips">*</span>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>年龄：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="<?php echo $data['relative_age']; ?>" name="relative_age" />
          <span class="tips">*</span>
        </div>
      </div>
      <div class="clear"></div>
     <div class="form-group">
        <div class="label">
          <label>居住地：</label>
        </div>
        <div id="city" class="field">
            <select name="prov" class="prov"></select>   
            <select name="city" class="city" disabled="disabled"></select>  
            <select name="dist" class="dist" disabled="disabled"></select>
            <span class="tips">*</span>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>关系：</label>
        </div>
        <div class="field">
          <select name="relative_relation">
            <option <?php echo $data['relative_relation']=='本人'?'selected="selected"':null ?> value="本人">本人</option>
            <option <?php echo $data['relative_relation']=='家庭成员'?'selected="selected"':null ?>  value="家庭成员">家庭成员</option>
            <option <?php echo $data['relative_relation']=='亲戚'?'selected="selected"':null ?>  value="亲戚">亲戚</option>
            <option <?php echo $data['relative_relation']=='朋友'?'selected="selected"':null ?>  value="朋友">朋友</option>
            <option <?php echo $data['relative_relation']=='其他'?'selected="selected"':null ?>  value="其他">其他</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>电话：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="<?php echo $data['relative_phone']; ?>" name="relative_phone" />
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>出生日期：</label>
        </div>
        <div class="field">
          <input type="text" id="relative_date" class="input w50" value="<?php echo $data['relative_date']; ?>" name="relative_date" />
        </div>
      </div>
      </div>
     
      <!-- 提交 -->
      <div class="form-group" style="margin-left: 200px;margin-top: 40px">
        <div class="field">
          <button class="button bg-main icon-check-square-o" type="submit"> 提交</button>
        </div>
      </div>
    </form>
  </div>
</div>

</body>
<script type="text/javascript">
  $('#relative_date').fdatepicker();
  $("#city").citySelect({   
    url:"<?php echo (ADMIN_JS_URL); ?>city.min.js",   
    prov:"<?php echo ($data["relative_city"]["0"]); ?>", //省份  
    city:"<?php echo ($data["relative_city"]["1"]); ?>", //城市  
    dist:"<?php echo ($data["relative_city"]["2"]); ?>", //区县  
    nodata:"none" //当子集无数据时，隐藏select  
});
</script>
</html>