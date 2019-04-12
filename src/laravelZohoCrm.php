<?php

namespace dayscript\laravelZohoCrm;

require __DIR__.'/../vendor/autoload.php';


use \Illuminate\Database\Eloquent\Model as Eloquent;
use GuzzleHttp\Client;
use Exception;

use ZCRMRestClient;
use ZCRMModule;
use ZohoOAuth;
use ZCRMRecord;
use ZCRMInventoryLineItem;
use ZCRMTax;




class laravelZohoCrm extends Eloquent
{


    public $org;
    public $user;
    public $modules;
    public $module;

    // Build wonderful things
    public function __construct(){
      $this->configParams = config('laravelzohocrm');

      $_SERVER['user_email_id'] = $this->configParams['client_email'];


      ZCRMRestClient::initialize($this->configParams);
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
      return true;
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

    public function setModule($module){
      $this->module = $module;
    }

    /**
    * Get the Organization data
    *
    */
    public function getOrg(){

      $zcrmModuleIns = ZCRMRestClient::getInstance();
      $this->org = $zcrmModuleIns->getOrganizationDetails();
      $this->response = $this->org->getResponseJSON();
    }

    public function getModule(){
      $zcrmModuleIns = ZCRMRestClient::getInstance();

      if(!$this->module){
        throw new Exception('The module property can\'t null, use method setModule() for set this property');
      }
      
      $this->response = $zcrmModuleIns->getModule($this->module)->getResponseJSON()['modules'][0];
      
    }

    /**
     * Get all Zoho Modules
     */

    public function getModules(){
      $modules = [];
      $zcrmModuleIns = ZCRMRestClient::getInstance();
      $request = $zcrmModuleIns->getAllModules()->getData();
      foreach ($request as $key => $module) {
        $modules[$module->getModuleName()] = array(
          'getModuleName' => $module->getModuleName(),  //to get the name of the module
          'getSingularLabel' => $module->getSingularLabel(),  //to get the singular label of the module
          'getPluralLabel' => $module->getPluralLabel(),  //to get the plural label of the module
          'getBusinessCardFieldLimit' => $module->getBusinessCardFieldLimit(),  //to get the business card field limit of the module
          'getAPIName' => $module->getAPIName(),  //to get the api name of the module
          'isCreatable' => $module->isCreatable(),  //to check wther the module is creatable
          'isConvertable' => $module->isConvertable(),  //to check wther the module is Convertable
          'isEditable' => $module->isEditable(),  //to check wther the module is editable
          'isDeletable' => $module->isDeletable(),  //to check wther the module is deletable
          'getWebLink' => $module->getWebLink(),  //to get the weblink
        );
      }
      $this->response = $this->modules = $modules;
    }

    /**
    * Get all data of module records 'Leads,Contacts,Invoices'
    *
    */
    public function getModuleRecords($module){
      $this->module = $module;
      $zcrmModuleIns = ZCRMModule::getInstance($this->module);
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
