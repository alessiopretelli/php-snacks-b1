<?php 
    // metodo 1
    // $matches = [
    //     [
    //         'Franchi',
    //         'Fiorentina',
    //         "Milan",
    //         3,
    //         1
    //     ],
    //     [
    //         'Castellani',
    //         'Empoli',
    //         "Roma",
    //         2,
    //         3
    //     ],
    //     [
    //         'Santa Elisa',
    //         'Lucca',
    //         "Vinci",
    //         3,
    //         5
    //     ]
    // ];

    // for ($i = 0; $i < count($matches); $i++) {

    //     echo $matches[$i][0] . " " . $matches[$i][1] . "-" . $matches[$i][2] . " | " . $matches[$i][3] . "-" . $matches[$i][4] . ". ";

    // }

    // metodo 2 'chiavi di chiavi'
    // $matches = [
    //     'Franchi' => [
    //         'Fiorentina' => 60,
    //         "Milan" => 10
    //     ],
    //     'Castellani' => [
    //         'Empoli' => 55,
    //         "Roma" => 30
    //     ],
    //     'Santa Elisa' => [
    //         'Lucca' => 35,
    //         "Vinci" => 50
    //     ]
    // ];

    // $chiavi = array_keys($matches);

    // for ($i = 0; $i < count($chiavi); $i++) {
    //     $c_chiavi = array_keys($matches[$chiavi[$i]]);
    //     echo $chiavi[$i] . " " . $c_chiavi[0] . "-" . $c_chiavi[1] . " | " . $matches[$chiavi[$i]][$c_chiavi[0]] . "-" . $matches[$chiavi[$i]][$c_chiavi[1]] . ". ";
    // }
    
    // metodo 3
    $matches = [
        'Franchi' => [
            'squadra_in_casa' => 'Fiorentina',
            'squadra_avversaria' => 'Milan',
            'punti_in_casa' => 60,
            'punti_avversaria' => 10
        ],
        'Castellani' => [
            'squadra_in_casa' => 'Empoli',
            'squadra_avversaria' => 'Roma',
            'punti_in_casa' => 55,
            'punti_avversaria' => 30
        ],
        'Santa Elisa' => [
            'squadra_in_casa' => 'Lucca',
            'squadra_avversaria' => 'Vinci',
            'punti_in_casa' => 35,
            'punti_avversaria' => 50
        ]
    ];

    $chiavi = array_keys($matches);

    for ($i = 0; $i < count($chiavi); $i++) {
        echo $chiavi[$i] . " " . $matches[$chiavi[$i]]['squadra_in_casa'] . "-" . $matches[$chiavi[$i]]['squadra_avversaria'] . " | " . $matches[$chiavi[$i]]['punti_in_casa'] . "-" . $matches[$chiavi[$i]]['punti_avversaria'] . ". ";
    }

?>