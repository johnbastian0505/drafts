          <?php
            $url = 'https://api.sandbox.deliveree.com/public_api/v1/deliveries/';
            $data = array(
                        'vehicle_type_id' => 35,
                        'note' => 'Fragile item that needs good care.',
                        'time_type' => 'now',
                         'job_order_number'=> 60001,
                         'locations' => array(
                                [
                                  'address' => 'Montefaro West Imus Cavite',
                                  'latitude' => 14.406422,
                                  'longitude' => 120.940506,
                                  'recipient_name' => 'banjo',
                                   "recipient_phone"=> '+84903398399',
                                  'note' => 'Second floor, room 609',
                               ],
                               [
                                'address' => '1909 Pearl Dr, Ortigas Center, Pasig, Metro Manila, Philippines',
                                'latitude' => 14.580580,
                                'longitude' => 121.060300,
                                'recipient_name' => 'Nam',
                                'recipient_phone'=> '09979258165',
                                'note' => 'Hey',
                                'need_pod' => true,
                                'pod_note' => 'HEy'

                               ]
                          )
                     );
            $options = array(
                'http' => array(
                'method' => 'POST',
                'header' => "Authorization:1Y8vP_cZ7a7THvYf79Yp\r\n".
                    "Content-Type: application/json\r\n" ,
                    "Accept-Language:en",
                    'content' => json_encode($data)
                )
            );
        $context  = stream_context_create($options);
        $response = file_get_contents($url, false, $context);
        if ($response === FALSE) { echo "Please Double check the fields"; }else{
          $json_array=json_decode($response,true); 
          $tracking_id = $json_array['id'];
          $tracking_url = $json_array['tracking_url'];
          $job_order = $json_array['job_order_number'];
        }
?>