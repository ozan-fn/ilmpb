<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|image|max:20480',
            'type' => 'required|in:dashboard,layanan-mudik,pospam' // Validate the type
        ]);

        $file = $request->file('file');
        $type = $request->input('type');

        $path = $file->store($type, 'public');

        $image = new Image();
        $image->path = $path;
        $image->type = $type;
        $image->original_name = $file->getClientOriginalName();
        $image->mime_type = $file->getMimeType();
        $image->size = $file->getSize();
        $image->save();

        return back()->with('success', 'Image uploaded successfully');
    }

    public function destroy(Image $image)
    {
        try {
            $path = $image->path;
            $image->delete();

            if (Storage::disk('public')->exists($path)) {
                Storage::disk('public')->delete($path);
            }

            return redirect()->back()->with('success', 'Image deleted successfully');
        } catch (\Exception $e) {
            // Handle any errors
            return redirect()->back()->with('error', 'Failed to delete image: ' . $e->getMessage());
        }
    }

    public function updateOrder(Request $request, Image $image)
    {
        $request->validate([
            'order' => 'required|integer|min:0'
        ]);
        
        $image->order = $request->order;
        $image->save();
        
        return redirect()->back()->with('success', 'Image order updated');
    }
}
