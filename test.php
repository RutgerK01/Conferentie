<?php
session_start();

$name   = $_SESSION["name"];
$ticket = $_SESSION["ticket"] . " ";
$meal   = $_SESSION["meal"];
$Uid    = $_SESSION["id"];
$amount = $_SESSION["amount"];
$typeT  = "";
$mealT  = "";
$bar    = $Uid . $ticket . $meal; 

if($_SESSION["ticket"] == "Friday"){
        $typeT = "What means you are allowed to enter on Friday";
}elseif($_SESSION["ticket"] == "Saterday"){
        $typeT = "What means you are allowed to enter on Saterday";
}elseif($_SESSION["ticket"] == "Sunday"){
        $typeT = "What means you are allowed to enter on Sunday";
}elseif($_SESSION["ticket"] == "Weekend"){
        $typeT = "What means you are allowed to enter on Saterday and Sunday";
}else{
        $typeT = "What means you are allowed to enter on all three days";
}

if($meal == "None"){
        $mealT = "You did not buy a Lunch or Diner ticket.";
}elseif($meal == "Lunch"){
        $mealT = "So you can get food in the diner area between 12 en half 2";
}elseif($meal == "Diner"){
        $mealT = "So you can get food in the diner area between half 6 and 8";
}else{
        $mealT = "Lunch is between 12 and half 12 and Diner is between half 6 and 8";
}

require('./barcode.php');

$pdf = new PDF_Code39();
$pdf->AddPage();
        $pdf->SetFont("Arial","B",20);
        $pdf->Image("./images/logoS.png",10,10,40);
        $pdf->Cell(40);
        $pdf->Cell(150,10,"Confetentie site",1,1);

        $pdf->SetFont("Arial","I",12);
        $pdf->Cell(40);
        $pdf->Cell(150,13.9,"{$name} Your ticket to enter",1,1);
        
        $pdf->SetFont("Arial","I",25); 
        $pdf->Cell(175,10,' ',0,1);
        $pdf->Cell(0,10,"Ticket",1,1,'C');
        
        $pdf->SetFont("Arial","I",15);
        $pdf->MultiCell(0,10,"Owner:   {$name} \nDay:       {$ticket}\n              {$typeT}\nMeal:     {$meal}\n             {$mealT}",1,1);
        $pdf->Cell(0,10,' ',0,1);

        $pdf->Code39(80,105,"{$bar}",1,15);
$pdf->Output();
?>