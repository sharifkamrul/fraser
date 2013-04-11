<?php 
class WearHouseProductsController extends AppController {
    public $helpers = array('Html', 'Form');
    
    public function index() {
       
    }

    public function productList() {
        $products = $this->WearHouseProduct->find('all');
        $this->set('products', $products);
    }

    public function tagPrint() {
        $fonts = array(
            'monospace',
            'Arial',
            'Helvetica',
            'sans-serif',
            'Times New Roman',
            'Tahoma',
            'Geneva',
            'Trebuchet MS',
            'Helvetica',
            'Verdana',
            'Courier',
            'Courier New'
        );

        if($this->request->is('post')) {
            $brand_name = 'Fraser';
            $bar_code = '1234567890';
            $item_name = $this->data['WearHouseProduct']['item_name'];
            $item_code = $this->data['WearHouseProduct']['item_code'];
            $item_price = $this->data['WearHouseProduct']['item_price'];
            $tag_number = $this->data['WearHouseProduct']['tag_number'];
            $tag_section = $this->data['WearHouseProduct']['item_section'];
            $tag_font = $fonts[$this->data['WearHouseProduct']['select_font']];

            $this->set('tag_section', $tag_section);
            $this->set('item_name', $item_name);
            $this->set('item_code', $item_code);
            $this->set('item_price', $item_price);
            $this->set('brand_name', $brand_name);
            $this->set('bar_code', $bar_code);
            $this->set('tag_number', $tag_number);
            $this->set('tag_font', $tag_font);
            
            $this->render('tag_print_view','tag_print');
        }
        else {
            $this->set('fonts',$fonts);
        }
    }

  
    public function findItemName($id = null) {
        //echo $id;
        if ($this->request->is('post')) {
            if(!$id) {
                //throw new NotFoundException(__('Invalid id'));
                $this->set('item_name','none');
            }

            else {
                $item_name = $this->WearHouseProduct->findById($id,array('item_name'));
                if (!$item_name) {
                    //throw new NotFoundException(__('Invalid post'));
                    $this->set('itemname','none');
                }
                $this->set('item_name',$item_name['WearHouseProduct']['item_name']);
            }

        }

        $this->render('ajaxview','ajax');
    }

    public function add() {
        if ($this->request->is('post')) {
            $this->WearHouseProduct->create();
            if ($this->WearHouseProduct->save($this->request->data)) {
                //$log = $this->WearHouseProduct->getDataSource()->getLog(false, false);
                //debug($log);
                $this->Session->setFlash('Product detail has been saved.');//print_r($this->request);
                $this->redirect(array('action' => 'productlist', 'controller' => 'wear_house_products'));
            } else {
                $this->Session->setFlash('Unable to add product detail.');
            }
        }
    }

    public function edit($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }

        $product = $this->WearHouseProduct->findById($id);
        
        if (!$product) {
            throw new NotFoundException(__('Product detail not found'));
        }

        if ($this->request->is('post') || $this->request->is('put')) {
            $this->WearHouseProduct->id = $id;
            if ($this->WearHouseProduct->save($this->request->data)) {
                $this->Session->setFlash('Product detail has been updated.');
                $this->redirect(array('action' => 'productlist'));
            } else {
                $this->Session->setFlash('Unable to update product detail.');
            }
        }

        if (!$this->request->data) {
            $this->request->data = $product;
        }
    }

    public function delete($id) {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }

        if ($this->WearHouseProduct->delete($id)) {
            $this->Session->setFlash('The product detail with id: ' . $id . ' has been deleted.');
            $this->redirect(array('action' => 'productlist'));
        }
    }


}
?>