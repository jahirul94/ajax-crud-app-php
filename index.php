<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn JQuery</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <input type="text" placeholder="Enter Your Name ..." name="name" id="name">
        <input type="email" placeholder="Enter Your Email" name="email" id="email"> <br>
        <input type="text" placeholder="Enter Your Password ..." name="password" id="password">
        <button id="btn">Add User</button> </br>
        <button class="read-btn" id="btn">See all Users</button> </br>
        <div id="reload">
     
        </div>
        <table>
             <thead>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Actions</th>
             </thead>
             <tbody id="table-body">
                  
             </tbody>
        </table>
    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="ajax.js"></script>
</body>

</html>