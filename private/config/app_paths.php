<?php

//Create Files & Directories Paths

# Config path
define("CONFIG_PATH" , dirname(__FILE__));
#private directory path
define("PRIVATE_PATH", dirname(CONFIG_PATH));
#Root path
define("ROOT_PATH", dirname(PRIVATE_PATH));


#Control path
define("CONTROL_PATH" , ROOT_PATH . "\control");
#view path
define("VIEW_PATH" , ROOT_PATH . "\\view");
#inc path
define("INC_PATH" , ROOT_PATH . "\inc");
#layout path
define("LAYOUT_PATH", INC_PATH . "\layout");
#CSS path
define("CSS_PATH" , LAYOUT_PATH . "\css");
#JS path
define("JS_PATH" , LAYOUT_PATH . "\js");


echo VIEW_PATH;



?>