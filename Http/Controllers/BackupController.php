<?php

namespace Modules\Dashboard\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Dashboard\Http\Requests\BackupRequest;
use Modules\Dashboard\Repositories\BackupRepository;
use Modules\Dashboard\Services\BackupService;

class BackupController extends Controller
{

    public function update(BackupRequest $request)
    {
        BackupRepository::update($request->all());
        $backup_service = new BackupService();
        $backup_service->run();
        return $backup_service->download();
    }

}
