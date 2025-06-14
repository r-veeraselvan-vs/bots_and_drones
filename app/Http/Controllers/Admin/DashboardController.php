<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\User;
use App\Models\Enquiry;
use App\Models\Contact;
use App\Models\Subscription;
use Illuminate\Support\Facades\Redirect;

class DashboardController extends Controller
{
    public function index()
    {
        // Get today's date
        $today = Carbon::now()->toDateString();
        
        // Calculate the start and end of the week
        $startOfWeek = Carbon::parse($today)->subDays(7)->toDateString();
        $endOfWeek = Carbon::parse($today)->subDay()->toDateString();

        // Calculate the start and end of the month
        $startOfMonth = Carbon::parse($today)->subDays(30)->toDateString();
        $endOfMonth = Carbon::parse($today)->subDay()->toDateString();

        // Count the number of buyers for today
        $buyersCountToday = User::whereDate('created_at', $today)
                                ->where('seller', 'N')
                                ->count();

        // Count the number of sellers for today
        $sellersCountToday = User::whereDate('created_at', $today)
                                ->where('seller', 'Y')
                                ->count();

        // Count the number of enquiries for today
        $enquiriesCountToday = Contact::whereDate('updated_at', $today)->count();

        // Count the number of products added for today
        $productsCountToday = Products::whereDate('created_at', $today)->count();

        // Calculate the total value of enquiries for today
        $contactsToday = Contact::whereDate('updated_at', $today)->get();
        $enquiriesValueToday = 0;
        foreach ($contactsToday as $contact) {
            $products = Products::where('id', $contact->product_id)->get(); 
            foreach ($products as $product) {
                $enquiriesValueToday += $product->price;
            }
        }

        // Count the number of buyers for the week
        $buyersCountWeekly = User::whereBetween('created_at', [$startOfWeek, $endOfWeek])
                                ->where('seller', 'N')
                                ->count();

        // Count the number of sellers for the week
        $sellersCountWeekly = User::whereBetween('created_at', [$startOfWeek, $endOfWeek])
                                ->where('seller', 'Y')
                                ->count();

        // Count the number of enquiries for the week
        $enquiriesCountWeekly = Contact::whereBetween('created_at', [$startOfWeek, $endOfWeek])->count();

        // Count the number of products added for the week
        $productsCountWeekly = Products::whereBetween('created_at', [$startOfWeek, $endOfWeek])->count();

        // Calculate the total value of enquiries for the week
        $contactsWeekly = Contact::whereBetween('created_at', [$startOfWeek, $endOfWeek])->get();
        $enquiriesValueWeekly = 0;
        foreach ($contactsWeekly as $contact) {
            $products = Products::where('id', $contact->product_id)->get(); 
            foreach ($products as $product) {
                $enquiriesValueWeekly += $product->price;
            }
        }

        // Count the number of buyers for the month
        $buyersCountMonthly = User::whereBetween('created_at', [$startOfMonth, $endOfMonth])
                                ->where('seller', 'N')
                                ->count();

        // Count the number of sellers for the month
        $sellersCountMonthly = User::whereBetween('created_at', [$startOfMonth, $endOfMonth])
                                ->where('seller', 'Y')
                                ->count();

        // Count the number of enquiries for the month
        $enquiriesCountMonthly = Contact::whereBetween('created_at', [$startOfMonth, $endOfMonth])->count();

        // Count the number of products added for the month
        $productsCountMonthly = Products::whereBetween('created_at', [$startOfMonth, $endOfMonth])->count();

        // Calculate the total value of enquiries for the month
        $contactsMonthly = Contact::whereBetween('created_at', [$startOfMonth, $endOfMonth])->get();
        $enquiriesValueMonthly = 0;
        foreach ($contactsMonthly as $contact) {
            $products = Products::where('id', $contact->product_id)->get(); 
            foreach ($products as $product) {
                $enquiriesValueMonthly += $product->price;
            }
        }

        // Fetch user_ids and their respective counts from the Contact table
        $userContactCounts = Contact::select('seller_id', DB::raw('COUNT(*) as contact_count'))
            ->groupBy('seller_id')
            ->get();

        // Initialize an array to store user information
        $userDetails = [];

        // Iterate through each user_id and retrieve additional information
        foreach ($userContactCounts as $userContactCount) {
            $user = User::find($userContactCount->seller_id); // Fetch user details
            $user->contact_count = $userContactCount->contact_count; // Add contact count to user object

            // Fetch product information associated with the user from the Contact table
            $user->products = Products::select('products.id as product_id', 'products.title as product_name', 'products.price')
                ->leftJoin('contacts', 'products.id', '=', 'contacts.product_id')
                ->selectRaw('products.id as product_id, products.title as product_name, products.price, COUNT(contacts.id) as contact_count')
                ->where('contacts.seller_id', $user->id)
                ->groupBy('products.id', 'products.title', 'products.price')
                ->orderByDesc('contact_count')
                ->get();


            // Add the user details to the array
            $userDetails[] = $user;
        }

        // Fetch top locations (states) based on products
        $topLocations = DB::table('contacts')
                    ->select('states.name as state_name', 
                             DB::raw('COUNT(DISTINCT contacts.product_id) as product_count'), 
                             DB::raw('COUNT(*) as contact_count'))
                    ->join('products', 'contacts.product_id', '=', 'products.id')
                    ->join('states', 'products.state', '=', 'states.id')
                    ->groupBy('states.name')
                    ->orderByDesc('contact_count')
                    ->take(5)
                    ->get();

        return view('admin.home', compact(
            'buyersCountToday', 'sellersCountToday', 'enquiriesCountToday', 'productsCountToday', 'enquiriesValueToday',
            'buyersCountWeekly', 'sellersCountWeekly', 'enquiriesCountWeekly', 'productsCountWeekly', 'enquiriesValueWeekly',
            'buyersCountMonthly', 'sellersCountMonthly', 'enquiriesCountMonthly', 'productsCountMonthly', 'enquiriesValueMonthly', 'userDetails', 'topLocations'
        ));
    }


        public function buyersList(Request $request)
    {

        $startDate = $request->input('start-date');
        $endDate = $request->input('end-date');

        // Check if end date is provided
        if ($endDate) {
            $addendDate = Carbon::parse($endDate);
            $addendDate->addDay();
            $addendDate = $addendDate->toDateString();
        }

        $buyersQuery = User::where('seller', 'N')
                        ->orderBy('created_at', 'desc');

        if ($startDate && $addendDate) {
            $buyersQuery->whereBetween('created_at', [$startDate, $addendDate]);
        }

        $buyers = $buyersQuery->paginate(10);

        return view('admin.buyers', compact('buyers', 'startDate', 'endDate'));
    }

    public function sellersList(Request $request)
    {

        $startDate = $request->input('start-date');
        $endDate = $request->input('end-date');

        // Check if end date is provided
        if ($endDate) {
            $addendDate = Carbon::parse($endDate);
            $addendDate->addDay();
            $addendDate = $addendDate->toDateString();
        }

        $sellersQuery = User::where('seller', 'Y')
                        ->orderBy('created_at', 'desc');

        if ($startDate && $addendDate) {
            $sellersQuery->whereBetween('created_at', [$startDate, $addendDate]);
        }

        $sellers = $sellersQuery->paginate(10);

        return view('admin.sellers',compact('sellers', 'startDate', 'endDate'));
    }

    public function enquiryList(Request $request)
    {
        // Retrieve request parameters for date range filtering
        $startDate = $request->input('start-date');
        $endDate = $request->input('end-date');

        // Check if end date is provided
        if ($endDate) {
            $addendDate = Carbon::parse($endDate);
            $addendDate->addDay();
            $addendDate = $addendDate->toDateString();
        }
        
        // Query to retrieve enquiries based on date range
        $enquiriesQuery = Contact::orderBy('updated_at', 'desc');

        if ($startDate && $addendDate) {
            $enquiriesQuery->whereBetween('updated_at', [$startDate, $addendDate]);
        }

        $enquiries = $enquiriesQuery->paginate(10);

        return view('admin.enquiries', compact('enquiries', 'startDate', 'endDate'));
    }

    public function productsList()
    {
        $products = Products::orderBy('created_at', 'desc')
                        ->paginate(10);       
        return view('admin.products',compact('products'));
    }

    public function configurationsList()
    {       
        return view('admin.configurations');
    }

    public function subscription_new()
    {       
        $subscriptions = Subscription::get();
        $userIds = $subscriptions->pluck('user_id')->toArray();
        $users = User::whereIn('id', $userIds)->paginate(10);  

        // Associate status and subscription_type with each user
        foreach ($users as $user) {
            $subscription = $subscriptions->where('user_id', $user->id)->first();
            if ($subscription) {
                $user->status = $subscription->status;
                $user->subscription_type = $subscription->subscription_type;
            } else {
                // If no subscription found for the user, set default values
                $user->status = null;
                $user->subscription_type = null;
            }
        } 
        return view('admin.subscription_new', compact('users', 'subscriptions'));
    }

    public function accept($userId)
    {
        try {
            $user = User::findOrFail($userId);
            $subscription = Subscription::where('user_id', $user->id)->first();

            if ($subscription) {
                // Update the subscription status to "active"
                $subscription->status = 'active';
                $subscription->save();
            }

            return Redirect::route('subscription_new.list')->with('success', 'Subscription Accepted successfully');
        } catch (\Exception $e) {
            return Redirect::route('subscription_new.list')->with('error', 'Error Accepting user');
        }
    }

    public function reject($userId)
    {
        try {
            $user = User::findOrFail($userId);
            $subscription = Subscription::where('user_id', $user->id)->first();

            if ($subscription) {
                $subscription->delete(); // Delete the subscription data
            }

            return Redirect::route('subscription_new.list')->with('success', 'Subscription Rejected successfully');
        } catch (\Exception $e) {
            return Redirect::route('subscription_new.list')->with('error', 'Error Rejecting user');
        }
    }

    public function subscriptions()
    {       
        $subscriptions = Subscription::where('status', 'active')->get();
        $userIds = $subscriptions->pluck('user_id')->toArray();
        $users = User::whereIn('id', $userIds)->paginate(10);   

        return view('admin.subscriptions', compact('users'));
    }

    public function usermanagementList()
    {       
        $users = User::paginate(10); ;
        return view('admin.usermanagement',compact('users'));
    }

    public function activate($userId)
    {
        try {
            $user = User::findOrFail($userId);
            $user->status = 'active';
            $user->save();

            return Redirect::route('usermanagement.list')->with('success', 'User activated successfully');
        } catch (\Exception $e) {
            return Redirect::route('usermanagement.list')->with('error', 'Error activating user');
        }
    }

    public function deactivate($userId)
    {
        try {
            $user = User::findOrFail($userId);
            $user->status = 'Inactive';
            $user->save();

            return Redirect::route('usermanagement.list')->with('success', 'User deactivated successfully');
        } catch (\Exception $e) {
            return Redirect::route('usermanagement.list')->with('error', 'Error deactivating user');
        }
    }

    public function unverifiedusersList()
    {       
        $users = User::whereNull('email_verified_at')
                        ->paginate(10); 
        return view('admin.unverifiedusers',compact('users'));
    }

    public function verify($userId)
    {
        try {
            $user = User::findOrFail($userId);
            $user->email_verified_at = Carbon::now();
            $user->save();

            return Redirect::route('unverifiedusers.list')->with('success', 'User Verified successfully');
        } catch (\Exception $e) {
            return Redirect::route('unverifiedusers.list')->with('error', 'Error Verifying user');
        }
    }
}

