<?php

namespace App\Repositories\Permission;

interface PermissionRepositoryInterface
{
    /**
     * パラメータに渡された3文字の権限記号から権限番号を取得する
     * 
     * @param string $symbol
     * @return Object|null 
     */
    public function getBySymbol($symbol);
}
