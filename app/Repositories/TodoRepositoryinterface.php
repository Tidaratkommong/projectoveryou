<?php 

namespace App\Repositories;

use Illuminate\Http\Request;
use  App\Models\Todo;
interface TodoRepositoryInterface{

    public function all();

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(array $data);
    
    /**
     * 
     * 
     */
    public function delete( Todo $todo);

    public function update(array $data,$id);

}



