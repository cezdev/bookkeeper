<?php

namespace Bookkeeper\ManagerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class BookController extends Controller {

	public function indexAction() {
		return $this->render('BookkeeperManagerBundle:Book:index.html.twig');
	}

	public function showAction($id) {
		return $this->render('BookkeeperManagerBundle:Book:show.html.twig');
	}

	public function newAction() {
		return $this->render('BookkeeperManagerBundle:Book:new.html.twig');
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