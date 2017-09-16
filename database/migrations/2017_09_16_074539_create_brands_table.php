<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Brand;

class CreateBrandsTable extends Migration
{
    private $brands = ["AC","Acura","Aixam","Alfa Romeo","Aston martin","Audi","Austin","BMW","Bentley","Berliner","Borgward","Brilliance","Bugatti","Buick","Cadillac","Chevrolet","Chrysler","Citroen","Corvette","Dacia","Daewoo","Daihatsu","Daimler","Datsun","Dkw","Dodge","Dr","Eagle","FSO","Ferrari","Fiat","Ford","Geo","Great Wall","Heinkel","Honda","Hyundai","Ifa","Infiniti","Innocenti","Isuzu","Jaguar","Kia","Lada","Lamborghini","Lancia","Lexus","Lifan","Lincoln","Lotus","Maserati","Matra","Maybach","Mazda","McLaren","Mercedes-Benz","Mercury","Mg","Mini","Mitsubishi","Morgan","Moskvich","Nissan","Oldsmobile","Opel","Perodua","Peugeot","Pgo","Plymouth","Polonez","Pontiac","Porsche","Proton","Renault","Rolls-Royce","Rover","SECMA","Saab","Samand","Saturn","Scion","Seat","Shatenet","Shuanghuan","Simca","Skoda","Smart","Ssang yong","Subaru","Suzuki","Talbot","Tata","Tavria","Tazzari","Terberg","Tesla","Tofas","Toyota","Trabant","Triumph","VROMOS","VW","Volga","Volvo","Warszawa","Wartburg","Wiesmann","Xinshun","Zastava","Zaz","Други","Победа","София","Чайка"];
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brands', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name');
        });

        
        for($i=0;$i<count($this->brands);$i++){
            $brand = new Brand();
            $brand->name = $this->brands[$i];
            $brand->save();
        }
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('brands');
    }
}
