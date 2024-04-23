<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Company;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    function getEmployee(Request $req){
        $emp = new Employee();
        $emp->empname=$req->empname;
        $emp->empaddress=$req->empaddress;
        $emp->empphone=$req->empphone;
        $emp->salary=$req->salary;
        $emp->save();
        dd($emp);
    }

    function index(){
        return Employee::find(1)->getCompany;
    }

    function addCompany(){
        $company = new Company();
        $company->company_name ="Google";
        $company->company_address ="USA";
        $company->emp_id=2;
        // dd($company);
        $company->save();
        
    }
}
