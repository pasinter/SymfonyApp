<?php

/**
 * This file is part of the <name> project.
 *
 * (c) pasinter
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Pasinter\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use FOS\MessageBundle\Entity\Message as BaseMessage;

/**
 * @ORM\Entity
 */
class Message extends BaseMessage
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(
     *   targetEntity="Pasinter\CoreBundle\Entity\Thread",
     *   inversedBy="messages"
     * )
     * @var \FOS\MessageBundle\Model\ThreadInterface
     */
    protected $thread;

    /**
     * @ORM\ManyToOne(targetEntity="Pasinter\CoreBundle\Entity\User")
     * @var \FOS\MessageBundle\Model\ParticipantInterface
     */
    protected $sender;

    /**
     * @ORM\OneToMany(
     *   targetEntity="Pasinter\CoreBundle\Entity\MessageMetadata",
     *   mappedBy="message",
     *   cascade={"all"}
     * )
     * @var MessageMetadata
     */
    protected $metadata;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->metadata = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set thread
     *
     * @param \Pasinter\CoreBundle\Entity\Thread $thread
     * @return Message
     */
    public function setThread(\Pasinter\CoreBundle\Entity\Thread $thread = null)
    {
        $this->thread = $thread;

        return $this;
    }

    /**
     * Get thread
     *
     * @return \Pasinter\CoreBundle\Entity\Thread 
     */
    public function getThread()
    {
        return $this->thread;
    }

    /**
     * Set sender
     *
     * @param \Pasinter\CoreBundle\Entity\User $sender
     * @return Message
     */
    public function setSender(\Pasinter\CoreBundle\Entity\User $sender = null)
    {
        $this->sender = $sender;

        return $this;
    }

    /**
     * Get sender
     *
     * @return \Pasinter\CoreBundle\Entity\User 
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * Add metadata
     *
     * @param \Pasinter\CoreBundle\Entity\MessageMetadata $metadata
     * @return Message
     */
    public function addMetadatum(\Pasinter\CoreBundle\Entity\MessageMetadata $metadata)
    {
        $this->metadata[] = $metadata;

        return $this;
    }

    /**
     * Remove metadata
     *
     * @param \Pasinter\CoreBundle\Entity\MessageMetadata $metadata
     */
    public function removeMetadatum(\Pasinter\CoreBundle\Entity\MessageMetadata $metadata)
    {
        $this->metadata->removeElement($metadata);
    }

    /**
     * Get metadata
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMetadata()
    {
        return $this->metadata;
    }
}
