var chart_xaxis_idx=-1,chart_series,chart_series_index=-1,temp_chart_title,currentChart=null,chart_data=null,nonJqplotSettings=null,currentSettings=null;
$(document).ready(function(){chart_series="columns";chart_xaxis_idx=$('select[name="chartXAxis"]').attr("value");$("#resizer").resizable({minHeight:240,minWidth:300});$("#resizer").bind("resizestop",function(){$("#querychart").height($("#resizer").height()*0.96);$("#querychart").width($("#resizer").width()*0.96);currentChart.replot({resetAxes:true})});nonJqplotSettings={chart:{type:"line",width:$("#resizer").width()-20,height:$("#resizer").height()-20}};currentSettings={grid:{drawBorder:false,shadow:false,
background:"rgba(0,0,0,0)"},axes:{xaxis:{label:$('input[name="xaxis_label"]').val(),labelRenderer:$.jqplot.CanvasAxisLabelRenderer},yaxis:{label:$('input[name="yaxis_label"]').val(),labelRenderer:$.jqplot.CanvasAxisLabelRenderer}},title:{text:$('input[name="chartTitle"]').attr("value"),escapeHtml:true},legend:{show:true,placement:"outsideGrid",location:"se"}};$("#querychart").html("");$('input[name="chartType"]').click(function(){nonJqplotSettings.chart.type=$(this).attr("value");drawChart();$(this).attr("value")==
"bar"||$(this).attr("value")=="column"?$("span.barStacked").show():$("span.barStacked").hide()});$('input[name="barStacked"]').click(function(){this.checked?$.extend(true,currentSettings,{stackSeries:true}):$.extend(true,currentSettings,{stackSeries:false});drawChart()});$('input[name="chartTitle"]').focus(function(){temp_chart_title=escapeHtml($(this).val())});$('input[name="chartTitle"]').keyup(function(){escapeHtml($(this).attr("value"));currentSettings.title=escapeHtml($('input[name="chartTitle"]').val());
drawChart()});$('input[name="chartTitle"]').blur(function(){$(this).val()!=temp_chart_title&&drawChart()});$('select[name="chartXAxis"]').change(function(){chart_xaxis_idx=this.value;drawChart()});$('select[name="chartSeries"]').change(function(){chart_series=this.value;chart_series_index=this.selectedIndex;drawChart()});$('input[name="xaxis_label"]').keyup(function(){currentSettings.axes.xaxis.label=$(this).attr("value");drawChart()});$('input[name="yaxis_label"]').keyup(function(){currentSettings.axes.yaxis.label=
$(this).attr("value");drawChart()})});
$("#tblchartform").live("submit",function(){if(!checkFormElementInRange(this,"session_max_rows",PMA_messages.strNotValidRowNumber,1)||!checkFormElementInRange(this,"pos",PMA_messages.strNotValidRowNumber,-1))return false;var a=$(this);if(!checkSqlQuery(a[0]))return false;$(".error").remove();var e=PMA_ajaxShowMessage();PMA_prepareForAjaxRequest(a);$.post(a.attr("action"),a.serialize(),function(b){if(b.success==true){$(".success").fadeOut();if(typeof b.chartData!="undefined"){chart_data=jQuery.parseJSON(b.chartData);
drawChart();$("#querychart").show()}}else{PMA_ajaxRemoveMessage(e);PMA_ajaxShowMessage(b.error,false);chart_data=null;drawChart()}PMA_ajaxRemoveMessage(e)},"json");return false});function drawChart(){nonJqplotSettings.chart.width=$("#resizer").width()-20;nonJqplotSettings.chart.height=$("#resizer").height()-20;currentChart!=null&&currentChart.destroy();currentChart=PMA_queryChart(chart_data,currentSettings,nonJqplotSettings)}
function in_array(a,e){for(var b=0;b<e.length;b++)if(e[b]==a)return true;return false}
function PMA_queryChart(a,e,b){if($("#querychart").length!=0){var d=[],f=[];$.each(a[0],function(h){d.push(h)});switch(b.chart.type){case "column":case "spline":case "line":case "bar":for(var i=0,c=0;c<d.length;c++)if(c!=chart_xaxis_idx){f[i]=[];if(chart_series=="columns"||chart_series==d[c]){$.each(a,function(h,g){f[i].push([g[d[chart_xaxis_idx]],parseFloat(g[d[c]])])});i++}}break;case "pie":if(chart_series!="columns"){f[0]=[];$.each(a,function(h,g){f[0].push([g[d[chart_xaxis_idx]],parseFloat(g[chart_series])])})}}a=
{title:{text:"",escapeHtml:true}};if(b.chart.type=="line")a.axes={xaxis:{},yaxis:{}};if(b.chart.type=="bar"){a.seriesDefaults={renderer:$.jqplot.BarRenderer,rendererOptions:{barDirection:"vertical",highlightMouseOver:true}};a.axes={xaxis:{renderer:$.jqplot.CategoryAxisRenderer},yaxis:{}}}if(b.chart.type=="spline")a.seriesDefaults={rendererOptions:{smooth:true}};if(b.chart.type=="pie")a.seriesDefaults={renderer:$.jqplot.PieRenderer,rendererOptions:{showDataLabels:true,highlightMouseOver:true,showDataLabels:true,
dataLabels:"value"}};$.extend(true,a,e);a.series=[];for(c=0;c<d.length;c++)if(parseInt(chart_xaxis_idx)!=c)if(chart_series=="columns"||chart_series==d[c])a.series.push({label:d[c]});return $.jqplot("querychart",f,a)}};
