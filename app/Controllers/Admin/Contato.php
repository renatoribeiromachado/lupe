<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\ContactModel;
use CodeIgniter\Controller;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx; 

class Contato extends BaseController
{
    private $contactModel;

    public function __construct()
    {
        $this->session          = session();
        $this->contactModel     = new ContactModel(); 
    }
    
    public function index()
    {

        $contacts = $this->contactModel->orderBy('created_at', 'desc')->paginate(10);
        
        echo view('admin/pages/contato/contato',[
                    'msg'         => $this->session->getFlashdata('msg'),
                    'title'       => 'Lista de leads',
                    'description' => 'Visualização e Exclusão',
                    'contacts'    => $contacts,
                    'count'       => $this->contactModel->countAll(),
                    'pager'       => $this->contactModel->pager
                ]);

    }
    
    public function exportar()
    {  
        $spreadsheet = new Spreadsheet();        
        
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'COD');
        $sheet->setCellValue('B1', 'NOME');
        $sheet->setCellValue('C1', 'SOBRENOME');
        $sheet->setCellValue('D1', 'EMAIL');
        $sheet->setCellValue('E1', 'EMPRESA');
        $sheet->setCellValue('F1', 'WHATSAPP');
        $sheet->setCellValue('G1', 'CADASTRO');

        $rows = 2;
        
        $contacts = $this->contactModel->orderby('name','DESC')->findAll();
        
        foreach($contacts AS $contact){
            extract($contact);
           
            $sheet->setCellValue('A' . $rows, "#" .$id);
            $sheet->setCellValue('B' . $rows, $name);
            $sheet->setCellValue('C' . $rows, $last_name);
            $sheet->setCellValue('D' . $rows, $email);
            $sheet->setCellValue('E' . $rows, $company);
            $sheet->setCellValue('F' . $rows, $whatsapp);
            $sheet->setCellValue('G' . $rows, date("d/m/Y", strtotime($created_at)));
               
            $rows++;
        }

        $writer = new Xlsx($spreadsheet);
        $writer->save('world.xlsx');
        return $this->response->download('world.xlsx', null)->setFileName('leads_acorp.xlsx');

    }

    /*delete*/
    public function delete($id){
        //dd($id);
        if($this->contactModel->delete($id)){
            $this->session->setFlashdata('msg','<div class="alert alert-danger"> <i class="fa fa-thumbs-up"></i> Deletado com sucesso</div>');
            return redirect()->to(base_url('admin/contato'));
        }
    }
}