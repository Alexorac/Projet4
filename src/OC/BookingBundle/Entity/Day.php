<?php

namespace OC\BookingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Day
 *
 * @ORM\Table(name="day")
 * @ORM\Entity(repositoryClass="OC\BookingBundle\Repository\DayRepository")
 */
class Day
{

     /**
     * @ORM\ManyToOne(targetEntity="OC\BookingBundle\Entity\Bookingform")
     * @ORM\JoinColumn(nullable=false)
     */
    private $bookinform;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="date", length=255)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="place", type="string", length=255)
     */
    private $place;

    /**
     * @var string
     *
     * @ORM\Column(name="full", type="boolean", length=255)
     */
    private $full;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set date
     *
     * @param string $date
     *
     * @return Day
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set place
     *
     * @param string $place
     *
     * @return Day
     */
    public function setPlace($place)
    {
        $this->place = $place;

        return $this;
    }

    /**
     * Get place
     *
     * @return string
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Set full
     *
     * @param string $full
     *
     * @return Day
     */
    public function setFull($full)
    {
        $this->full = $full;

        return $this;
    }

    /**
     * Get full
     *
     * @return string
     */
    public function getFull()
    {
        return $this->full;
    }

    /**
     * Set bookinform
     *
     * @param \OC\BookingBundle\Entity\Bookingform $bookinform
     *
     * @return Day
     */
    public function setBookinform(\OC\BookingBundle\Entity\Bookingform $bookinform)
    {
        $this->bookinform = $bookinform;

        return $this;
    }

    /**
     * Get bookinform
     *
     * @return \OC\BookingBundle\Entity\Bookingform
     */
    public function getBookinform()
    {
        return $this->bookinform;
    }
}
