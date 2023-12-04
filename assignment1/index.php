<style>
    .form{
        max-width:600px;
        margin:40px auto;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        padding:30px;

    }
    form{
        display:flex;
        
    }
    form input{
        padding:10px;
        margin:5px;
    }
    </style>

<div class="form">
    <h2>Check Electricity Bill:</h2>
    <form action="" method='get'>
        <input type="number" name="unit"  id="unit" placeholder='Enter Unit:'>
        <input type="submit" value="Check Bill">
    </form>
</div>


<?php
$unit =0;
// i. Electric bill calculation (For first 50 units – 3.50 tk/unit For next 100 units – 4.00 tk/unit For next 100 units – 5.20 tk/unit For units above 250 – 6.50 tk/unit)
if(isset($_GET['unit'])){
    $unit = $_GET['unit'];
}

$electric_bill;

$rate1 = 3.50;
$rate2 = 4;
$rate3 = 5.20;
$rate4 = 6.50;

//For first 50 units – 3.50
if ( $unit <= 50) {
    $electric_bill = $unit * $rate1;

    echo "
    <div class='result'>
    <div class='table'>
        <table>
            <thead>
                <th>Unit:</th>
                <th>Rate:</th>
                <th>Total:</th>
            </thead>
            <tbody>
                <tr>
                    <td><mark>$unit</mark> Unit</td>
                    <td>  $rate1 Taka</td>
                    <td>$electric_bill Taka</td>
                </tr>
            </tbody>
            <thead id='lasthead'>
                <th>Total Unit: $unit</th>
                <th>Sub Total:</th>
                <th>$electric_bill Taka.
                </th>

            </thead>
        </table>
    </div>
 </div>
    
    ";
    
    // For next 100 units – 4.
}elseif($unit <=150){
    $rate1_calc = 50 * $rate1;
    $electric_bill = (50 * $rate1) + (($unit - 50) * $rate2);
    $rate1_calc = 50 * $rate1;
    $totalUnit = $unit - 50;
    $rate2_calc = $totalUnit * 4;

    $subtotal = (50 * $rate1)+ (($unit - 50) * 4);

    echo "
    <div class='result'>
    <div class='table'>
        <table>
            <thead>
                <th>Unit:</th>
                <th>Rate:</th>
                <th>Total:</th>
            </thead>
            <tbody>
                <tr>
                    <td>First <mark>50</mark> Unit</td>
                    <td>  3.5 Taka</td>
                    <td>$rate1_calc Taka</td>
                </tr>

                <tr>
                    <td>$totalUnit Unit</td>
                    <td>  4 Taka</td>
                    <td>$rate2_calc Taka</td>
                </tr>
            </tbody>
            <thead id='lasthead'>
                <th>Total Unit: $unit</th>
                <th>Sub Total:</th>
                <th>$subtotal Taka.
                </th>

            </thead>
        </table>
    </div>
 </div>
    
    ";

}elseif($unit <=250){

    


    $electric_bill = (50 * $rate1)+(100*$rate2) + (($unit - 150) * $rate3);

    $rate1_calc = 50 * $rate1;
    $rate2_calc = 100 * $rate2;
    // $rate3_calc = 100 * $rate2;

    $totalUnit = $unit - 150;

    $rate3_calc = $totalUnit * 5.20;
    // $rate2_calc = $totalUnit * 5.20;

    $subtotal = (50 * $rate1)+ (100 * $rate2) + (($unit - 150) * $rate3);




    

    echo "
    <div class='result'>
    <div class='table'>
    <h3>Result:</h3>
        <table>
            <thead>
                <th>Unit:</th>
                <th>Rate:</th>
                <th>Total:</th>
            </thead>
            <tbody>
                <tr>
                    <td>First <mark>50 </mark>Unit</td>
                    <td>  3.5 Taka</td>
                    <td>$rate1_calc Taka</td>
                </tr>
                <tr>
                <td>50 || <mark>100</mark> Unit</td>
                <td>  4 Taka</td>
                <td>$rate2_calc Taka</td>
            </tr>

                <tr>
                <td>50 || 100 || <mark>$totalUnit </mark> Unit</td>
                <td>  5.20 Taka</td>
                <td>$rate3_calc Taka</td>
            </tr>
            </tbody>
            <thead id='lasthead'>
                <th> Total Unit: $unit</th>
                <th></th>
                <th>$subtotal Taka.
                </th>

            </thead>
        </table>
    </div>
 </div>
    
    ";


}else
{


$electric_bill = (50 * $rate1)+ (100 * $rate2) + ($rate3 * 150) + (($unit - 250) * $rate4);

$rate1_calc = 50 * $rate1;
$rate2_calc = 100 * $rate2;
$rate3_calc = 100 * $rate3;
// $rate3_calc = 100 * $rate2;

$totalUnit = $unit - 250;

$rate4_calc = $totalUnit * 6.50;

$subtotal = (50 * $rate1)+ (100 * $rate2) + ($rate3 * 150) + (($unit - 250) * $rate4);

echo "
<div class='result'>
<div class='table'>
<h3>Result:</h3>
    <table>
        <thead>
            <th>Unit:</th>
            <th>Rate:</th>
            <th>Total:</th>
        </thead>
        <tbody>
            <tr>
                <td>First <mark>50 </mark>Unit</td>
                <td>  3.5 Taka</td>
                <td>$rate1_calc Taka</td>
            </tr>
            <tr>
            <td>50 || <mark>100</mark>  Unit</td>
            <td>  4 Taka</td>
            <td>$rate2_calc Taka</td>
        </tr>

            <tr>
            <td>50 || 100 || <mark>100 </mark> Unit</td>
            <td>  5.20 Taka</td>
            <td>$rate3_calc Taka</td>
        </tr>

        </tr>

        <tr>
        <td>50 || 100 || 100 || <mark>$totalUnit </mark> Unit</td>
        <td>  6.50 Taka</td>
        <td>$rate4_calc Taka</td>
    </tr>
        </tbody>
        <thead id='lasthead'>
            <th> Total Unit: $unit</th>
            <th></th>
            <th>$subtotal Taka.
            </th>

        </thead>
    </table>
</div>
</div>

";

}


?>
<!-- css for table  -->
<style>
            .table {
        max-width: 600px;
        margin: auto; /* Center the table within its container */
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px; /* Add some spacing from the top */
    }

    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }

    #lasthead {
        background-color: #222!important; /* Set your desired background color here */
    }
    #lasthead th{
        color:red;
    }
    /* Optional: Add some styling for hover effect */
    tbody tr:hover {
        background-color: #f5f5f5;
    }


</style>



<!-- // ii. A PHP calculator using switch case (Addition, Subtraction, Multiplication, Division)

// iii. Check if a person is eligible to vote by age

// iv. Check if a person is eligible for marriage in BD by gender.

// v. Check if number is positive or negetive

// vi. Check if number is odd or even vii. Check if data is integer or string -->