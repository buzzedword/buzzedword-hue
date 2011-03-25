<?php
/* The core functionality of this library is to build the dynamic elements in both current standard and dynamic shifting
 * HTML 5 standards.
 * HUE - HTML Upscale Engine.
 */
 class the_doctype extends HUE
 {
	 public function __tostring()
	 {
		return $this->doctype(html5);
	 }
 }
 class the_title extends HUE
 {
	function __construct($id='')
	{
		$this->the_name = $id;
	}
	 public function _id($id)
	 {
		 $this->the_id = $id;
	 }
	 public function get_id()
	 {
		return $this->the_id;
	 }
	 public function __tostring()
	 {
		return $this->identify(html5);
	 }
 }
 class the_header extends HUE
 {
	function __construct($id='')
	{
		$this->the_id = $id;
		$this->the_class = '';
	}
	 public function _id($id)
	 {
		 $this->the_id = $id;
	 }
	 public function _class($class)
	 {
		$this->the_class = $class;
	 }
	 public function get_id()
	 {
		return $this->the_id;
	 }
	 public function get_class()
	 {
		return $this->the_class();
	 }
	 public function draw($position)
	 {
		return $this->header(html5, $position, $this->the_id, $this->the_class);
	 }
 }
  class the_nav extends HUE
 {
	function __construct($id='')
	{
		$this->the_id = $id;
		$this->the_class = '';
	}
	 public function _id($id)
	 {
		 $this->the_id = $id;
	 }
	 public function _class($class)
	 {
		$this->the_class = $class;
	 }
	 public function get_id()
	 {
		return $this->the_id;
	 }
	 public function get_class()
	 {
		return $this->the_class();
	 }
	 public function draw($position)
	 {
		return $this->nav(html5, $position, $this->the_id, $this->the_class);
	 }
 }
  class the_sidebar extends HUE
 {
	function __construct($id='')
	{
		$this->the_id = $id;
		$this->the_class = '';
	}
	 public function _id($id)
	 {
		 $this->the_id = $id;
	 }
	 public function _class($class)
	 {
		$this->the_class = $class;
	 }
	 public function get_id()
	 {
		return $this->the_id;
	 }
	 public function get_class()
	 {
		return $this->the_class();
	 }
	 public function draw($position)
	 {
		return $this->sidebar(html5, $position, $this->the_id, $this->the_class);
	 }
 }
  class the_section extends HUE
 {
	function __construct($id='')
	{
		$this->the_id = $id;
		$this->the_class = '';
	}
	 public function _id($id)
	 {
		 $this->the_id = $id;
	 }
	 public function _class($class)
	 {
		$this->the_class = $class;
	 }
	 public function get_id()
	 {
		return $this->the_id;
	 }
	 public function get_class()
	 {
		return $this->the_class();
	 }
	 public function draw($position)
	 {
		return $this->section(html5, $position, $this->the_id, $this->the_class);
	 }
 }
  class the_article extends HUE
 {
	function __construct($id='')
	{
		$this->the_id = $id;
		$this->the_class = '';
	}
	 public function _id($id)
	 {
		 $this->the_id = $id;
	 }
	 public function _class($class)
	 {
		$this->the_class = $class;
	 }
	 public function get_id()
	 {
		return $this->the_id;
	 }
	 public function get_class()
	 {
		return $this->the_class();
	 }
	 public function draw($position)
	 {
		return $this->article(html5, $position, $this->the_id, $this->the_class);
	 }
 }
 class the_footer extends HUE
 {
	function __construct($id='')
	{
		$this->the_id = $id;
		$this->the_class = '';
	}
	 public function _id($id)
	 {
		 $this->the_id = $id;
	 }
	 public function _class($class)
	 {
		$this->the_class = $class;
	 }
	 public function get_id()
	 {
		return $this->the_id;
	 }
	 public function get_class()
	 {
		return $this->the_class();
	 }
	 public function draw($position)
	 {
		return $this->footer(html5, $position, $this->the_id, $this->the_class);
	 }
 }
 class the_page extends Compass
 {
  function __construct($file)
  {
    $this->name =(($this->fetch($file) == true) ? pages . $file : pages . '404.php');
  }
  function draw()
  {
    return $this->name;
  }
 }
 ?>