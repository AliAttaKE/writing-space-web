<?php

namespace App\Http\Controllers;


use App\Models\FileChatGPT;
use App\Models\Orders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileChatGPTController extends Controller
{
    public function index()
    {
        $files = FileChatGPT::all();
        return view('file_chat_gpts.index', compact('files'));
    }
    

    public function create()
    {
        $Orders = Orders::all();
        return view('file_chat_gpts.create',compact('Orders'));
    }

    public function approvedFiles()
{
    $approvedFiles = FileChatGPT::where('status', 1)
    ->where('user_id', auth()->id())
    ->get(); // Fetch files where status = 1
    return view('file_chat_gpts.approved', compact('approvedFiles'));
}


    public function store(Request $request)
    {
        $request->validate([
            'file_name' => 'required|string|max:255',
            'title' => 'nullable|string',
            'file' => 'required|file',
            'order_id' => 'required|exists:orders,order_id', // Corrected from orders_id to order_id
        ]);
    
        // Store file
        $filePath = $request->file('file')->store('complete_order', 'public');
    
        $Orders = Orders::where('order_id', $request->order_id)->first();
        $user_id = $Orders->user_id;

       
    
        FileChatGPT::create([
            'file_name' => $request->file_name,
            'title' => $request->title,
            'order_id' => $request->order_id, // Corrected from orders_id to order_id
            'user_id' => $user_id, // Corrected from orders_id to order_id
            'file_path' => $filePath,
            'file_type' => $request->file->getMimeType(),
            'Size' => $request->file->getSize(),
            'status' => $request->status,
        ]);
    
        return redirect()->route('file_chat_gpts.index')->with('success', 'File uploaded successfully.');
    }
    
    

    public function edit(FileChatGPT $fileChatGPT)
    {
        return view('file_chat_gpts.edit', compact('fileChatGPT'));
    }

    public function update(Request $request, FileChatGPT $fileChatGPT)
    {
        $request->validate([
            'file_name' => 'required|string|max:255',
            'title' => 'nullable|string',
        ]);

        $filePath = $fileChatGPT->file_path;

        if ($request->hasFile('file')) {
            Storage::delete($fileChatGPT->file_path);
            $filePath = $request->file('file')->store('uploads/files');
        }

        $fileChatGPT->update([
            'file_name' => $request->file_name,
            'title' => $request->title,
            'order_id' => $request->order_id,
            'file_path' => $filePath,
            'file_type' => $request->file->getMimeType(),
            'Size' => $request->file->getSize(),
        ]);

        return redirect()->route('file_chat_gpts.index')->with('success', 'File updated successfully.');
    }


public function store_api(Request $request)
    {
        $validated = $request->validate([
            'file_name' => 'required|array',
            'file_name.*' => 'required|string|max:255',
            'title' => 'nullable|array',
            'title.*' => 'nullable|string',
            'file' => 'required|array',
            'file.*' => 'required|file',
            'order_id' => 'required|exists:orders,order_id',
        ]);
    
        $order = Orders::where('order_id', $validated['order_id'])->firstOrFail();
        $uploadedFiles = [];
    
        foreach ($request->file('file') as $index => $file) {
            $filePath = $file->store('complete_order', 'public');
    
            $fileChat = FileChatGPT::create([
                'file_name' => $validated['file_name'][$index] ?? 'Untitled',  // Ensure string
                'title' => $validated['file_name'][$index] ?? null,  // Ensure string
                'order_id' => $validated['order_id'],
                'user_id' => $order->user_id,
                'file_path' => $filePath,
                'file_type' => $file->getMimeType(),
                'size' => $file->getSize(),
              
            ]);
    
            $uploadedFiles[] = $fileChat;
        }
    
        return response()->json([
            'message' => 'Files uploaded successfully.',
            'data' => $uploadedFiles,
        ], 201);
    }
    
    public function destroy(FileChatGPT $fileChatGPT)
    {
        Storage::delete($fileChatGPT->file_path);
        $fileChatGPT->delete();

        return redirect()->route('file_chat_gpts.index')->with('success', 'File deleted successfully.');
    }

}
