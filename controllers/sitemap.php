<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Sitemap
 */
class Sitemap extends MY_Controller
{
    /**
     * Main constructor.
     */
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
    }

    /**
     * Main function for get links of each page | category | blog article
     */
    public function index()
    {
        $pages = $this->db->from('page')->select('link')->get()->result();
        $categories = $this->db->from('category')->select('slug')->get()->result();
        $articles = $this->db->from('blog')->select('slug')->where(array('blog.active' => 1))->get()->result();

        $data['links'] = array(
            'pages' => $pages,
            'categories' => $categories,
            'articles' => $articles
        );

        $this->load->view('sitemap', $data);
    }
}