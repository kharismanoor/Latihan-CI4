<?php namespace App\Controllers;

use App\Models\BeritaModel;
use CodeIgniter\Controller;

class BeritaController extends Controller
{
    private $BeritaModel;

    public function __construct() {
        $this->beritaModel = new BeritaModel();

    }

    public function index() {
        $data['berita'] = $this->beritaModel->findAll();
        return view('berita', $data);
    }

    public function create() {
        return view('create_berita');
    }

    public function store() {
        $data = $this->request->getPost();
        $this->beritaModel->save($data);
        return redirect()->to('admin');
    }
    public function edit($id) {
        $data['berita'] = $this->beritaModel->find($id);
        return view('edit_berita', $data);
    }

    public function update($id) {
        $data = $this->request->getPost();
        $this->beritaModel->update($id, $data);
        return redirect()->to('admin');
    }
    public function delete($id) {
        $this->beritaModel->delete($id);
        return redirect()->to('admin');
    }

  
}





