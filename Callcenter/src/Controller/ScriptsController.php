<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Scripts Controller
 *
 * @property \App\Model\Table\ScriptsTable $Scripts
 * @method \App\Model\Entity\Script[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ScriptsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $scripts = $this->paginate($this->Scripts);
        $this->Authorization->skipAuthorization();
        $this->set(compact('scripts'));
    }

    /**
     * View method
     *
     * @param string|null $id Script id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $script = $this->Scripts->get($id, [
            'contain' => ['Registrollamadascobranzas'],
        ]);
        $this->Authorization->authorize($script,'view');
        $this->set(compact('script'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $script = $this->Scripts->newEmptyEntity();
        $this->Authorization->authorize($script,'view','update');
        if ($this->request->is('post')) {
            $script = $this->Scripts->patchEntity($script, $this->request->getData());
            if ($this->Scripts->save($script)) {
                $this->Flash->success(__('The script has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The script could not be saved. Please, try again.'));
        }
        $this->set(compact('script'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Script id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $script = $this->Scripts->get($id, [
            'contain' => [],
        ]);
        $this->Authorization->authorize($script,'view','update');
        if ($this->request->is(['patch', 'post', 'put'])) {
            $script = $this->Scripts->patchEntity($script, $this->request->getData());
            if ($this->Scripts->save($script)) {
                $this->Flash->success(__('The script has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The script could not be saved. Please, try again.'));
        }
        $this->set(compact('script'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Script id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $script = $this->Scripts->get($id);
        $this->Authorization->authorize($script);
        if ($this->Scripts->delete($script)) {
            $this->Flash->success(__('The script has been deleted.'));
        } else {
            $this->Flash->error(__('The script could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
