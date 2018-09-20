<?php 
//非法访问
if (!defined('BASECHECK')){
	header("HTTP/1.1 404 Not Found");
	header("Status: 404 Not Found");
	exit;
}
/**
 * 简体汉语语言包示例
 */

// ------------------------------------------------------------------------

$lang['mc_admin_title']='评论管理';

$lang['mc_admin_comment_all']='全部评论';

$lang['mc_admin_comment_approve']='已审核评论';
$lang['mc_admin_comment_draft']='待审核评论';
$lang['mc_admin_comment_trash']='作废评论';
$lang['mc_admin_comment_report']='举报投诉';
$lang['mc_admin_comment_keyword']='敏感词设置';
$lang['mc_admin_comment_forbidip']='屏蔽IP';
$lang['mc_admin_comment_forbiduser']='屏蔽用户';

$lang['mc_action_comment_approve']='审核评论权限';
$lang['mc_action_comment_trash']='作废评论权限';
$lang['mc_action_comment_del']='删除评论权限';
$lang['mc_action_comment_report']='处理评论举报权限';
$lang['mc_action_forbid_ip']='屏蔽IP权限';
$lang['mc_action_forbid_user']='屏蔽用户权限';
$lang['mc_action_keyword']='管理敏感词权限';

$lang['mc_admin_comment_filterby']='按所属站点: ';
$lang['mc_admin_comment_btn_filter']='筛选';
$lang['mc_admin_comment_btn_refresh']='刷新';
$lang['mc_admin_comment_btn_batapprove']='批量审批';
$lang['mc_admin_comment_btn_batback']='批量撤销';
$lang['mc_admin_comment_btn_batdel']='批量删除';
$lang['mc_admin_comment_btn_battrash']='批量删除';
$lang['mc_admin_comment_btn_battrashtodraft']='批量恢复';
$lang['mc_admin_comment_btn_add']='新建';

$lang['mc_admin_comment_label_id']='ID';
$lang['mc_admin_comment_label_tid']='评论主题';
$lang['mc_admin_comment_label_keyid']='站点评论Key';
$lang['mc_admin_comment_label_comment']='评论内容';
$lang['mc_admin_comment_label_creator']='评论人';
$lang['mc_admin_comment_label_create_time']='评论时间';
$lang['mc_admin_comment_label_exame_time']='审核时间';
$lang['mc_admin_comment_label_examiner']='审核人';
$lang['mc_admin_comment_label_type']='用户类型';
$lang['mc_admin_comment_label_action']='操作';
$lang['mc_admin_comment_label_reporter']='举报人';
$lang['mc_admin_comment_label_report_time']='举报时间';
$lang['mc_admin_comment_label_keyword']='敏感词';
$lang['mc_admin_comment_label_replaceword']='替换词';
$lang['mc_admin_comment_lable_site']='站点';
$lang['mc_admin_comment_lable_forbidip']='IP';
$lang['mc_admin_comment_lable_forbidip_time']='禁用时间';
$lang['mc_admin_comment_lable_forbiduser_time']='禁用时间';
$lang['mc_admin_comment_lable_forbiduser']='禁用用户';
?>