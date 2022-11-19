<?php
$template->set_filenames(array('theme_admin_content' => dirname(__FILE__) . '/admin.tpl'));
$template->assign_var_from_handle('ADMIN_CONTENT', 'theme_admin_content');

define('THEME_ID', basename(dirname(dirname(__FILE__))));
define('ADMIN_PATH',   get_root_url() . 'admin.php?page=theme&theme=' . THEME_ID);

?>
