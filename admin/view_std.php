<?php
include("../admin/connection.php");

$query = "SELECT * FROM add_std";
$data = mysqli_query($conn, $query);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./images/logo icon.png" type="image/x-icon">
    <!-- <link rel="stylesheet" href="output.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Mentor System</title>
</head>
<body>
<!-- admin navbar page -->
<div class="w-full min-h-screen font-sans text-gray-900 bg-gray-50 flex">
    <?php
    @include 'a_nav.php';
    ?>
    <main class="flex-1">
        <!-- head -->
        <?php
    @include 'head.php';
        ?>
        <!-- Mentor form -->
        <div class="flex items-center justify-between gap-11 p-3 px-10">
            <div class="bg-violet-600 p-2 text-white flex gap-3 shadow-md shadow-violet-300 hover:bg-violet-800 cursor-pointer text-center">
                <i class="bi bi-person-fill"></i>
                <h1 class="text-base font-medium">Students</h1>
            </div>
        </div>

        <!-- Manage mentor -->
        <div class="flex items-center justify-between p-5 px-10 shadow">
            <div class="w-full h-96 overflow-y-scroll scroll-smooth">
                <table class="w-full text-sm text-center text-gray-500 cursor-pointer">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-300 sticky top-0">
                            <tr class="">
                                <th scop="col" class="py-3 px-6">Profile</th>
                                <th scop="col" class="py-3 px-6">Name</th>
                                <th scop="col" class="py-3 px-6">Enrollment</th>
                                <th scop="col" class="py-3 px-6">Department</th>
                                <th scop="col" class="py-3 px-6">Mentor</th>
                                <th scop="col" class="py-3 px-6">Semester</th>
                            </tr>
                        </thead>
                        <tbody class="text-xs mt-4 overflow-y-auto h-auto">
                            <tr class="bg-white border-b">
                        <?php
                        while ($row = mysqli_fetch_assoc($data)) 
                        {
                        ?>
                                <td class="py-4 px-6"><?php echo $row['photo']?> <img src=$row[photo] alt="" srcset=""> </td>
                                <td class="py-4 px-6"><h3><?php echo $row['firstName']." ".$row['lastName'] ?></h3></td>
                                <td class="py-4 px-6"><h3><?php echo $row['enrollment'] ?></h3></td>
                                <td class="py-4 px-6"><h3><?php echo $row['department'] ?></h3></td>
                                <td class="py-4 px-6"><h3><?php echo $row['lastName'] ?></h3></td>
                                <td class="py-4 px-6"><h3>6th</h3></td>
                            </tr>
                        <?php
                        }
                        ?>
                        </tbody>
                        
                    </table>
                </div>
            </div>
    </main>
</div>
<!-- component -->

</body>
</html>


<!-- // echo $result[photo]." ".$result[firstName]." ".$result[lastName]." ".$result[email]." ".$result[enrollment]." ".$result[department]." <br>"; -->
<!-- <img src="https://randomuser.me/api/portraits/lego/5.jpg" alt="" class="rounded-full w-8"> -->