<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Campañas Controller
 *
 * @property \App\Model\Table\CampañasTable $Campañas
 * @method \App\Model\Entity\Campaña[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CampañasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Operadoras'],
        ];
        $campañas = $this->paginate($this->Campañas);
        $this->Authorization->skipAuthorization();
        $this->set(compact('campañas'));
    }

    /**
     * View method
     *
     * @param string|null $id Campaña id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $campaña = $this->Campañas->get($id, [
            'contain' => ['Operadoras', 'Registrollamadascobranzas'],
        ]);
        $this->Authorization->authorize($campaña,'view');
        $this->set(compact('campaña'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $campaña = $this->Campañas->newEmptyEntity();
        $this->Authorization->authorize($campaña,'view','update');
        if ($this->request->is('post')) {
            $campaña = $this->Campañas->patchEntity($campaña, $this->request->getData());
            if ($this->Campañas->save($campaña)) {
                $this->Flash->success(__('The campaña has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The campaña could not be saved. Please, try again.'));
        }
        $operadoras = $this->Campañas->Operadoras->find('list', ['limit' => 200]);
        $this->set(compact('campaña', 'operadoras'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Campaña id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $campaña = $this->Campañas->get($id, [
            'contain' => [],
        ]);
        $this->Authorization->authorize($campaña,'view','update');
        if ($this->request->is(['patch', 'post', 'put'])) {
            $campaña = $this->Campañas->patchEntity($campaña, $this->request->getData());
            if ($this->Campañas->save($campaña)) {
                $this->Flash->success(__('The campaña has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The campaña could not be saved. Please, try again.'));
        }
        $operadoras = $this->Campañas->Operadoras->find('list', ['limit' => 200]);
        $this->set(compact('campaña', 'operadoras'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Campaña id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $campaña = $this->Campañas->get($id);
        $this->Authorization->authorize($campaña);
        if ($this->Campañas->delete($campaña)) {
            $this->Flash->success(__('The campaña has been deleted.'));
        } else {
            $this->Flash->error(__('The campaña could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
