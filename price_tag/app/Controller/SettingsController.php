<?php 
class SettingsController extends AppController {
    public $helpers = array('Html', 'Form');
    
    public function index() {
         $this->set('settings', $this->Setting->find('all'));
    }

//
//    public function add() {
//        if ($this->request->is('post')) {
//            $this->Setting->create();
//            if ($this->Setting->save($this->request->data)) {
//                $this->Session->setFlash('Your post has been saved.');
//                $this->redirect(array('action' => 'index'));
//            } else {
//                $this->Session->setFlash('Unable to add your post.');
//            }
//        }
//    }

//    public function edit($id = null) {
//        if (!$id) {
//            throw new NotFoundException(__('Invalid post'));
//        }
//
//        $setting = $this->Setting->findById($id);
//        if (!$setting) {
//            throw new NotFoundException(__('Invalid post'));
//        }
//
//        if ($this->request->is('post') || $this->request->is('put')) {
//            //print_r($this->request->data);
//            $this->Setting->id = $id;
//            if ($this->Setting->save($this->request->data)) {
//                $this->Session->setFlash('Your post has been updated.');
//                $this->redirect("/settings/index");
//                //$this->redirect(array('action' => 'index', 'controller' => 'settings'));
//            } else {
//                $this->Session->setFlash('Unable to update your post.');
//            }
//        }
//
//        if (!$this->request->data) {
//            $this->request->data = $setting;
//        }
//    }

    public function edit($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }

        $setting = $this->Setting->findById($id);
        //print_r($this->data);
        if (!$setting) {
            throw new NotFoundException(__('Invalid post'));
        }

        if ($this->request->is('post') || $this->request->is('put')) {
            //print_r($this->request->data);
            $this->Setting->id = $id;
            //print_r($this->request->data);
            foreach($this->request->data['Setting'] as $index => $val) {
                if($this->Setting->updateAll(array('pair' => $val), array('id' => $id))) {
                    $this->Session->setFlash('Settings has been updated.');
                    //$this->redirect("/settings/index");
                    $this->redirect(array('action' => 'index', 'controller' => 'settings'));
                }
                else {
                    $this->Session->setFlash('Unable to update setting.');
                }
            }
                
        }
        
        if (!$this->request->data) {
            $this->set('setting', $setting);
            //$this->request->data = $setting['Setting']['key'];
        }
    }

//    public function delete($id) {
//        if ($this->request->is('get')) {
//            throw new MethodNotAllowedException();
//        }
//
//        if ($this->Setting->delete($id)) {
//            $this->Session->setFlash('The post with id: ' . $id . ' has been deleted.');
//            $this->redirect(array('action' => 'index'));
//        }
//    }

}
?>