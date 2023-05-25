<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

class VendasController extends AppController
{

    public function index()
    {
        $this->paginate = [
            'contain' => ['Pessoa', 'Item'],
        ];
        $vendas = $this->paginate($this->Vendas);

        $this->set(compact('vendas'));
    }


    public function view($id = null)
    {
        $venda = $this->Vendas->get($id, [
            'contain' => ['Pessoa', 'Item'],
        ]);

        $this->set('venda', $venda);
    }


    public function add()
    {
        $venda = $this->Vendas->newEntity();
        if ($this->request->is('post')) {
            $venda = $this->Vendas->patchEntity($venda, $this->request->getData());
            if ($this->Vendas->save($venda)) {
                $this->Flash->success(__('Venda realizada com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Houve um erro ao realizar venda!'));
        }
        $pessoa = $this->Vendas->Pessoa->find('list', [
            'limit' => 200,
            'valueField' => 'nome' // Inclua esta linha para especificar o campo "nome"
        ]);
        $item = $this->Vendas->Item->find('list', [
            'limit' => 200,
            'valueField' => 'nome_do_item' // Inclua esta linha para especificar o campo "nome"
        ]);

        $this->set(compact('venda', 'pessoa', 'item'));
    }



    public function edit($id = null)
    {
        $venda = $this->Vendas->get($id, [
            'contain' => ['Pessoa', 'Item'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $venda = $this->Vendas->patchEntity($venda, $this->request->getData());
            if ($this->Vendas->save($venda)) {
                $this->Flash->success(__('Venda realizada com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Houve um erro ao realizar venda!'));
        }
        $pessoa = $this->Vendas->Pessoa->find('list', [
            'limit' => 200,
            'valueField' => 'nome' // Inclua esta linha para especificar o campo "nome"
        ]);
        $item = $this->Vendas->Item->find('list', [
            'limit' => 200,
            'valueField' => 'nome_do_item' // Inclua esta linha para especificar o campo "nome"
        ]);
        $this->set(compact('venda', 'pessoa', 'item'));
    }


    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $venda = $this->Vendas->get($id);
        if ($this->Vendas->delete($venda)) {
            $this->Flash->success(__('Excluído com sucesso.'));
        } else {
            $this->Flash->error(__('Houve um erro ao excluir venda!'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function relatorioPeriodo()
    {
        if ($this->request->is('post')) {
            $startDate = $this->request->getData('start_date');
            $endDate = $this->request->getData('end_date');
    
            $vendas = $this->Vendas->find()
                ->contain(['Pessoa', 'Item'])
                ->where(function ($exp) use ($startDate, $endDate) {
                    return $exp->between('venda_data', $startDate, $endDate, 'date');
                })
                ->toArray();
    
            $this->set(compact('vendas', 'startDate', 'endDate'));
        }
    }
}
