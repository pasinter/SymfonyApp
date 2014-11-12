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
use FOS\MessageBundle\Entity\ThreadMetadata as BaseThreadMetadata;

/**
 * @ORM\Entity
 */
class ThreadMetadata extends BaseThreadMetadata
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
     *   inversedBy="metadata"
     * )
     * @var \FOS\MessageBundle\Model\ThreadInterface
     */
    protected $thread;

    /**
     * @ORM\ManyToOne(targetEntity="Pasinter\CoreBundle\Entity\User")
     * @var \FOS\MessageBundle\Model\ParticipantInterface
     */
    protected $participant;

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
     * @return ThreadMetadata
     */
    public function setThread(\FOS\MessageBundle\Model\ThreadInterface $thread = null)
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
     * Set participant
     *
     * @param \Pasinter\CoreBundle\Entity\User $participant
     * @return ThreadMetadata
     */
    public function setParticipant(\FOS\MessageBundle\Model\ParticipantInterface $participant = null)
    {
        $this->participant = $participant;

        return $this;
    }

    /**
     * Get participant
     *
     * @return \Pasinter\CoreBundle\Entity\User 
     */
    public function getParticipant()
    {
        return $this->participant;
    }
}
