<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\feedback;
use App\Models\Media;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DashboardController extends Controller
{
    //

    public function reg()
    {
        return view('auth.registration');
    }

    public function newuser(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required'],
        ]);

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect()->route('login');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function logincheck(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $data = $request->all();

        $user = User::where('email', $data['email'])->first();
        if ($user) {
            if (Hash::check($data['password'], $user->password)) {
                Auth::login($user);
                return redirect()->route('dashboard');
            } else {
                return redirect()->back()->with('error', 'Invalid password');
            }
        } else {
            return redirect()->back()->with('error', 'Invalid email');
        }
    }

    public function dashboard()
    {
        $categories = Category::all();
        $categoryCount = Category::count();
        $mediaCount = Media::count();
        $recentMedia = Media::with('category')
            ->latest()
            ->take(6)
            ->get();
        return view('Admin.dashboard', compact('categories', 'categoryCount', 'mediaCount', 'recentMedia'));
        // return redirect()->route('dashboard');
    }

    public function categoriespage()
    {
        return view('Admin.categories');
    }

    public function createcategory(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $category = Category::create($request->all());

        return redirect()->route('categories');
    }

    // Mediapage functions//
    public function mediapage()
    {
        $categories = Category::all();

        return view('Admin.mediapage', compact('categories'));
    }

    public function createimage(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:5120',
            'title' => 'required|max:255',
            'alt_text' => 'required|max:255',
            'caption' => 'nullable|max:255',
            'focus_keyword' => 'nullable|max:255',
            'description' => 'nullable',
            'status' => 'required',
        ]);

        $image = $request->file('image');

        // Get file details BEFORE moving
        $originalName = $image->getClientOriginalName();
        $extension = $image->getClientOriginalExtension();
        $mimeType = $image->getMimeType();
        $fileSize = $image->getSize();

        $filename = time() . '_' . Str::slug(pathinfo($originalName, PATHINFO_FILENAME)) . '.' . $extension;

        // Create folder if it doesn't exist
        $destination = public_path('images/media');

        if (!file_exists($destination)) {
            mkdir($destination, 0755, true);
        }

        // Move image
        $image->move($destination, $filename);

        // Get image dimensions AFTER moving
        list($width, $height) = getimagesize($destination . '/' . $filename);

        // Save to database
        $media = new Media();

        $media->category_id = $request->category_id;
        $media->file_name = $filename;
        $media->file_path = 'images/media/' . $filename;
        $media->file_type = $mimeType;
        $media->extension = $extension;
        $media->file_size = $fileSize;
        $media->width = $width;
        $media->height = $height;

        $media->title = $request->title;
        $media->alt_text = $request->alt_text;
        $media->caption = $request->caption;
        $media->description = $request->description;
        $media->focus_keyword = $request->focus_keyword;
        $media->status = $request->status;

        $media->save();

        return redirect()
            ->route('mediapage')
            ->with('success', 'Image uploaded successfully.');
    }

    public function feedback(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'required|max:20',
            'location' => 'nullable|max:255',
            'message' => 'required',
        ]);

        feedback::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'location' => $request->location,
            'message' => $request->message,
        ]);

        return redirect()->route('home');
    }

    public function feedbacklist()
    {
        $feedbacks = feedback::all();
        return view('Admin.feedback', compact('feedbacks'));
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
