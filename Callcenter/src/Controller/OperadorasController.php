<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Operadoras Controller
 *
 * @property \App\Model\Table\OperadorasTable $Operadoras
 * @method \App\Model\Entity\Operadora[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OperadorasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $operadoras = $this->paginate($this->Operadoras);
        $this->Authorization->skipAuthorization();
        $this->set(compact('operadoras'));
    }

    /**
     * View method
     *
     * @param string|null $id Operadora id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $operadora = $this->Operadoras->get($id, [
            'contain' => ['Campañas', 'Contratos'],
        ]);
        $this->Authorization->authorize($operadora,'view');
        $this->set(compact('operadora'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $operadora = $this->Operadoras->newEmptyEntity();
        $this->Authorization->authorize($operadora,'view','update');
        if ($this->request->is('post')) {
            $operadora = $this->Operadoras->patchEntity($operadora, $this->request->getData());
            if ($this->Operadoras->save($operadora)) {
                $this->Flash->success(__('The operadora has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The operadora could not be saved. Please, try again.'));
        }
        $this->set(compact('operadora'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Operadora id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $operadora = $this->Operadoras->get($id, [
            'contain' => [],
        ]);
        $this->Authorization->authorize($operadora,'view','update');
        if ($this->request->is(['patch', 'post', 'put'])) {
            $operadora = $this->Operadoras->patchEntity($operadora, $this->request->getData());
            if ($this->Operadoras->save($operadora)) {
                $this->Flash->success(__('The operadora has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The operadora could not be saved. Please, try again.'));
        }
        $this->set(compact('operadora'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Operadora id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        
        $this->request->allowMethod(['post', 'delete']);
        $operadora = $this->Operadoras->get($id);
        $this->Authorization->authorize($operadora);
        if ($this->Operadoras->delete($operadora)) {
            $this->Flash->success(__('The operadora has been deleted.'));
        } else {
            $this->Flash->error(__('The operadora could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
