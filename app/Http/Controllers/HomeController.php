<?php namespace App\Http\Controllers;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */

    public function index()
    {
        return view('home');
    }
    public function getApi()
    {
        $days = Input::get('days', 7);
        $range = \Carbon\Carbon::now()->subDays($days);

        $stats = User::where('created_at', '>=', $range)
            ->groupBy('date')
            ->orderBy('date', 'DESC')
            ->remember(60)
            ->get([
                DB::raw('Date(created_at) as date'),
                DB::raw('COUNT(*) as value')
            ])
            ->toJSON();

        return $stats;
    }
}
