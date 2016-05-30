<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Recurso
 *
 * @ORM\Table(name="recurso")
 * @ORM\Entity(repositoryClass="Admin\AdminBundle\Repository\RecursoRepository")
 */
class Recurso
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="ISBN", type="integer")
     */
    private $iSBN;

    /**
     * @var string
     *
     * @ORM\Column(name="titulo", type="string", length=50)
     */
    private $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="resumen", type="string", length=255)
     */
    private $resumen;

    /**
     * @var int
     *
     * @ORM\Column(name="totalPag", type="integer")
     */
    private $totalPag;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=30)
     */
    private $tipo;


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
     * Set iSBN
     *
     * @param integer $iSBN
     * @return Recurso
     */
    public function setISBN($iSBN)
    {
        $this->iSBN = $iSBN;

        return $this;
    }

    /**
     * Get iSBN
     *
     * @return integer 
     */
    public function getISBN()
    {
        return $this->iSBN;
    }

    /**
     * Set titulo
     *
     * @param string $titulo
     * @return Recurso
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string 
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set resumen
     *
     * @param string $resumen
     * @return Recurso
     */
    public function setResumen($resumen)
    {
        $this->resumen = $resumen;

        return $this;
    }

    /**
     * Get resumen
     *
     * @return string 
     */
    public function getResumen()
    {
        return $this->resumen;
    }

    /**
     * Set totalPag
     *
     * @param integer $totalPag
     * @return Recurso
     */
    public function setTotalPag($totalPag)
    {
        $this->totalPag = $totalPag;

        return $this;
    }

    /**
     * Get totalPag
     *
     * @return integer 
     */
    public function getTotalPag()
    {
        return $this->totalPag;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     * @return Recurso
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string 
     */
    public function getTipo()
    {
        return $this->tipo;
    }
}
