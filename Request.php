<?php

/**
 * Created by PhpStorm.
 * User: apol
 * Date: 24/11/16
 * Time: 10:59
 */
class Request
{
    private $url_elements;
    private $query_string;
    private $verb;
    private $body_parameters;
    private $format;
    private $accept;

    public function __construct($verb, $url_elements, $query_string, $body, $content_type, $accept)
    {
        $this->url_elements = $url_elements;
        $this->query_string = $query_string;
        $this->verb = $verb;
        $this->parseBody($body, $content_type);

        switch ($accept) {
            case 'application/json':
            case  '*/*':
            case null:
                $this->accept = 'json';
                break;
            case 'application/xml':
            case 'text/xml':
                $this->accept = 'xml';
                break;
            default:
                $this->accept = 'unsupported';
                break;
        }
    }

    private function parseBody($body, $content_type) {
        $params = array();

        switch ($content_type) {
            case "application/json":
                $this->format = "json";
                $params = json_decode($body);
                break;
            case "application/x-www-form-urlencoded":
                $this->format = "html";
                parse_str($body, $params);
                break;
            // Parse otros formatos

        }

        $this->body_parameters = $params;
    }

    /**
     * @return mixed
     */
    public function getUrlElements()
    {
        return $this->url_elements;
    }

    /**
     * @return mixed
     */
    public function getQueryString()
    {
        return $this->query_string;
    }

    /**
     * @return mixed
     */
    public function getVerb()
    {
        return $this->verb;
    }

    /**
     * @return mixed
     */
    public function getBodyParameters()
    {
        return $this->body_parameters;
    }

    /**
     * @return mixed
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * @return string
     */
    public function getAccept()
    {
        return $this->accept;
    }


}