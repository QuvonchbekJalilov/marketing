<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Award;
use App\Models\Company;
use App\Models\Language;
use App\Models\Portfolio;
use App\Models\Review;
use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\ServiceSubCategory;
use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;
use NunoMaduro\Collision\Provider;

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
                ->orWhereHas('services', function ($q) use ($query) {
                    $q->where('name_en', 'LIKE', "%$query%");
                })
                ->get();

            // Providerlarni qidiruv so'rovi bo'yicha filtrlash
            $providers = User::where('role_id', 2)->where('name', 'LIKE', "%$query%")
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
        $providers = User::where('role_id', 2)->with('companies')->paginate(6);
        $sub_categories = ServiceSubCategory::all();
        $languages = Language::all();


        return view('frontend.page-provider', compact('providers', 'sub_categories', 'languages'));
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

    public function singleProviders($id)
    {
        $provider = User::where('id', $id)->with('companies')->first();
        $reviews = Review::where('provider_id', $id)->with('serviceSubCategory')->get();
        $services = Service::where('provider_id', $id)
            ->with(['subCategory.portfolios', 'subCategory.reviews'])
            ->get();
        $average_review = Review::where('provider_id', $id)
            ->selectRaw('AVG(budget_score) as avg_budget_score, AVG(quality_score) as avg_quality_score, AVG(schedule_score) as avg_schedule_score, AVG(collaboration_score) as avg_collaboration_score')
            ->first();

        // Umumiy o'rtacha qiymatni hisoblash
        $average_score = ($average_review->avg_budget_score + $average_review->avg_quality_score + $average_review->avg_schedule_score + $average_review->avg_collaboration_score) / 4;

        $awards = Award::where('provider_id', $id)->get();
        $teams = Team::where('provider_id', $id)->first();
        $portfolios = Portfolio::where('provider_id', $id)->with('subCategory')->get();

        // Handle case where no reviews exist
        if ($average_review === null) {
            $average_review = 0; // Default value if no reviews exist
        }
        return view('frontend.single-provider', compact('provider', 'services', 'average_score', 'awards', 'teams', 'portfolios', 'reviews'));
    }

    public function singleReviews($id)
    {
        $provider = User::where('id', $id)->with('companies')->first();
        $services = Service::where('provider_id', 2)
            ->with('subCategory')->get();
        return view('frontend.single-reviews', compact('services', 'provider'));
    }

    // Marketers
    public function pageMarketers()
    {
        $marketers = User::where('role_id', 4)->paginate(6);

        return view('frontend.page-marketers', compact('marketers'));
    }

    public function singleMarketers($id)
    {
        $marketer = User::where('role_id', 4)->find($id);
        return view('frontend.single-marketers', compact('marketer'));
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
        return view('frontend.single-partners');
    }

    public function searchPartners()
    {
        return view('pages.search-partners');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function filter(Request $request)
    {
        $sub_categories = ServiceSubCategory::all();
        $languages = Language::all();

        // Filtr shartlarini so'rovdan olish
        $skills = $request->input('skills'); // array of skill ids
        $companyAddress = $request->input('company_address'); // address to filter
        $subCategoryId = $request->input('sub_category_id'); // selected sub category id
        $priceRange = $request->input('price_range'); // array with min and max price
        $languageId = $request->input('language_id'); // selected language id
        $teamSize = $request->input('team_size'); // team size qiymatini olish

        $query = User::query()
            ->with(['services.subCategory.skills', 'language', 'companies']);

// Skills bo‘yicha filtr
        if (is_array($skills) && count($skills) > 0) {
            $query->whereHas('services', function ($query) use ($skills) {
                $query->whereHas('skills', function ($query) use ($skills) {
                    $query->whereIn('skills.id', $skills);
                });
            });
        }

// Address bo‘yicha filtr
        if ($companyAddress) {
            $query->whereHas('companies', function ($query) use ($companyAddress) {
                $query->where('address', 'like', '%' . $companyAddress . '%');
            });
        }

// Boshqa filtrlash shartlari: sub_category_id, price_range, language_id, team_size


// Sub category bo'yicha filtr
        if ($subCategoryId) {
            $query->whereHas('services', function ($query) use ($subCategoryId) {
                $query->where('service_sub_category_id', $subCategoryId);
            });
        }

// Price bo'yicha filtr
        if ($priceRange) {
            $query->whereHas('services', function ($query) use ($priceRange) {
                $query->whereBetween('price', [$priceRange['min'], $priceRange['max']]);
            });
        }

// Language bo'yicha filtr
        if ($languageId) {
            $query->where('language_id', $languageId);
        }

// Team size bo'yicha filtr
        // Team size bo‘yicha filtr
        if ($teamSize) {
            $query->whereHas('companies', function ($query) use ($teamSize) {
                if ($teamSize === '1') {
                    $query->where('number_of_team', 1);
                } elseif ($teamSize === '2-10') {
                    $query->whereBetween('number_of_team', [2, 10]);
                } elseif ($teamSize === '11-50') {
                    $query->whereBetween('number_of_team', [11, 50]);
                } elseif ($teamSize === '50+') {
                    $query->where('number_of_team', '>', 50);
                }
            });
        }


// Natijalarni olish
        $providers = $query->get();

// Blade faylga qaytarish
        return view('frontend.page-provider-filter', compact('providers', 'sub_categories', 'languages'));

    }

}
