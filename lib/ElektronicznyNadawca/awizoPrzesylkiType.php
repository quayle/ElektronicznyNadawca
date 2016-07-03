<?php

namespace PocztaPolska\ElektronicznyNadawca;

class awizoPrzesylkiType
{

    /**
     * @var date $dataPierwszegoAwizowania
     */
    protected $dataPierwszegoAwizowania = null;

    /**
     * @var date $dataDrugiegoAwizowania
     */
    protected $dataDrugiegoAwizowania = null;

    /**
     * @var miejscaPozostawieniaAwizoEnum $miejscePozostawienia
     */
    protected $miejscePozostawienia = null;

    /**
     * @var int $idPlacowkaPocztowaWydajaca
     */
    protected $idPlacowkaPocztowaWydajaca = null;

    /**
     * @param date $dataPierwszegoAwizowania
     * @param date $dataDrugiegoAwizowania
     * @param miejscaPozostawieniaAwizoEnum $miejscePozostawienia
     * @param int $idPlacowkaPocztowaWydajaca
     */
    public function __construct($dataPierwszegoAwizowania, $dataDrugiegoAwizowania, $miejscePozostawienia, $idPlacowkaPocztowaWydajaca)
    {
      $this->dataPierwszegoAwizowania = $dataPierwszegoAwizowania;
      $this->dataDrugiegoAwizowania = $dataDrugiegoAwizowania;
      $this->miejscePozostawienia = $miejscePozostawienia;
      $this->idPlacowkaPocztowaWydajaca = $idPlacowkaPocztowaWydajaca;
    }

    /**
     * @return date
     */
    public function getDataPierwszegoAwizowania()
    {
      return $this->dataPierwszegoAwizowania;
    }

    /**
     * @param date $dataPierwszegoAwizowania
     * @return \PocztaPolska\ElektronicznyNadawca\awizoPrzesylkiType
     */
    public function setDataPierwszegoAwizowania($dataPierwszegoAwizowania)
    {
      $this->dataPierwszegoAwizowania = $dataPierwszegoAwizowania;
      return $this;
    }

    /**
     * @return date
     */
    public function getDataDrugiegoAwizowania()
    {
      return $this->dataDrugiegoAwizowania;
    }

    /**
     * @param date $dataDrugiegoAwizowania
     * @return \PocztaPolska\ElektronicznyNadawca\awizoPrzesylkiType
     */
    public function setDataDrugiegoAwizowania($dataDrugiegoAwizowania)
    {
      $this->dataDrugiegoAwizowania = $dataDrugiegoAwizowania;
      return $this;
    }

    /**
     * @return miejscaPozostawieniaAwizoEnum
     */
    public function getMiejscePozostawienia()
    {
      return $this->miejscePozostawienia;
    }

    /**
     * @param miejscaPozostawieniaAwizoEnum $miejscePozostawienia
     * @return \PocztaPolska\ElektronicznyNadawca\awizoPrzesylkiType
     */
    public function setMiejscePozostawienia($miejscePozostawienia)
    {
      $this->miejscePozostawienia = $miejscePozostawienia;
      return $this;
    }

    /**
     * @return int
     */
    public function getIdPlacowkaPocztowaWydajaca()
    {
      return $this->idPlacowkaPocztowaWydajaca;
    }

    /**
     * @param int $idPlacowkaPocztowaWydajaca
     * @return \PocztaPolska\ElektronicznyNadawca\awizoPrzesylkiType
     */
    public function setIdPlacowkaPocztowaWydajaca($idPlacowkaPocztowaWydajaca)
    {
      $this->idPlacowkaPocztowaWydajaca = $idPlacowkaPocztowaWydajaca;
      return $this;
    }

}
