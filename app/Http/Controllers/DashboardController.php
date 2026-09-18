<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests;
use App\Models\Others;
use App\Models\Testimonials;
use App\Models\Milestone;
use App\Models\Certificate;
use App\Models\Faq;
use App\Models\Contact;
use App\Models\Blogs;
use App\Models\Network;
use App\Models\MarineBoilerEngineer;
use App\Models\CurrentVacancies;
use App\Models\VacanciesCategory;
use App\Models\ServiceCategory;
use App\Models\ProjectForm;
use App\Models\Project;
use App\Models\ProjectCategory;
use App\Models\HeroSlide;
use App\Models\Services;
use App\Mail\SendContactMailToUser;
use App\Mail\SendMarineBoilerEngineerMailToUser;
use App\Mail\SendProjectMailToUser;
use DB;

class DashboardController extends Controller
{
    public function login(){
        return view('auth.login');
    }
    public function admin(){
        return view('admin.admin');
    }
    public function landing()
    {
        return view('front.landing_new');
    }
    public function Index()
    {
        
        $meta_title = 'Expert Boiler Installation & Repair | Al Mufaddal Boilers';
        $meta_description = 'Get expert boiler installation, repair, and troubleshooting. We service combi, oil-fired, and low-pressure boilers with full automation and condenser support.';
    
        $heroslidedata = HeroSlide::whereNull('deleted_at')->get();
        $processdata = Others::whereNull('deleted_at')->get();
        $servicedata = Services::whereNull('deleted_at')->inRandomOrder()->get();
        $testimonials = Testimonials::whereNull('deleted_at')->get();
        $networks = Network::whereNull('deleted_at')->get();
    
        $feed = []; 
    
        $accessToken = env('LINKEDIN_ACCESS_TOKEN');
        $orgId = '47592038';
    
        if ($accessToken) {
    
            try {
                $url = 'https://api.linkedin.com/v2/ugcPosts';
    
                $response = Http::withHeaders([
                    'Authorization' => "Bearer {$accessToken}",
                    'X-Restli-Protocol-Version' => '2.0.0',
                    'Content-Type' => 'application/json'
                ])->get($url, [
                    'q' => 'authors',
                    'authors' => "List(urn:li:organization:$orgId)",
                    'sortBy' => 'LAST_MODIFIED'
                ]);
    
                if ($response->successful()) {
                    $feed = $response->json()['elements'] ?? [];
                } else {
                    \Log::error('LinkedIn API Error', [
                        'status' => $response->status(),
                        'body' => $response->body()
                    ]);
                }
    
            } catch (\Exception $e) {
                \Log::error('LinkedIn API Exception', [
                    'message' => $e->getMessage()
                ]);
            }
    
        } else {
            \Log::warning('LinkedIn Access Token is missing in .env');
        }
    
        return view('front.dashboard', compact(
            'processdata',
            'testimonials',
            'networks',
            'heroslidedata',
            'servicedata',
            'meta_title',
            'meta_description',
            'feed'
        ));
    }

    public function About()
    {
        $meta_title = 'Al Mufaddal Boiler – Industrial Boiler Experts | About Us';
        $meta_description = 'Al Mufaddal Boiler is a trusted expert in industrial boiler solutions, delivering quality service, safety, and innovation backed by years of proven experience.';
        $milestones = Milestone::whereNull('deleted_at')->get();
        return view('front.about', compact('meta_title', 'meta_description', 'milestones'));
    }
    public function Testimonials()
    {
        $meta_title = 'Al Muffadal';
        $meta_description = 'Al Muffadal Description';
        $testimonials = Testimonials::whereNull('deleted_at')->get();
        return view('front.testimonials', compact('meta_title', 'meta_description', 'testimonials'));
    }
    
    public function PrivacyPolicy()
    {
        $meta_title = 'Privacy Policy | Data Protection Dubai | Al Mufaddal';
        $meta_description = 'Read the Al Mufaddal Boilers Privacy Policy. Learn how we collect, use, and protect your personal data in compliance with international privacy standards.';
        return view('front.privacy-policy', compact('meta_title', 'meta_description'));
    }
    public function TermsCondition()
    {
        $meta_title = 'Terms and Conditions | Legal Info | Al Mufaddal Boilers';
        $meta_description = 'Review the official terms and conditions for using the Al Mufaddal Boilers website and services. Understanding our legal framework and user agreements.';
        return view('front.terms-condition', compact('meta_title', 'meta_description'));
    }
    public function Certifications()
    {
        $meta_title = 'Boiler Certifications & Approvals | Al Mufaddal Boilers';
        $meta_description = 'Explore Al Mufaddal Boiler certifications, reflecting strong quality standard, safety practice, environmental responsibility, and compliance in boiler services.';
        $certifications = Certificate::whereNull('deleted_at')->get();
        return view('front.certifications', compact('meta_title', 'meta_description','certifications'));
    }
    public function ContactUs(){
        $meta_title = 'Contact Al Mufaddal Boiler | Industrial Boiler Specialists';
        $meta_description = 'Reach out to Al Mufaddal Boiler for expert assistance in industrial boiler services, maintenance, and repair. Fast response and dependable support guaranteed.';
        return view('front.contact', compact('meta_title', 'meta_description'));
    }
    public function LifeAme(){
        $meta_title = 'Life at AME | Careers and Culture at Al Mufaddal Boilers';
        $meta_description = 'Discover the work culture and professional environment at Al Mufaddal Boilers. Join a team dedicated to engineering excellence and industrial innovation.';
        return view('front.life-ame',compact('meta_title', 'meta_description'));
    }
    public function QualityManagement(){
        $meta_title = 'Quality Management System & Policy | Al Mufaddal Boilers';
        $meta_description = 'Learn about our rigorous quality management protocols. Al Mufaddal Boilers ensures excellence in refractory repairs and industrial boiler maintenance services.';
        return view('front.quality-management',compact('meta_title', 'meta_description'));
    }
    public function Integrated(){
        $meta_title = 'Quality Management';
        $meta_description = 'Al Muffadal Description';
        return view('front.integrated',compact('meta_title', 'meta_description'));
    }
    public function Industries(){
        $meta_title = 'Al Muffadal';
        $meta_description = 'Al Muffadal Description';
        return view('front.industries',compact('meta_title', 'meta_description'));
    }
    
    

    public function Faq()
    {
        $faqs = Faq::all();
    
        $allFaqs = [];
        foreach ($faqs as $faq) {
            $items = $faq->title_description;
            if (is_array($items)) {
                foreach ($items as $item) {
                    $allFaqs[] = [
                        'title' => $item['title'] ?? '',
                        'description' => $item['description'] ?? '',
                    ];
                }
            }
        }
        $meta_title = 'Frequently Asked Questions (FAQ) | Al Mufaddal Boilers';
        $meta_description = 'Get answers to common questions about boiler refractory repair, lining installation, and HRSG services in Dubai from the experts at Al Mufaddal Boilers.';
        return view('front.faq', compact('allFaqs','meta_title','meta_description'));
    }


    
    public function ContactSubmit(Request $request)
{
    // Validation
    $validated = $request->validate([
        'firstname' => 'required',
        'lastname' => 'required',
        'email' => 'required|email',
        'phone' => 'required|numeric',
        'subject' => 'required',
        'message' => 'nullable',
    ]);
    
    // Save contact in the database
    $post = new Contact;
    $post->firstname = $request->get('firstname');
    $post->lastname = $request->get('lastname');
    $post->email = $request->get('email');
    $post->phone = $request->get('phone');
    $post->subject = $request->get('subject');
    $post->message = $request->filled('message') ? $request->get('message') : null;

    $post->save();

    // Prepare sheet data to be sent to Google Sheets
    $sheetData = [
        'form_type' => 'Contact Form',
        'fullname' => $validated['firstname'] . ' ' . $validated['lastname'],
        'email' => $validated['email'],
        'mobile' => $validated['phone'],
        'subject' => $validated['subject'],
        'message' => $validated['message'] ?? '',
        'date' => now()->format('Y-m-d H:i:s'),
    ];

    try {
        // Send data to Google Sheets via the API
        $response = Http::timeout(30)
            ->withHeaders([
                'Content-Type' => 'application/json'
            ])
            ->post('https://script.google.com/macros/s/AKfycbxjhSdnUgShzCLkhJ6CgX02u09s8bvO4EcUyMTI4n3UwaXmfKNoAXrPL_Uv_nY6-sxZ/exec', $sheetData);

        // Check if the request was successful
        if ($response->successful()) {
            $responseData = $response->json();
            if (isset($responseData['status']) && $responseData['status'] === 'success') {
                Log::info('Data successfully sent to Google Sheets', [
                    'email' => $validated['email'],
                    'response' => $responseData
                ]);
            } else {
                Log::warning('Google Sheets API returned error', [
                    'response' => $responseData,
                    'email' => $validated['email']
                ]);
            }
        } else {
            Log::error('Google Sheets API request failed', [
                'status' => $response->status(),
                'body' => $response->body(),
                'email' => $validated['email']
            ]);
        }

        // Redirect to thank you page with success message
        return redirect()->route('thank-you')->with('success', 'Your message has been sent successfully!');
        
    } catch (\Exception $e) {
        Log::error('Google Sheets API request failed: ' . $e->getMessage());
        return back()->with('error', 'Failed to send the message. Please try again later.');
    }
}


    public function thankyou()
    {
        $title="";
        $description=""; 
        return view('front.thank-you',compact('title','description'));
    }  

    public function thanksForApplying()
    {
        $title="";
        $description=""; 
        return view('front.thanks-for-applying', compact('title','description'));
    } 
    
    public function Blogs()
    {
        $meta_title = 'Al Muffadal';
        $meta_description = 'Al Muffadal Description';
        $blogs = Blogs::whereNull('deleted_at')->active()->latest()->get();
        return view('front.blogs.index',compact('meta_title', 'meta_description','blogs'));
    }
    public function BlogDetails($url = NULL)
    {
        if($url != NULL){
            $blog_details = Blogs::whereNull('deleted_at')
            //->active()
            ->where('url',$url)->firstOrFail();
            $meta_title = $blog_details->meta_title ?? '';
            $meta_description = $blog_details->meta_description ?? '';
            $faqs = Faq::whereNull('deleted_at')->where('blog_id', $blog_details->id)->get() ?? [];
            return view('front.blogs.detail',compact('meta_title', 'meta_description','blog_details', 'faqs'));
        }else{
            $meta_title = 'Al Muffadal';
            $meta_description = 'Al Muffadal Description';
            $blogs = Blogs::whereNull('deleted_at')->active()->latest()->get();
            return view('front.blogs.index',compact('meta_title', 'meta_description','blogs'));
        }
            
    }
    public function JobDetailsForm()
    {
        $title = 'Al Muffadal';
        $description = 'Al Muffadal Description';
        return view('front.marine-boiler-engineer-job-detail',compact('title', 'description'));
    }
    public function CurrentVacancies() {
        $meta_title = 'Current Vacancies & Careers in Dubai | Al Mufaddal Boilers';
        $meta_description = 'Apply for the latest job openings at Al Mufaddal Boilers. Explore rewarding career opportunities in engineering, project management, and marine services.';
        
        $vacancy_categories = VacanciesCategory::whereNull('deleted_at')->get();
 
        $vacancies = CurrentVacancies::whereNull('deleted_at')
            ->orderBy('jobcategory_id')
            ->get()
            ->groupBy('jobcategory_id');
        
        if ($vacancies->isEmpty()) {
        return view('front.no-vacancy', compact('title', 'description'));
    }

        return view('front.current-vacancies', compact('meta_title', 'meta_description', 'vacancy_categories', 'vacancies'));
    }
    public function VacanciesDetails($url) {
        
        $vacancy = CurrentVacancies::where('url', $url)->whereNull('deleted_at')->firstOrFail();
        $meta_title = $vacancy->meta_title;
        $meta_description = $vacancy->meta_description;;
        
        return view('front.marine-boiler-engineer-job-detail', compact('meta_title', 'meta_description', 'vacancy'));
    }
    public function JobDetailsSubmit(Request $request)
{
    $validated = $request->validate([
        'fullname' => 'required|string|max:255',
        'email'     => 'required|email',
        'phone'     => 'required',
        'Location'   => 'required|string|max:255',
        'linkedInprofile'  => 'required|string|max:1000',
        'resume' => 'required|file|mimes:pdf,msword,doc,docx|max:5120',
        'applied_for' => 'required|string'
    ]);

    $filePath = null;
    if ($request->hasFile('resume')) {
        $file = $request->file('resume');
        $folderPath = public_path('marine-boiler-engineer-resume');

        if (!file_exists($folderPath)) {
            mkdir($folderPath, 0777, true);
        }

        $fileName = $file->getClientOriginalName();
        $file->move($folderPath, $fileName);
        $filePath = $fileName;
    }

    // Save the data in the database
    MarineBoilerEngineer::create([
        'fullname' => $request->fullname, 
        'email' => $request->email,
        'phone' => $request->phone,
        'Location' => $request->Location,
        'linkedInprofile' => $request->linkedInprofile,
        'resume' => $filePath,
        'applied_for' => $request->applied_for,
    ]);

    // Prepare sheet data to be sent to Google Sheets
    $sheetData = [
        'form_type' => 'Job Application Form', // You can adjust the name of the form
        'fullname' => $validated['fullname'],
        'email' => $validated['email'],
        'mobile' => $validated['phone'],
        'location' => $validated['Location'],
        'linkedInprofile' => $validated['linkedInprofile'],
        'resume' => $filePath,  // Store the resume file name
        'applied_for' => $validated['applied_for'],
        'date' => now()->format('Y-m-d H:i:s'),
    ];

    try {
        // Send data to Google Sheets via the API
        $response = Http::timeout(30)
            ->withHeaders([
                'Content-Type' => 'application/json'
            ])
            ->post('https://script.google.com/macros/s/AKfycbxjhSdnUgShzCLkhJ6CgX02u09s8bvO4EcUyMTI4n3UwaXmfKNoAXrPL_Uv_nY6-sxZ/exec', $sheetData);

        // Check if the request was successful
        if ($response->successful()) {
            $responseData = $response->json();
            if (isset($responseData['status']) && $responseData['status'] === 'success') {
                Log::info('Data successfully sent to Google Sheets', [
                    'email' => $validated['email'],
                    'response' => $responseData
                ]);
            } else {
                Log::warning('Google Sheets API returned error', [
                    'response' => $responseData,
                    'email' => $validated['email']
                ]);
            }
        } else {
            Log::error('Google Sheets API request failed', [
                'status' => $response->status(),
                'body' => $response->body(),
                'email' => $validated['email']
            ]);
        }

        // Redirect to thank you page with success message
        return redirect()->route('thanks-for-applying')->with('success', 'Your inquiry has been sent successfully.');
        
    } catch (\Exception $e) {
        Log::error('Google Sheets API request failed: ' . $e->getMessage());
        return back()->with('error', 'Failed to send the message. Please try again later.');
    }
}

    public function project()
    {
        $meta_title="";
        $meta_description="";
        $categories = ProjectCategory::all();
        $projects = Project::all(); 
        return view('front.project', compact('meta_title','meta_description','categories','projects'));
    }
    public function projectstore(Request $request)
{
    // Validation
    $validated = $request->validate([
        'firstName' => [
            'required',
            'string',
            'max:100',
            // Block URLs
            function ($attribute, $value, $fail) {
                if (preg_match('/https?:\/\/|www\./i', $value)) {
                    $fail('Links are not allowed.');
                }
            },
            // Spam keywords
            function ($attribute, $value, $fail) {
                $spamWords = ['seo','crypto','viagra','casino','furniture','wholesale','упаковка','оборудование', 'Robertjaxia'];

                foreach ($spamWords as $word) {
                    if (str_contains(strtolower($value), $word)) {
                        $fail('Spam content detected.');
                        break;
                    }
                }
            },
        ],
        'email' => 'required|email|max:255|not_in:zekisuquc419@gmail.com',
        'phone' => 'required|numeric',
        'location' => 'required',
        'subject' => 'required',
        'message' => [
                'nullable',
                'string',
                'max:100',
                // Block URLs
                function ($attribute, $value, $fail) {
                    if (preg_match('/https?:\/\/|www\./i', $value)) {
                        $fail('Links are not allowed.');
                    }
                },
                // Spam keywords
                function ($attribute, $value, $fail) {
                    $spamWords = ['seo','crypto','viagra','casino','furniture','wholesale','упаковка','оборудование', 'Robertjaxia'];
    
                    foreach ($spamWords as $word) {
                        if (str_contains(strtolower($value), $word)) {
                            $fail('Spam content detected.');
                            break;
                        }
                    }
                },
            ],
        //'g-recaptcha-response' => 'required|captcha',
    ]);
    
    // Save the form data to the database
    $post = new ProjectForm;
    $post->firstName = $request->get('firstName');
    $post->email = $request->get('email');
    $post->phone = $request->get('phone');
    $post->location = $request->get('location');
    $post->subject = $request->get('subject');
    $post->message = $request->filled('message') ? $request->get('message') : null;

    $post->save();
    
    // Prepare the sheet data to send to Google Sheets
    $sheetData = [
        'form_type' => 'Project Form', // You can change this to match the form type
        'fullname' => $validated['firstName'], // Assuming first name is the only required field for "fullname"
        'email' => $validated['email'],
        'mobile' => $validated['phone'],
        'location' => $validated['location'],
        'subject' => $validated['subject'],
        'message' => $validated['message'] ?? '',
        'date' => now()->format('Y-m-d H:i:s'),
    ];

    try {
        // Send data to Google Sheets via the API
        $response = Http::timeout(30)
            ->withHeaders([
                'Content-Type' => 'application/json'
            ])
            ->post('https://script.google.com/macros/s/AKfycbxjhSdnUgShzCLkhJ6CgX02u09s8bvO4EcUyMTI4n3UwaXmfKNoAXrPL_Uv_nY6-sxZ/exec', $sheetData);

        // Check if the request was successful
        if ($response->successful()) {
            $responseData = $response->json();
            if (isset($responseData['status']) && $responseData['status'] === 'success') {
                Log::info('Data successfully sent to Google Sheets', [
                    'email' => $validated['email'],
                    'response' => $responseData
                ]);
            } else {
                Log::warning('Google Sheets API returned error', [
                    'response' => $responseData,
                    'email' => $validated['email']
                ]);
            }
        } else {
            Log::error('Google Sheets API request failed', [
                'status' => $response->status(),
                'body' => $response->body(),
                'email' => $validated['email']
            ]);
        }

        // Redirect to thank you page with success message
        return redirect()->route('thank-you')->with('success', 'Your message has been sent successfully!');
        
    } catch (\Exception $e) {
        Log::error('Google Sheets API request failed: ' . $e->getMessage());
        return back()->with('error', 'Failed to send the message. Please try again later.');
    }
}


    public function Service($url = null)
    {   
       
    
        $categories = ServiceCategory::whereNull('deleted_at')->where('url',$url)->first();
        
        $meta_title = $categories->meta_title;
        $meta_description = $categories->meta_description;
        
        $query = Services::whereNull('deleted_at');
        $selectedCategory = null;
    
        if ($url) {
            
            $selectedCategory = ServiceCategory::where('url', $url)->whereNull('deleted_at')->first();
    
            if ($selectedCategory) {
               
                $services = Services::where('category_id', $selectedCategory->id)
                    ->whereNull('deleted_at')
                    ->get();
    
                return view('front.service', compact('meta_title', 'meta_description', 'services', 'categories', 'selectedCategory'));
            } else {
                
                $service = Services::where('url', $url)
                    ->whereNull('deleted_at')
                    ->first();
                $meta_title = $service->meta_title;
                $meta_description = $service->meta_description;
    
                if ($service) {
                    
                    $relatedServices = Services::where('category_id', $service->category_id)
                        ->where('id', '!=', $service->id)
                        ->whereNull('deleted_at')
                        ->inRandomOrder()
                        ->get();
    
                    return view('front.service-detail', compact('title', 'description', 'service', 'categories', 'relatedServices','meta_title','meta_description'));
                } else {
                    abort(404);
                }
            }
        }
    
        $services = $query->get();
        return view('front.service', compact('title', 'description', 'services', 'categories', 'selectedCategory'));
    }

    public function ServiceDetails($url)
    {
        $categories = DB::table('service_category')->get();
    
        $service = Services::where('url', $url)->whereNull('deleted_at')->first();
        
        if (!$service) {
            abort(404); 
        }
       
        $relatedServices = Services::where('category_id', $service->category_id)
            ->where('id', '!=', $service->id)
            ->whereNull('deleted_at')
            ->inRandomOrder()
            ->get();
        $meta_title = $service->meta_title;
        $meta_description = $service->meta_description;
        return view('front.service-detail', compact('meta_title', 'meta_description', 'service', 'categories', 'relatedServices'));
    }
    public function CategoryServices($id)
    {
        $category = DB::table('service_category')->find($id);
    
        if (!$category) {
            abort(404);
        }
        $services = DB::table('services')
            ->where('category_id', $id)
            ->whereNull('deleted_at')
            ->get();
   
        return view('frontend.category-services', compact('category', 'services'));
    }

    public function search(Request $request)
    {
        $q = trim($request->input('q'));
    
        $service = Services::where('product_name', 'LIKE', "%$q%")
            ->orWhere('url', 'LIKE', "%$q%")
            ->whereNull('deleted_at')
            ->first();
    
        if ($service) {
            return redirect()->route('service.details', $service->url);
        }
    
        $category = ServiceCategory::where('name', 'LIKE', "%$q%")
            ->orWhere('url', 'LIKE', "%$q%")
            ->whereNull('deleted_at')
            ->first();
    
        if ($category) {
            return redirect()->route('service', ['url' => $category->url]);
        }
    
        return redirect()->back()->with('error', 'No matching service or category found.');
    }
    
}

