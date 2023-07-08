<?php

namespace App\Entity;

use App\Entity\Usuario;
use Doctrine\ORM\Mapping as ORM;

/**
 * Publicacion
 *
 * @ORM\Table(name="publicacion", indexes={@ORM\Index(name="IDX_62F2085FFCF8192D", columns={"id_usuario"})})
 * @ORM\Entity(repositoryClass="App\Repository\PublicacionRepository")
 */
class Publicacion
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_publicacion", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="publicacion_id_publicacion_seq", allocationSize=1, initialValue=1)
     */
    private $idPublicacion;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_texto", type="integer", nullable=true)
     */
    private $idTexto;

    /**
     * @var string|null
     *
     * @ORM\Column(name="multimedia", type="string", length=255, nullable=true)
     */
    private $multimedia;

    /**
     * @var \Usuario|null
     *
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_usuario", referencedColumnName="id_usuario")
     * })
     */
    private $idUsuario;

    public function getIdPublicacion(): ?int
    {
        return $this->idPublicacion;
    }

    public function getIdTexto(): ?int
    {
        return $this->idTexto;
    }

    public function setIdTexto(?int $idTexto): static
    {
        $this->idTexto = $idTexto;

        return $this;
    }

    public function getMultimedia(): ?string
    {
        return $this->multimedia;
    }

    public function setMultimedia(?string $multimedia): static
    {
        $this->multimedia = $multimedia;

        return $this;
    }

    public function getIdUsuario(): ?Usuario
    {
        return $this->idUsuario;
    }

    public function setIdUsuario(?Usuario $idUsuario): static
    {
        $this->idUsuario = $idUsuario;

        return $this;
    }


}
