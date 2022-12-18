<?php
require'../php/config.php'; 

$sql = "INSERT INTO inquiry (name,email,message,date) VALUES 
('Sirimal' ,'sirimal@gmail.com','How to buy a package ?','2022-05-01'),
('Navidu'  ,'navidu@gmail.com' ,'Do you deliver to galle ?','2022-05-02'),
('Martin'  ,'martin@gmail.com' ,'I want a refund for my order!','2022-05-03'),
('Kanchana','malinda@gmail.com','Best service but can you hurry up my order','2022-05-04'),
('Nimali'  ,'Nimali@gmail.com' ,'Can\'t wait','2022-05-05' ),
('Nirmali' ,'Nirmali@gmail.com','Sooo well','2022-05-06')";

  if($conn->query($sql)){
    echo "<script> alert('Message sent succesfully!')</script>";
  }
  else{
  echo "<script> alert('Failed to Send the message!')</script>";
  }

  $conn->close();




?>
