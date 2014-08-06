<?
require_once("ham.php");
require_once("Twig/Autoloader.php");
Twig_Autoloader::register();

class Twig_Env
{
    public $loader;
    public $app = null;
    public $twig_env = null;

    public function __construct($app)
    {
        $this->app = $app;
        $this->_set_loader();
    }
    private function _set_loader()
    {
        $this
            ->loader = new Twig_Loader_Filesystem(
            $this
                ->app
                ->template_paths);
        $this
            ->twig_env = new Twig_Environment(
            $this
                ->loader,array('cache'=>'./cache',
                               'auto_reload'=>true,
                ));
    }
    public function render($template_name,$context=array())
    {
        return $this
            ->twig_env
            ->render($template_name,$context);
    }
    public function _print($template,$context)
    {
        echo $this->render($template,$context);
    }
    public function register_global($key,$val)
    {
        $this->twig_env->addGlobal($key,$val);
    }
    public function register_filter($func,$name) 
    {
        $filter = new Twig_Simple_Filter($name,$func);
        $this->twig_env->addFilter($filter);
    }


}

   
class Phlask extends Ham
{
    private $_twig_env;

    public function __construct($name,$cache=false,$log=true)
    {
        $this->_twig_env = new Twig_Env($this);
        parent::__construct($name,$cache,$log);
    }

    public function render($template,$context=array())
    {
        return $this->_twig_env->render($template,$context);
    }

    public function register_template_global($k,$v)
    {
        $this->_twig_env->register_global($k,$v);
    }

    public function register_template_filter($func,$name) 
    {
        $this->_twig_env->register_filter($func,$name);
    }
}

/*
class DataBase
{
    public $conn = null;
    public $str_type = null;
    public $ac = '';

    public function __construct($sqlite=false,$user='',$pw='',$host='',$port='',$dbname='')
    {
        if(sqlite != false) {
            $this->conn = new PDO('sqlite::memory:');
            $this->str_type = 'STRING';
        } else {
            $dsn = "mysql:host=$host;dbname=$dbname";
            $options = array(
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
            );
            $this->conn = new PDO($dsn,$user,$pw,$options);
            $this->str_type = 'VARCHAR';
            $this->ac = 'AUTO_INCREMENT';
        }
    
    }
    private function _init_table($tablename)
    {
        $this->conn->exec(
            "CREATE TABLE $tablename (
                id INTEGER NOT NULL $this->ac,
                name $this->str_type NOT NULL,
                

}
 */
?>
