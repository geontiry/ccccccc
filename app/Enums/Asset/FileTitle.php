<?php

namespace App\Enums\Asset;

enum FileTitle: string
{
    case EmpID = 'Employee National ID';
    case EmpKRA = 'Employee KRA Pin';
    case EmpNHIF = 'Employee NHIF Card';
    case EmpNSSF = 'Employee NSSF Card';
    case EmpNTSA = 'Employee NTSA Card';
    case EmpBank = 'Employee Bank Card';
    case EmpStaffID = 'Employee Staff ID';
    case EmpPassphoto = 'Employee Passphoto';
    case EmpResume = 'Employee Resume';
    case EmpCarVac = 'Employee Career Vacancy';
    case EmpCarApp = 'Employee Career Application';
    case EmpCarInt = 'Employee Career Interview';
    case EmpCarOffer = 'Employee Career Offer';
    case EmpContAgr = 'Employee Contract Agreement';
    case EmpContTerm = 'Employee Contract Termination';
    case EmpCarPost = 'Employee Career Posting';
    case EmpBirCertificate = 'Employee Birth Certificate';
    case EmpPriCertificate = 'Employee Primary Certificate';
    case EmpSecCertificate = 'Employee Secondary Certificate';
    case EmpInstCertificate = 'Employee Institute Certificate';
    case EmpUnivCertificate = 'Employee University Certificate';
    case EmpProfCertificate = 'Employee Profession Certificate';
    case EmpRecommendation = 'Employee Recommendation Letter';
    case EmpTaxCompliance = 'Employee Tax Compliance Certificate';
    case EmpPolClearance = 'Employee Police Clearance Certificate';
    case EmpCredClearance = 'Employee Credit Clearance Certificate';
    case ProdDatasheet = 'Product Datasheet';
    case ProdWarranty = 'Product Warranty';
    case RequestQuotation = 'Request For Quotation';
    case SupplierQuotation = 'SupplierQuotation';
    case OrderInvoice = 'Order Invoice';
    case SuppInvoice = 'Supplier Invoice';
    case OrderDNote = 'Order Delivery Note';
    case SuppDNote = 'Supplier Delivery Note';
}
