<?php
/**
 * Created by PhpStorm.
 * User: Dani
 * Date: 30/05/2018
 * Time: 19:27
 */

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Table(name="player")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 */

class Player
{

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=25, unique=false)
     */
    private $username;


    /**
     * @ORM\Column(type="string", length=25, unique=false)
     */
    private $nick;

    /**
     * @ORM\Column(type="string", length=25, unique=false)
     */
    private $number;

    /**
     * @ORM\Column(type="string", length=25, unique=false)
     */
    private $position;

    /**
     * @ORM\Column(type="string", length=25, unique=false)
     */
    private $team;

    public function getId()
    {
        return $this->id;
    }


    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setNick($nick)
    {
        $this->nick = $nick;

        return $this;
    }

    public function getNick()
    {
        return $this->nick;
    }
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    public function getNumber()
    {
        return $this->number;
    }
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    public function getPosition()
    {
        return $this->position;
    }

    public function setTeam($team)
    {
        $this->team = $team;

        return $this;
    }

    public function getTeam()
    {
        return $this->team;
    }


}