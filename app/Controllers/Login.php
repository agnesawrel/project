<!-- -->

// namespace App\Controllers;

// class login extends BaseController
// {
// public function index()
// {
// return view('login/loginpage');
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
// return view('login/home');
// } else {
// return view('login/loginpage');
// }
// } else {
// return view('login/loginpage');
// }
// }

// public function check()
// {
// // gunanya untuk
// // class ini mengakses request dengan method post dengan masing2 nama pada input type pada user dan password di view loginpage.php
// $post = $this->request->getPost(['usr', 'pwd']);
// if ($post['usr'] == 'admin' && $post['pwd'] == '123') {
// $session = session(); //
// $session->set('pengguna', $post['usr']);
// return view('login/home');
// } else {
// return view('login/fail');
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