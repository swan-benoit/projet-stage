<?php

namespace MuseumsBundle\Entity\History;

use Doctrine\ORM\Mapping as ORM;

/**
 * Advertisement_History
 *
 * @ORM\Table(name="history_advertisement__history")
 * @ORM\Entity(repositoryClass="MuseumsBundle\Repository\History\Advertisement_HistoryRepository")
 */
class Advertisement_History
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
     * @ORM\Column(name="action", type="string")
     */
    private $action;

    /**
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @ORM\Column(name="advertisement_id", type="integer")
     */
    private $advertisement_id;

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
     * @return mixed
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @param mixed $action
     */
    public function setAction($action)
    {
        $this->action = $action;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }



    /**
     * Set advertisementId.
     *
     * @param int $advertisementId
     *
     * @return Advertisement_History
     */
    public function setAdvertisementId($advertisementId)
    {
        $this->advertisement_id = $advertisementId;

        return $this;
    }

    /**
     * Get advertisementId.
     *
     * @return int
     */
    public function getAdvertisementId()
    {
        return $this->advertisement_id;
    }
}
