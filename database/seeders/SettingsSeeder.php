<?php

namespace Database\Seeders;

use App\Models\Settings;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Settings::truncate();

        Settings::create([
            'site_title' => 'THE TAX ESSENTIALS',
            'company_name' => 'THE TAX ESSENTIALS',
            'email' => 'admin@gmail.com',
            'phone_no_1' => '(347) 460-5587',
            'address' => 'Yonkers, New York 10704',
            'facebook' => '',
            'tweeter' => '',
            'linkedIn' => '',
            'instagram' => '',
            'logo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d1/Image_not_available.png/640px-Image_not_available.png',
//            'paypal_env' => 'Testing',
//            'paypal_client_id' => 'AeZqLN-vpDaqlpt1LeIOmNT1A_I2q6-P60OIxyGlUXt32IPCXex8_g_t2J2lVUnCw4fSYt5_Wv0j0feM',
//            'paypal_secret_key' => '12345',
//            'stripe_env' => 'Testing',
//            'stripe_publishable_key' => 'pk_test_OVY7CUt4uenjip8xQZP5rEDd',
//            'stripe_secret_key' => 'sk_test_RVrEv2tojzqzF3w1oP8g3QQ2',
//            'authorize_env' => 'Testing',
//            'authorize_merchant_login_id' => '5VzH8wLyR43y',
//            'authorize_merchant_transaction_key' => '2DReHL7j49w3N9f5'
        ]);
    }
}
