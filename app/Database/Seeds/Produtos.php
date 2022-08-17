<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Produtos extends Seeder
{
    public function run()
    {
        $nomePratos= ['Picanha','Filé Mignon', 'Baby beef'];
        $desc = ['Arroz, feijão e filé mignon','Arroz, feijão e picanha','Arroz, feijão e Baby beef'];
        $acompanhamento = ['Alface','Repolho','Couve'];
        $bebida = ['Coca-cola','Red Bull', 'Suco Natural'];
        $valor = [60,50,50];

        for($x = 0; $x < 6; $x++){
            $data = [
                'nomePrato' => $nomePratos[$x],
                'descricao' => $desc[$x],
                'acompanhamento' => $acompanhamento[$x],
                'bebida' => $bebida[$x],
                'valor'    => $valor[$x],
            ];

            
            $this->db->table('pratos')->insert($data);
        }
    }
}