<?php
/*
Name: Aliyah Panjon
Course: IT 202-004
Date: 3/12/2026
Assignment: IT-202 Phase 3 - HTML Website Layout
Email: aep@njit.edu
*/
?>
<!DOCTYPE html>
<html>
<head>
    <title>Bubble Tea Collection</title>
</head>
<body>

<style>
     .header-div {
        display: flex;
        align-items: center;
}
  .header-div {
       background-color: #8b9fd4;
       padding: 8px 12px;
       display: flex;
       align-items: center;
       border-bottom: 1px solid #a8b8e0;
  }
  .header-div img {
      width: 35px;
      height: 35px;
      margin-right: 5px;
  }
  .header-div h1,
  .header-div h2 {
      color: white;
      margin: 0;
      font-weight: 300;
      letter-spacing: 0.5px;
  }
</style>

<div class="header-div">
  <img src="images/logo.png" alt="Boba Shop Logo">
  <div>
      <h1>Boba Collection</h1>
      <h2>Inventory Management</h2>
  </div>
</div>