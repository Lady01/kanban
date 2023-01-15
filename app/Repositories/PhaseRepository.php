<?php

namespace App\Repositories;

use App\Interfaces\PhaseRepositoryInterface;
use App\Models\Phase;

class PhaseRepository implements PhaseRepositoryInterface 
{
    public function getAllPhases() 
    {
        return Phase::with('todos')->get();
    }

    public function getPhaseById($phaseId) 
    {
        return Phase::findOrFail($phaseId);
    }

    public function deletePhase($phaseId) 
    {
        Phase::destroy($phaseId);
    }

    public function createPhase(array $phaseIdDetails) 
    {
        return Phase::create($phaseIdDetails);
    }

    public function updatePhase($phaseId, array $newDetails) 
    {
        return Phase::whereId($phaseId)->update($newDetails);
    }
}
