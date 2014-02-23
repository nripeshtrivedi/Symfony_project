<?php
namespace Acme\TaskBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\TaskBundle\Entity\Task;
use Symfony\Component\HttpFoundation\Request;
use Acme\TaskBundle\Form\Type\TaskType;



class DefaultController extends Controller
{
    public function newAction(Request $request)
    {
	
        // create a task 
		$task = new Task();
		$task->setTask('Write a task');
		$task->setDueDate(new \DateTime('tomorrow'));
		$form = $this->createForm(new TaskType(), $task);
		$em = $this->getDoctrine()->getManager();
		$form->handleRequest($request);
		if ($form->isValid()) 
			{	
				$task = $form->getData();
			    $em->persist($task);
				$em->flush();
			}
		$repository = $this->getDoctrine()
		->getRepository('AcmeTaskBundle:Task');
		$tasks = $repository->findAll();
		return $this->render('AcmeTaskBundle:Default:new.html.twig', array(
		'form' => $form->createView(),'task'=>$tasks,
		));
    }
	
}


