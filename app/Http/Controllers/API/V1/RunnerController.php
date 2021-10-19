<?php

namespace App\Http\Controllers\API\V1;

use App\Repositories\RunnerRepository;
use Illuminate\Http\Request;

class RunnerController extends BaseController
{
    /**
     * @var RunnerRepository
     */
    private $runnerRepository;

    /**
     * @param RunnerRepository $runnerRepository
     */
    public function __construct(RunnerRepository $runnerRepository)
    {
        $this->runnerRepository = $runnerRepository;
    }

    /**
     * Display the last runs which belongs to a runner.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $runnerData = $this->runnerRepository->findOrFail($id)->load('lastRuns');
            return $this->successResponse($runnerData);
        } catch (\Exception $e) {
            return $this->errorResponse($e);
        }
    }
}
