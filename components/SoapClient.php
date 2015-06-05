<?php
/**
 * Created by PhpStorm.
 * User: Vuilov
 * Date: 04.06.2015
 * Time: 15:50
 */

namespace app\components;
use app\components\SoapConfig;

class SoapClient {
    private $request;
    private $response;
    private $error;

    public function __construct(SoapConfig $config, $method, array $parameters = null)
    {

        try
        {
            $this->request  = new \SoapClient($config->getUrl(), array(
                'login'     => $config->getLogin(),
                'password'  => $config->getPassword()
            ));

            $this->response = $this->request->$method($parameters);

        }
        catch (\SoapFault $error)
        {
            $this->error = $error->getCode().': '.$error->getMessage();
        }
    }

    public function getResponse()
    {
        return $this->response->return;
    }

    public function getError()
    {
        return $this->error;
    }
}