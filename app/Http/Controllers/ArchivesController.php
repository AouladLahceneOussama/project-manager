<?php

namespace App\Http\Controllers;

use App\Models\Archive;
use App\Models\Folder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ArchivesController extends Controller
{
    // Show all the files related to a certain subcategory
    public function index($projectId)
    {
        $id = $projectId;
        $archives = Archive::where('project_id', $projectId)->get();
        $folders = Folder::where('project_id', $projectId)->get();        

        return view('archives.index', compact('archives', 'folders', 'id'));
    }

    // Save the new file
    public function store(Request $request)
    {
        $request->validate(
            [
                'archive_file' => 'required',
                'archive_folder' => 'required'
            ],
            [
                'archive_file.required' => 'Required',
                'archive_folder.required' => 'Required',
            ]
        );

        // Static extentions
        $images = ['jpg', 'png', 'jpeg', 'svg', 'gif'];
        $videos = ['mp4', 'mov', 'wmv', 'flv', 'avi', 'mkv'];
        $files = ['doc', 'docx', 'txt', 'csv', 'pdf', 'ppt'];

        $type = null;
        $file = null;
        $path = null;
        $name = null;
        $original_name = null;

        if ($request->hasFile('archive_file')) {
            $file = $request->file('archive_file');
            $ext = $file->getClientOriginalExtension();

            if (in_array($ext, $images)) $type = 'image';
            if (in_array($ext, $videos)) $type = 'video';
            if (in_array($ext, $files)) $type = 'file';

            $original_name = $file->getClientOriginalName();
            $name = Auth::id() . '_' . now() . '.' . $ext;
            $path = $file->store('archives', 'public');
        }
        // dd($path);
        // store to database
        $archive = Archive::create([
            'project_id' => $request->project_id,
            'folder_id' => $request->archive_folder,
            'name' => $name,
            'path' =>  $path,
            'type' => $type,
            'original_name' => $original_name
        ]);

        return redirect()->route('archives', $request->project_id);
    }

    // Delete the file and the record
    public function destroy($project_id, $archive_id)
    {
        $archive = Archive::find($archive_id);

        // check if the file exists
        Storage::disk('public')->delete($archive->path);
        
        $archive->delete();
        return redirect()->route('archives', $project_id);
    }
}
