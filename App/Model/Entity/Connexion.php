<?php
namespace App\Model\Entity;

use Core\Entity\Entity;

class Connexion extends Entity
{
	private $_id;
	private $_userId;
	private $_datetime;
	private $_action;

	public function getId()
    {
        return $this->_id;
    }

    public function setId($id)
    {
        $this->_id = $id;

        return $this;
    }

    public function getUserId()
    {
        return $this->_userId;
    }

    public function setUserId($userId)
    {
        $this->_userId = $userId;

        return $this;
    }

    public function getDatetime()
    {
        return $this->_datetime;
    }

    public function setDatetime($datetime)
    {
        $this->_datetime = $datetime;

        return $this;
    }

    public function getAction()
    {
        return $this->_action;
    }

    public function setAction($action)
    {
        $this->_action = $action;

        return $this;
    }
}