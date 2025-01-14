<?php

namespace ExpositionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;

/**
 * ExpositionImage
 *
 * @ORM\Table(name="exposition_image")
 * @ORM\Entity(repositoryClass="ExpositionBundle\Repository\ExpositionImageRepository")
 * @Vich\Uploadable
 */
class ExpositionImage
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
     * @ORM\Column(type="string", length=1000)
     * @var string
     */
    private $image;

    /**
     * @Vich\UploadableField(mapping="exposition_images", fileNameProperty="image")
     * @var File
     */
    private $imageFile;

    /**
     * @ORM\Column(type="datetime")
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @ORM\ManyToOne(targetEntity="ExpositionBundle\Entity\Exposition", inversedBy="images")
     * @ORM\JoinColumn(name="exposition_id", referencedColumnName="id")
     */
    private $exposition;

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set image.
     *
     * @param string $image
     *
     * @return ExpositionImage
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image.
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set updatedAt.
     *
     * @param \DateTime $updatedAt
     *
     * @return ExpositionImage
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt.
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @return File
     */
    public function getImageFile()
    {
        return $this->imageFile;
    }

    /**
     * @param File $imageFile
     */
    public function setImageFile(File $image = null)
    {
        $this->imageFile = $image;
        if ($image) {
            $this->updatedAt = new \DateTime('now');
        }
    }

    /**
     * Set Exposition.
     *
     * @param \ExpositionBundle\Entity\Exposition|null $exposition
     *
     * @return ExpositionImage
     */
    public function setExposition(\ExpositionBundle\Entity\Exposition $exposition = null)
    {
        $this->exposition = $exposition;

        return $this;
    }

    /**
     * Get Exposition.
     *
     * @return \ExpositionBundle\Entity\Exposition|null
     */
    public function getExposition()
    {
        return $this->exposition;
    }
}
