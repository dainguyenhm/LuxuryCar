<?php
require_once("controllers/base_controller.php");
require_once("models/news.php");
class NewsController extends BaseController
{
	
	public function __construct()
	{
		$this->folder = "news";
	}

	public function home(){
		$news = News::getAll();
		$data = array('news' => $news);
		$this->render('home',$data);
	}

	public function get_news_by_newsid(){
		$id = isset($_GET['id']) ? $_GET['id'] : "";
		if (!empty($id)) {
			$news = News::getNewsById($id);
			$data = array('news' => $news);
			$this->render('get_news_by_newsid',$data);
		}else{
			header("location:".URL_BASE);
		}
	}

}
?>