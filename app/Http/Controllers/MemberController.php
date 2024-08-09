<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\DataTables\MemberDataTable;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Http\Requests\MemberStoreRequest;
use App\Http\Requests\MemberUpdateRequest;

class MemberController extends Controller
{
    // public function index(Request $request): View
    // {
    //     $search = $request->input('search');
    //     $query = Member::where('status', 1);

    //     if ($search) {
    //         $query->where('name', 'like', "%{$search}%")
    //               ->orWhere('gender', 'like', "%{$search}%");
    //     }

    //     $members = $query->latest()->paginate(5);
          
    //     return view('members.index', compact('members'))
    //                 ->with('i', (request()->input('page', 1) - 1) * 5);
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        // $teachers = Teacher::all();
        return view('members.edit');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MemberStoreRequest $request): RedirectResponse
    {
        // dd($request->all());
        Member::create($request->post());
           
        return redirect()->route('members.index')
                         ->with('success', 'Member created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Member $member)
    {
        return view('members.view', compact('member'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Member $member)
    {
        // dd($member);
        return view('members.edit', compact('member'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MemberUpdateRequest $request, Member $student)
    {
        $student->update($request->validated());
          
        return redirect()->route('students.index')
                        ->with('success','Student updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        $student = Student::findOrFail($id);
        $student->update(['status' => 0]);
           
        return redirect()->route('students.index')
                        ->with('success','Student deleted successfully');
    }

    public function index(MemberDataTable $dataTable)
    {
        return $dataTable->render('members.index');
    }

    // public function datatables(MemberDataTable $dataTable)
    // {
    //     return $dataTable->ajax();
    // }
}
