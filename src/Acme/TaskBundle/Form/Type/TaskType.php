<?php
namespace Acme\TaskBundle\Form\Type;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
class TaskType extends AbstractType
{
public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
		->add('task')
		->add('dueDate','date')
		->add('save', 'submit');
	}
public function getName()
	{
		return 'task';
	}
}