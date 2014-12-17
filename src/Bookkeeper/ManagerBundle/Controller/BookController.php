<?php

namespace Bookkeeper\ManagerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Bookkeeper\ManagerBundle\Entity\Book;
use Bookkeeper\ManagerBundle\Form\BookType;

class BookController extends Controller {

	public function indexAction() {
		return $this->render('BookkeeperManagerBundle:Book:index.html.twig');
	}

	public function showAction($id) {
		return $this->render('BookkeeperManagerBundle:Book:show.html.twig');
	}

	public function newAction() {
		$book = new Book();

		$form = $this->createForm(new BookType(), $book, array(
			'action'=>$this->generateUrl('book_create'),
			'method'=>'POST'
		));

		$form->add('submit', 'submit', array('label'=>'Create Book'));

		return $this->render('BookkeeperManagerBundle:Book:new.html.twig', array(
			'form'=>$form->createView()
			));
	}

	public function createAction(Request $request) {
		
	}

	public function editAction($id) {
		return $this->render('BookkeeperManagerBundle:Book:edit.html.twig');
	}

	public function updateAction(Request $request, $id) {
		
	}

	public function deleteAction(Request $request, $id) {
		
	}

}