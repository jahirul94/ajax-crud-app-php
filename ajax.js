/*=====================
         ajax
   ====================*/
/**
 * insert section start 
 */
$('#btn').click(function () {
   var name = $("#name").val();
   var password = $("#password").val();
   var email = $("#email").val();
   if (name, email, password) {
      $.ajax({
         method: "POST",
         url: "insert.php",
         data: { name: name, email: email, password: password },
         success: function (data) {
            read()
         }
      })
   }
   else {
      alert("Fill the form")
   }
})
/**
 * insert section end 
 * Reading section started
 */

function read() {
   var read = "";
   $.ajax({
      url: "read.php",
      method: "POST",
      data: { read: read },
      success: function (data) {
         $("#table-body").html(data);
      }

   })
}

$(".read-btn").click(function () {
   read();
})

/**
 * Delete data from db
 */
function delete_from_db(id) {
   $con = confirm("Are you sure ? ");
   if ($con) {
      $.ajax({
         url: "delete.php",
         method: "POST",
         data: { id: id },
         success: function () {
            alert("Deleted successfully");
            read();
         }
      });
   }
}



/**
 * Update data 
 */

function update_data(id) {
   $.ajax({
      url: "update.php",
      method: "GET",
      data: { id: id },
      success: function (data) {
         $("body").html(data);
      }

   })
}

function update_data_from_db(id) {
   var name = $("#update_name").val();
   var password = $("#update_password").val();
   var email = $("#update_email").val();
   $.ajax({
      url: 'updateQuery.php',
      method: "GET",
      data: { id: id, name: name, email: email, password: password },
      success: function (data) {
         alert("update successfully", data)
      }
   })
}



function home() {
   var read = "";
   $.ajax({
      url: "index.php",
      method: "POST",
      data: { read: read },
      success: function (data) {
         $("body").html(data);
      }

   })
}