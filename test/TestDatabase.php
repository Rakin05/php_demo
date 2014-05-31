<?php
/**
 * Created by PhpStorm.
 * User: Felix
 * Date: 31.05.14
 * Time: 21:15
 */

require_once __DIR__ . '/../src/DB.php';

class TestDatabase extends PHPUnit_Framework_TestCase {

    public function testConnection(){
        $db = new DB();
        $this->assertNotNull($db->getConnection());
    }

    public function testQueryResult(){
        $db = new DB();
        $result = $db->executeQuery("SELECT * FROM mitarbeiter");
        $this->assertNotNull($result);
        $this->assertCount(15,$result);
    }

}
 