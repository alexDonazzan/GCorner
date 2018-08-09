<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\Gcv2ContentsRepository")
 */
class Gcv2Contents
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $parent_id;

    /**
     * @ORM\Column(type="string", length=150)
     */
    private $slug;

    /**
     * @ORM\Column(type="string", length=222)
     */
    private $type;

    /**
     * @ORM\Column(type="string", length=222, nullable=true)
     */
    private $sub_type;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $sub_type_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $smarty;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $css_class;

    /**
     * @ORM\Column(type="integer")
     */
    private $latitude;

    /**
     * @ORM\Column(type="integer")
     */
    private $longitude;

    /**
     * @ORM\Column(type="integer")
     */
    private $radius;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $place_str;

    /**
     * @ORM\Column(type="datetime")
     */
    private $lastmod;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_published;

    /**
     * @ORM\Column(type="boolean")
     */
    private $active;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getParentId(): ?int
    {
        return $this->parent_id;
    }

    public function setParentId(?int $parent_id): self
    {
        $this->parent_id = $parent_id;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getSubType(): ?string
    {
        return $this->sub_type;
    }

    public function setSubType(?string $sub_type): self
    {
        $this->sub_type = $sub_type;

        return $this;
    }

    public function getSubTypeId(): ?int
    {
        return $this->sub_type_id;
    }

    public function setSubTypeId(?int $sub_type_id): self
    {
        $this->sub_type_id = $sub_type_id;

        return $this;
    }

    public function getSmarty(): ?int
    {
        return $this->smarty;
    }

    public function setSmarty(int $smarty): self
    {
        $this->smarty = $smarty;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getCssClass(): ?string
    {
        return $this->css_class;
    }

    public function setCssClass(string $css_class): self
    {
        $this->css_class = $css_class;

        return $this;
    }

    public function getLatitude(): ?int
    {
        return $this->latitude;
    }

    public function setLatitude(int $latitude): self
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getLongitude(): ?int
    {
        return $this->longitude;
    }

    public function setLongitude(int $longitude): self
    {
        $this->longitude = $longitude;

        return $this;
    }

    public function getRadius(): ?int
    {
        return $this->radius;
    }

    public function setRadius(int $radius): self
    {
        $this->radius = $radius;

        return $this;
    }

    public function getPlaceStr(): ?string
    {
        return $this->place_str;
    }

    public function setPlaceStr(string $place_str): self
    {
        $this->place_str = $place_str;

        return $this;
    }

    public function getLastmod(): ?\DateTimeInterface
    {
        return $this->lastmod;
    }

    public function setLastmod(\DateTimeInterface $lastmod): self
    {
        $this->lastmod = $lastmod;

        return $this;
    }

    public function getDatePublished(): ?\DateTimeInterface
    {
        return $this->date_published;
    }

    public function setDatePublished(\DateTimeInterface $date_published): self
    {
        $this->date_published = $date_published;

        return $this;
    }

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }
}
