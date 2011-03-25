<?php
class Compass
{
  function dirSearch()
  {
    $navDirectory = opendir("./buzz-content/page/");
    while($entryName = readdir($navDirectory)) {$listNav[] = $entryName;}
    closedir($navDirectory);
    foreach($listNav as $item)
    {
      if (substr("$item", 0, 1) != "."){$this->item[] = $item;}
    }
    
  }
  public function fetch($file)
  {
    $this->dirSearch();
    return array_search($file, $this->item);
  }
}
?>