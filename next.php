<?php
$pickup=$_POST["pickup"];
$drop=$_POST["drop"];
$cab=$_POST["cabtype"];
$w=$_POST["luggage"];
global $arr;
$arr=array(
    "Charbagh"=>"0",
    "Indira Nagar"=>"10",
    "BBD"=>"30",
    "Barabanki"=>"60",
    "Faizabad"=>"100",
    "Basti"=>"150",
    "Gorakhpur"=>"210"
);
class difference
{ 
    function print1()
    {
        global $arr1;
        global $dis2,$dis1,$distance,$arr,$pickup,$drop;
    foreach($arr as $key=>$value)
    {
        if($key==$pickup)
        {
            $dis1=$value;
        }
    }
    foreach($arr as $key=>$value)
    {
        if($key==$drop)
        {
            $dis2=$value;
        }
    }
    $distance=$dis2-$dis1;
    echo "Distance : ".abs($distance);      
    }
}
class vehicle extends difference
{
    function cedmicro()
    {
        global $distance;
        global $cab;
        global $dis2,$dis1,$distance,$arr,$pickup,$drop,$booking_amount,$bill,$w;
        
        if($cab=="CedMicro")
        {
            if($distance<=10)
            {
                $rate=10*13.5+50;
                if($w<=0)
                {
                echo "<br>Total_bill:$rate";
                }
            }
            else if($distance<=60)
            {
                $dist=$distance-10;
                $rate=10*13.5+50+($dist*12);
                if($w<=0)
                {
                echo "<br>Toatal_bill:$rate";
                }
            }
            else if($distance<=160)
            {
                $rate=10*13.50;
                $rate2=50*12;
            $dist3=$distance-60;    
            $bill=50+($dist3*10.20)+$rate+$rate2;
            if($w<=0)
                {
            echo "<br>Booking_Amount : 50"."<br>Total_Bill : ".abs($bill);
                }
        }
            else if($distance>160)
            {
                $rate=10*13.50;
                $rate2=50*12;
                $rate3=100*10.20;
            $dist3=$distance-160;    
            $bill=50+($dist3*8.50)+$rate+$rate2+$rate3;
            if($w<=0)
                {
            echo "<br>Booking_Amount : 50"."<br>Total_Bill : ".abs($bill);
                }
            }
        }
        else if($cab=='CedMini')
        {
            $booking_amount=150;
            if($distance<=60)
            {
                $rate=10*14.50;
                $dist3=$distance-10;
            $bill=$booking_amount+($dist3*13.00)+$rate;
            if($w<=0)
            {
        echo "<br>Booking_Amount : 50"."<br>Total_Bill : ".abs($bill);
            }
         }
            else if($distance<=160)
            {
                $rate=10*14.50;
                $rate2=50*13;
            $dist3=$distance-60;    
            $bill=$booking_amount+($dist3*11.20)+$rate+$rate2;
            if($w<=0)
                {
            echo "<br>Booking_Amount : 50"."<br>Total_Bill : ".abs($bill);
                }
            }
            else if($distance>160)
            {
                $rate=10*14.50;
                $rate2=50*13;
                $rate3=100*11.20;
            $dist3=$distance-160;    
            $bill=$booking_amount+($dist3*9.50)+$rate+$rate2+$rate3;
            if($w<=0)
            {
        echo "<br>Booking_Amount : 50"."<br>Total_Bill : ".abs($bill);
            } 
            }
        }

        else if($cab=='CedRoyal')
        {
            $booking_amount=200;
            if($distance<=60)
            {
                $rate=10*15.50;
                $dist3=$distance-10;
            $bill=$booking_amount+($dist3*14.00)+$rate;
            if($w<=0)
            {
        echo "<br>Booking_Amount : 50"."<br>Total_Bill : ".abs($bill);
            } }
            else if($distance<=160)
            {
                $rate=10*15.50;
                $rate2=50*14;
            $dist3=$distance-60;    
            $bill=$booking_amount+($dist3*12.20)+$rate+$rate2;
            if($w<=0)
            {
        echo "<br>Booking_Amount : 50"."<br>Total_Bill : ".abs($bill);
            } 
            }
            else if($distance>160)
            {
                $rate=10*15.50;
                $rate2=50*14;
                $rate3=100*12.20;
            $dist3=$distance-160;    
            $bill=$booking_amount+($dist3*10.50)+$rate+$rate2+$rate3;
            if($w<=0)
                {
            echo "<br>Booking_Amount : 50"."<br>Total_Bill : ".abs($bill);
                }
            }
        }
        else if($cab=='CedSUV')
        {
            $booking_amount=250;
            if($distance<=60)
            {
                $rate=10*16.50;
                $dist3=$distance-10;
            $bill=$booking_amount+($dist3*15.00)+$rate;
            if($w<=0)
                {
            echo "<br>Booking_Amount : 50"."<br>Total_Bill : ".abs($bill);
                }}
            else if($distance<=160)
            {
                $rate=10*16.50;
                $rate2=50*15;
            $dist3=$distance-60;    
            $bill=$booking_amount+($dist3*13.20)+$rate+$rate2;
            if($w<=0)
                {
            echo "<br>Booking_Amount : 50"."<br>Total_Bill : ".abs($bill);
                }
            }
            else if($distance>160)
            {
                $rate=10*16.50;
                $rate2=50*15;
                $rate3=100*13.20;
            $dist3=$distance-160;    
            $bill=$booking_amount+($dist3*11.50)+$rate+$rate2+$rate3;
            if($w<=0)
                {
            echo "<br>Booking_Amount : 50"."<br>Total_Bill : ".abs($bill);
                }
            }
        }
    }
}
class luggage extends vehicle
{
    function lug()
    {
        global $w;
        global $dis2,$dis1,$distance,$arr,$pickup,$drop,$booking_amount,$bill,$cab;
        
        if($w>0&&$w<=10&&$cab=="CedMini")
        {   
            $bill=$bill+50;
            echo "<br>weight : $w kg"."<br>Total_Bill : ".abs($bill);
        }
        if($w>10&&$w<=20&&$cab=="CedMini")
        {
            $bill=$bill+100;
            echo "<br>weight : $w kg"."<br>Total_Bill : ".abs($bill);
        }
        if($w>20&&$cab=="CedMini")
        {
            $bill=$bill+200;
            echo "<br>weight : $w kg"."<br>Total_Bill : ".abs($bill);
        }
        if($w>0&&$w<=10&&$cab=="CedRoyal")
        {   
            $bill=$bill+50;
            echo "<br>weight : $w kg"."<br>Total_Bill : ".abs($bill);
        }
        if($w>10&&$w<=20&&$cab=="CedRoyal")
        {
            $bill=$bill+100;
            echo "<br>weight : $w kg"."<br>Total_Bill : ".abs($bill);
        }
        if($w>20&&$cab=="CedRoyal")
        {
            $bill=$bill+200;
            echo "<br>weight : $w kg"."<br>Total_Bill : ".abs($bill);
        }
        if($w>0&&$w<=10&&$cab=="CedSUV")
        {
           
            $bill=$bill+100;
            echo "<br>weight : $w kg"."<br>Total_Bill : ".abs($bill);
        }
        if($w>10&&$w<=20&&$cab=="CedSUV")
        {
            $bill=$bill+200;
            echo "<br>weight : $w kg"."<br>Total_Bill : ".abs($bill);
        }
        if($w>20&&$cab=="CedSUV")
        {
            $bill=$bill+400;
            echo "<br>weight : $w kg"."<br>Total_Bill : ".abs($bill);
        }
    }

    
}
$obj=new luggage();
$obj->print1();
$obj->cedmicro();
$obj->lug();
?>