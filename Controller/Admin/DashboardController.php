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
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\ORM\Query;
use Cake\Database\Expression\QueryExpression;

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link https://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class DashboardController extends AppController
{

    /**
     * Displays a view
     *
     * @param array ...$path Path segments.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Http\Exception\ForbiddenException When a directory traversal attempt.
     * @throws \Cake\Http\Exception\NotFoundException When the view file could not
     *   be found or \Cake\View\Exception\MissingTemplateException in debug mode.
     */
    public function index()
    {

        $this->loadmodel('Users');
        $id=$this->Auth->user('id');
        //debug($id);die;
        

       // $admin=$this->Users->find('all')->first();



        $admin = $this->Users->find('all', [
            'conditions' => ['role_id' => 1 ]
        ]);
        $numberadmin = $admin->count();
        //debug($numberadmin);die; 




         $docteur = $this->Users->find('all', [
            'conditions' => ['role_id' => 2 ]
        ]);
        $numberdocteur = $docteur->count();
        //debug($numberdocteur);die;



         $pharmacien = $this->Users->find('all', [
            'conditions' => ['role_id' => 3 ]
        ]);
        $numberpharmacien = $pharmacien->count();
        //debug($numberpharmacien);die;


         $patient = $this->Users->find('all', [
            'conditions' => ['role_id' => 4 ]
        ]);
        $numberpatient = $patient->count();
        //debug($numberpatient);die;


        $id1=$numberadmin;
        $id2=$numberdocteur;
        $id3=$numberpharmacien;
        $id4=$numberpatient;

            //debug($id4);die;
            
            $this->set(compact('id'));
            $this->set(compact('id1'));
            $this->set(compact('id2'));
            $this->set(compact('id3'));
            $this->set(compact('id4'));






        /*$docteur
        $pharmacien
        $patient
     */

    }
}
