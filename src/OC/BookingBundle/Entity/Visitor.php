<?php

namespace OC\BookingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Visitor
 *
 * @ORM\Table(name="visitor")
 * @ORM\Entity(repositoryClass="OC\BookingBundle\Repository\VisitorRepository")
 */
class Visitor
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=255)
     */
    private $firstname;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birthdate", type="date")
     */
    private $birthdate;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=255)
     */
    private $country;

    /**
     * @var bool
     *
     * @ORM\Column(name="reduced_price", type="boolean")
     */
    private $reducedPrice;



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
     * Set name
     *
     * @param string $name
     *
     * @return Visitor
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     *
     * @return Visitor
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set birthdate
     *
     * @param \DateTime $birthdate
     *
     * @return Visitor
     */
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;

        return $this;
    }

    /**
     * Get birthdate
     *
     * @return \DateTime
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return Visitor
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }
    
    /**
     * Set reducedPrice
     *
     * @param boolean $reducedPrice
     *
     * @return Visitor
     */
    public function setReducedPrice($reducedPrice)
    {
        $this->reducedPrice = $reducedPrice;

        return $this;
    }

    /**
     * Get reducedPrice
     *
     * @return bool
     */
    public function getReducedPrice()
    {
        return $this->reducedPrice;
    }

    public function computReducPrice()
    {
        // calculer l'âge du visitor
        $date = getBirthdate();
        $age = date('Y') - date('Y', strtotime($date));
        
        if (date('md') < date('md', strtotime($date))) 
        {
            $age = $age - 1;
        }

        //calcul le prix du visitor

        $reduced_price = getReducedPrice(); 

        if  ( $reduced_price == 1)
        {
                $tarifReduit = $this->container->getParameter('personne_reduit');
                // tarif réduit 10euros
                return $tarifReduit;
            } 
            elseif ($age < 4)     
            {
                $enfant_moins_4 = $this->container->getParameter('enfant_moins_4');
                // gratuit enfant - 4ans
                return $enfant_moins_4;
            } 
            elseif ($age <= 12)
            {
                $enfant_4_a_12 = $this->container->getParameter('enfant_4_a_12');
                // Entre 4 et 12 ans  8euros
                return $enfant_4_a_12;
            }
            elseif ($age <= 60)
            {
                $personne_12_a_60 = $this->container->getParameter('personne_12_a_60');
                // de 12 à 60ans 16euros
                return $personne_12_a_60;
            }
            elseif ($age > 60 )
            {
                $personne_plus_60 = $this->container->getParameter('personne_plus_60');
                // au delà de 60ans 12euros
                return $personne_plus_60;
            }

        }
}
