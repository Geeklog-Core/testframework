<?php 

/**
* Tests for lib-common
*/

require_once 'PHPUnit/Framework.php';
require_once 'config.php';
require_once getPath('tests').'/files/classes/xmldb.class.php';
require_once getPath('public').'/lib-common.php';

class libcommonTest extends PHPUnit_Framework_TestCase 
{	
	protected function setUp() {

    }
	/*
	public function testCreateWithHttpUrl() {
        $url = 'http://www.example.com/image.png';
        $fixture = '<img src="' . $url . '" alt="">';
 
        $this->assertEquals($fixture, COM_createImage($url));
    }
	
	/**
    * @link http://project.geeklog.net/tracking/view.php?id=881
    */
	/*
    public function testCreateWithHttpsUrl() {
        $url = 'https://www.example.com/image.png';
        $fixture = '<img src="' . $url . '" alt="">';
 
        $this->assertEquals($fixture, COM_createImage($url));
    }
 
    public function testCreateWithoutUrl() {
        global $_CONF;

        $image = '/image.png';
        $url = $_CONF['layout_url'] . $image;
        $fixture = '<img src="' . $url . '" alt="">';
 
        $this->assertFalse(empty($_CONF['layout_url']));
        $this->assertEquals($fixture, COM_createImage($url));
    }*/
}

?>
