<?php

namespace App\Http\Controllers;

use App\Repositories\Permission\PermissionRepositoryInterface;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    private $permissionRepository;

    /**
     * construct
     */
    public function __construct(PermissionRepositoryInterface $permissionRepository)
    {
        $this->permissionRepository = $permissionRepository;
    }

    /**
     * 入力された権限記号をLinuxコマンドに変換して返す
     * 
     * @param Illuminate\Http\Request $request
     * @return json
     */
    public function convert(Request $request)
    {
        $response = [
            'number' => ''
        ];
        $dividedSymbol = str_split($request->symbol, 3);
        foreach ($dividedSymbol as $symbol) {
            $response['number'] .= $this->permissionRepository->getNumberBySymbol($symbol);
        }
        return response()->json($response);
    }
}
