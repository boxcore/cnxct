<?php
/*
	$Date$
	$Author$
	$Id$
*/
class IndexAction extends Action{
    public function index(){
        header("Content-Type:text/html; charset=utf-8");
        echo "<div style='font-weight:normal;color:blue;float:left;width:345px;text-align:center;border:1px solid silver;background:#E8EFFF;padding:8px;font-size:14px;font-family:Tahoma'>^_^ Hello,欢迎使用<span style='font-weight:bold;color:red'>ThinkPHP</span></div>";
    }

	public function insert() {
		$guestbook = D('Guestbook');
		if($guestbook->create()) {
			$guestbook->add();
			$guestbook->redirct();
		}
		else {
			exit($this->getError().'[ <A HREF="javascript:history.back()">'.L('goback').'</A> ]');
		}
	}
}
?>