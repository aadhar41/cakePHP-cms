<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Generates Controller
 *
 *
 * @method \App\Model\Entity\Generate[] paginate($object = null, array $settings = [])
 */
class GeneratesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $generates = $this->paginate($this->Generates);

        $this->set(compact('generates'));
    }

    /**
     * View method
     *
     * @param string|null $id Generate id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $generate = $this->Generates->get($id, [
            'contain' => []
        ]);

        $this->set('generate', $generate);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $generate = $this->Generates->newEntity();
        if ($this->request->is('post')) {
            $generate = $this->Generates->patchEntity($generate, $this->request->getData());
            if ($this->Generates->save($generate)) {
                $this->Flash->success(__('The generate has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The generate could not be saved. Please, try again.'));
        }
        $this->set(compact('generate'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Generate id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $generate = $this->Generates->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $generate = $this->Generates->patchEntity($generate, $this->request->getData());
            if ($this->Generates->save($generate)) {
                $this->Flash->success(__('The generate has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The generate could not be saved. Please, try again.'));
        }
        $this->set(compact('generate'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Generate id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $generate = $this->Generates->get($id);
        if ($this->Generates->delete($generate)) {
            $this->Flash->success(__('The generate has been deleted.'));
        } else {
            $this->Flash->error(__('The generate could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
