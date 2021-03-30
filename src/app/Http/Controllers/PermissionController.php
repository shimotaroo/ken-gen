<?php

namespace App\Http\Controllers;

use App\Http\Requests\SymbolRequest;
use App\Repositories\Permission\PermissionRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
     * @param App\Http\Requests\SymbolRequest $request
     * @return Object
     */
    public function convert(SymbolRequest $request) :object
    {
        $response = [
            'symbol' => $request->symbol,
            'number' => '',
            'error' => '',
        ];
        $dividedSymbol = str_split($request->symbol, 3);
        foreach ($dividedSymbol as $symbol) {
            $permission = $this->permissionRepository->getBySymbol($symbol);
            if (is_null($permission)) {
                $response['error'] = '権限記号が正しくありません';
                break;
            }
            $response['number'] .= $permission->number;
        }
        return response()->json($response);
    }
}
