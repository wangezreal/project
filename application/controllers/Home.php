<?php
/**
 * Created by PhpStorm.
 * User: ezreal
 * Date: 17-8-24
 * Time: 下午11:34
 */
class Home extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {   $test = $this->init_nosql('memcache');
        $html = "<h2 style='text-align: center'>caicai is a beautiful girl</h2>";
        $testResult = $test->get("first");
        if($testResult ==''){
            $test->add("first",$html);

        }else{
            $test->delete('first');
            $test->add("first",$html);
        }
        $testResult = $test->get("first");
        echo $testResult;
    }
<VirtualHost *:80>
ServerAdmin webmaster@caicai.com
DocumentRoot /var/www/project
ServerName caicai.com
<Directory />
Options FollowSymLinks
AllowOverride All
</Directory>
<Directory /var/www/project>
Options Indexes FollowSymLinks MultiViews
AllowOverride All
Order allow,deny
allow from all
</Directory>

ScriptAlias /cgi-bin/ /usr/lib/cgi-bin/
<Directory "/usr/lib/cgi-bin">
AllowOverride None
Options +ExecCGI -MultiViews +SymLinksIfOwnerMatch
Order allow,deny
Allow from all
</Directory>

ErrorLog ${APACHE_LOG_DIR}/error.log

	# Possible values include: debug, info, notice, warn, error, crit,
	# alert, emerg.
	LogLevel warn

	CustomLog ${APACHE_LOG_DIR}/access.log combined

    Alias /doc/ "/usr/share/doc/"
    <Directory "/usr/share/doc/">
Options Indexes MultiViews FollowSymLinks
        AllowOverride None
        Order deny,allow
        Deny from all
        Allow from 127.0.0.0/255.0.0.0 ::1/128
</Directory>

</VirtualHost>


}