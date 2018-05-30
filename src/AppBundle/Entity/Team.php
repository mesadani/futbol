<?php
/**
 * Created by PhpStorm.
 * User: Dani
 * Date: 30/05/2018
 * Time: 18:53
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="team")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 */
class Team
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=25, unique=true)
     */
    private $name;
    /**
     * @ORM\Column(type="string", length=254)
     */
    private $liga;

    /**
     * @ORM\Column(type="string", length=254)
     */
    private $division;

    /**
     * @ORM\Column(type="integer")
     */
    private $numJugadores;


    /**
     * @ORM\Column(type="integer")
     */
    private $capitanId;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Equipo
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set liga
     *
     * @param string $liga
     *
     * @return Equipo
     */
    public function setLiga($liga)
    {
        $this->liga = $liga;

        return $this;
    }

    /**
     * Get liga
     *
     * @return string
     */
    public function getLiga()
    {
        return $this->liga;
    }

    /**
     * Set division
     *
     * @param string $division
     *
     * @return Equipo
     */
    public function setDivision($division)
    {
        $this->division = $division;

        return $this;
    }

    /**
     * Get division
     *
     * @return string
     */
    public function getDivision()
    {
        return $this->division;
    }

    /**
     * Set numJugadores
     *
     * @param integer $numJugadores
     *
     * @return Equipo
     */
    public function setNumJugadores($numJugadores)
    {
        $this->numJugadores = $numJugadores;

        return $this;
    }

    /**
     * Get numJugadores
     *
     * @return integer
     */
    public function getNumJugadores()
    {
        return $this->numJugadores;
    }

    /**
     * Set capitanId
     *
     * @param integer $capitanId
     *
     * @return Equipo
     */
    public function setCapitanId($capitanId)
    {
        $this->capitanId = $capitanId;

        return $this;
    }

    /**
     * Get capitanId
     *
     * @return integer
     */
    public function getCapitanId()
    {
        return $this->capitanId;
    }
}