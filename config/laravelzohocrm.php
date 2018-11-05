<?php

return [
  'client_id'     =>  env('ZOHOCRM_CLIENT_ID','1000.HF2BZPUYB5S1431467D75JZOXJGD2V'),
  'client_secret' =>  env('ZOHOCRM_CLIENT_SECRET','036449915915fa25cc946c685cb83c25a6e1a54ecc'),
  'grant_token' => env('ZOHOCRM_GRANT_TOKEN','1000.d4817c51a2ac9f27f5ba4ac23ccba617.27e467d41951ed3599da198a16140bf5'),
  'redirect_uri'  =>   env('ZOHOCRM_REDIRECT_URI','http://incentives.kokoriko.local/oauth2/callback'),
  'accounts_url'  =>   env('ZOHOCRM_ACCOUNTS_URL','https://accounts.zoho.com'),
  'access_type'   =>  env('ZOHOCRM_ACCESS_TYPE','offline'),
  'db_port'       =>  env('DB_PORT',3306),
  'db_username'   =>  env('DB_USERNAME',''),
  'db_password'   =>  env('DB_PASSWORD',''),
  'token_persistence_path' => env('ZOHOCRM_TOKEN_PERSISTENCE_PATH','/home/forge/incentives.demodayscript.com/storage/app/zoho'),
  'persistence_handler_class' =>  env('ZOHOCRM_PERSISTENCE_HANDLER_CLASS','ZohoOAuthPersistenceHandler'),
  'client_email' => env('ZOHOCRM_CLIENT_EMAIL','ariel.acevedo@afar.systems'),
];