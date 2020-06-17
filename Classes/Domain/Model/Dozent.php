<?php

namespace MyVendor\DozentenTest\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Dozent extends AbstractEntity
{

    protected $id = '';
    protected $titel = '';
    protected $vorname = '';
    protected $name = '';
    protected $profil = '';

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getTitel()
    {
        return $this->titel;
    }

    /**
     * @param string $titel
     */
    public function setTitel($titel)
    {
        $this->titel = $titel;
    }

    /**
     * @return string
     */
    public function getVorname()
    {
        return $this->vorname;
    }

    /**
     * @param string $vorname
     */
    public function setVorname($vorname)
    {
        $this->vorname = $vorname;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getProfil()
    {
        return $this->profil;
    }

    /**
     * @param string $profil
     */
    public function setProfil($profil)
    {
        $this->profil = $profil;
    }

    /**
     * @return string
     */
    public function getBeruf()
    {
        return $this->beruf;
    }

    /**
     * @param string $beruf
     */
    public function setBeruf($beruf)
    {
        $this->beruf = $beruf;
    }

    /**
     * @return string
     */
    public function getKennung()
    {
        return $this->kennung;
    }

    /**
     * @param string $kennung
     */
    public function setKennung($kennung)
    {
        $this->kennung = $kennung;
    }
    protected $beruf = '';
    protected $kennung = '';

    /**
     * Dozent constructor.
     * @param string $id
     * @param string $titel
     * @param string $vorname
     * @param string $name
     * @param string $profil
     * @param string $beruf
     * @param string $kennung
     */
    public function __construct($id = ''
        , $titel = ''
        , $vorname = ''
        , $name = ''
        , $profil = ''
        , $beruf = ''
        , $kennung = '')
    {
        $this->id = $id;
        $this->titel = $titel;
        $this->vorname = $vorname;
        $this->name = $name;
        $this->profil = $profil;
        $this->beruf = $beruf;
        $this->kennung = $kennung;
    }

}
