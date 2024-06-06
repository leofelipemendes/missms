<?php

namespace App\Http\Controllers;

use App\Classes\ApiResponseClass;
use App\Http\Resources\UserResource;
use App\Interfaces\UserRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    protected UserRepositoryInterface $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index():JsonResponse
    {
        $users = $this->userRepository->all();
        return ApiResponseClass::sendResponse(UserResource::collection($users),'',201);
    }

    public function show($id): JsonResponse
    {
        $user = $this->userRepository->find($id);
        return response()->json($user);
    }

    public function store(Request $request): JsonResponse
    {
        $user = $this->userRepository->create($request->all());

        $details =[
            'name' => $request->name,
        ];

        DB::beginTransaction();
        try{
            $user = $this->userRepository->create($details);

            DB::commit();
            return ApiResponseClass::sendResponse(new UserResource($user),'User Create Successful',201);

        }catch(\Exception $ex){
            return ApiResponseClass::rollback($ex);
        }
    }

    public function update(Request $request, $id): JsonResponse
    {
        $user = $this->userRepository->update($id, $request->all());
        return response()->json($user);
    }

    public function destroy($id): JsonResponse
    {
        $deleted = $this->userRepository->delete($id);
        return response()->json(['deleted' => $deleted]);
    }
}
