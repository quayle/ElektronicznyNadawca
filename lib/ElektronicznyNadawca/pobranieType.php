<?php

namespace PocztaPolska\ElektronicznyNadawca;

class pobranieType
{

    /**
     * @var sposobPobraniaType $sposobPobrania
     */
    protected $sposobPobrania = null;

    /**
     * @var kwotaPobraniaType $kwotaPobrania
     */
    protected $kwotaPobrania = null;

    /**
     * @var anonymous52 $nrb
     */
    protected $nrb = null;

    /**
     * @var anonymous53 $tytulem
     */
    protected $tytulem = null;

    /**
     * @var boolean $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce
     */
    protected $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce = null;

    /**
     * @param sposobPobraniaType $sposobPobrania
     * @param kwotaPobraniaType $kwotaPobrania
     * @param anonymous52 $nrb
     * @param anonymous53 $tytulem
     * @param boolean $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce
     */
    public function __construct($sposobPobrania, $kwotaPobrania, $nrb, $tytulem, $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce)
    {
      $this->sposobPobrania = $sposobPobrania;
      $this->kwotaPobrania = $kwotaPobrania;
      $this->nrb = $nrb;
      $this->tytulem = $tytulem;
      $this->sprawdzenieZawartosciPrzesylkiPrzezOdbiorce = $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce;
    }

    /**
     * @return sposobPobraniaType
     */
    public function getSposobPobrania()
    {
      return $this->sposobPobrania;
    }

    /**
     * @param sposobPobraniaType $sposobPobrania
     * @return \PocztaPolska\ElektronicznyNadawca\pobranieType
     */
    public function setSposobPobrania($sposobPobrania)
    {
      $this->sposobPobrania = $sposobPobrania;
      return $this;
    }

    /**
     * @return kwotaPobraniaType
     */
    public function getKwotaPobrania()
    {
      return $this->kwotaPobrania;
    }

    /**
     * @param kwotaPobraniaType $kwotaPobrania
     * @return \PocztaPolska\ElektronicznyNadawca\pobranieType
     */
    public function setKwotaPobrania($kwotaPobrania)
    {
      $this->kwotaPobrania = $kwotaPobrania;
      return $this;
    }

    /**
     * @return anonymous52
     */
    public function getNrb()
    {
      return $this->nrb;
    }

    /**
     * @param anonymous52 $nrb
     * @return \PocztaPolska\ElektronicznyNadawca\pobranieType
     */
    public function setNrb($nrb)
    {
      $this->nrb = $nrb;
      return $this;
    }

    /**
     * @return anonymous53
     */
    public function getTytulem()
    {
      return $this->tytulem;
    }

    /**
     * @param anonymous53 $tytulem
     * @return \PocztaPolska\ElektronicznyNadawca\pobranieType
     */
    public function setTytulem($tytulem)
    {
      $this->tytulem = $tytulem;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSprawdzenieZawartosciPrzesylkiPrzezOdbiorce()
    {
      return $this->sprawdzenieZawartosciPrzesylkiPrzezOdbiorce;
    }

    /**
     * @param boolean $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce
     * @return \PocztaPolska\ElektronicznyNadawca\pobranieType
     */
    public function setSprawdzenieZawartosciPrzesylkiPrzezOdbiorce($sprawdzenieZawartosciPrzesylkiPrzezOdbiorce)
    {
      $this->sprawdzenieZawartosciPrzesylkiPrzezOdbiorce = $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce;
      return $this;
    }

}
