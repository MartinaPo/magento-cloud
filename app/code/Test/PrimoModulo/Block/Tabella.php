<?php

declare(strict_types=1);

namespace Test\PrimoModulo\Block;

class Tabella extends \Magento\Framework\View\Element\Template {
    
    public function tableTicket() {
        $tickets = [
            'tk1' => [ 
                'nome'=>"Luigi",
                'cognome'=>"Rossi",
                'email'=>"luigi.rossi@gmail.com",
                'id'=>"1",
                'testo'=>"prova"
            ],
            'tk2' => [ 
                'nome'=>"Mario",
                'cognome'=>"Verdi",
                'email'=>"mario.verdi@gmail.com",
                'id'=>"2",
                'testo'=>"prova"
            ],
            'tk3' => [ 
                'nome'=>"Gino",
                'cognome'=>"Bianchi",
                'email'=>"gino.bianchi@gmail.com",
                'id'=>"3",
                'testo'=>"prova"
            ]
        ];

        return $tickets;
    }
}