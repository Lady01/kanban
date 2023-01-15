<?php

namespace App\Repositories;

use App\Interfaces\TodoRepositoryInterface;
use App\Models\Todo;

class TodoRepository implements TodoRepositoryInterface 
{
    public function getAllTodos() 
    {
        return Todo::all();
    }

    public function getTodoById($todoId) 
    {
        return Todo::findOrFail($todoId);
    }

    public function deleteTodo($todoId) 
    {
        Todo::destroy($todoId);
    }

    public function createTodo(array $todoIdDetails) 
    {
        return Todo::create($todoIdDetails);
    }

    public function updateTodo($todoId, array $newDetails) 
    {
        return Todo::whereId($todoId)->update($newDetails);
    }
    //public function updateOrder(array $newDetails) 
    //{
        //return Todo::whereId($todoId)->update($newDetails);
    //}
}
