<include file="public:header" />
<div class="subnav">
    <h1 class="title_2 line_x">公众号直播 - 设置</h1>
</div>

<div class="pad_lr_10">
	<form id="info_form" action="{:u('setting/edit')}" method="post">
	<table width="100%" class="table_form contentWrap">

       <tr width="150">
            <th>推送模式 :</th>
            <td>
            	  <select name="setting[zhibo_model]" class="J_tbcats mr10">
                        <option value="0"  <if condition="C('yh_zhibo_model')  eq '0'">selected</if> >自动推送</option>
						<option value="1"   <if condition="C('yh_zhibo_model')  eq '1'">selected</if>>手工推送</option>
                    </select>
            	
            </td>
        </tr>

			<tr width="150">
            <th>虚拟在线人数 :</th>
            <td><input type="text" name="setting[person_num]" size="5" class="input-text" value="{:C('yh_person_num')}" /></td>
        </tr>
        
        
        
        <tr width="150">
            <th>直播服务器地址 :</th>
            <td><input type="text" name="setting[zhibo_url]" placeholder="请登录tuiquanke.com获取" size="50" class="input-text" value="{:C('yh_zhibo_url')}" /></td>
        </tr>
        <tr>
            <th>店铺类型 :</th>
            <td>
                    <select name="setting[zhibo_shop_type]" class="J_tbcats mr10">
                        <option value="0"  <if condition="C('yh_zhibo_shop_type')  eq '0'">selected</if> >所有</option>
						<option value="B"   <if condition="C('yh_zhibo_shop_type')  eq 'B'">selected</if>>天猫商城</option>
						<option value="C" <if condition="C('yh_zhibo_shop_type') eq 'C'">selected</if> >淘宝集市</option>
                    </select>
              </td>
        </tr>
        
        <tr>
            <th width="150">价格区间 :</th>
            <td>
				最低：<input type="text" name="setting[zhibo_mix_price]" size="5" class="input-text" value="{:C('yh_zhibo_mix_price')}" /> 元 &nbsp; 
				最高：<input type="text" name="setting[zhibo_max_price]" size="5" class="input-text" value="{:C('yh_zhibo_max_price')}" /> 元
			</td>
        </tr>
        
         <tr>
            <th width="150">销量 :</th>
            <td>
				大于：<input type="text" name="setting[zhibo_mix_volume]" size="5" class="input-text" value="{:C('yh_zhibo_mix_volume')}" /> 件
				
			</td>
        </tr>
        
        
      
        
        <tr>
        	<th></th>
        	<td><input type="hidden" name="menuid"  value="{$menuid}"/><input type="submit" class="smt mr10" name="do" value="{:L('submit')}"/></td>
    	</tr>
	</table>
	</form>
</div>
<include file="public:footer" />
</body>
</html>