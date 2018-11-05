<?php

return [
  'client_id'     =>  env('ZOHOCRM_CLIENT_ID','1000.Y22UUH79U84J962729EV49QXMHKQUM'),
  'client_secret' =>  env('ZOHOCRM_CLIENT_SECRET','6ba8c10eb2996004d47e3f5bb9d8f9c413cd500cdf'),
  'grant_token' => env('ZOHOCRM_GRANT_TOKEN','1000.0863067374b2355d39c339570cf25b5b.d780a46f1e109aba36f5cd36f7aeed0a'),
  'redirect_uri'  =>   env('ZOHOCRM_REDIRECT_URI','https://incentives.kokoriko.com.co/oauth2/callback'),
  'accounts_url'  =>   env('ZOHOCRM_ACCOUNTS_URL','https://accounts.zoho.com'),
  'access_type'   =>  env('ZOHOCRM_ACCESS_TYPE','offline'),
  'db_port'       =>  env('DB_PORT',3306),
  'db_username'   =>  env('DB_USERNAME',''),
  'db_password'   =>  env('DB_PASSWORD',''),
  'token_persistence_path' => env('ZOHOCRM_TOKEN_PERSISTENCE_PATH','/home/ariel/projects/incentives/storage/app/zoho'),
  'persistence_handler_class' =>  env('ZOHOCRM_PERSISTENCE_HANDLER_CLASS','ZohoOAuthPersistenceHandler'),
  'client_email' => env('ZOHOCRM_CLIENT_EMAIL','soporte@linkdigital.co'),
];
