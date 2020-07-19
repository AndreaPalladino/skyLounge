<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Frontend extends Controller
{
    public function home(){
        return view('welcome');
    }

    public function prices(){
        return view('prices');
    }

    public function services(){

         $services=[
             $serv1=[
                 ['name'=>'Relaxing SPA','desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet dolor, est nesciunt beatae, quam distinctio facere natus harum rerum maiores ab dolores magnam assumenda veritatis provident temporibus, animi exercitationem? Quos!','img'=>'media/spa.jpeg'],
                 ['name'=>'Parapendio','desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet dolor, est nesciunt beatae, quam distinctio facere natus harum rerum maiores ab dolores magnam assumenda veritatis provident temporibus, animi exercitationem? Quos!','img'=>'media/parapendio.jpeg']
             ],
             $serv2=[
                ['name'=>'Climbing','desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet dolor, est nesciunt beatae, quam distinctio facere natus harum rerum maiores ab dolores magnam assumenda veritatis provident temporibus, animi exercitationem? Quos!','img'=>'media/climbing.jpeg'],
                ['name'=>'BunjeeJumping','desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet dolor, est nesciunt beatae, quam distinctio facere natus harum rerum maiores ab dolores magnam assumenda veritatis provident temporibus, animi exercitationem? Quos!','img'=>'media/bunjee.jpeg']
             ]
         ];


        return view('services', ['services'=>$services]);
    }

    public function details($name){

        $services=[
            $serv1=[
                ['name'=>'Relaxing SPA','desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet dolor, est nesciunt beatae, quam distinctio facere natus harum rerum maiores ab dolores magnam assumenda veritatis provident temporibus, animi exercitationem? Quos!','img'=>'/media/spa.jpeg'],
                ['name'=>'Parapendio','desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet dolor, est nesciunt beatae, quam distinctio facere natus harum rerum maiores ab dolores magnam assumenda veritatis provident temporibus, animi exercitationem? Quos!','img'=>'/media/parapendio.jpeg']
            ],
            $serv2=[
               ['name'=>'Climbing','desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet dolor, est nesciunt beatae, quam distinctio facere natus harum rerum maiores ab dolores magnam assumenda veritatis provident temporibus, animi exercitationem? Quos!','img'=>'/media/climbing.jpeg'],
               ['name'=>'BunjeeJumping','desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet dolor, est nesciunt beatae, quam distinctio facere natus harum rerum maiores ab dolores magnam assumenda veritatis provident temporibus, animi exercitationem? Quos!','img'=>'/media/bunjee.jpeg']
            ]
        ];

        foreach($services as $service)
          for($i=0;$i<count($service);$i++){
              if($service[$i]['name']==$name){
                  $selectedService=$service[$i];
                  return view('details', ['selectedService'=>$selectedService]);
              }
            
          }

       return abort(404);
   }
}
