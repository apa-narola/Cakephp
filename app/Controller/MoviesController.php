<?php

class MoviesController extends AppController {

    public $name = 'Movies';
    public $uses = array();
    var $helpers = array('Html', 'Form');
    var $components = array('Session');
    var $paginate = array(
        'limit' => 5,
        'order' => array(
            'Post.title' => 'asc'
        )
    );

    public function index() {
//      $movies = $this->Movie->find('all');
        $movies = $this->paginate('Movie');
        $this->set('movies', $movies);
    }

    function edit($id = null) {
        if (!empty($this->data)) {
            if ($id != null):
                if ($this->Movie->save($this->data)) {
                    //$this->Session->setFlash('The movie has been updated successfully.');
                    $this->Session->setFlash('The movie has been updated successfully.', 'default', array("class" => "alert alert-success"));
                    $this->redirect(array('action' => 'index'));
                } else {
                    $this->Session->setFlash('The movie could not be saved. Please, try again.');
                }
            else:

                $this->Movie->create($this->data);
                if ($this->Movie->save()) {
                    // $this->Session->setFlash('The movie has been added successfully.');
                    $this->Session->setFlash('The movie has been added successfully.', 'default', array("class" => "alert alert-success"));
                    $this->redirect(array('action' => 'edit'));
                } else {
                    $this->Session->setFlash
                            ('The movie could not be saved. Please, try again.');
                }

            endif;
        }

        if (empty($this->data)) {
            $this->data = $this->Movie->read(null, $id);
        }
    }

    function view($id = null) {
        if (!$id) {
            $this->Session->setFlash('Invalid movie');
            $this->redirect(array('action' => 'index'));
        }
        $this->set('movie', $this->Movie->findById($id));
    }

    public function delete($id = null) {
        if (!$id) {
            $this->Session->setFlash('Invalid id for movie');
            $this->redirect(array('action' => 'index'));
        }
        if ($this->Movie->delete($id)) {

            $this->Session->setFlash('The movie has been deleted successfully.', 'default', array("class" => "alert alert-info"));
        } else {
            $this->Session->setFlash(__('Movie was not deleted', true));
        }
        $this->redirect(array('action' => 'index'));
    }

}
