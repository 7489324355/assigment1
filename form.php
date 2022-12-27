<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<style type="text/css">
    .form{
        display: flex;
        text-align: center;
        flex-direction: column;
        align-items: center;
        border: 2px solid white;
        border-radius: 10px;
        width:50%;
        margin: 0 auto; 
        background-color:lightgreen;

    }
    .col{
        border: 2px inset white;
        border-radius: 5px;
        margin-top: 10px;
        width: 500px;
        height: 30px;
        text-align:Left;
        margin: 10px 10px 10px 0px;
    }
   label{
    text-align: Left;
    
   }
   input[type="text"],input[type="email"],input[type="number"],input[type="submit"],textarea{
    margin-left:60px;
    text-align:center;
    width: 300px;
    border: Right;
    margin-top:4px;
   }
   h2{
    text-align:Left;
  
   }
  
   input[type="submit"]{
    display:inline-center;
    width:100px;
    height:30px;
    color:white;
    border: 2px solid black;
    background-color: #555555;

   }
   
    </style>
</head>
<body>
    <div class ="form" >
        <form action="">
       <h2>Step 1:your details</h2>

       <div class="col">
        <label for="">Name</label>
        <input type="text" placeholder="First and Last name">
       </div>

       <div class="col">
        <label for="">Email</label>
        <input type="email" placeholder="Enter your email">
     </div>

     <div class="col">
        <label for="">Phone</label>
        <input type="number" placeholder="Enter your mobile number">
     </div> 
     <h2>Step 2:Delivery Address</h2>

     <div class="col" style="height:100px;">
        <label for="">Address</label>
        <textarea cols="" rows="5"></textarea>
       </div>

       <div class="col">
        <label for="">Post Code</label>
        <input type="number" >
       </div>

       <div class="col">
        <label for="">Country</label>
        <input type="text">
       </div>
    
       <h2>Step 3:Card details</h2>

     <div class="col" style="height:50px;">
        <label for="">card type</label>
        <br>
        
        <input type="radio" name="" > <img src="visa.webp" width="20" height="10">Visa
        <input type="radio" name=""><img src="amex.jfif" width="20" height="10">AmEx
        <input type="radio" name=""><img src="mg.jfif" width="20" height="10">Mastercard
       </div>

       <div class="col">
        <label for="">card number</label>
        <input type="number" >
       </div>

       <div class="col">
        <label for="">Security code</label>
        <input type="number">
       </div>

       <div class="col">
        <label for="">Name on card</label>
        <input type="text" placeholder="exact name as on the card">
       </div>

       <div  class="row" >
           <input type="submit" value="BUY It!" id="" >

       </div>


</form>
</div>


</body>
</html>
