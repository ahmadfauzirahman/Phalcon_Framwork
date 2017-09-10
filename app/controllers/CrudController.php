<?php

class CrudController extends \Phalcon\Mvc\Controller {

    public function indexAction() {
        $model = new User();
        $this->view->data = $model->find();
//        $data = $model->find();
//        echo '<pre>'.print_r(json_encode($data),1).'</pre>';
//        die();
    }

    public function createAction() {
        $model = new User();

        $array = array('username' => $this->request->getPost('username'),
            'password' => $this->request->getPost('password'),);

        $model->assign($array);
        if ($model->save()) {
            echo $this->flash->success('The post was correctly saved!');
        } else {
            echo "tidak berhasil";
        }
        $this->response->redirect('index');
    }

    public function deleteAction($id) {
//        echo "delete</br>";
//        echo $id;
//        die();

        $model = new User ();
        $data = $model->findFirst($id);
//        echo '<pre>'.print_r(json_encode($data),1).'</pre>';
//        die();
        $data->delete();
        $this->response->redirect('index');
    }

    public function updateAction($id) {
        $model = new User();
        $this->view->data = $model->findFirst($id);
    }

    public function editAction() {
        //cara pemanggilan kedua lebih simpel
        $model = new User();
        $array = $this->request->getPost();
        $data = $model->findFirst($array['id']);
        // echo "<pre>".print_r(json_encode($data),1)."</pre>";
        $data->assign($array);
        $data->save();
        $this->response->redirect('index');

        // cara pemanggilan pertama
        // $array = array(
        // 		'id' => $this->request->getPost('id'),
        // 		'username' => $this->request->getPost('username'),
        // 		'password' => $this->request->getPost('password'),
        // 	);
        // echo "<pre>".print_r($array,1)."</pre>";
        // echo "update";
    }

}
