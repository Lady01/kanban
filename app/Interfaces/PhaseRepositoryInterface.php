<?php

namespace App\Interfaces;

interface PhaseRepositoryInterface 
{
    public function getAllPhases();
    public function getPhaseById($phaseId);
    public function deletePhase($phaseId);
    public function createPhase(array $phaseDetails);
    public function updatePhase($phaseId, array $newDetails);
}
