<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\Testimonial;
use App\Models\PricingPackage;
use App\Models\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ContentController extends Controller
{
    // ==================== FAQ ====================
    public function faqs()
    {
        $faqs = Faq::ordered()->get();
        return view('admin.content.faqs.index', compact('faqs'));
    }

    public function createFaq()
    {
        return view('admin.content.faqs.form');
    }

    public function storeFaq(Request $request)
    {
        $validated = $request->validate([
            'question' => 'required|string|max:500',
            'answer' => 'required|string',
            'sort_order' => 'nullable|integer',
            'is_active' => 'boolean',
        ]);

        $validated['is_active'] = $request->has('is_active');
        $validated['sort_order'] = $validated['sort_order'] ?? 0;

        Faq::create($validated);

        return redirect()->route('admin.faqs')->with('success', 'FAQ toegevoegd.');
    }

    public function editFaq(Faq $faq)
    {
        return view('admin.content.faqs.form', compact('faq'));
    }

    public function updateFaq(Request $request, Faq $faq)
    {
        $validated = $request->validate([
            'question' => 'required|string|max:500',
            'answer' => 'required|string',
            'sort_order' => 'nullable|integer',
            'is_active' => 'boolean',
        ]);

        $validated['is_active'] = $request->has('is_active');
        $validated['sort_order'] = $validated['sort_order'] ?? 0;

        $faq->update($validated);

        return redirect()->route('admin.faqs')->with('success', 'FAQ bijgewerkt.');
    }

    public function deleteFaq(Faq $faq)
    {
        $faq->delete();
        return redirect()->route('admin.faqs')->with('success', 'FAQ verwijderd.');
    }

    // ==================== Testimonials ====================
    public function testimonials()
    {
        $testimonials = Testimonial::ordered()->get();
        return view('admin.content.testimonials.index', compact('testimonials'));
    }

    public function createTestimonial()
    {
        return view('admin.content.testimonials.form');
    }

    public function storeTestimonial(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'role' => 'nullable|string|max:255',
            'content' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
            'sort_order' => 'nullable|integer',
            'is_active' => 'boolean',
        ]);

        $validated['is_active'] = $request->has('is_active');
        $validated['sort_order'] = $validated['sort_order'] ?? 0;

        Testimonial::create($validated);

        return redirect()->route('admin.testimonials')->with('success', 'Testimonial toegevoegd.');
    }

    public function editTestimonial(Testimonial $testimonial)
    {
        return view('admin.content.testimonials.form', compact('testimonial'));
    }

    public function updateTestimonial(Request $request, Testimonial $testimonial)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'role' => 'nullable|string|max:255',
            'content' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
            'sort_order' => 'nullable|integer',
            'is_active' => 'boolean',
        ]);

        $validated['is_active'] = $request->has('is_active');
        $validated['sort_order'] = $validated['sort_order'] ?? 0;

        $testimonial->update($validated);

        return redirect()->route('admin.testimonials')->with('success', 'Testimonial bijgewerkt.');
    }

    public function deleteTestimonial(Testimonial $testimonial)
    {
        $testimonial->delete();
        return redirect()->route('admin.testimonials')->with('success', 'Testimonial verwijderd.');
    }

    // ==================== Pricing Packages ====================
    public function packages()
    {
        $packages = PricingPackage::ordered()->get();
        return view('admin.content.packages.index', compact('packages'));
    }

    public function createPackage()
    {
        return view('admin.content.packages.form');
    }

    public function storePackage(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'period' => 'required|string|max:50',
            'features' => 'nullable|string',
            'is_popular' => 'boolean',
            'sort_order' => 'nullable|integer',
            'is_active' => 'boolean',
        ]);

        $validated['is_active'] = $request->has('is_active');
        $validated['is_popular'] = $request->has('is_popular');
        $validated['sort_order'] = $validated['sort_order'] ?? 0;
        $validated['features'] = $this->parseFeatures($request->features);

        PricingPackage::create($validated);

        return redirect()->route('admin.packages')->with('success', 'Pakket toegevoegd.');
    }

    public function editPackage(PricingPackage $package)
    {
        return view('admin.content.packages.form', compact('package'));
    }

    public function updatePackage(Request $request, PricingPackage $package)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'period' => 'required|string|max:50',
            'features' => 'nullable|string',
            'is_popular' => 'boolean',
            'sort_order' => 'nullable|integer',
            'is_active' => 'boolean',
        ]);

        $validated['is_active'] = $request->has('is_active');
        $validated['is_popular'] = $request->has('is_popular');
        $validated['sort_order'] = $validated['sort_order'] ?? 0;
        $validated['features'] = $this->parseFeatures($request->features);

        $package->update($validated);

        return redirect()->route('admin.packages')->with('success', 'Pakket bijgewerkt.');
    }

    public function deletePackage(PricingPackage $package)
    {
        $package->delete();
        return redirect()->route('admin.packages')->with('success', 'Pakket verwijderd.');
    }

    private function parseFeatures($features)
    {
        if (empty($features)) {
            return [];
        }
        return array_filter(array_map('trim', explode("\n", $features)));
    }

    // ==================== Blog Posts ====================
    public function posts()
    {
        $posts = BlogPost::with('author')->latest('created_at')->get();
        return view('admin.content.posts.index', compact('posts'));
    }

    public function createPost()
    {
        return view('admin.content.posts.form');
    }

    public function storePost(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:blog_posts,slug',
            'excerpt' => 'nullable|string|max:500',
            'content' => 'required|string',
            'is_published' => 'boolean',
        ]);

        $validated['author_id'] = Auth::id();
        $validated['is_published'] = $request->has('is_published');
        $validated['slug'] = $validated['slug'] ?: Str::slug($validated['title']);

        if ($validated['is_published']) {
            $validated['published_at'] = now();
        }

        BlogPost::create($validated);

        return redirect()->route('admin.posts')->with('success', 'Blog post toegevoegd.');
    }

    public function editPost(BlogPost $post)
    {
        return view('admin.content.posts.form', compact('post'));
    }

    public function updatePost(Request $request, BlogPost $post)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:blog_posts,slug,' . $post->id,
            'excerpt' => 'nullable|string|max:500',
            'content' => 'required|string',
            'is_published' => 'boolean',
        ]);

        $validated['is_published'] = $request->has('is_published');
        $validated['slug'] = $validated['slug'] ?: Str::slug($validated['title']);

        if ($validated['is_published'] && !$post->published_at) {
            $validated['published_at'] = now();
        } elseif (!$validated['is_published']) {
            $validated['published_at'] = null;
        }

        $post->update($validated);

        return redirect()->route('admin.posts')->with('success', 'Blog post bijgewerkt.');
    }

    public function deletePost(BlogPost $post)
    {
        $post->delete();
        return redirect()->route('admin.posts')->with('success', 'Blog post verwijderd.');
    }
}
