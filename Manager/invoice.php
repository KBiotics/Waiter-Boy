<?php
include '../config/config1.php';

$o_id=mysqli_real_escape_string($con,$_POST['o_id']);

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>Invoice</title>
    <style media="screen">
      body{
        background-color: rgb(44, 0, 102)
      }
page {
  background: white;
  display: block;
  margin: 0 auto;
  margin-bottom: 0.5cm;
  box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
}
page[size="A5"] {
  width: 14.8cm;
  height: 21.0cm;
}

@media print {
  body, page {
    margin: 0;
    box-shadow: 0;
  }
}
.invoice{
  padding: 10px;
}
.table_cal{
  width: 100%;

}
th{
  background-color: rgb(136, 255, 0);
  color: rgb(255, 255, 255);
  padding: 3px;
}
td{
  padding: 2px;
}
.status_paid{
 height: 50%;
 width: 50%;
}
.print{
  padding: 50px;
  width: 100%;
  color: #ffffff;
  font-size: 50px;
  font-weight: bold;
  margin: 50px;
  background-color: #00ff7c
}
@media print {
  th{
    background-color: rgb(136, 255, 0)
  }
}
    </style>
  </head>
  <body>
    <page>
      <div class="Dlist">
        <?php
        $sql_query1 = "SELECT * FROM `cstmr` WHERE id='".$o_id."' ";
     $result = mysqli_query($con,$sql_query1);
         ?>
         <div class="table-wrapper-scroll-y my-custom-scrollbar">
         <div style="overflow-x:auto;">
         <table table id="table" class="table table-bordered table-striped mb-0">
         <?php while($row = mysqli_fetch_assoc($result))
           {
             $o_id=$row['id'];
             $cname=$row['name'];
             $ctno=$row['tno'];
             $address=$row['address'];
             $mo=$row['mo'];
             if ($ctno=="999") {
               $ctno="<lable style=background:#ff007c;color:#ffffff;padding:2px;> (Online Order) </lable><br> Address: $address <br> Mo. <a href=tel:$mo>$mo</a>";
             }
             $status_s=$row['pay_m'];
             if ($status_s!="") {
               $status_s="Disabled";
             }
             else {
               $status_s="";
             }
             $sql_query15 = "SELECT * FROM `cstmr` WHERE id='".$o_id."'";
     $result15 = mysqli_query($con,$sql_query15);
     while($row = mysqli_fetch_assoc($result15))
       {
     $D1=$row['D1'];
     $D2=$row['D2'];
     $D3=$row['D3'];
     $D4=$row['D4'];
     $D5=$row['D5'];
     $D6=$row['D6'];
     $D7=$row['D7'];
     $D8=$row['D8'];
     $D9=$row['D9'];
     $D10=$row['D10'];
     $D11=$row['D11'];
     $D12=$row['D12'];
     $qty1=$row['qty1'];
     $qty2=$row['qty2'];
     $qty3=$row['qty3'];
     $qty4=$row['qty4'];
     $qty5=$row['qty5'];
     $qty6=$row['qty6'];
     $qty7=$row['qty7'];
     $qty8=$row['qty8'];
     $qty9=$row['qty9'];
     $qty10=$row['qty10'];
     $qty11=$row['qty11'];
     $qty12=$row['qty12'];
     $status_l=$row['status'];
     $pay_method=$row['pay_m'];
     $pay_ref="";
     $pay_ref1=$row['pay_l'];
     $pay_ref2=$row['manager'];
     if ($pay_ref1=='') {
       $pay_ref="$pay_ref2";
     }
     else {
       $pay_ref="$pay_ref1";
     }
     }
     $D1P=0;
     $D2P=0;
     $D3P=0;
     $D4P=0;
     $D5P=0;
     $D6P=0;
     $D7P=0;
     $D8P=0;
     $D9P=0;
     $D10P=0;
     $D11P=0;
     $D12P=0;

        $sql_query17 = "SELECT * FROM `menu` WHERE id='".$D1."'";
        $result17 = mysqli_query($con,$sql_query17);
        while($row = mysqli_fetch_assoc($result17))
          {
            $D1N=$row['Dname'];
            $D1P=$row['Dprice'];
          }
          $fprice1=$qty1*$D1P;
          if ($qty1==0) {
            $fD_name1="-";
          }
          else {
            $fD_name1="$qty1 $D1N $D1P x $qty1= $fprice1";
          }

          $sql_query2 = "SELECT * FROM `menu` WHERE id='".$D2."'";
          $result2 = mysqli_query($con,$sql_query2);
          while($row = mysqli_fetch_assoc($result2))
            {
              $D2N=$row['Dname'];
              $D2P=$row['Dprice'];
            }
            $fprice2=$qty2*$D2P;
            if ($qty2==0) {
              $fD_name2="-";
            }
            else {
              $fD_name2="$qty2 $D2N $D2P x $qty2= $fprice2";
            }

            $sql_query3 = "SELECT * FROM `menu` WHERE id='".$D3."'";
            $result3 = mysqli_query($con,$sql_query3);
            while($row = mysqli_fetch_assoc($result3))
              {
                $D3N=$row['Dname'];
                $D3P=$row['Dprice'];
              }
              $fprice3=$qty3*$D3P;
              if ($qty3==0) {
                $fD_name3="-";
              }
              else {
                $fD_name3="$qty3 $D3N $D3P x $qty3= $fprice3";
              }

              $sql_query4 = "SELECT * FROM `menu` WHERE id='".$D4."'";
              $result4 = mysqli_query($con,$sql_query4);
              while($row = mysqli_fetch_assoc($result4))
                {
                  $D4N=$row['Dname'];
                  $D4P=$row['Dprice'];
                }
                $fprice4=$qty4*$D4P;
                if ($qty4==0) {
                  $fD_name4="-";
                }
                else {
                  $fD_name4="$qty4 $D4N $D4P x $qty4= $fprice4";
                }

                $sql_query5 = "SELECT * FROM `menu` WHERE id='".$D5."'";
                $result5 = mysqli_query($con,$sql_query5);
                while($row = mysqli_fetch_assoc($result5))
                  {
                    $D5N=$row['Dname'];
                    $D5P=$row['Dprice'];
                  }
                  $fprice5=$qty5*$D5P;
                  if ($qty5==0) {
                    $fD_name5="-";
                  }
                  else {
                    $fD_name5="$qty5 $D5N $D5P x $qty5= $fprice5";
                  }

                  $sql_query6 = "SELECT * FROM `menu` WHERE id='".$D6."'";
                  $result6 = mysqli_query($con,$sql_query6);
                  while($row = mysqli_fetch_assoc($result6))
                    {
                      $D6N=$row['Dname'];
                      $D6P=$row['Dprice'];
                    }
                    $fprice6=$qty6*$D6P;
                    if ($qty6==0) {
                      $fD_name6="-";
                    }
                    else {
                      $fD_name6="$qty6 $D6N $D6P x $qty6= $fprice6";
                    }

                    $sql_query7 = "SELECT * FROM `menu` WHERE id='".$D7."'";
                    $result7 = mysqli_query($con,$sql_query7);
                    while($row = mysqli_fetch_assoc($result7))
                      {
                        $D7N=$row['Dname'];
                        $D7P=$row['Dprice'];
                      }
                      $fprice7=$qty7*$D7P;
                      if ($qty7==0) {
                        $fD_name7="-";
                      }
                      else {
                        $fD_name7="$qty7 $D7N $D7P x $qty7= $fprice7";
                      }

                      $sql_query8 = "SELECT * FROM `menu` WHERE id='".$D8."'";
                      $result8 = mysqli_query($con,$sql_query8);
                      while($row = mysqli_fetch_assoc($result8))
                        {
                          $D8N=$row['Dname'];
                          $D8P=$row['Dprice'];
                        }
                        $fprice8=$qty8*$D8P;
                        if ($qty8==0) {
                          $fD_name8="-";
                        }
                        else {
                          $fD_name8="$qty8 $D8N $D8P x $qty8= $fprice8";
                        }

                        $sql_query9 = "SELECT * FROM `menu` WHERE id='".$D9."'";
                        $result9 = mysqli_query($con,$sql_query9);
                        while($row = mysqli_fetch_assoc($result9))
                          {
                            $D9N=$row['Dname'];
                            $D9P=$row['Dprice'];
                          }
                          $fprice9=$qty9*$D9P;
                          if ($qty9==0) {
                            $fD_name9="-";
                          }
                          else {
                            $fD_name9="$qty9 $D9N $D9P x $qty9= $fprice9";
                          }

                          $sql_query10 = "SELECT * FROM `menu` WHERE id='".$D10."'";
                          $result10 = mysqli_query($con,$sql_query10);
                          while($row = mysqli_fetch_assoc($result10))
                            {
                              $D10N=$row['Dname'];
                              $D10P=$row['Dprice'];
                            }
                            $fprice10=$qty10*$D10P;
                            if ($qty10==0) {
                              $fD_name10="-";
                            }
                            else {
                              $fD_name10="$qty10 $D10N $D10P x $qty10= $fprice10";
                            }

                            $sql_query11 = "SELECT * FROM `menu` WHERE id='".$D11."'";
                            $result11 = mysqli_query($con,$sql_query11);
                            while($row = mysqli_fetch_assoc($result11))
                              {
                                $D11N=$row['Dname'];
                                $D11P=$row['Dprice'];
                              }
                              $fprice11=$qty11*$D11P;
                              if ($qty11==0) {
                                $fD_name11="-";
                              }
                              else {
                                $fD_name11="$qty11 $D11N $D11P x $qty11= $fprice11";
                              }

                              $sql_query12 = "SELECT * FROM `menu` WHERE id='".$D12."'";
                              $result12 = mysqli_query($con,$sql_query12);
                              while($row = mysqli_fetch_assoc($result12))
                                {
                                  $D12N=$row['Dname'];
                                  $D12P=$row['Dprice'];
                                }
                                $fprice12=$qty12*$D12P;
                                if ($qty12==0) {
                                  $fD_name12="-";
                                }
                                else {
                                  $fD_name12="$qty12 $D12N $D12P x $qty12= $fprice12";
                                }

                                $total=$fprice1+$fprice2+$fprice3+$fprice4+$fprice5+$fprice6+$fprice7+$fprice8+$fprice9+$fprice10+$fprice11+$fprice12;
             echo "<td style=width:1000px>";
             echo "<br><img src=../meta/logo.png alt=pqr height=50 width=300>";
             echo "<h2 style=color:#575757;>Invoice</h1>";
             echo  "Order ID : ".$o_id."<br>";
                 echo  $cname."<br>" ;
                 echo  "Table No : ".$ctno."<br>" ;
                 echo "<h3 style=background:linear-gradient(#deca67,#fbdf32);color:white;font-weight:bolder;><center>Order</center></h3>";
                 echo  "<h4><center>Status : ".$status_l."</center></h4><br>" ;
                 echo  "$fD_name1"."<br>" ;
                 echo  "$fD_name2"."<br>" ;
                 echo  "$fD_name3"."<br>" ;
                 echo  "$fD_name4"."<br>" ;
                 echo  "$fD_name5"."<br>" ;
                 echo  "$fD_name6"."<br>" ;
                 echo  "$fD_name7"."<br>" ;
                 echo  "$fD_name8"."<br>" ;
                 echo  "$fD_name9"."<br>" ;
                 echo  "$fD_name10"."<br>" ;
                 echo  "$fD_name11"."<br>" ;
                 echo  "$fD_name12"."<br>" ;
                 echo  "Total : ???$total"."<br>" ;

                 if ($status_s=='Disabled') {
                   echo "<center><h2 style=color:#00ff89; >Paid</h2>";
                   echo "<form action=pay_m.php method=post >";
                   echo "<input type=hidden name=o_id value=$o_id>";
                   echo "Payment Method : $pay_method<br>";
                   echo "Payment Ref. : $pay_ref<br>";
                   echo "</form></center>";
                   echo "<h1>Thank You!</h1>";
                 }
                 else {
                   echo "<br><lable>Scan QR to Pay Online</lable>";
                   echo "<br><img src=../meta/Payment_QR.png alt=pqr height=100 width=100>";
                  echo "<h1>Thank You! <br><button class='print' onclick=window.print()>Print</button></h1>";
                 echo "</td>";
               }
           }?>
           <script>
         function printDiv() {
             var divContents = document.getElementById("GFG").innerHTML;
             var a = window.open('', '', 'height=500, width=500');
             a.document.write('<html>');
             a.document.write('<body > <h1>Div contents are <br>');
             a.document.write(divContents);
             a.document.write('</body></html>');
             a.document.close();
             a.print();
         }
     </script>
         </table>
         </div>
       </div>
      </div>
    </page>
  </body>
</html>
