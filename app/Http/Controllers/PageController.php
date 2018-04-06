<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Validator;
use Auth;
use Hash;
use App\User;
use App\Foods;
use DB;
use App\Cart;
use Session;
use Illuminate\Pagination\Paginator;
class PageController extends Controller{
    public function getIndex(){
        $new_food = Foods::where('today',1)->get();
        //$allFood = Foods::all()->paginate(1);
        // dd($allFood);
        $allFood = DB::table('foods')->paginate(12);
        return view('pages.trangchu',compact('new_food','allFood'));
    }
    function getRegister(){
        return view('pages.register');
    }
    function postRegister(Request $req){
        $check =[
            'fullname' =>'required|max:50',
            'email'=>'required|max:50|email|unique:users',
            'username' => 'required|max:50|unique:users',
            'password' => 'required|min:6|max:20',
            'confirm_password'=>'required|same:password',
            'address'=>'required',
            'phone' =>'required|numeric'
        ];
        $mess =[
            'fullname.required' =>'Vui lòng nhập họ tên',
            'fullname.max'=>'Họ tên không quá :max kí tự',
            'password.min' =>'Password it nhất :min kí tự',
            'email.unique' => 'Email đã có người sử dụng'
        ];
        $validator = Validator::make($req->all(),$check,$mess);
        if($validator->fails()){
            return redirect()
                ->route('dang_ki')
                ->withErrors($validator)
                ->withInput();

        }
        $user = new User();
        $user->username = $req->username;
        $user->fullname =$req->fullname;
        $user->birthdate = date('Y-m-d',strtotime($req->birthdate));
        $user->gender = $req->gender;
        $user->address = $req->address;
        $user->email = $req->email;
        $user->phone =$req->phone;
        $user->password = Hash::make($req->password);
        $user->role ='user';
        $user->save();
        return redirect()->route('dang_nhap')->with([
            'success' =>'Đăng kí thành công'
        ]);
    }
    function getLogin(){
        return view('pages.login');
    }
    function postLogin(Request $req){
        Auth::attemp([
            'email'=>$req->email,
            'password'=>$red->password
        ]);
        if(Auth::check())
            return redirect()->route('trangchu');
        return redirect()->route('dang_nhap')-with([
            'error'=>'Sai thông tin đăng nhập'
        ]);    
    }
    function getLogout(){
        Auth:logout();
        return redirect()->route('dang_nhap')->with([
            'success'=>"Đăng xuất thành công"
        ]);
    }
    function getSearch(Request $req){
        $food = DB::table('foods')->where('name','like','%'.$req->key.'%')->orWhere('price',$req->key)->get();
        return view('pages.search',compact('food'));
    }
    public function getTypeFood($type){
        $sp_theoloai = Foods::where('id_type',$type)->get();
        return view('pages.typefood',compact('sp_theoloai'));
    }
    function getDetailFood($id){
        $food = Foods::where('id',$id)->first();
        // dd($food);
        $sp_tuongtu = Foods::all();
        return view('pages.detail',compact('food','sp_tuongtu'));
    }
    function getShoppingCart(Request $req,$id){
        $product = Foods::find($id);
        $oldCart = Session('cart') ? Session::get('cart') :null;
        $cart = new Cart($oldCart);
        $cart->add($product, $id);
        $req->session()->put('cart',$cart);
        return redirect()->back();
        // return view('pages.shoppingcart');
    }
    
    public function getDelItemCart($id){
        $oldCart = Session::has('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
        if(count($cart->items)>0){
            Session::put('cart',$cart);
        }
        else{
            Session::forget('cart');
        }
        return redirect()->back();
    }

    public function getCheckout(){
        return view('pages.shoppingcart');
    }
    function getInfo(){
        return view('pages.info');
    }
 }
?>