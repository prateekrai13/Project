<?php
$con = mysqli_connect("localhost", "root", "", "test");
if (mysqli_connect_errno()) {
    echo "Connection Fail" . mysqli_connect_error();
}

$firstName = $_POST['fName'];
$lastName = $_POST['lName'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$PhoneNumber = $_POST['PhoneNumber'];
$Address = $_POST['Address'];
$PostalCode = $_POST['PostalCode'];

$query =  "insert into volunteer(firstName, lastName, gender, email, PhoneNumber, Address, PostalCode) value('$firstName', '$lastName', '$gender', '$email', '$PhoneNumber', '$Address', '$PostalCode')";
$result = mysqli_query($con, $query);

if ($result) {
    echo "<script>
alert('Thanks for sending message');
window.location.href='BecomeAVolunteer.html';

</script>";
} else
    echo "<script>
alert('Try Resending');
window.location.href='BecomeAVolunteer.html';
</script>";

?>