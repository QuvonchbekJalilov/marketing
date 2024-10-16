<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\ServiceCategory;
use App\Models\User;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');

        // Barcha partnerlar va kategoriyalarni olish
        $partners = Provider::all();
        $categories = Category::all();

        if ($query) {
            // Kategoriyalarni qidiruv so'rovi bo'yicha filtrlash
            $results = Category::where('name', 'LIKE', "%$query%")
                ->orWhereHas('services', function($q) use ($query) {
                    $q->where('name_en', 'LIKE', "%$query%");
                })
                ->get();

            // Providerlarni qidiruv so'rovi bo'yicha filtrlash
            $providers = Provider::where('name', 'LIKE', "%$query%")
                ->orWhere('description', 'LIKE', "%$query%")
                ->orWhere('tagline', 'LIKE', "%$query%")
                ->get();
        } else {
            // Qidiruv bo'yicha natijalar bo'lmasa bo'sh kolleksiya
            $results = collect();
            $providers = collect();
        }

        return view('pages.home-search', [
            'results' => $results,
            'query' => $query,
            'partners' => $partners,
            'categories' => $categories,
            'providers' => $providers
        ]);
    }
    // home
    public function home()
    {
        $partners = User::where('role_id', 2)->get();
        $categories = ServiceCategory::all();
        return view('frontend.home', compact('partners', 'categories'));
    }

    // Page Provider
    public function pageProvider()
    {
        $providers = User::where('role_id', 2)->paginate(6);

        return view('frontend.page-provider', compact('providers'));
    }
    public function pageProviderService($service_id, $category_id)
    {
        // Xizmat va kategoriya ma'lumotlarini olish
        $service = Service::find($service_id);
        $category = Category::find($category_id);

        // Xizmatga tegishli barcha provayderlarni olish
        $providers = $service->providers()->paginate(6);

        // Barcha kategoriyalarni xizmatlari bilan olish
        $categories = Category::with('services')->get();

        return view('pages.page-provider-service', compact('providers', 'service', 'category', 'categories'));
    }

    public function searchProviders()
    {
        return view('pages.search-provider');
    }

    public function singleProviders()
    {
        return view('frontend.single-provider');
    }

    public function singleReviews()
    {
        return view('pages.single-reviews');
    }

    // Marketers
    public function pageMarketers()
    {
        return view('frontend.page-marketers');
    }

    public function singleMarketers()
    {
        return view('pages.single-marketers');
    }

    public function searchMarketers()
    {
        return view('pages.search-marketers');
    }

    // Partners
    public function pagePartners()
    {
        return view('frontend.page-partners');
    }

    public function singlePartners()
    {
        return view('pages.single-partners');
    }

    public function searchPartners()
    {
        return view('pages.search-partners');
    }

    public function contact()
    {
        return view('frontend.contact');
    }
}
