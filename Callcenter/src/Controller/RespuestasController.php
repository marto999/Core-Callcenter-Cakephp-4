<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Respuestas Controller
 *
 * @property \App\Model\Table\RespuestasTable $Respuestas
 * @method \App\Model\Entity\Respuesta[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RespuestasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $respuestas = $this->paginate($this->Respuestas);
        $this->Authorization->skipAuthorization();
        $this->set(compact('respuestas'));
    }

    /**
     * View method
     *
     * @param string|null $id Respuesta id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $respuesta = $this->Respuestas->get($id, [
            'contain' => ['Registrollamadascobranzas'],
        ]);
        $this->Authorization->authorize($respuesta,'view');
        $this->set(compact('respuesta'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $respuesta = $this->Respuestas->newEmptyEntity();
        $this->Authorization->authorize($respuesta,'view','update');
        if ($this->request->is('post')) {
            $respuesta = $this->Respuestas->patchEntity($respuesta, $this->request->getData());
            if ($this->Respuestas->save($respuesta)) {
                $this->Flash->success(__('The respuesta has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The respuesta could not be saved. Please, try again.'));
        }
        $this->set(compact('respuesta'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Respuesta id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $respuesta = $this->Respuestas->get($id, [
            'contain' => [],
        ]);
        $this->Authorization->authorize($respuesta,'view','update');
        if ($this->request->is(['patch', 'post', 'put'])) {
            $respuesta = $this->Respuestas->patchEntity($respuesta, $this->request->getData());
            if ($this->Respuestas->save($respuesta)) {
                $this->Flash->success(__('The respuesta has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The respuesta could not be saved. Please, try again.'));
        }
        $this->set(compact('respuesta'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Respuesta id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        
        $this->request->allowMethod(['post', 'delete']);
        $respuesta = $this->Respuestas->get($id);
        $this->Authorization->authorize($respuesta);
        if ($this->Respuestas->delete($respuesta)) {
            $this->Flash->success(__('The respuesta has been deleted.'));
        } else {
            $this->Flash->error(__('The respuesta could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
