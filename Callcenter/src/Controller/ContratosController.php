<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Contratos Controller
 *
 * @property \App\Model\Table\ContratosTable $Contratos
 * @method \App\Model\Entity\Contrato[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ContratosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->Authorization->skipAuthorization();
        $this->paginate = [
            'contain' => ['Clientes', 'Estadopagos', 'Operadoras', 'Productos', 'Users'],
        ];
        $contratos = $this->paginate($this->Contratos);

        $this->set(compact('contratos'));
    }

    /**
     * View method
     *
     * @param string|null $id Contrato id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $contrato = $this->Contratos->get($id, [
            'contain' => ['Clientes', 'Estadopagos', 'Operadoras', 'Productos', 'Users', 'Registrollamadascobranzas'],
        ]);
        $this->Authorization->authorize($contrato,'view');
        $this->set(compact('contrato'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $contrato = $this->Contratos->newEmptyEntity();
        $this->Authorization->authorize($contrato,'view','update');
        if ($this->request->is('post')) {
            $contrato = $this->Contratos->patchEntity($contrato, $this->request->getData());
            if ($this->Contratos->save($contrato)) {
                $this->Flash->success(__('The contrato has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contrato could not be saved. Please, try again.'));
        }
        $clientes = $this->Contratos->Clientes->find('list', ['limit' => 200]);
        $estadopagos = $this->Contratos->Estadopagos->find('list', ['limit' => 200]);
        $operadoras = $this->Contratos->Operadoras->find('list', ['limit' => 200]);
        $productos = $this->Contratos->Productos->find('list', ['limit' => 200]);
        $users = $this->Contratos->Users->find('list', ['limit' => 200]);
        $this->set(compact('contrato', 'clientes', 'estadopagos', 'operadoras', 'productos', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Contrato id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $contrato = $this->Contratos->get($id, [
            'contain' => [],
        ]);
        $this->Authorization->authorize($contrato,'view','update');
        if ($this->request->is(['patch', 'post', 'put'])) {
            $contrato = $this->Contratos->patchEntity($contrato, $this->request->getData());
            if ($this->Contratos->save($contrato)) {
                $this->Flash->success(__('The contrato has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contrato could not be saved. Please, try again.'));
        }
        $clientes = $this->Contratos->Clientes->find('list', ['limit' => 200]);
        $estadopagos = $this->Contratos->Estadopagos->find('list', ['limit' => 200]);
        $operadoras = $this->Contratos->Operadoras->find('list', ['limit' => 200]);
        $productos = $this->Contratos->Productos->find('list', ['limit' => 200]);
        $users = $this->Contratos->Users->find('list', ['limit' => 200]);
        $this->set(compact('contrato', 'clientes', 'estadopagos', 'operadoras', 'productos', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Contrato id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $contrato = $this->Contratos->get($id);
        $this->Authorization->authorize($contrato);
        if ($this->Contratos->delete($contrato)) {
            $this->Flash->success(__('The contrato has been deleted.'));
        } else {
            $this->Flash->error(__('The contrato could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
