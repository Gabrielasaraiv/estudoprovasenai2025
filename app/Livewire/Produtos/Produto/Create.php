<?php

namespace App\Livewire\Produtos\Produto;

use App\Models\Produtos;
use Livewire\Component;

class Create extends Component
{

    public $nome;
    public $descricao;
    public $preco;
    public $quantidade;
    public $quantidade_minima;

    protected $rules = [
        'nome' => 'required|min:5|max:80',
        'descricao' => 'max:255',
        'preco' => 'required|decimal:2',
        'descricao'=>'max:255',
        'quantidade' => 'required|integer',
        'quantidade_minima' => 'required|integer'
    ];

    protected $messages = [
        'nome.required' => 'O campo é obrigatório',
        'nome.min' => 'O nome deve ter no mínimo 5 caracteres.',
        'nome.max' => 'O nome deve ter no máximo 80 caracteres.',
        'descricao.max' => 'A descrição deve ter no máximo 255 caracteres.',
        'preco.required' => 'O campo é obrigatório.',
        'preco.decimal' => 'O preço está na forma incorreta.',
        'quantidade.required'=> 'O campo é obrigatório.',
        'quantidade.integer'=> 'O campo está na forma incorreta.',
        'quantidade_minima.required'=> 'O campo é obrigatório.',
        'quantidade_minima.integer'=>'O campo está na forma incorreta. '
    ];

    public function store(){
        $this->validate();

        Produtos::create([
            'nome'=> $this->nome,
            'descricao'=>$this->descricao,
            'preco'=> $this->preco,
            'quantidade'=> $this->quantidade,
            'quantidade_minima'=>$this->quantidade_minima
        ]);

        session()->flash('message', 'Produto Cadastrado.');
    }

    public function render()
    {
        return view('livewire.produtos.produto.create');
    }
}
