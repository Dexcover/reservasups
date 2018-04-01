<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('registro');
	}


	public function index()
	{
		$this->load->view('home');
	}

	public function registro(){
			
			$correo=$_POST['email'];
			$hoy = date("dmyhis");
			$cantidad=$_POST['cantidad'];
			$pass=$this->registro->registrar($correo,$hoy,$cantidad);

			if($pass){
			$html="<div style='text-align: center'> <div class='alert alert-danger' role='alert'>Ya esta registrado el correo proporcionado, si crees que es un error comunicate a dchicaizah1@est.ups.edu.ec.</div></div>";
			$data['email']=$correo;
			$data['mensaje']=$html;
			$this->load->view('registrar', $data);
			
			
		

		}else{
			$dato=base_url('index.php/Welcome/pdf');
			$men="Reserva registrada exitosamente,  haz click <a href='$dato'>Aqui</a> para descargar el comprobante que habilita tu reserva<p></p>";
			$html="<div style='text-align: center'> <div class='alert alert-success' role='alert'>".$men."</div><div class='divider'></div><h5>Nos pondremos en contacto contigo a través de tu correo para asegurarnos tu reserva!  NO olvides de imprimir el comprobante. Si no encuentras el correo, puede llegar a tu bandeja de correo basura.</h5></div>";
			
			


     

            





$data['mensaje']=$html;
			$data['email']=$correo;
			$this->load->view('registrar',$data);
			
			
			$this->session->set_userdata('hoy',$hoy);
			$this->session->set_userdata('email',$correo);
			$this->session->set_userdata('cantidad',$cantidad);


			
	}
}

	public function registrar(){
			$correo=$_POST['email'];
			$this->session->set_userdata('email',$correo);
			$data['email']=$correo;
			$this->load->view('registrar',$data);


		}

		




	

	public function pdf(){
		$correo=$this->session->userdata('email');
		
		$data = [];

		$hoy = $this->session->userdata('hoy');
		$cantidad = $this->session->userdata('cantidad');

        //load the view and saved it into $html variable
        $html = 
        "<style>@page {
			    margin-top: 0.5cm;
			    margin-bottom: 0.5cm;
			    margin-left: 0.5cm;
			    margin-right: 0.5cm;
			}
			</style>".
        "<body>
        	<div style='font-size: 36px; text-align: center'>UNIVERSIDAD POLITÉCNICA SALESIANA - RESERVA DE ENTRADAS INTEGRACIÓN</div>
        	<div style='color:#006699; margin-top: 100px; font-size: 26px;'>Reserva asignada al correo: <b>".$correo."<b></div>
        	<div style='color:#006699; margin-top: 90px; font-size: 26px;'>Cantidad de Entradas Reservadas <b>".$cantidad."<b></div>".
        		"<div style=' margin-top: 50px; font-size: 26px;'>ID DE SU RESERVA:  ".$hoy."</div>

        </body>";



        // $html = $this->load->view('v_dpdf',$date,true);
 		
 		//$html="asdf";
        //this the the PDF filename that user will get to download
        $pdfFilePath = "cipdf_".$hoy.".pdf";
 
        //load mPDF library
        $this->load->library('M_pdf');
        $mpdf = new mPDF('c', 'A4-L'); 
 		$mpdf->WriteHTML($html);
		$mpdf->Output($pdfFilePath, "D");
       // //generate the PDF from the given html
       //  $this->m_pdf->pdf->WriteHTML($html);
 
       //  //download it.
       //  $this->m_pdf->pdf->Output($pdfFilePath, "D"); 


}


	

public function cerrar(){
	$this->session->sess_destroy();
	$html="<div style='text-align: center'> <div class='alert alert-success' role='alert'>Comparte con tus amistades</div></div>";

			$data['mensaje']=$html;
			$this->load->view('home', $data);
			

}


}