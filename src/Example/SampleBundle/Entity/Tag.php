<?php
// src\Example\SampleBundle\Entity\Tag.php
namespace Example\SampleBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


 /**
  * @ORM\Entity
  * @ORM\Table(name="tags")
  */
class Tag
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $colour;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $content;

    /**
     * @ORM\ManyToOne(targetEntity="Board", inversedBy="tags")
     * @ORM\JoinColumn(name="board_id", referencedColumnName="id")
     */
    protected $board;

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
     * Set colour
     *
     * @param string $colour
     *
     * @return Tag
     */
    public function setColour($colour)
    {
        $this->colour = $colour;
    
        return $this;
    }

    /**
     * Get colour
     *
     * @return string
     */
    public function getColour()
    {
        return $this->colour;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Tag
     */
    public function setContent($content)
    {
        $this->content = $content;
    
        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set board
     *
     * @param \Example\SampleBundle\Entity\Board $board
     *
     * @return Tag
     */
    public function setBoard(\Example\SampleBundle\Entity\Board $board = null)
    {
        $this->board = $board;
    
        return $this;
    }

    /**
     * Get board
     *
     * @return \Example\SampleBundle\Entity\Board
     */
    public function getBoard()
    {
        return $this->board;
    }
}
