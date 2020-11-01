<?php
namespace App\Repositories;

use  App\Models\Todo;
use App\Repositories\TodoRepositoryInterface;
use Illuminate\Http\Request;

class TodoRepository implements TodoRepositoryInterface
{
    protected $model;

    public function __construct(Todo $model)
    {
       $this->model = $model; 
    }
    
    public function all()
    {
      return $this->model->all();
    }

    public function store(array $data)
    {
      return  $this->model->create($data);
    }
    
    /**
     * 
     * 
     */
    public function delete($todo)
    {
       return $todo->delete();
    }

    public function update(array $data,$id)
    {
       $todo = $this->modle->findOrFail($id);

       return $todo->update($data);
    }
    
}