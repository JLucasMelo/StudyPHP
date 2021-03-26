<?php

class PessoaController extends Zend_Controller_Action
{

    public function init()
    {
    }

    public function indexAction()
    {
        $config = new Zend_Config_Ini(APPLICATION_PATH . '/configs/forms/pessoa.ini', 'form');
        $this->view->form = new Application_Form_Pessoa($config);
    }

    public function createAction()
    {
        $config = new Zend_Config_Ini(APPLICATION_PATH . '/configs/forms/pessoa.ini', 'create');
        $this->view->form = new Application_Form_Pessoa($config);
    }

    public function editAction()
    {
        $config = new Zend_Config_Ini(APPLICATION_PATH . '/configs/forms/pessoa.ini', 'edit');
        $this->view->form = new Application_Form_Pessoa($config);
    }

    /*
    public function signAction()
    {

        
        $request = $this->getRequest();
        $form = new Application_Form_Pessoa();

        if ($this->getRequest()->isPost()) {
            if ($form->isValid($request->getPost())) {
                $comment = new Application_Model_Pessoa($form->getValues());

                $mapper = new Application_Model_PessoaCrudMapper();
                $mapper->save($comment);
                return $this->_helper->redirector('index');
            }
        }

        $this->view->form = $form;
        
    }
    */
}
