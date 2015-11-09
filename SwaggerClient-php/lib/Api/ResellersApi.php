<?php
/**
 * ResellersApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2015 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use \Swagger\Client\Configuration;
use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\ObjectSerializer;

/**
 * ResellersApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ResellersApi
{

    /**
     * API Client
     * @var \Swagger\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     * @param \Swagger\Client\ApiClient|null $apiClient The api client to use
     */
    function __construct($apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://api.liqu.id/v1');
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     * @return \Swagger\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     * @param \Swagger\Client\ApiClient $apiClient set the API client
     * @return ResellersApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }


    /**
     * listResellers_
     *
     * list all resellers
     *
     * @param int $limit Limit number of records to be fetched. This should be a value between 10 to 100. (optional)
     * @param int $page_no Page number for which details are to be fetched (optional)
     * @param int $reseller_id Reseller Id of Sub-Reseller(s) (optional)
     * @param string $email Email address of of Sub-Reseller(s) (optional)
     * @param string $name Name of Sub-Reseller (optional)
     * @param string $company Company Name of Sub-Reseller (optional)
     * @param string $city City (optional)
     * @param string $state State (optional)
     * @param string $country_code Country Code (optional)
     * @param string $status Status of Sub-Reseller. Values can be Active, Suspended and Pending Activation. (optional)
     * @param string $creation_date_start UNIX TimeStamp for listing of Sub-Resellers whose Creation Date is greater than creation-date-start (optional)
     * @param string $creation_date_end UNIX TimeStamp for listing of Sub-Resellers whose Creation Date is less than creation-date-end (optional)
     * @param string $total_receipts_start Total receipts of Sub-Resellers which is greater than total-receipt-start (optional)
     * @param string $total_receipts_end Total receipts of Sub-Resellers which is less than total-receipt-end (optional)
     * @return void
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function listResellers_($limit=null, $page_no=null, $reseller_id=null, $email=null, $name=null, $company=null, $city=null, $state=null, $country_code=null, $status=null, $creation_date_start=null, $creation_date_end=null, $total_receipts_start=null, $total_receipts_end=null)
    {


        // parse inputs
        $resourcePath = "/resellers";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "GET";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array());
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());

        // query params
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }// query params
        if ($page_no !== null) {
            $queryParams['page_no'] = $this->apiClient->getSerializer()->toQueryValue($page_no);
        }// query params
        if ($reseller_id !== null) {
            $queryParams['reseller_id'] = $this->apiClient->getSerializer()->toQueryValue($reseller_id);
        }// query params
        if ($email !== null) {
            $queryParams['email'] = $this->apiClient->getSerializer()->toQueryValue($email);
        }// query params
        if ($name !== null) {
            $queryParams['name'] = $this->apiClient->getSerializer()->toQueryValue($name);
        }// query params
        if ($company !== null) {
            $queryParams['company'] = $this->apiClient->getSerializer()->toQueryValue($company);
        }// query params
        if ($city !== null) {
            $queryParams['city'] = $this->apiClient->getSerializer()->toQueryValue($city);
        }// query params
        if ($state !== null) {
            $queryParams['state'] = $this->apiClient->getSerializer()->toQueryValue($state);
        }// query params
        if ($country_code !== null) {
            $queryParams['country_code'] = $this->apiClient->getSerializer()->toQueryValue($country_code);
        }// query params
        if ($status !== null) {
            $queryParams['status'] = $this->apiClient->getSerializer()->toQueryValue($status);
        }// query params
        if ($creation_date_start !== null) {
            $queryParams['creation_date_start'] = $this->apiClient->getSerializer()->toQueryValue($creation_date_start);
        }// query params
        if ($creation_date_end !== null) {
            $queryParams['creation_date_end'] = $this->apiClient->getSerializer()->toQueryValue($creation_date_end);
        }// query params
        if ($total_receipts_start !== null) {
            $queryParams['total_receipts_start'] = $this->apiClient->getSerializer()->toQueryValue($total_receipts_start);
        }// query params
        if ($total_receipts_end !== null) {
            $queryParams['total_receipts_end'] = $this->apiClient->getSerializer()->toQueryValue($total_receipts_end);
        }





        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } else if (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }

        // make the API Call
        try
        {
            list($response, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams
            );

            return array($response, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }

    }

    /**
     * createReseller
     *
     * create a new reseller
     *
     * @param string $email Email address for the Reseller account. (required)
     * @param string $name Name of the Reseller (required)
     * @param string $password Password for the Reseller account. (required)
     * @param string $company Company Name of the Reseller (required)
     * @param string $address_line_1 Address line 1 of the Reseller&#39;s address (required)
     * @param string $city City , example Semarang (required)
     * @param string $state State/Region/Province , example Jawa Tengah (required)
     * @param string $country_code Country Code as per ISO 3166-1 alpha-2.&lt;/br&gt; Example ID for Indonesia (required)
     * @param string $zipcode Zip code (required)
     * @param string $tel_cc_no Telephone number Country Code (required)
     * @param string $tel_no Telephone number (required)
     * @param string $selling_currency Selling Currency Symbol of Reseller. Example : USD, IDR (required)
     * @param string $address_line_2 Address line 2 of the Reseller&#39;s address (optional)
     * @param string $address_line_3 Address line 3 of the Reseller&#39;s address (optional)
     * @param string $alt_tel_cc_no Alternate Telephone nummber Country Code (optional)
     * @param string $alt_tel_no Alternate Telephone number (optional)
     * @param string $mobile_cc_no Mobile number Country Code (optional)
     * @param string $mobile_no Mobile number (optional)
     * @param string $fax_cc_no Fax number Country Code (optional)
     * @param string $fax_no Fax number (optional)
     * @return void
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function createReseller($email, $name, $password, $company, $address_line_1, $city, $state, $country_code, $zipcode, $tel_cc_no, $tel_no, $selling_currency, $address_line_2=null, $address_line_3=null, $alt_tel_cc_no=null, $alt_tel_no=null, $mobile_cc_no=null, $mobile_no=null, $fax_cc_no=null, $fax_no=null)
    {

        // verify the required parameter 'email' is set
        if ($email === null) {
            throw new \InvalidArgumentException('Missing the required parameter $email when calling createReseller');
        }
        // verify the required parameter 'name' is set
        if ($name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling createReseller');
        }
        // verify the required parameter 'password' is set
        if ($password === null) {
            throw new \InvalidArgumentException('Missing the required parameter $password when calling createReseller');
        }
        // verify the required parameter 'company' is set
        if ($company === null) {
            throw new \InvalidArgumentException('Missing the required parameter $company when calling createReseller');
        }
        // verify the required parameter 'address_line_1' is set
        if ($address_line_1 === null) {
            throw new \InvalidArgumentException('Missing the required parameter $address_line_1 when calling createReseller');
        }
        // verify the required parameter 'city' is set
        if ($city === null) {
            throw new \InvalidArgumentException('Missing the required parameter $city when calling createReseller');
        }
        // verify the required parameter 'state' is set
        if ($state === null) {
            throw new \InvalidArgumentException('Missing the required parameter $state when calling createReseller');
        }
        // verify the required parameter 'country_code' is set
        if ($country_code === null) {
            throw new \InvalidArgumentException('Missing the required parameter $country_code when calling createReseller');
        }
        // verify the required parameter 'zipcode' is set
        if ($zipcode === null) {
            throw new \InvalidArgumentException('Missing the required parameter $zipcode when calling createReseller');
        }
        // verify the required parameter 'tel_cc_no' is set
        if ($tel_cc_no === null) {
            throw new \InvalidArgumentException('Missing the required parameter $tel_cc_no when calling createReseller');
        }
        // verify the required parameter 'tel_no' is set
        if ($tel_no === null) {
            throw new \InvalidArgumentException('Missing the required parameter $tel_no when calling createReseller');
        }
        // verify the required parameter 'selling_currency' is set
        if ($selling_currency === null) {
            throw new \InvalidArgumentException('Missing the required parameter $selling_currency when calling createReseller');
        }

        // parse inputs
        $resourcePath = "/resellers";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "POST";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array());
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());




        // form params
        if ($email !== null) {
            $formParams['email'] = $this->apiClient->getSerializer()->toFormValue($email);
        }// form params
        if ($name !== null) {
            $formParams['name'] = $this->apiClient->getSerializer()->toFormValue($name);
        }// form params
        if ($password !== null) {
            $formParams['password'] = $this->apiClient->getSerializer()->toFormValue($password);
        }// form params
        if ($company !== null) {
            $formParams['company'] = $this->apiClient->getSerializer()->toFormValue($company);
        }// form params
        if ($address_line_1 !== null) {
            $formParams['address_line_1'] = $this->apiClient->getSerializer()->toFormValue($address_line_1);
        }// form params
        if ($address_line_2 !== null) {
            $formParams['address_line_2'] = $this->apiClient->getSerializer()->toFormValue($address_line_2);
        }// form params
        if ($address_line_3 !== null) {
            $formParams['address_line_3'] = $this->apiClient->getSerializer()->toFormValue($address_line_3);
        }// form params
        if ($city !== null) {
            $formParams['city'] = $this->apiClient->getSerializer()->toFormValue($city);
        }// form params
        if ($state !== null) {
            $formParams['state'] = $this->apiClient->getSerializer()->toFormValue($state);
        }// form params
        if ($country_code !== null) {
            $formParams['country_code'] = $this->apiClient->getSerializer()->toFormValue($country_code);
        }// form params
        if ($zipcode !== null) {
            $formParams['zipcode'] = $this->apiClient->getSerializer()->toFormValue($zipcode);
        }// form params
        if ($tel_cc_no !== null) {
            $formParams['tel_cc_no'] = $this->apiClient->getSerializer()->toFormValue($tel_cc_no);
        }// form params
        if ($tel_no !== null) {
            $formParams['tel_no'] = $this->apiClient->getSerializer()->toFormValue($tel_no);
        }// form params
        if ($alt_tel_cc_no !== null) {
            $formParams['alt_tel_cc_no'] = $this->apiClient->getSerializer()->toFormValue($alt_tel_cc_no);
        }// form params
        if ($alt_tel_no !== null) {
            $formParams['alt_tel_no'] = $this->apiClient->getSerializer()->toFormValue($alt_tel_no);
        }// form params
        if ($mobile_cc_no !== null) {
            $formParams['mobile_cc_no'] = $this->apiClient->getSerializer()->toFormValue($mobile_cc_no);
        }// form params
        if ($mobile_no !== null) {
            $formParams['mobile_no'] = $this->apiClient->getSerializer()->toFormValue($mobile_no);
        }// form params
        if ($fax_cc_no !== null) {
            $formParams['fax_cc_no'] = $this->apiClient->getSerializer()->toFormValue($fax_cc_no);
        }// form params
        if ($fax_no !== null) {
            $formParams['fax_no'] = $this->apiClient->getSerializer()->toFormValue($fax_no);
        }// form params
        if ($selling_currency !== null) {
            $formParams['selling_currency'] = $this->apiClient->getSerializer()->toFormValue($selling_currency);
        }


        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } else if (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }

        // make the API Call
        try
        {
            list($response, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams
            );

            return array($response, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }

    }

    /**
     * listPricesSettings
     *
     * list all prices settings for resellers
     *
     * @return void
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function listPricesSettings()
    {


        // parse inputs
        $resourcePath = "/resellers/prices";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "GET";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array());
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());







        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } else if (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }

        // make the API Call
        try
        {
            list($response, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams
            );

            return array($response, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }

    }

    /**
     * generatesATemporaryPassword
     *
     * Generates a temporary password for a Sub-Reseller.
     *
     * @param int $reseller_id Reseller Id of the Sub-Reseller for whom a temporary password to be generated. (required)
     * @return void
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function generatesATemporaryPassword($reseller_id)
    {

        // verify the required parameter 'reseller_id' is set
        if ($reseller_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $reseller_id when calling generatesATemporaryPassword');
        }

        // parse inputs
        $resourcePath = "/resellers/temp_password";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "GET";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array());
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());

        // query params
        if ($reseller_id !== null) {
            $queryParams['reseller_id'] = $this->apiClient->getSerializer()->toQueryValue($reseller_id);
        }





        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } else if (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }

        // make the API Call
        try
        {
            list($response, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams
            );

            return array($response, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }

    }

    /**
     * retrieve_
     *
     * retrieve a reseller
     *
     * @param int $reseller_id Reseller Id of the Sub-Reseller whose details need to be fetched. In case the Reseller Id is not provided, details of the Reseller making the API call will be returned. (required)
     * @return void
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function retrieve_($reseller_id)
    {

        // verify the required parameter 'reseller_id' is set
        if ($reseller_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $reseller_id when calling retrieve_');
        }

        // parse inputs
        $resourcePath = "/resellers/{reseller_id}";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "GET";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array());
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());



        // path params
        if ($reseller_id !== null) {
            $resourcePath = str_replace(
                "{" . "reseller_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($reseller_id),
                $resourcePath
            );
        }



        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } else if (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }

        // make the API Call
        try
        {
            list($response, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams
            );

            return array($response, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }

    }

    /**
     * updateReseller
     *
     * update a reseller
     *
     * @param int $reseller_id Reseller Id of the Reseller for whom the details need to be modified (required)
     * @param string $email Email address of the Reseller (required)
     * @param string $name Name of the Reseller (required)
     * @param string $company Company of the Reseller (required)
     * @param string $address_line_1 Address line 1 of the Reseller&#39;s address (required)
     * @param string $city City , example Semarang (required)
     * @param string $state State/Region/Province , example Jawa Tengah (required)
     * @param string $country_code Country Code (ISO) , example ID for Indonesia (required)
     * @param string $zipcode Zip code (required)
     * @param int $tel_cc_no Telephone number Country Code (required)
     * @param int $tel_no Telephone number (required)
     * @param int $selling_currency Selling Currency Symbol.&lt;/br&gt; Example USD, IDR (required)
     * @param string $address_line_2 Address line 2 of the Reseller&#39;s address (optional)
     * @param string $address_line_3 Address line 3 of the Reseller&#39;s address (optional)
     * @param int $alt_tel_cc_no Alternate Telephone number Country Code (optional)
     * @param int $alt_tel_no Alternate Telephone number (optional)
     * @param int $mobile_cc_no Mobile number Country Code (optional)
     * @param int $mobile_no Mobile number (optional)
     * @param int $fax_cc_no Fax number Country Code (optional)
     * @param int $fax_no Fax number (optional)
     * @return void
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function updateReseller($reseller_id, $email, $name, $company, $address_line_1, $city, $state, $country_code, $zipcode, $tel_cc_no, $tel_no, $selling_currency, $address_line_2=null, $address_line_3=null, $alt_tel_cc_no=null, $alt_tel_no=null, $mobile_cc_no=null, $mobile_no=null, $fax_cc_no=null, $fax_no=null)
    {

        // verify the required parameter 'reseller_id' is set
        if ($reseller_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $reseller_id when calling updateReseller');
        }
        // verify the required parameter 'email' is set
        if ($email === null) {
            throw new \InvalidArgumentException('Missing the required parameter $email when calling updateReseller');
        }
        // verify the required parameter 'name' is set
        if ($name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling updateReseller');
        }
        // verify the required parameter 'company' is set
        if ($company === null) {
            throw new \InvalidArgumentException('Missing the required parameter $company when calling updateReseller');
        }
        // verify the required parameter 'address_line_1' is set
        if ($address_line_1 === null) {
            throw new \InvalidArgumentException('Missing the required parameter $address_line_1 when calling updateReseller');
        }
        // verify the required parameter 'city' is set
        if ($city === null) {
            throw new \InvalidArgumentException('Missing the required parameter $city when calling updateReseller');
        }
        // verify the required parameter 'state' is set
        if ($state === null) {
            throw new \InvalidArgumentException('Missing the required parameter $state when calling updateReseller');
        }
        // verify the required parameter 'country_code' is set
        if ($country_code === null) {
            throw new \InvalidArgumentException('Missing the required parameter $country_code when calling updateReseller');
        }
        // verify the required parameter 'zipcode' is set
        if ($zipcode === null) {
            throw new \InvalidArgumentException('Missing the required parameter $zipcode when calling updateReseller');
        }
        // verify the required parameter 'tel_cc_no' is set
        if ($tel_cc_no === null) {
            throw new \InvalidArgumentException('Missing the required parameter $tel_cc_no when calling updateReseller');
        }
        // verify the required parameter 'tel_no' is set
        if ($tel_no === null) {
            throw new \InvalidArgumentException('Missing the required parameter $tel_no when calling updateReseller');
        }
        // verify the required parameter 'selling_currency' is set
        if ($selling_currency === null) {
            throw new \InvalidArgumentException('Missing the required parameter $selling_currency when calling updateReseller');
        }

        // parse inputs
        $resourcePath = "/resellers/{reseller_id}";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "PUT";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array());
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());



        // path params
        if ($reseller_id !== null) {
            $resourcePath = str_replace(
                "{" . "reseller_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($reseller_id),
                $resourcePath
            );
        }
        // form params
        if ($email !== null) {
            $formParams['email'] = $this->apiClient->getSerializer()->toFormValue($email);
        }// form params
        if ($name !== null) {
            $formParams['name'] = $this->apiClient->getSerializer()->toFormValue($name);
        }// form params
        if ($company !== null) {
            $formParams['company'] = $this->apiClient->getSerializer()->toFormValue($company);
        }// form params
        if ($address_line_1 !== null) {
            $formParams['address_line_1'] = $this->apiClient->getSerializer()->toFormValue($address_line_1);
        }// form params
        if ($address_line_2 !== null) {
            $formParams['address_line_2'] = $this->apiClient->getSerializer()->toFormValue($address_line_2);
        }// form params
        if ($address_line_3 !== null) {
            $formParams['address_line_3'] = $this->apiClient->getSerializer()->toFormValue($address_line_3);
        }// form params
        if ($city !== null) {
            $formParams['city'] = $this->apiClient->getSerializer()->toFormValue($city);
        }// form params
        if ($state !== null) {
            $formParams['state'] = $this->apiClient->getSerializer()->toFormValue($state);
        }// form params
        if ($country_code !== null) {
            $formParams['country_code'] = $this->apiClient->getSerializer()->toFormValue($country_code);
        }// form params
        if ($zipcode !== null) {
            $formParams['zipcode'] = $this->apiClient->getSerializer()->toFormValue($zipcode);
        }// form params
        if ($tel_cc_no !== null) {
            $formParams['tel_cc_no'] = $this->apiClient->getSerializer()->toFormValue($tel_cc_no);
        }// form params
        if ($tel_no !== null) {
            $formParams['tel_no'] = $this->apiClient->getSerializer()->toFormValue($tel_no);
        }// form params
        if ($alt_tel_cc_no !== null) {
            $formParams['alt_tel_cc_no'] = $this->apiClient->getSerializer()->toFormValue($alt_tel_cc_no);
        }// form params
        if ($alt_tel_no !== null) {
            $formParams['alt_tel_no'] = $this->apiClient->getSerializer()->toFormValue($alt_tel_no);
        }// form params
        if ($mobile_cc_no !== null) {
            $formParams['mobile_cc_no'] = $this->apiClient->getSerializer()->toFormValue($mobile_cc_no);
        }// form params
        if ($mobile_no !== null) {
            $formParams['mobile_no'] = $this->apiClient->getSerializer()->toFormValue($mobile_no);
        }// form params
        if ($fax_cc_no !== null) {
            $formParams['fax_cc_no'] = $this->apiClient->getSerializer()->toFormValue($fax_cc_no);
        }// form params
        if ($fax_no !== null) {
            $formParams['fax_no'] = $this->apiClient->getSerializer()->toFormValue($fax_no);
        }// form params
        if ($selling_currency !== null) {
            $formParams['selling_currency'] = $this->apiClient->getSerializer()->toFormValue($selling_currency);
        }


        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } else if (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }

        // make the API Call
        try
        {
            list($response, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams
            );

            return array($response, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }

    }

    /**
     * delete_
     *
     * delete a reseller
     *
     * @param int $reseller_id Reseller id of the Reseller that you want to delete (required)
     * @return void
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function delete_($reseller_id)
    {

        // verify the required parameter 'reseller_id' is set
        if ($reseller_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $reseller_id when calling delete_');
        }

        // parse inputs
        $resourcePath = "/resellers/{reseller_id}";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "DELETE";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array());
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());



        // path params
        if ($reseller_id !== null) {
            $resourcePath = str_replace(
                "{" . "reseller_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($reseller_id),
                $resourcePath
            );
        }



        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } else if (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }

        // make the API Call
        try
        {
            list($response, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams
            );

            return array($response, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }

    }

    /**
     * updateTotalReceipts
     *
     * update total receipts
     *
     * @param int $reseller_id Reseller Id of the Reseller for whom the details need to be modified (required)
     * @param string $totalreceipts New total receipts (required)
     * @return void
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function updateTotalReceipts($reseller_id, $totalreceipts)
    {

        // verify the required parameter 'reseller_id' is set
        if ($reseller_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $reseller_id when calling updateTotalReceipts');
        }
        // verify the required parameter 'totalreceipts' is set
        if ($totalreceipts === null) {
            throw new \InvalidArgumentException('Missing the required parameter $totalreceipts when calling updateTotalReceipts');
        }

        // parse inputs
        $resourcePath = "/resellers/{reseller_id}/totalreceipts";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "PUT";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array());
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());



        // path params
        if ($reseller_id !== null) {
            $resourcePath = str_replace(
                "{" . "reseller_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($reseller_id),
                $resourcePath
            );
        }
        // form params
        if ($totalreceipts !== null) {
            $formParams['totalreceipts'] = $this->apiClient->getSerializer()->toFormValue($totalreceipts);
        }


        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } else if (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }

        // make the API Call
        try
        {
            list($response, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams
            );

            return array($response, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }

    }

}
