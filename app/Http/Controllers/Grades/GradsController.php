<?php

namespace App\Http\Controllers\Grades;

use toastr;

use App\Models\Grade;
use Illuminate\Http\Request;
use App\Http\Requests\StoreGrades;
use Illuminate\Routing\Controller;




class GradsController extends Controller
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {

    $Grades = Grade::all();
    return view('pages.Grades.Grades',compact('Grades'));

  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {

  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(StoreGrades $request)
  {

    if(Grade::where('name->ar',$request->Name)->orwhere('name->en',$request->Name_en)->exists()){
        return redirect()->back()->withErrors('الحقل موجود مسبقا');
    }

    try
    {

        $validated = $request->validated();

       $Grade = new Grade();
       $Grade->Name = ['en' => $request->Name_en, 'ar' => $request->Name];
       $Grade->Notes = $request->Notes;
       $Grade->save();

       toastr()->success(trans('messages.success'));;

       return redirect()->route('grads.index');

    }

    catch (\Exception $e){
        return redirect()->back()->withErrors(['error' => $e->getMessage()]);
    }



  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {

  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {

  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(StoreGrades $request)
  {

    try {

        $validated = $request->validated();
        $Grades = Grade::findOrFail($request->id);
        $Grades->update([
          $Grades->Name = ['ar' => $request->Name, 'en' => $request->Name_en],
          $Grades->Notes = $request->Notes,
        ]);
        toastr()->success(trans('messages.Update'));
        return redirect()->route('grads.index');
    }
    catch
    (\Exception $e) {
        return redirect()->back()->withErrors(['error' => $e->getMessage()]);
    }



//


  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy(Request $request)
  {

    $Grades = Grade::findOrFail($request->id)->delete();
    toastr()->success(trans('messages.Delete'));
    return redirect()->route('grads.index');


  }

}

?>
