<?php 
 namespace App\Controller\Admin; 
 use App\Controller\BaseController;
use App\Models\FoodDonation;
use System\Database\DB;
use System\Http\Request\Request;

class DonationChart extends BaseController 
 { 
     protected $months = ["Months", "Jan", "Feb", "March", "April", "May", "June", "Jully",
      "Aug", "Sept", "Oct", "Nov", "Dec"];

    public function donationsCharts()
    {
        $request = new Request();
        $donation = $request->get('q');
        $year = $request->get('y', date("Y"));
        $is_specific_user = $request->get('specific', 0);

        $donationChart = array();

        for($i= 1; $i < count($this->months); $i++)
        {
            $query_month = "$i";
            if($i < 10)
            {
                $query_month = "0$i";
            }
  
            $sql = "SELECT * FROM {$donation} WHERE `month` = ? AND donated_at LIKE ?";
            $year_search = $year . "-" . $query_month;
            $num_donation = DB::query($sql)->bindings([$query_month, "%{$year_search}%"])->count();
            if($is_specific_user == 1)
            {
                $user = $_SESSION['user'];
             
                $sql = "SELECT * FROM {$donation} WHERE `month` = ? AND `email` = ? AND donated_at LIKE ?";
                $num_donation = DB::query($sql)->bindings([$query_month, $user->email, "%{$year_search}%"])->count();  
            }
            $donationChart[] = array("month" => $this->months[$i], "donation" => $num_donation);
        }
        $chartKeys = array();

        foreach($donationChart as $chart)
        {
            array_push($chartKeys, array_keys($chart)); 
        }

        for($i = 1; $i < count($this->months); $i++)
        {
            if(key_exists($this->months[$i], $chartKeys))
            {
                array_push($donationChart, array("month" => $this->months[$i], "donation" => 0));
            }
        }
        echo json_encode($donationChart);
    }
 }