<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Estadopagos Controller
 *
 * @property \App\Model\Table\EstadopagosTable $Estadopagos
 * @method \App\Model\Entity\Estadopago[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EstadopagosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $estadopagos = $this->paginate($this->Estadopagos);
        $this->Authorization->skipAuthorization();
        $this->set(compact('estadopagos'));
    }

    /**
     * View method
     *
     * @param string|null $id Estadopago id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $estadopago = $this->Estadopagos->get($id, [
            'contain' => ['Contratos'],
        ]);
        $this->Authorization->authorize($estadopago,'view');

        $this->set(compact('estadopago'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $estadopago = $this->Estadopagos->newEmptyEntity();
        $this->Authorization->authorize($estadopago,'view','update');
        if ($this->request->is('post')) {
            $estadopago = $this->Estadopagos->patchEntity($estadopago, $this->request->getData());
            if ($this->Estadopagos->save($estadopago)) {
                $this->Flash->success(__('The estadopago has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The estadopago could not be saved. Please, try again.'));
        }
        $this->set(compact('estadopago'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Estadopago id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $estadopago = $this->Estadopagos->get($id, [
            'contain' => [],
        ]);
        $this->Authorization->authorize($estadopago,'view','update');
        if ($this->request->is(['patch', 'post', 'put'])) {
            $estadopago = $this->Estadopagos->patchEntity($estadopago, $this->request->getData());
            if ($this->Estadopagos->save($estadopago)) {
                $this->Flash->success(__('The estadopago has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The estadopago could not be saved. Please, try again.'));
        }
        $this->set(compact('estadopago'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Estadopago id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $estadopago = $this->Estadopagos->get($id);
        $this->Authorization->authorize($estadopago);
        if ($this->Estadopagos->delete($estadopago)) {
            $this->Flash->success(__('The estadopago has been deleted.'));
        } else {
            $this->Flash->error(__('The estadopago could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
