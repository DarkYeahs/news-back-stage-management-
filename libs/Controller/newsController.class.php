<?php
header("Content-type: text/html;charset=gb123");
class newsController {
	protected  $newobj;
	public $newsNum;
	public $data;
	public $errorMsg;
	protected $username;
	public function __construct() {
		if(!isset($this->username)) {
			session_start();
			$this->username = $_SESSION['auth']['username'];
		}
	}
	public function index() {
		$obj = M('news');
		$this->newsNum = $obj->count();
		$this->newsNum = $this->newsNum['COUNT(*)'];
		VIEW::assign(array('newsnum'=>$this->newsNum,'username'=>$this->username));
		VIEW::display('admin/index.html');
	}
	public function newslist() {
		$data = $this->getnewslist();
		VIEW::assign(array('data'=>$data,'username'=>$this->username));
		VIEW::display('admin/newslist.html');
	}
	public function getnewslist() {
		$obj = M('news');
		return $obj->findAll_orderby_dateline();
	}
	public function getnewsinfo() {
		$test = M('news');
		if(!empty($_GET['id'])) {
			$id = intval($_GET['id']);
			return $test->findOne_by_id($id);
		}else {
			return array();
		}
	}
	public function newsadd() {
		if(!isset($_POST['submit'])) {
			$this->data = $this->getnewsinfo();
			VIEW::assign(array('data'=>$this->data,'username'=>$this->username));
			VIEW::display("admin/newsadd.html");
		}else {
			$this->newssubmit();
		}
	}
	public function newssubmit() {
		$obj = M('news');
		extract($_POST);
		if(empty($title) ||empty($content)) {
			echo "测试能不能进入这个";
			$this->showmessage("请把新闻标题、内容补充完整再提交","admin.php?controller=news&&method=newsadd");
		} else {
			$title = daddslashes($title);
			$content = daddslashes($content);
			$author = daddslashes($author);
			$froms = daddslashes($froms);
			$time = date('y-m-d h:i:s',time());
			$this->data = array(
				'title' => $title,
				'content' => $content,
				'author' => $author,
				'froms' => $froms,
				'dateline' =>$time
			);
			echo time();
			if(!empty($_POST['id'])) {
				$obj->update($this->data,intval($_POST['id']));
				$this->showmessage("修改成功","admin.php?controller=news&&method=newslist");
			}else {
				$obj->insert($this->data);
				$this->showmessage("添加成功","admin.php?controller=news&&method=newslist");
			}
		}
	}
	public function newsdel() {
		$obj = M('news');
		$this->showmessage("","admin.php?controller=news&method=newslist");
		return $obj->del_by_id($_GET['id']);
	}
	public function showmessage($errorMsg,$url) {
		VIEW::assign(array('newsErrorMsg'=>$errorMsg,'newsUrl'=>$url));
		echo "<script>window.location.href='$url'</script>";
	}
}
?>













