<?php

namespace PocztaPolska\ElektronicznyNadawca;

class doreczeniePrzesylkiType
{

    /**
     * @var \DateTime $data
     */
    protected $data = null;

    /**
     * @var string $osobaOdbierajaca
     */
    protected $osobaOdbierajaca = null;

    /**
     * @var podmiotDoreczeniaEnum $podmiotDoreczenia
     */
    protected $podmiotDoreczenia = null;

    /**
     * @param \DateTime $data
     * @param string $osobaOdbierajaca
     * @param podmiotDoreczeniaEnum $podmiotDoreczenia
     */
    public function __construct(\DateTime $data, $osobaOdbierajaca, $podmiotDoreczenia)
    {
      $this->data = $data->format(\DateTime::ATOM);
      $this->osobaOdbierajaca = $osobaOdbierajaca;
      $this->podmiotDoreczenia = $podmiotDoreczenia;
    }

    /**
     * @return \DateTime
     */
    public function getData()
    {
      if ($this->data == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->data);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $data
     * @return \PocztaPolska\ElektronicznyNadawca\doreczeniePrzesylkiType
     */
    public function setData(\DateTime $data)
    {
      $this->data = $data->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getOsobaOdbierajaca()
    {
      return $this->osobaOdbierajaca;
    }

    /**
     * @param string $osobaOdbierajaca
     * @return \PocztaPolska\ElektronicznyNadawca\doreczeniePrzesylkiType
     */
    public function setOsobaOdbierajaca($osobaOdbierajaca)
    {
      $this->osobaOdbierajaca = $osobaOdbierajaca;
      return $this;
    }

    /**
     * @return podmiotDoreczeniaEnum
     */
    public function getPodmiotDoreczenia()
    {
      return $this->podmiotDoreczenia;
    }

    /**
     * @param podmiotDoreczeniaEnum $podmiotDoreczenia
     * @return \PocztaPolska\ElektronicznyNadawca\doreczeniePrzesylkiType
     */
    public function setPodmiotDoreczenia($podmiotDoreczenia)
    {
      $this->podmiotDoreczenia = $podmiotDoreczenia;
      return $this;
    }

}
