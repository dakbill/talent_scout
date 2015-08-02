<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;

class TalentsController extends Controller
{
  public function index(){
    $talents = [
      ['name' => 'Abigail', 'state' => 'GAR','country' => 'GH','stats' => [] ],
      ['name' => 'Kwame', 'state' => 'VR','country' => 'GH','stats' => [] ],
      ['name' => 'Kwaku', 'state' => 'ER','country' => 'GH','stats' => [] ],
      ['name' => 'Aba', 'state' => 'CR','country' => 'GH','stats' => [] ],
      ['name' => 'Gifty', 'state' => 'WR','country' => 'GH','stats' => [] ],
      ['name' => 'Afia', 'state' => 'AR','country' => 'GH','stats' => [] ],
      ['name' => 'Charles', 'state' => 'BAR','country' => 'GH','stats' => [] ]
    ];
    return response()->json($talents);
  }

  public function basketball(){
    $talents = [
      ['name' => 'Aba', 'state' => 'CR','country' => 'GH','stats' => [] ],
      ['name' => 'Gifty', 'state' => 'WR','country' => 'GH','stats' => [] ],
      ['name' => 'Afia', 'state' => 'AR','country' => 'GH','stats' => [] ],
      ['name' => 'Charles', 'state' => 'BAR','country' => 'GH','stats' => [] ]
    ];
    return response()->json($talents);
  }

  public function soccer(){
    $talents = [
      ['name' => 'Aba', 'state' => 'CR','country' => 'GH','stats' => [] ],
      ['name' => 'Gifty', 'state' => 'WR','country' => 'GH','stats' => [] ],
      ['name' => 'Afia', 'state' => 'AR','country' => 'GH','stats' => [] ],
      ['name' => 'Charles', 'state' => 'BAR','country' => 'GH','stats' => [] ]
    ];
    return response()->json($talents);
  }
}
