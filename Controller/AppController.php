<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;



/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler', [
            'enableBeforeRedirect' => false,
        ]);
        $this->loadComponent('Flash');
        $this->loadComponent('TinyAuth.Auth',[
               'autoClearCache' => true,
               'authorize' => [
                  'TinyAuth.Tiny' 
               ],
               'authenticate' => [
                 'Form' => [
                    'fields' => [
                        'username' => 'email',
                        'password' => 'password'
                    ],
                   //'scope'=>['Users.active' => true],
                 ],
               ],
               'loginAction' => [
                'prefix'=>false,
                'controller' => 'Users',
                'action' => 'login'
               ],
               'loginRedirect' => [
                'prefix'=>false,
                'controller' => 'Users',
                'action' => 'dispatcher'
               ],
               'logoutRedirect' => [
                'prefix'=>false,
                'controller' => 'Users',
                'action' => 'login'
               ],

            ]);

    }

public function beforeFilter(Event $event)
    {
    
    parent::beforeFilter($event);
    $prefix=$this->request->getParam('prefix');
    $controller=$this->request->getParam('controller');
    $action=$this->request->getParam('action');
       
    if( $prefix=='admin'){
           if ( $action == 'index' || $action == 'addsec'|| $action == 'indexdocteur' || $action == 'indexpatient' || $action == 'indexpharmacien'|| $action == 'edita'|| $action == 'change' || $action == 'profile' || $action == 'changepassword' || $action == 'changemail' || $action == 'veriftoken' || $action == 'add'  || $action == 'addp' || $action == 'addm' || $action == 'addpa' ||$action == 'settings' ) {
             $this->viewBuilder()->setLayout('admin');
           }else{
             $this->viewBuilder()->setLayout('popup');
           }
        
    }




    if( $prefix=='docteur'){
           if ($action == 'index'  || $action == 'indexsec'  || $action == 'ordonnancepat'  || $action == 'indexpatient'|| $action == 'add' ||$action == 'profile' || $action == 'changemail' || $action == 'veriftoken' || $action == 'changepassword' ||$action == 'settings' ||$action == 'edit') {
             $this->viewBuilder()->setLayout('docteur');
           }else{
             $this->viewBuilder()->setLayout('popup');
           }
        
    }


     if( $prefix=='pharmacien'){
           if ($action == 'index'  || $action == 'indexpatient' ||$action == 'profile' || $action == 'changemail' || $action == 'veriftoken' || $action == 'changepassword'  ||$action == 'settings' ||$action == 'edit' ||$action == 'add') {
             $this->viewBuilder()->setLayout('pharmacien');
           }else{
             $this->viewBuilder()->setLayout('popup');
           }
        
    }


     if( $prefix=='patient'){
           if ($action == 'index'  || $action == 'indexpatient' ||$action == 'profile' || $action == 'changemail' || $action == 'veriftoken' || $action == 'changepassword' ||$action == 'settings' ||$action == 'edit') {
             $this->viewBuilder()->setLayout('patient');
           }else{
             $this->viewBuilder()->setLayout('popup');
           }
        
    }


        if( $prefix=='secretaire'){
            if ($action == 'index'  || $action == 'edit'  ||  $action == 'calendrier'  || $action == 'add'  || $action == 'indexpatient' ||$action == 'profile' || $action == 'changemail' || $action == 'veriftoken' || $action == 'changepassword' ||$action == 'settings' ||$action == 'edit') {
                $this->viewBuilder()->setLayout('secretaire');
            }else{
                $this->viewBuilder()->setLayout('popup');
            }

        }



    if ($prefix == false && $controller=='Users') {
       $this->viewBuilder()->setLayout('user');
    }


    }

    public function beforeRender(Event $event){

        $this->loadModel(
            'Users'
        );
        $id=$this->request->session()->read('Auth.User.id');
        $pic=$this->Users->find('all',array(
            'conditions'=>array('id'=>$id)
        ))->first();
        $this->set(compact('pic'));


    }

}
