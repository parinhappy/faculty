<?php
namespace App\Controllers;
use App\Models\UserModel;

class UserController extends BaseController {

    
    //  // แสดงทั้งหมด
    //  public function index() {
    //     $UserModel = new UserModel();
    //     $data['users'] = $UserModel->orderBy('fac_id', 'DESC')->findAll();
    //     return view('namelist', $data);
    // }

    // // add name form
    //  public function create() {
    //     return view('addname');
    //  }

    // add_data 
    public function store() {
        $UserModel = new UserModel();
        $data = [
            'fac_id' => $this->request->getVar('fac_id'),
            'fac_name' => $this->request->getVar('fac_name')
        ];
        $UserModel->insert($data);
        return $this->response->redirect(site_url('/addname'));
    }

//     // show single name
//     public function singleUser($id = null) {
//         $NameModel = new NameModel();
//         $data['user_obj'] = $NameModel->where('id', $id)->first();
//         return view('editnames', $data);
//     }

//     // update name data
//     public function update() {
//         $NameModel = new NameModel();
//         $id = $this->request->getVar('id');
//         $data = [
//             'name' => $this->request->getVar('name'),
//             'email' => $this->request->getVar('email')
//         ];
//         $NameModel->update($id, $data);
//         return $this->response->redirect(site_url('/namelist'));
//     }

//     // delete name
//     public function delete($id = null) {
//         $NameModel = new NameModel();
//         $data['user'] = $NameModel->where('id', $id)->delete($id);
//         return $this->response->redirect(site_url('/namelist'));
//     }
 }