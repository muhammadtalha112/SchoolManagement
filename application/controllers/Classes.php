<?php
class Classes extends CI_Controller
{
    function index()
    {
        $this->load->model('Class_model');
        $classes = $this->Class_model->getClasses();
        $data['classes'] = $classes;
        $this->load->view('classes', $data);
    }
    function addClass()
    {
        $this->load->view('addClass');
    }
    public function addNewClass()
    {
        $this->load->model('Class_model');
        $formArray = array();
        $this->load->library('form_validation');
        $this->form_validation->set_rules('className', 'Class Name', 'required|alpha');
        $this->form_validation->set_rules('fee', 'Class Fee', 'required|numeric');
        if ($this->form_validation->run() == true) {
            $formArray['className'] = $this->input->post('className');
            $formArray['fee'] = $this->input->post('fee');
            $l = $this->Class_model->addClass($formArray);
            if ($l == true) {
                $this->session->set_flashdata('success', 'Record Successfully save');
                redirect(base_url() . 'Classes');
            } else {
                $this->session->set_flashdata('success', 'Record Already Exist');
                $this->load->view('addClass');
            }
        } else {
            $this->load->view('addClass');
        }
    }
    function showEdit($classId)
    {
        $this->load->model('Class_model');
        $formArray = array();
        $formArray['className'] = $this->input->post('className');
        $formArray['fee'] = $this->input->post('fee');
        $this->Class_model->updateClass($classId, $formArray);
        $this->session->set_flashdata('success', 'Record Successfully save');
        redirect(base_url() . 'Classes');
    }
    function edit($classId)
    {
        $this->load->model('Class_model');
        $class = $this->Class_model->editClass($classId);
        $data = array();
        $data['class'] = $class;
        $this->load->view('editClass', $data);
    }
    function delete($classId)
    {
        $this->load->model("Class_model");
        $class = $this->Class_model->editClass($classId);
        if (!empty($class)) {
            $this->Class_model->delete($classId);
            redirect(base_url() . 'Classes');
        }
    }
}
