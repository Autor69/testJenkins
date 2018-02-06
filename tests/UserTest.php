<?php
/**
 * Created by PhpStorm.
 * User: martinpistak
 * Date: 06/02/2018
 * Time: 11:03
 */

namespace TestJenkins;

use PHPUnit\Framework\TestCase;


class UserTest extends TestCase
{

    public function testGetId()
    {
        $x = 1;
        $this->assertEquals('1', $x);

    }

    public function testSetId()
    {
        $x = 1;
        $this->assertEquals('1', $x);
    }

    public function testGetPassword()
    {
        $x = 1;
        $this->assertEquals('1', $x);
    }

    public function testSetPassword()
    {
        $x = 1;
        $this->assertEquals('1', $x);
    }

    public function testChangePassword()
    {
        $x = 1;
        $this->assertEquals('1', $x);
    }
}
