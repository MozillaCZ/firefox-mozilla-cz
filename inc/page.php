<?php
class Page
{
	private $webUrl = 'http://firefox.mozilla.cz/';
	private $webName = 'Přejděte na Firefox';
	private $redirects = array(
		'/media/' => 'https://www.mozilla.org/cs/firefox/desktop/',
		'/jak-prejit/' => 'https://support.mozilla.org/cs/kb/Import%20z%C3%A1lo%C5%BEek%20a%20dal%C5%A1%C3%ADch%20dat%20z%20jin%C3%BDch%20prohl%C3%AD%C5%BEe%C4%8D%C5%AF',
		'/stahnout/' => 'http://www.mozilla.cz/stahnout/firefox/',
	);

	private $title = 'Mozilla Firefox';
	private $description;
	private $keywords;

	private $incPath;

	public function __construct()
	{
		error_reporting(E_ALL);
		$this->incPath = dirname(__FILE__);
	}

	public function redirect() {
		$requestUrl = filter_input(INPUT_SERVER, 'REQUEST_URI');
		if(isset($this->redirects[$requestUrl])) {
			header('HTTP/1.1 301 Moved Permanently');
			header(sprintf('Location: %s', $this->redirects[$requestUrl]));
			header('Connection: close');
			exit;
		}
	}

	public function setTitle($title, $prepend = true) {
		$this->title = $title . ( $prepend ? ' - ' . $this->webName : '' );
		return $this;
	}

	public function getTitle() {
		return $this->title;
	}

	public function setDescription($description) {
		$this->description = $description;
		return $this;
	}

	public function getDescription() {
		return $this->description;
	}

	public function setKeywords($keywords) {
		$this->keywords = $keywords;
		return $this;
	}

	public function getKeywords() {
		return $this->keywords;
	}

	public function getWebUrl() {
		return $this->webUrl;
	}

	public function getWebName() {
		return $this->webName;
	}

	public function getMeta() {
		$meta = array();
		if(!empty($this->description) && $this->description != 'XXX')  {
			$meta['description'] = $this->description;
		}
		if(!empty($this->keywords) && $this->keywords != 'XXX')  {
			$meta['keywords'] = $this->keywords;
		}
		return $meta;
	}

	public function includeTemplate($name, $variables = null)
	{
		if(!empty($variables) && is_array($variables)) {
			extract($variables);
		}
		require $this->incPath . '/tpl/' . $name . '.php';
	}

	public function getDownload($product)
	{
		include_once $this->incPath . '/config.php';
		require $this->incPath . '/download.php';
		return new Download($product);
	}
}

$page = new Page();
$page->redirect();
