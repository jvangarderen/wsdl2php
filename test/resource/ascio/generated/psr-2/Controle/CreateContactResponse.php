<?php

namespace Controle;
class CreateContactResponse {
    /**
     * @var \Controle\Response
     */
    public $CreateContactResult;
    /**
     * @var \Controle\Contact
     */
    public $contact;
    /**
     * @param Response $val
     * @throws Exception
     */
    public function setCreateContactResult($val) {
        
        $this->CreateContactResult = (int)$val;
    }

    /**
     * @param Contact $val
     * @throws Exception
     */
    public function setContact($val) {
        
        $this->contact = (int)$val;
    }

}

