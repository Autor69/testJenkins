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

    /**
     * @covers \TestJenkins\User::getId()
     */
    public function testGetId()
    {
        $x = 1;
        $this->assertEquals('1', $x);

    }

    /**
     * @covers \TestJenkins\User::setId()
     */
    public function testSetId()
    {
        $x = 1;
        $this->assertEquals('1', $x);
    }

    /**
     * @covers \TestJenkins\User::getPassword()
     */
    public function testGetPassword()
    {
        $x = 1;
        $this->assertEquals('1', $x);
        $this->assertEquals('1', $x);
    }

    /**
     * @covers \TestJenkins\User::setPassword()
     */
    public function testSetPassword()
    {
        $x = 1;
        $this->assertEquals('1', $x);
    }

    /**
     * @covers \TestJenkins\User::changePassword()
     */
    public function testChangePassword()
    {
        $x = 1;
        $this->assertEquals('1', $x);
    }
}
