<?php

namespace Platron\Chat2desk\services\clients;

use Platron\Chat2desk\services\BaseServiceResponse;
use stdClass;

class ClientsPostServiceResponse extends BaseServiceResponse {
    public $id;
    public $asigned_name;
    public $phone;
    public $name;
    public $avatar;
    public $region_id;
    public $country_id;
    public $first_client_message;
    public $last_client_message;
    
    public function __construct(stdClass $response) {
        parent::__construct($response);
        if($this->isValid()){
            parent::__construct($response->data);
        }
    }
}
