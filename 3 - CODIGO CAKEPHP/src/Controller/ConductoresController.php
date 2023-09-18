<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Conductores Controller
 *
 * @property \App\Model\Table\ConductoresTable $Conductores
 * @method \App\Model\Entity\Conductore[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ConductoresController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $conductores = $this->paginate($this->Conductores);

        $this->set(compact('conductores'));
    }

    /**
     * View method
     *
     * @param string|null $id Conductore id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $conductore = $this->Conductores->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('conductore'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $conductore = $this->Conductores->newEmptyEntity();
        if ($this->request->is('post')) {
            $conductore = $this->Conductores->patchEntity($conductore, $this->request->getData());
            if ($this->Conductores->save($conductore)) {
                $this->Flash->success(__('El conductor se ha salvado.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('No se ha podido guardar el conductore. Por favor, inténtelo de nuevo.'));
        }
        $this->set(compact('conductore'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Conductore id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $conductore = $this->Conductores->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $conductore = $this->Conductores->patchEntity($conductore, $this->request->getData());
            if ($this->Conductores->save($conductore)) {
                $this->Flash->success(__('El conductor se ha salvado.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('No se ha podido guardar el conductore. Por favor, inténtelo de nuevo.'));
        }
        $this->set(compact('conductore'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Conductore id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $conductore = $this->Conductores->get($id);
        if ($this->Conductores->delete($conductore)) {
            $this->Flash->success(__('El conductor se ha salvado.'));
        } else {
            $this->Flash->error(__('No se ha podido guardar el conductore. Por favor, inténtelo de nuevo.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
