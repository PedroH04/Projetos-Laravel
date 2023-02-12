<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllersSite extends Controller
{
    public function Accounts(int $id=null){
        $Accounts = [
            1=>[
                'Name' => 'Pedro',
                'PassWord' => 'senhaPedro'
        ],
            2=>[
                'Name' => 'Gustavo',
                'PassWord' => 'senhaGustavo'
        ],
        2=>[
                'Name' => 'Gilliam',
                'PassWord' => 'senhaGilliam'
        ],
    ];
    if($id !=null){
    echo $Accounts[$id]['Name'];
    echo '<br>';
    echo $Accounts[$id]['PassWord'];
    }
}
}
