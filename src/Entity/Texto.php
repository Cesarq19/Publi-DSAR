<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Texto
 *
 * @ORM\Table(name="texto")
 * @ORM\Entity(repositoryClass="App\Repository\TextoRepository")
 */
class Texto
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_texto", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="texto_id_texto_seq", allocationSize=1, initialValue=1)
     */
    private $idTexto;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255, nullable=false)
     */
    private $descripcion;

    /**
     * @var array|null
     *
     * @ORM\Column(name="hashtag", type="json", nullable=true)
     */
    private $hashtag;

    public function getIdTexto(): ?int
    {
        return $this->idTexto;
    }

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(string $descripcion): static
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function getHashtag(): array
    {
        return $this->hashtag;
    }

    public function setHashtag(?array $hashtag): static
    {
        $this->hashtag = $hashtag;

        return $this;
    }


}
