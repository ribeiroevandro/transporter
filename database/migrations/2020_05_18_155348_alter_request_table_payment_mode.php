<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterRequestTablePaymentMode extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       
        Schema::table('userrequests', function (Blueprint $table) {
            \DB::statement("ALTER TABLE user_requests CHANGE payment_mode payment_mode ENUM('BRAINTREE',
                    'CASH',
                    'CARD',
                    'PAYPAL',
                    'PAYPAL-ADAPTIVE',
                    'PAYUMONEY',
                    'PAYTM',
                    'PAGARME')");
            \DB::statement("ALTER TABLE users CHANGE payment_mode payment_mode ENUM('BRAINTREE',
                    'CASH',
                    'CARD',
                    'PAYPAL',
                    'PAYPAL-ADAPTIVE',
                    'PAYUMONEY',
                    'PAYTM',
                    'PAGARME')");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('userrequests', function (Blueprint $table) {
            //
        });
    }
}
