<?php
namespace Acme\TaskBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
* @ORM\Entity
* @ORM\Table(name="Task")
*/
class Task
{
/**
* @ORM\Column(type="integer")
* @ORM\Id
* @ORM\GeneratedValue(strategy="AUTO")
*/
	protected $id;
/**
* @ORM\Column(type="string", length=100)
*/
    protected $task;
/** @ORM\Column(type="datetime", name="due_date") */
    protected $dueDate;
	public function getId()
	{
		return $this->id;
	}
	public function setId($id)
	{
		$this->id=$id;
	}
    public function getTask()
    {
        return $this->task;
    }
    public function setTask($task)
    {
        $this->task = $task;
    }
    public function getDueDate()
    {
        return $this->dueDate;
    }
    public function setDueDate(\DateTime $dueDate = null)
    {
        $this->dueDate = $dueDate;
    }
}