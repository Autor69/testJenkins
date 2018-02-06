<?php

namespace TestJenkins;


class User
{
    /**
     * @var int
     */
    private $id;
    /**
     * @var string
     */
    private $password;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * User constructor.
     */
    public function __construct()
    {
        $this->id = 1;
        $this->password = "pgladksj";
    }

    public function changePassword($new_password)
    {
        $this->setPassword($new_password);
    }
}
