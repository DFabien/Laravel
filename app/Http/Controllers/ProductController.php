<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showAll()
    {
        $blonde = array(
            'name' => 'Grimbergen Blonde',
            'price' => 5.25,
            'description' => 'RONDE ET ÉQUILIBRÉE. Une bière blonde légère aux notes 
                                de fruits mûrs, parfaitement limpide, à la mousse dense 
                                couleur crème.',
            'photo' => 'images/blonde_verre.png'
        );

        $blanche = array (
            'name' => 'Grimbergen Blanche',
            'price' => 5.49,
            'description' => 'FRAÎCHE ET ÉQUILIBRÉE. Une bière blanche légèrement trouble aux 
                                arômes frais d’agrumes, de clous de girofle, de coriandre et de 
                                bergamote, le tout agrémenté d’une mousse crémeuse.',
            'photo' => 'images/blanche_verre.png'
        );
        
        $ambree = array (
            'name' => 'Grimbergen Ambrée',
            'price' => 6.17,
            'description' => 'RICHE ET MALTÉE. Une bière brune haute fermentation aux notes 
                                douces-amères, rehaussées d’un soupçon de caramel et de 
                                pruneaux, avec des sortes de houblon et de malt fermentées 
                                deux fois.',
            'photo' => 'images/ambree_verre.png'
        );

        $rouge = array (
            'name' => 'Grimbergen Rouge',
            'price' => 5.69,
            'description' => 'RONDE ET FRUITÉE. Une bière fruitée, douce-amère, forte de la 
                                tradition belge; elle allie les arômes de fruits rouges et de 
                                fraises aux notes du clou de girofle, tout en lui conférant un 
                                léger caractère épicé sous une robe rouge aux reflets rubis, une 
                                mousse généreuse et un parfum intense.',
            'photo' => 'images/rouge_verre.png'
        );

        $products=[$blonde,$blanche,$ambree, $rouge];
        
        return view('products/product', ['liste'=>$products]);
    }
    public function show($id){

        return view('products/description');
    }
}
