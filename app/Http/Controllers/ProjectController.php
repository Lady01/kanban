<?php

namespace App\Http\Controllers;

use App\Interfaces\ProjectRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProjectController extends Controller 
{
    private  $projectRepository;

    public function __construct(ProjectRepositoryInterface $projectRepository) 
    {
        $this->projectRepository = $projectRepository;
    }

    public function index(): JsonResponse 
    {
        return response()->json([
            'data' => $this->projectRepository->getAllProjects()
        ]);
    }

    public function store(Request $request): JsonResponse 
    {
        $orderProject = $request->only([
            'name',
            'description'
        ]);

        return response()->json(
            [
                'data' => $this->projectRepository->createProject($orderProject)
            ],
            Response::HTTP_CREATED
        );
    }

    public function show(Request $request): JsonResponse 
    {
        $projectId = $request->route('id');

        return response()->json([
            'data' => $this->projectRepository->getProjectById($projectId)
        ]);
    }

    public function update(Request $request): JsonResponse 
    {
        $projectId = $request->route('id');
        /*$projectDetails = $request->only([
            'name',
            'description'
        ]);*/
        $projectDetails = $request->all();

        return response()->json([
            'data' => $this->projectRepository->updateProject($projectId, $projectDetails)
        ]);

        /*return response()->json([
            'data' => $projectDetails
        ]);exit;*/

    }

    public function destroy(Request $request): JsonResponse 
    {
        $orderId = $request->route('id');
        $this->projectRepository->deleteOrder($orderId);

        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
