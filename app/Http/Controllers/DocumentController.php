<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\TypeDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
				$type = TypeDocument::orderBy('name', 'ASC')->get();
				$data = Document::with('typedocument')->orderBy('date', 'DESC')->get();
				// $data = Document::all();
        return view('document.index', compact('type', 'data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('document.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
				$request->validate([
					'number' => 'required',
					'file' => 'mimes:pdf'
				]);

				$file = $request->file('file');
				$name = $request->name;
				$extension = $file->getClientOriginalExtension();
				$newName = $name . "." . $extension;
				$uploads = Storage::putFileAs('public/file', $request->file('file'), $newName);

				$data = Document::create([
					'name' 						 => $request->name,
					'number' 					 => $request->number,
					'date' 						 => $request->date,
					'type_document_id' => $request->type_document_id,
					'file'						 => 'storage/file/'. $newName
				]);

        return redirect()->route('document.index')->with('status', 'Success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
