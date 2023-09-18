<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Infraccion Controller
 *
 * @property \App\Model\Table\InfraccionTable $Infraccion
 * @method \App\Model\Entity\Infraccion[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class InfraccionController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $infraccion = $this->paginate($this->Infraccion);

        $this->set(compact('infraccion'));
    }

    /**
     * View method
     *
     * @param string|null $id Infraccion id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $infraccion = $this->Infraccion->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('infraccion'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $infraccion = $this->Infraccion->newEmptyEntity();
        if ($this->request->is('post')) {
            $infraccion = $this->Infraccion->patchEntity($infraccion, $this->request->getData());
            if ($this->Infraccion->save($infraccion)) {
                $this->Flash->success(__('La infracción ha sido salvada.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('No se ha podido agregar la infracción. Por favor, inténtelo de nuevo.'));
        }
        $this->set(compact('infraccion'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Infraccion id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $infraccion = $this->Infraccion->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $infraccion = $this->Infraccion->patchEntity($infraccion, $this->request->getData());
            if ($this->Infraccion->save($infraccion)) {
                $this->Flash->success(__('La infracción ha sido salvada.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('No se ha podido agregar la infracción. Por favor, inténtelo de nuevo.'));
        }
        $this->set(compact('infraccion'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Infraccion id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $infraccion = $this->Infraccion->get($id);
        if ($this->Infraccion->delete($infraccion)) {
            $this->Flash->success(__('La infracción ha sido salvada.'));
        } else {
            $this->Flash->error(__('No se ha podido agregar la infracción. Por favor, inténtelo de nuevo.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
