<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends CI_Controller {

    public function index()
    {
        $data['query'] = $this->input->get_post("q");
        $query = urlencode($data['query']);
        
        $this->load->model('Twitter_model', 'twitter');
        $settings = array(
            'oauth_access_token' => "350033240-B2ixMMHiaBND7rVmjQecD3YvgZjbHzjpTcwWDPBp",
            'oauth_access_token_secret' => "JQzLpg3YFSHHOFyIbmM4dzl73jzCXWWcdHLtjZGG99k",
            'consumer_key' => "zFs5cu1pKaD8nwZeMdrA",
            'consumer_secret' => "5AOdK204ZZ14wby0NMg29YFE48Me9Zwkf81OpJ1xQ"
        );
        $url = 'https://api.twitter.com/1.1/users/search.json';
        $getfield = "?q=$query";
        $requestMethod = 'GET';
        $response = $this->twitter->init($settings)
            ->setGetfield($getfield)
            ->buildOauth($url, $requestMethod)
            ->performRequest();
		#echo $response;

		$user_array = json_decode($response);
		$data['user'] = null;
		if ($response != null && $user_array != null) {	
				$data['user'] = $user_array[0];
			$data['user']->profile_image_url = str_replace("normal", "400x400", $data['user']->profile_image_url);
		}
        $this->load->view('inc/header', $data);
        $this->load->view('query');
        $this->load->view('inc/footer');
    }
}

/* End of file Search.php */
/* Location: ./application/controllers/Search.php */
