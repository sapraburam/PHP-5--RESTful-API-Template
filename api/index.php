<?php
// Allow Requests From Any Domain
header('Access-Control-Allow-Origin: *');

// Dependencies
require 'ezSQL/ez_sql_core.php';
require 'ezSQL/ez_sql_mysql.php';

// Init Epiphany
include_once 'Epiphany/Epi.php';
Epi::setPath('base', 'Epiphany');
Epi::setPath('config', dirname(__FILE__));
Epi::init('route');

// Redirect requests with no method call
getRoute()->get('/', array('myAPI', 'home'));

// Add an HTTP GET route that returns static result
getRoute()->get('/example', array('myAPI', 'exampleStaticMethod'));

// Add an HTTP GET route that returns db result
// Update credentials in Database::instance() + query
// in myAPI::exampleDatabaseMethod() to use this
getRoute()->get('/dbexample', array('myAPI', 'exampleDatabaseMethod'));

getRoute()->run();

class Database
{
   private static $instance;

   private function __construct()
   {
   }

   public static function instance()
   {
      return self::$instance ? self::$instance : self::$instance = new ezSQL_mysql('db-user', 'db-pass', 'db-name', 'db-hostname');
   }
}

class myAPI
{
    public static function home() {
        header('Location: http://yourdomain.com');
        exit();
    }
    
    public static function exampleStaticMethod() {
        return self::output(array('fooKey' => 'barValue'));
    }
    
    public static function exampleDatabaseMethod() {
        $query = 'SELECT * FROM table ORDER BY field DESC';

        if(!$results = Database::instance()->get_results($query)){
            $results = array('error' => 'No results.');
        }

        return self::output($results);
    }

    private static function output( $data ) {
        header("Content-Type: application/json; charset=utf-8");

        if(isset(Database::instance()->num_rows) AND Database::instance()->num_rows >= 1) {
            $data = array('results' => $data);
        }

        echo json_encode($data);
        exit;
    }
}