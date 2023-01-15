<?php

namespace App\Http\Controllers;

use App\Interfaces\TodoRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTodoRequest;
use App\Http\Requests\UpdateTodoRequest;
use Illuminate\Http\Response;

class TodoController extends Controller 
{
    private  $todoRepository;

    public function __construct(TodoRepositoryInterface $todoRepository) 
    {
        $this->todoRepository = $todoRepository;
    }

    public function index(): JsonResponse 
    {
        return response()->json([
            'data' => $this->todoRepository->getAllTodos()
        ]);
    }

    public function store(StoreTodoRequest $request): JsonResponse 
    {
        $todoDetails = $request->all();

        return response()->json(
            [
                'data' => $this->todoRepository->createTodo($todoDetails)
            ],
            Response::HTTP_CREATED
        );
    }

    public function show(Request $request): JsonResponse 
    {
        $todoId = $request->route('id');

        return response()->json([
            'data' => $this->todoRepository->getTodoById($todoId)
        ]);
    }

    public function update(UpdateTodoRequest $request): JsonResponse 
    {
        $todoId = $request->route('id');
        $todoDetails = $request->all();

        return response()->json([
            'data' => $this->todoRepository->updateTodo($todoId, $todoDetails)
        ]);

    }
    public function updateOrderPhase(Request $request): JsonResponse 
    {
        foreach ($request->columns as $phase) {
            foreach ($phase['todos'] as $i => $todo) {
                $order = $i + 1;
                if ($todo['phase_id'] !== $phase['id'] || $todo['order'] !== $order) {
                        Todo::find($todo['id'])
                        ->update(['phase_id' => $phase['id'], 'order' => $order]);
                }
            }
        }
        return response()->json([
            'data' => Phase::with('todos')->get()
        ]);

    }

    
}
