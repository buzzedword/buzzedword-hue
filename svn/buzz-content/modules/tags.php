<?php
/**
 * Builds logic to determine whether or not to use HTML5 or XHTML1.0 tags and doctypes
 */
 
class HUE
{
  function identify($html5)
  {
	$output = (($html5 == true) ? '<title>HTML 5 Standards Mode</title>' . "\n" : '<title>XHTML 1.0 Strict Standards Mode</title>' . "\n");
	return $output;
  }

  function doctype($html5)
  {
    $output = (($html5 == true) ? '<!DOCTYPE html>' . "\n" : '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">' . "\n");
    return $output;
  }
  
  function header($html5, $position, $id, $class)
  {
    if ($html5)
    {
      if ($position == 'alpha')
      {
        $output = (($id == '') ? '<header' . $the_class = (($class == '')? '' : ' class="' . $class . '"') . '>' . "\n" : '<header id="' . $id . '"' . $the_class = (($class == '')? '' : ' class="' . $class . '"') . '>' . "\n");
      }
      else if ($position == 'omega')
      {
        $output = '</header>' . "\n";
      }
    }
    else
    {
      if ($position == 'alpha')
      {
        $output = (($id == '') ? '<div class="header' . $the_class = (($class == '')? '' : ' ' . $class) . '">' . "\n" : '<div id="' . $id . '" class="header' . $the_class = (($class == '')? '' : ' ' . $class) . '">' . "\n");
      }
      else if ($position == 'omega')
      {
      $output = '</div>' . "\n";
      }
    }
    return $output;
  }
  
  function nav($html5, $position, $id, $class)
  {
    if ($html5)
    {
      if ($position == 'alpha')
      {
        $output = (($id == '') ? '<nav' . $the_class = (($class == '')? '' : ' class="' . $class . '"') . '>' . "\n" : '<nav id="' . $id . '"' . $the_class = (($class == '')? '' : ' class="' . $class . '"') . '>' . "\n");
      }
      else if ($position == 'omega')
      {
        $output = '</nav>' . "\n";
      }
    }
    else
    {
      if ($position == 'alpha')
      {
        $output = (($id == '') ? '<div class="navigation' . $the_class = (($class == '')? '' : ' ' . $class) . '">' . "\n" : '<div id="' . $id . '" class="navigation' . $the_class = (($class == '')? '' : ' ' . $class) . '">' . "\n");
      }
      else if ($position == 'omega')
      {
      $output = '</div>' . "\n";
      }
    }
    return $output;
  }
  
  function sidebar($html5, $position, $id, $class)
  {
    if ($html5)
    {
      if ($position == 'alpha')
      {
        $output = (($id == '') ? '<nav' . $the_class = (($class == '')? '' : ' class="' . $class . '"') . '>' . "\n" : '<nav id="' . $id . '"' . $the_class = (($class == '')? '' : ' class="' . $class . '"') . '>' . "\n");
      }
      else if ($position == 'omega')
      {
        $output = '</nav>' . "\n";
      }
    }
    else
    {
      if ($position == 'alpha')
      {
        $output = (($id == '') ? '<div class="sidebar' . $the_class = (($class == '')? '' : ' ' . $class) . '">' . "\n" : '<div id="' . $id . '" class="sidebar' . $the_class = (($class == '')? '' : ' ' . $class) . '">' . "\n");
      }
      else if ($position == 'omega')
      {
      $output = '</div>' . "\n";
      }
    }
    return $output;
  }
 
  function section($html5, $position, $id, $class)
  {
    if ($html5)
    {
      if ($position == 'alpha')
      {
        $output = (($id == '') ? '<section' . $the_class = (($class == '')? '' : ' class="' . $class . '"') . '>' . "\n" : '<section id="' . $id . '"' . $the_class = (($class == '')? '' : ' class="' . $class . '"') . '>' . "\n");
      }
      else if ($position == 'omega')
      {
        $output = '</section>' . "\n";
      }
    }
    else
    {
      if ($position == 'alpha')
      {
        $output = (($id == '') ? '<div class="section' . $the_class = (($class == '')? '' : ' ' . $class) . '">' . "\n" : '<div id="' . $id . '" class="section' . $the_class = (($class == '')? '' : ' ' . $class) . '">' . "\n");
      }
      else if ($position == 'omega')
      {
      $output = '</div>' . "\n";
      }
    }
    return $output;
  }
  
  function article($html5, $position, $id, $class)
  {
    if ($html5)
    {
      if ($position == 'alpha')
      {
        $output = (($id == '') ? '<article' . $the_class = (($class == '')? '' : ' class="' . $class . '"') . '>' . "\n" : '<article id="' . $id . '"' . $the_class = (($class == '')? '' : ' class="' . $class . '"') . '>' . "\n");
      }
      else if ($position == 'omega')
      {
        $output = '</article>' . "\n";
      }
    }
    else
    {
      if ($position == 'alpha')
      {
        $output = (($id == '') ? '<div class="post' . $the_class = (($class == '')? '' : ' ' . $class) . '">' . "\n" : '<div id="' . $id . '" class="post' . $the_class = (($class == '')? '' : ' ' . $class) . '">' . "\n");
      }
      else if ($position == 'omega')
      {
      $output = '</div>' . "\n";
      }
    }
    return $output;
  }
  
  function footer($html5, $position, $id, $class)
  {
    if ($html5)
    {
      if ($position == 'alpha')
      {
        $output = (($id == '') ? '<footer' . $the_class = (($class == '')? '' : ' class="' . $class . '"') . '>' . "\n" : '<footer id="' . $id . '"' . $the_class = (($class == '')? '' : ' class="' . $class . '"') . '>' . "\n");
      }
      else if ($position == 'omega')
      {
        $output = '</footer>' . "\n";
      }
    }
    else
    {
      if ($position == 'alpha')
      {
        $output = (($id == '') ? '<div class="footer' . $the_class = (($class == '')? '' : ' ' . $class) . '">' . "\n" : '<div id="' . $id . '" class="footer' . $the_class = (($class == '')? '' : ' ' . $class) . '">' . "\n");
      }
      else if ($position == 'omega')
      {
      $output = '</div>' . "\n";
      }
    }
    return $output;
  }
}
?>