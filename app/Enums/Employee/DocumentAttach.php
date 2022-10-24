<?php

namespace App\Enums\Employee;

enum DocumentAttach: string
{
    case Passphoto = 'Passphoto';
    case Resume = 'Resume';
    case PrimaryCertificate = 'Primary Certificate';
    case SecondaryCertificate = 'Secondary Certificate';
    case InstituteCertificate = 'Institute Certificate';
    case UniversityCertificate = 'University Certificate';
    case Recommendation = 'Recommendation';
    case GoodConduct = 'Good Conduct';
}
