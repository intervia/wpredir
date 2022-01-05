# Redirect WordPress installed in a directory to root
If installed on example.com/shop/, this script would do a 301 redirect of all 
URLs within shop to the root.

For example:
example.com/shop/product1
would be redirected to:
example.com/product1.
   
# Basic instructions   
1.- Edit wp-config.php and add to the beginning:
$_oldir = 'shop';
incluce "redirect";
   
Note: Change 'shop' to the name of the directory where the current installation 
is located
   
2.- Upload redirect.php to the root of your WordPress installation.

You must delete or rename the directory of the old installation for it to work.