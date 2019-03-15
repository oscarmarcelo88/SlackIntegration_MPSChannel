<?php
/**
 * Created by PhpStorm.
 * User: oscar_folder
 * Date: 2019-03-04
 * Time: 15:52
 */


curl https://{subdomain}.zendesk.com/api/v2/tickets/{id}.json \
  -H "Content-Type: application/json" \
-d '{"ticket": {"status": "open", "comment": { "body": "The smoke is very colorful.", "author_id": 494820284 }}}' \
-v -u {email_address}:{password} -X PUT


$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://mps-support.jetbrains.com/api/v2/community/posts.json');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
$data = curl_exec($ch);
curl_close($ch);