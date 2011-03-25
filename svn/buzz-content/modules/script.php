<?php
echo ((html5 == true) ? '<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>' . "\n" : '<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>' . "\n");
echo ((html5 == true) ? '<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.4/jquery-ui.min.js"></script>' . "\n" : '<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.4/jquery-ui.min.js"></script>' . "\n");
echo ((html5 == true) ? '<script src="' . approot . 'scripts/jquery.curvycorners.min.js' . '"></script>' . "\n" : '<script type="text/javascript" src="' . approot . 'scripts/jquery.curvycorners.min.js' . '"></script>' . "\n");
echo ((html5 == true) ? '<script src="http://ajax.microsoft.com/ajax/jquery.validate/1.7/jquery.validate.pack.js"></script>' . "\n" : '<script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery.validate/1.7/jquery.validate.pack.js"></script>' . "\n");
echo ((html5 == true) ? '<script src="' . approot . 'scripts/core.js' . '"></script>' . "\n" : '<script type="text/javascript" src="' . approot . 'scripts/core.js' . '"></script>' . "\n");
?>