<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Service;
use App\Models\EduTip; 

class SearchController extends Controller
{ 
    public function search(Request $request)
    {
        $query = $request->input('q');

        // Sanitize the query input
        if (empty($query)) {
            return response()->json([
                'results' => [],
                'query' => $query
            ]);
        }

        // Search in the 'departments' table
        $departmentIdsFromDepartments = Department::where('name', 'LIKE', "%{$query}%")
                                ->orWhere('description', 'LIKE', "%{$query}%")
                                ->pluck('id');

        // Search in the 'services' table
        $departmentIdsFromServices = Service::where('title', 'LIKE', "%{$query}%")
                            ->orWhere('description', 'LIKE', "%{$query}%")
                            ->pluck('department_id');

        // Search in the 'edutips' table
        $departmentIdsFromEdutips = EduTip::where('title', 'LIKE', "%{$query}%")
                            ->pluck('department_id');

        // Combine all department IDs
        $allDepartmentIds = $departmentIdsFromDepartments
                            ->merge($departmentIdsFromServices)
                            ->merge($departmentIdsFromEdutips)
                            ->unique();

        // Fetch the departments based on the combined IDs
        $departments = Department::whereIn('id', $allDepartmentIds)->get();

        // Map the departments to the expected JSON structure
        $results = $departments->map(function($department) {
            return [
                'name' => $department->name,
                'link' => url('/'.urlencode($department->url_name)) // Assuming you have a route for department details
            ];
        });

        // Return the departments as search results in JSON format
        return response()->json([
            'results' => $results,
            'query' => $query
        ]);
    }
}

