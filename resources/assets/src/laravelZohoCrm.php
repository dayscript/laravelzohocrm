<?php

namespace dayscript\laravelZohoCrm;


// require '/home/ariel/projects/incentives/packages/dayscript/laravelZohoCrm/vendor/autoload.php';
require __DIR__.'/../vendor/autoload.php';


use \Illuminate\Database\Eloquent\Model as Eloquent;
use GuzzleHttp\Client;
use ZCRMRestClient;
use ZCRMModule;
use ZohoOAuth;
use ZCRMRecord;
use ZCRMInventoryLineItem;
use ZCRMTax;


class laravelZohoCrm extends Eloquent
{
    // Build wonderful things
    public function __construct(){
      $this->configParams = $this->getConfigParams();

      $_SERVER['user_email_id'] = $this->configParams['client_email'];

      ZCRMRestClient::initialize();
      $oAuthClient = ZohoOAuth::getClientInstance();

      try {
          $oAuthTokens = $oAuthClient->generateAccessToken($this->configParams['grant_token']);
      } catch (\Exception $e) {
        $this->refreshToken = $oAuthClient->getAccessToken($_SERVER['user_email_id']);
      }
    }

    /**
    * Get config params for this package
    *
    */
    private function getConfigParams(){
      return config('laravelzohocrm');
    }

    /**
    * Set http request for development
    *
    */
    public function getLeadsHTTP(){

      $client = new Client(['base_uri' => 'https://www.zohoapis.com/crm/v2/']);
      $headers = array(
          'headers' => [
              'Authorization' => 'Zoho-oauthtoken '.$this->refreshToken
            ]
          );
      $res = $client->request('GET', 'Contacts', $headers);
      return $res->getBody();
    }

    /**
    * Get the Organization data
    *
    */
    public function getOrg(){

      $zcrmModuleIns = ZCRMRestClient::getInstance();
      $records = $zcrmModuleIns->getOrganizationDetails();
      $this->response = $records->getResponseJSON();
    }

    /**
    * Get all data of module records 'Leads,Contacts,Invoices'
    *
    */
    public function getModuleRecords($module){

      $zcrmModuleIns = ZCRMModule::getInstance($module);
      $records = $zcrmModuleIns->getRecords()->getResponseJSON();
      return $this->response = $records;
    }

    /**
    * Insert new record or news records for instance 'Leads,Contacts,Invoices'
    *
    */
    public function addModuleRecord($module,$recordsArray){

      $entityResponses = [];
      $date = str_replace(' ','T',date('Y-m-d H:m:s').'-5:00');
      $zcrmModuleIns = ZCRMModule::getInstance($module);

      foreach ($recordsArray as $record_number => $item) {
        $record[$record_number] = ZCRMRecord::getInstance($module,null);

        foreach ($item as $key => $value) {
          $record[$record_number]->setFieldValue($key,$value);
        }

        $record[$record_number]->setCreatedBy(3572287000000181021);
        $record[$record_number]->setCreatedTime($date);
        $record[$record_number]->setModifiedTime($date);

      }
      $bulkAPIResponse = $zcrmModuleIns->createRecords($record);
      $entityResponses = $bulkAPIResponse->getEntityResponses();

      $this->response = $entityResponses[0]->getResponseJSON();

    }

    /**
    * Get specific record of the module
    *
    */
    public function getModuleRecord($module, $entity_id){

      $moduleInstance = ZCRMModule::getInstance($module);
      $records = $moduleInstance->getRecord($entity_id);
      $this->response = $records->getResponseJSON();
    }

    /**
    * Update specific record of the module
    *
    */
    public function updateModuleRecord($module, $entity_id, $recordsArray){

      $entityResponses = [];
      $date = str_replace(' ','T',date('Y-m-d H:m:s').'-5:00');
      $zcrmModuleIns = ZCRMModule::getInstance($module);

      foreach ($recordsArray as $record_number => $item) {
        $record[$record_number] = ZCRMRecord::getInstance($module,$entity_id);

        foreach ($item as $key => $value) {
          $record[$record_number]->setFieldValue($key,$value);
        }

        $record[$record_number]->setModifiedBy(3572287000000181021);
        $record[$record_number]->setModifiedTime($date);

      }
      $bulkAPIResponse = $zcrmModuleIns->updateRecords($record);
      $entityResponses = $bulkAPIResponse->getEntityResponses();

      $this->response = $entityResponses[0]->getResponseJSON();
    }

    /**
    * Deelete specific record of the module
    *
    */
    public function deleteModuleRecord($module, $entity_id){
      $zcrmModuleIns = ZCRMModule::getInstance($module);
      $records = $zcrmModuleIns->deleteRecords($entity_id);
      $this->response = $records->getResponseJSON();
    }
}
