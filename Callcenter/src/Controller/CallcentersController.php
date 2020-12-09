<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Callcenters Controller
 *
 * @property \App\Model\Table\CallcentersTable $Callcenters
 * @method \App\Model\Entity\Callcenter[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CallcentersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $callcenters = $this->paginate($this->Callcenters);
        $this->Authorization->skipAuthorization();
        $this->set(compact('callcenters'));
    }

    /**
     * View method
     *
     * @param string|null $id Callcenter id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $callcenter = $this->Callcenters->get($id, [
            'contain' => ['Registrollamadascobranzas'],
        ]);
        $this->Authorization->authorize($callcenter,'view');
        $this->set(compact('callcenter'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $callcenter = $this->Callcenters->newEmptyEntity();
        $this->Authorization->authorize($callcenter,'view','update');
        if ($this->request->is('post')) {
            $callcenter = $this->Callcenters->patchEntity($callcenter, $this->request->getData());
            if ($this->Callcenters->save($callcenter)) {
                $this->Flash->success(__('The callcenter has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The callcenter could not be saved. Please, try again.'));
        }
        $this->set(compact('callcenter'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Callcenter id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $callcenter = $this->Callcenters->get($id, [
            'contain' => [],
        ]);
        $this->Authorization->authorize($callcenter,'view','update');
        if ($this->request->is(['patch', 'post', 'put'])) {
            $callcenter = $this->Callcenters->patchEntity($callcenter, $this->request->getData());
            if ($this->Callcenters->save($callcenter)) {
                $this->Flash->success(__('The callcenter has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The callcenter could not be saved. Please, try again.'));
        }
        $this->set(compact('callcenter'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Callcenter id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        
        
        $this->request->allowMethod(['post', 'delete']);
        $callcenter = $this->Callcenters->get($id);
        $this->Authorization->authorize($callcenter);
        if ($this->Callcenters->delete($callcenter)) {
            $this->Flash->success(__('The callcenter has been deleted.'));
        } else {
            $this->Flash->error(__('The callcenter could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
