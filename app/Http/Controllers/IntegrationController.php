<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IntegrationController extends Controller
{
  public function admin(Request $request) {
    $data['name'] = $request->get('name');
    $data['instance_push_id'] = $request->get('instance_push_id');
    $data['zendesk_access_token'] = $request->get('zendesk_access_token');
    $data['metadata'] = $metadata = $request->get('metadata');
    if ($metadata) {
      $metadata = json_decode($metadata);
      $data['type'] = "update";
    } else {
      $data['type'] = "new";
    }
    $data['state'] = $request->get('state');
    $data['return_url'] = $request->get('return_url');
    $data['subdomain'] = $request->get('subdomain');
    $data['locale'] = $request->get('subdomain');
    $data['error'] = "";
    $data['metadata'] = [];

    return view('integration.admin', $data);
  }

  public function pull() {
    return true;
  }

  public function clickthrough() {
    return 'clickthrough';
  }

  public function channelback() {
    return true;
  }
}
