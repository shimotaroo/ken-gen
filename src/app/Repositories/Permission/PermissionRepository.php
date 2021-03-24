<?php

namespace App\Repositories\Permission;

use App\Models\Permission;

class  PermissionRepository implements PermissionRepositoryInterface
{
    protected $permission;

    /**
     * 
     */
    public function __construct(Permission $permission)
    {
        $this->permission = $permission;
    }
    
    /**
     * パラメータに渡された3文字の権限記号から権限番号を取得する
     * 
     * @param string $symbol
     * @return string 
     */
    public function getNumberBySymbol($symbol)
    {
        $permission = $this->permission->where('symbol', $symbol)->first();
        return$permission->number;
    }
}
