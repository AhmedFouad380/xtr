<?php

namespace App\Http\Controllers;


use App\Models\Admin;
use App\Models\Agency;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Order;
use App\Models\Page;
use App\Models\Product;
use App\Models\Solution;
use App\Models\ProductImages;
use App\Models\Setting;
use App\Models\User;
use App\Models\WhyUs;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;


class frontController extends Controller
{

    public function dashboard()
    {
        $counts['users'] = User::count();
        $counts['products'] = Product::count();
        $counts['categories'] = Category::count();
        $counts['contact'] = Contact::count();
        $counts['pending_orders'] = Order::where('type','pending')->count();
        $counts['accepted_orders'] = Order::where('type','accepted')->count();
        $counts['completed_orders'] = Order::where('type','completed')->count();
        $counts['canceled_orders'] = Order::where('type','canceled')->count();

        return view('Admin.index',compact('counts'));
    }

    public function index(){
        $UnvPopular = Product::active()->where('is_popular','active')->OrderBy('id','desc')->where('type','camera')->limit(8)->get();
        $BeinPopular = Product::active()->where('is_popular','active')->OrderBy('id','desc')->where('type','subscription')->limit(4)->get();
        $receiversPopular = Product::active()->where('is_popular','active')->OrderBy('id','desc')->where('type','receiver')->limit(4)->get();
        $whyus = WhyUs::active()->limit(6)->get();
        $agancies = Agency::active()->get();
        $settings = Setting::findOrFail(1);

        return view('front.index',compact('UnvPopular','BeinPopular','receiversPopular','whyus','agancies'));
    }
    public function Page($type)
    {
        $data = Page::findOrFail($type);
        $whyus = WhyUs::active()->limit(6)->get();
        $agancies = Agency::active()->get();

        return view('front.pages', compact('data','whyus','agancies'));
    }
    public function Category($type)
    {
        $data = Category::findOrFail($type);
        $products = Product::active()->where('category_id',$data->id)->paginate(12);
        $count = Product::active()->where('category_id',$data->id)->count();
        $whyus = WhyUs::active()->limit(6)->get();
        $agancies = Agency::active()->get();

         return view('front.'.$data->type, compact('data','whyus','agancies','products','count'));
    }
    public function solutions(){
        $products = Solution::active()->paginate(12);
        $count = Solution::active()->count();
        $agancies = Agency::active()->get();
        return view('front.solutions', compact('agancies','products','count'));
    }
    public function cart(){
        $IP = \Request::ip();
        $carts = Cart::where('ip',$IP)->get();
        return view('front.cart', compact('carts'));
    }

    public function addCart(Request $request){
        $Product = Product::findOrFail($request->id);
        if($request->count){
            if(Cart::where('ip',\Request::ip())->where('product_id',$Product->id)->count() > 0){
                $cart =  Cart::where('ip',\Request::ip())->where('product_id',$Product->id)->first();
                $cart->count= $request->count;
                $cart->save();
            }else{
                $cart = new Cart();
                $cart->product_id = $Product->id;
                $cart->ip=\Request::ip();
                if(isset($request->count)){
                    $cart->count=$request->count;
                }else{
                    $cart->count=1;
                }
                $cart->save();
            }

        }else{
            if(Cart::where('ip',\Request::ip())->where('product_id',$Product->id)->count() > 0){
                $cart =  Cart::where('ip',\Request::ip())->where('product_id',$Product->id)->first();
                $cart->count=$cart->count + 1;
                $cart->save();
            }else{
                $cart = new Cart();
                $cart->product_id = $Product->id;
                $cart->ip=\Request::ip();
                if(isset($request->count)){
                    $cart->count=$request->count;
                }else{
                    $cart->count=1;
                }
                $cart->save();
            }
        }



        return response()->json(Cart::where('ip',\Request::ip())->sum('count'));
    }

    public function deleteCartItem(Request $request){
        Cart::where('id',$request->id)->delete();
        return response()->json(['message'=>'success']);

    }
    public function cartCustomerData(){
//        $IP = Request::ip();
//        dd($IP);
        $carts = Cart::where('ip',\Request::ip())->get();
        return view('front.customerdata', compact('carts'));
    }
    public function product($id)
    {
        $data = Product::active()->where('id',$id)->get()->first();
        $productImages = ProductImages::where('product_id',$id)->get();
        $similarProducts = Product::active()->where('category_id',$data->category_id)->get();
        $whyus = WhyUs::active()->limit(6)->get();
        $agancies = Agency::active()->get();

        return view('front.productdetails', compact('whyus','agancies','data','productImages','similarProducts'));

    }
    public function search(Request $request)
    {
        $data = Product::where('is_active','active')
            ->where(function ($q) use ($request) {
            $q->where('name_ar','like','%'.$request->search.'%')->
            OrWhere('name_en','like','%'.$request->search.'%')->
            OrWhere('description_ar','like','%'.$request->search.'%')->
            OrWhere('description_en','like','%'.$request->search.'%');
        });
        if($request->category_id != 0){
            $data->where('category_id',$request->catgory_id);
        }
        $products = $data->paginate(10);
        $agancies = Agency::active()->get();

        return view('front.search', compact('products','agancies','data'));

    }
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $remember_me = $request->has('remember_me') ? true : false;
        if (Auth::guard('web')->attempt($credentials, $remember_me)) {
            // Authentication passed...
            return redirect()->intended('/Dashboard');
        } else {
            return back()->with('danger', 'البريد الإلكتروني او كلمة المرور خطأ');
        }
    }

    public function logout()
    {
        if (Auth::guard('admin')->check()) {
            Auth::guard('admin')->logout();

        }
        if (Auth::guard('web')->check()) {
            Auth::guard('web')->logout();
        }
        return redirect('/')->with('message', 'success');
    }

    public function register()
    {
        return view('front.register');
    }


    function showForgetPasswordForm()
    {
        return view('auth.forget_password');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function submitForgetPasswordForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:admins',
        ]);

        $token = Str::random(64);

        DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);

        Mail::send('email.forgetPassword', ['token' => $token, 'email' => $request->email], function ($message) use ($request) {
            $message->to($request->email);
            $message->subject('Reset Password');
        });

        return back()->with('message', 'We have e-mailed your password reset link!');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function showResetPasswordForm($token, $email)
    {
        return view('auth.reset_password', ['token' => $token, 'email' => $email]);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function submitResetPasswordForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
        $updatePassword = DB::table('password_resets')
            ->where([
                'email' => $request->email,
                'token' => $request->token
            ])
            ->first();
        if (!$updatePassword) {
            return back()->withInput()->with('error', 'Invalid token!');
        }
        User::where('email', $request->email)->update(['password' => Hash::make($request->password)]);
        DB::table('password_resets')->where(['email' => $request->email])->delete();
        return redirect('/login')->with('message', 'Your password has been changed!');
    }

    public function Setting()
    {

        $employee = User::findOrFail(Auth::guard('web')->id());

        return view('Admin.Admin.Profile', compact('employee'));
    }
}
