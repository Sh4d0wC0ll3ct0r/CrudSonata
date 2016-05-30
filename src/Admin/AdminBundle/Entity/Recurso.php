<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Recurso
 *
 * @ORM\Table(name="recurso", indexes={@ORM\Index(name="codEditorial", columns={"codEditorial"})})
 * @ORM\Entity
 */
class Recurso
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="ISBN", type="integer", nullable=false)
     */
    private $isbn;

    /**
     * @var string
     *
     * @ORM\Column(name="titulo", type="string", length=50, nullable=false)
     */
    private $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="resumen", type="string", length=255, nullable=false)
     */
    private $resumen;

    /**
     * @var integer
     *
     * @ORM\Column(name="totalPag", type="integer", nullable=false)
     */
    private $totalpag;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=30, nullable=false)
     */
    private $tipo;

    /**
     * @var \Editorial
     *
     * @ORM\ManyToOne(targetEntity="Editorial")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="codEditorial", referencedColumnName="codigo")
     * })
     */
    private $codeditorial;



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
     * Set isbn
     *
     * @param integer $isbn
     * @return Recurso
     */
    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;

        return $this;
    }

    /**
     * Get isbn
     *
     * @return integer 
     */
    public function getIsbn()
    {
        return $this->isbn;
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
     * Set totalpag
     *
     * @param integer $totalpag
     * @return Recurso
     */
    public function setTotalpag($totalpag)
    {
        $this->totalpag = $totalpag;

        return $this;
    }

    /**
     * Get totalpag
     *
     * @return integer 
     */
    public function getTotalpag()
    {
        return $this->totalpag;
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

    /**
     * Set codeditorial
     *
     * @param \Admin\AdminBundle\Entity\Editorial $codeditorial
     * @return Recurso
     */
    public function setCodeditorial(\Admin\AdminBundle\Entity\Editorial $codeditorial = null)
    {
        $this->codeditorial = $codeditorial;

        return $this;
    }

    /**
     * Get codeditorial
     *
     * @return \Admin\AdminBundle\Entity\Editorial 
     */
    public function getCodeditorial()
    {
        return $this->codeditorial;
    }
}
