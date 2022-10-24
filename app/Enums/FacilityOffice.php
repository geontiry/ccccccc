<?php

namespace App\Enums;

enum FacilityOffice: string
{
    case HeadQuarter = 'HeadQuarter';
    case RegionOffice = 'Region Office';
    case CountyOffice = 'County Office';
    case BranchOffice = 'Branch Office';
    case StationOffice = 'Station Office';
}
