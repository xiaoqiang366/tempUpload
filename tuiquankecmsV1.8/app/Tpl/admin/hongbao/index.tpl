<include file="public:header" />

<div class="subnav">
    <div class="content_menu ib_a blue line_x">
    	<a class="add fb J_showdialog" href="javascript:void(0);" data-uri="{:U('hongbao/add')}" data-title="新增红包" data-id="add" data-width="500" data-height="200"><em>新增红包</em></a>　
    </div>
</div>
<!--红本管理列表-->
<div class="pad_10" >
    <div class="J_tablelist table_list" data-acturi="{:U('zhibo/ajax_edit')}">
    <table width="100%" cellspacing="0">
        <thead>
            <tr>
                <th><input type="checkbox" id="checkall_t" class="J_checkall"></th>
                <th>ID</th>
                <th>金额</th>
                <th>红包份数</th>
                <th>创建时间</th>
                <th>推送时间</th>
                <th>{:L('status')}</th>
                <th>{:L('operations_manage')}</th>
            </tr>
        </thead>
    	<tbody>
    	  <volist name="list" id="val" >
            <tr>
                <td align="center"><input type="checkbox" class="J_checkitem" value="{$val.id}"></td>
                <td align="center">{$val.id}</td>
                <td align="center">￥{$val.price}</td>
                <td align="center">{$val.num}</td>
                <td align="center">{$val.add_time|frienddate}</td>
                <td align="center">{:date('m-d H:i:s',$val['push_time'])}</td>
                <td align="center">
                	<if condition="$val['status'] eq 1">
                		已推送 
                	<else/>
                	 待推送
                	</if>
                	
                </td>
                <td align="center">
					<a href="javascript:void(0);" class="J_confirmurl" data-uri="{:u('hongbao/deleted', array('id'=>$val['id']))}" data-acttype="ajax" data-msg="{:sprintf(L('confirm_delete_one'),$val['username'])}">{:L('delete')}</a> |              
               		<a href="javascript:;" class="J_showdialog" data-uri="{:u('hongbao/detail', array('id'=>$val['id'], 'menuid'=>$menuid))}" data-title="明细" data-id="add_score" data-width="500" data-height="370">明细</a>
                </td>
            </tr>
           </volist>
          
    	</tbody>
    </table>
    <div class="btn_wrap_fixed">
        <label class="select_all"><input type="checkbox" name="checkall" class="J_checkall">{:L('select_all')}/{:L('cancel')}</label>
        <input type="button" class="btn" data-tdtype="batch_action" data-acttype="ajax" data-uri="{:U('hongbao/deleted')}" data-name="id" data-msg="{:L('confirm_delete')}" value="{:L('delete')}" />
        <div id="pages">{$page}</div>
    </div>

    </div>
</div>
<include file="public:footer" />
</body>
</html>
<link rel="stylesheet" type="text/css" href="__STATIC__/js/calendar/calendar-blue.css"/>
<script type="text/javascript" src="__STATIC__/js/calendar/calendar.js"></script>
