<?php

namespace App\Controllers;


class Pages extends BaseController
{
  public function index()
  {
    $data = [
      'title' => 'Home | Khoerulspace'
    ];
    return view('pages/home', $data);
  }

  public function about()
  {
    $data = [
      'title' => 'About | Khoerulspace'
    ];
    return view('pages/about', $data);
  }

  public function contact()
  {
    $data = [
      'title' => 'Contact Us | Khoerulspace',
      'alamat' => [
        [
          'tipe' => 'Rumah',
          'alamat' => 'Jl. abc No. 123',
          'kota' => 'Bandung'
        ],
        [
          'tipe' => 'Kantor',
          'alamat' => 'Jl. Setiabui No. 193',
          'kota' => 'Bandung'
        ]
      ]
    ];
    return view('pages/contact', $data);
  }
}
