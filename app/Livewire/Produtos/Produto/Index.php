<?php

namespace App\Livewire\Produtos\Produto;

use App\Models\Produtos;
use Livewire\Component;

class Index extends Component
{
    public $search = '';
    public $perPage = 10;

    protected $queryString = [
        'search'=> ['except'=>''],
        'perPage'=> ['except'=>'10']
    ];

    public $produtosId;

    public function abrirModalExclusão($produtosId){
        $this->produtosId = $produtosId;
    }

    public function delete(){
        if($this->produtosId){
            $produto = Produtos::find($this->produtosId);
            $produto->delete();
        }
    }


    public function render()
    {
        $produtos = Produtos::where('nome', 'like', "%{$this->search}%")
         ->orWhere('descricao', 'like', "%{$this->search}%")
            ->orWhere('preco', 'like', "%{$this->search}%")
             ->orWhere('quantidade', 'like', "%{$this->search}%")
              ->orWhere('quantidade_minima', 'like', "%{$this->search}%")
            ->paginate($this->perPage);

        return view('livewire.produtos.produto.index', compact('produtos'));
    }
}
