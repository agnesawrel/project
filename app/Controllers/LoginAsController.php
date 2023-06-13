<!-- -->

// namespace App\Controllers;

// use App\Models\AsistenModel;
// use App\Models\LoginModel;

// class LoginAsController extends BaseController
// {
// protected $asistenModel;
// protected $loginModel;
// public function __construct()
// {
// $this->asistenModel = new AsistenModel();
// $this->loginModel = new LoginModel();
// }
// public function index()
// {
// return view('asisten/loginasisten');
// }
// public function home()
// {
// // return view('login/home');

// // melakukan checking pada session dengan aturan jika session merupakan pengguna amin maka akan masuk ke halaman
// // login/home tetapi jika selain admin maka akan masuk ke halaman login/loginpage
// $session = session();
// if ($session->has('pengguna')) {
// $item = $session->get('pengguna');
// if ($item == 'admin') {
// return view('AsistenView');
// } else {
// return view('asisten/loginasisten');
// }
// } else {
// return view('AsistenView');
// }
// }

// public function check()
// {
// // gunanya untuk
// // class ini mengakses request dengan method post dengan masing2 nama pada input type pada user dan password di view loginpage.php
// $post = $this->request->getPost(['username', 'password']);
// $cek = $this->loginModel->check($post);
// if ($cek > 0) {
// $session = session(); //
// $session->set('username', $post['username']);
// return redirect()->to(base_url('asisten'));
// } else {
// session()->setFlashdata('salah', 'Username atau password salah');
// return redirect()->to(base_url('asisten'));
// }
// }

// public function logout()
// {
// $session = session();
// // menghapus atribut, kalau ingin menghancurkan atribut memakai destroy
// $session->remove('pengguna');
// return view('login/loginpage');
// }
// } -->