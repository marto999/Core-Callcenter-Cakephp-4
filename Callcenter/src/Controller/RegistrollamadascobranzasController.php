<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Registrollamadascobranzas Controller
 *
 * @property \App\Model\Table\RegistrollamadascobranzasTable $Registrollamadascobranzas
 * @method \App\Model\Entity\Registrollamadascobranza[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RegistrollamadascobranzasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Contratos', 'Callcenters', 'Campañas', 'Respuestas', 'Scripts'],
        ];
        $registrollamadascobranzas = $this->paginate($this->Registrollamadascobranzas);
        $this->Authorization->skipAuthorization();
        $this->set(compact('registrollamadascobranzas'));
    }

    /**
     * View method
     *
     * @param string|null $id Registrollamadascobranza id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $registrollamadascobranza = $this->Registrollamadascobranzas->get($id, [
            'contain' => ['Contratos', 'Callcenters', 'Campañas', 'Respuestas', 'Scripts'],
        ]);
        $this->Authorization->authorize($registrollamadascobranza,'view');
        $this->set(compact('registrollamadascobranza'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $registrollamadascobranza = $this->Registrollamadascobranzas->newEmptyEntity();
        $this->Authorization->authorize($registrollamadascobranza,'view','update');
        if ($this->request->is('post')) {
            $registrollamadascobranza = $this->Registrollamadascobranzas->patchEntity($registrollamadascobranza, $this->request->getData());
            if ($this->Registrollamadascobranzas->save($registrollamadascobranza)) {
                $this->Flash->success(__('The registrollamadascobranza has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The registrollamadascobranza could not be saved. Please, try again.'));
        }
        $contratos = $this->Registrollamadascobranzas->Contratos->find('list', ['limit' => 200]);
        $callcenters = $this->Registrollamadascobranzas->Callcenters->find('list', ['limit' => 200]);
        $campañas = $this->Registrollamadascobranzas->Campañas->find('list', ['limit' => 200]);
        $respuestas = $this->Registrollamadascobranzas->Respuestas->find('list', ['limit' => 200]);
        $scripts = $this->Registrollamadascobranzas->Scripts->find('list', ['limit' => 200]);
        $this->set(compact('registrollamadascobranza', 'contratos', 'callcenters', 'campañas', 'respuestas', 'scripts'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Registrollamadascobranza id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $registrollamadascobranza = $this->Registrollamadascobranzas->get($id, [
            'contain' => [],
        ]);
        $this->Authorization->authorize($registrollamadascobranza,'view','update');
        if ($this->request->is(['patch', 'post', 'put'])) {
            $registrollamadascobranza = $this->Registrollamadascobranzas->patchEntity($registrollamadascobranza, $this->request->getData());
            if ($this->Registrollamadascobranzas->save($registrollamadascobranza)) {
                $this->Flash->success(__('The registrollamadascobranza has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The registrollamadascobranza could not be saved. Please, try again.'));
        }
        $contratos = $this->Registrollamadascobranzas->Contratos->find('list', ['limit' => 200]);
        $callcenters = $this->Registrollamadascobranzas->Callcenters->find('list', ['limit' => 200]);
        $campañas = $this->Registrollamadascobranzas->Campañas->find('list', ['limit' => 200]);
        $respuestas = $this->Registrollamadascobranzas->Respuestas->find('list', ['limit' => 200]);
        $scripts = $this->Registrollamadascobranzas->Scripts->find('list', ['limit' => 200]);
        $this->set(compact('registrollamadascobranza', 'contratos', 'callcenters', 'campañas', 'respuestas', 'scripts'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Registrollamadascobranza id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $registrollamadascobranza = $this->Registrollamadascobranzas->get($id);
        $this->Authorization->authorize($registrollamadascobranza);
        if ($this->Registrollamadascobranzas->delete($registrollamadascobranza)) {
            $this->Flash->success(__('The registrollamadascobranza has been deleted.'));
        } else {
            $this->Flash->error(__('The registrollamadascobranza could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
