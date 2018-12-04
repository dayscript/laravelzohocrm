<?php

return [
  'client_id'     =>  env('ZOHOCRM_CLIENT_ID',''),
  'client_secret' =>  env('ZOHOCRM_CLIENT_SECRET',''),
  'grant_token' => env('ZOHOCRM_GRANT_TOKEN',''),
  'redirect_uri'  =>   env('ZOHOCRM_REDIRECT_URI',''),
  'accounts_url'  =>   env('ZOHOCRM_ACCOUNTS_URL',''),
  'access_type'   =>  env('ZOHOCRM_ACCESS_TYPE',''),
  'db_port'       =>  env('DB_PORT',3306),
  'token_persistence_path' => env('ZOHOCRM_TOKEN_PERSISTENCE_PATH',''),
  'persistence_handler_class' =>  env('ZOHOCRM_PERSISTENCE_HANDLER_CLASS',''),
  'client_email' => env('ZOHOCRM_CLIENT_EMAIL',''),
];
