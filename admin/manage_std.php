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
        <div class="flex items-center gap-11 p-2 px-10">
            <form action="" class="flex items-center gap-11 p-3 px-10">
                <div class="">
                    <select name="" id="" class="p-2 rounded-lg border-violet-500 border cursor-pointer">
                    <Option selected>Department</Option>
                    <option value="BCA">BCA</option>
                    <option value="IMCA">IMCA</option>
                    <option value="Bsc.IT">Bsc.IT</option>
                    </select>
                </div>
                <div class="">
                    <select name="" id="" class="p-2 rounded-lg border-violet-500 border cursor-pointer">
                    <Option selected>Semester</Option>
                    <option value="1">sem 1</option>
                    <option value="2">sem 2</option>
                    <option value="3">sem 3</option>
                    <option value="4">sem 4</option>
                    <option value="5">sem 5</option>
                    <option value="6">sem 6</option>
                    <option value="7">sem 7</option>
                    <option value="8">sem 8</option>
                    </select>
                </div>
                <div class="">
                    <select name="" id="" class="p-2 rounded-lg border-violet-500 border cursor-pointer">
                    <Option selected>Mentor</Option>
                    <option value="ment">Nishil</option>
                    <option value="ment">Keyur</option>
                    <option value="ment">Krishana</option>
                    <option value="ment">Sagar</option>
                    </select>
                </div>
                <div class="flex gap-3">
                <div class="flex gap-2 bg-violet-500 text-white p-2 rounded-lg">
                    <i class="bi bi-funnel"></i>
                    <button type="submit">Apply</button>
                </div>
                </form>
            </div>
        </div>    
        <div class="flex items-center justify-between gap-11 p-3 px-10">
            <div class="bg-violet-500 rounded-md">
                <input type="text" placeholder="search" class="p-2 border-2">
                <i class="bi bi-search  text-white p-2 cursor-pointer"></i>
           </div>
            <div class="bg-violet-600 p-2 text-white flex gap-3 shadow-md shadow-violet-300 hover:bg-violet-800 cursor-pointer text-center">
                <i class="bi bi-person-fill"></i>
                <h1 class="text-base font-medium">Manage Students</h1>
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
                                <th scop="col" class="py-3 px-6">Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-xs mt-4 overflow-y-auto h-auto">
                            <tr class="bg-white border-b">
                                <td class="py-4 px-6"><img src="https://randomuser.me/api/portraits/lego/5.jpg" alt="" class="rounded-full w-8"></td>
                                <td class="py-4 px-6"><h3>Keyur Malete</h3></td>
                                <td class="py-4 px-6"><h3>200510101070</h3></td>
                                <td class="py-4 px-6"><h3>BCA</h3></td>
                                <td class="py-4 px-6"><h3>Keyur</h3></td>
                                <td class="py-4 px-6"><h3>6th</h3></td>
                                <td class="py-4 px-6 flex gap-2">
                                    <h3 class="px-4 py-1 text-sm text-center text-white bg-blue-500 rounded-full hover:bg-blue-700 hover:text-white">View</h3>
                                    <h3 class="px-4 py-1 text-sm text-center text-white bg-green-500 rounded-full hover:bg-green-700 hover:text-white">Edit</h3>
                                    <h3 class="px-4 py-1 text-sm text-center text-white bg-red-500 rounded-full hover:bg-red-700 hover:text-white">Delete</h3>
                                </td>
                            </tr>
                            <tr class="bg-white border-b">
                                <td class="py-4 px-6"><img src="https://randomuser.me/api/portraits/lego/5.jpg" alt="" class="rounded-full w-8"></td>
                                <td class="py-4 px-6"><h3>Keyur Malete</h3></td>
                                <td class="py-4 px-6"><h3>200510101070</h3></td>
                                <td class="py-4 px-6"><h3>BCA</h3></td>
                                <td class="py-4 px-6"><h3>Keyur</h3></td>
                                <td class="py-4 px-6"><h3>6th</h3></td>
                                <td class="py-4 px-6 flex gap-2">
                                    <h3 class="px-4 py-1 text-sm text-center text-white bg-blue-500 rounded-full hover:bg-blue-700 hover:text-white">View</h3>
                                    <h3 class="px-4 py-1 text-sm text-center text-white bg-green-500 rounded-full hover:bg-green-700 hover:text-white">Edit</h3>
                                    <h3 class="px-4 py-1 text-sm text-center text-white bg-red-500 rounded-full hover:bg-red-700 hover:text-white">Delete</h3>
                                </td>
                            </tr>
                            <tr class="bg-white border-b">
                                <td class="py-4 px-6"><img src="https://randomuser.me/api/portraits/lego/5.jpg" alt="" class="rounded-full w-8"></td>
                                <td class="py-4 px-6"><h3>Keyur Malete</h3></td>
                                <td class="py-4 px-6"><h3>200510101070</h3></td>
                                <td class="py-4 px-6"><h3>BCA</h3></td>
                                <td class="py-4 px-6"><h3>Keyur</h3></td>
                                <td class="py-4 px-6"><h3>6th</h3></td>
                                <td class="py-4 px-6 flex gap-2">
                                    <h3 class="px-4 py-1 text-sm text-center text-white bg-blue-500 rounded-full hover:bg-blue-700 hover:text-white">View</h3>
                                    <h3 class="px-4 py-1 text-sm text-center text-white bg-green-500 rounded-full hover:bg-green-700 hover:text-white">Edit</h3>
                                    <h3 class="px-4 py-1 text-sm text-center text-white bg-red-500 rounded-full hover:bg-red-700 hover:text-white">Delete</h3>
                                </td>
                            </tr>
                            <tr class="bg-white border-b">
                                <td class="py-4 px-6"><img src="https://randomuser.me/api/portraits/lego/5.jpg" alt="" class="rounded-full w-8"></td>
                                <td class="py-4 px-6"><h3>Keyur Malete</h3></td>
                                <td class="py-4 px-6"><h3>200510101070</h3></td>
                                <td class="py-4 px-6"><h3>BCA</h3></td>
                                <td class="py-4 px-6"><h3>Keyur</h3></td>
                                <td class="py-4 px-6"><h3>6th</h3></td>
                                <td class="py-4 px-6 flex gap-2">
                                    <h3 class="px-4 py-1 text-sm text-center text-white bg-blue-500 rounded-full hover:bg-blue-700 hover:text-white">View</h3>
                                    <h3 class="px-4 py-1 text-sm text-center text-white bg-green-500 rounded-full hover:bg-green-700 hover:text-white">Edit</h3>
                                    <h3 class="px-4 py-1 text-sm text-center text-white bg-red-500 rounded-full hover:bg-red-700 hover:text-white">Delete</h3>
                                </td>
                            </tr>
                            <tr class="bg-white border-b">
                                <td class="py-4 px-6"><img src="https://randomuser.me/api/portraits/lego/5.jpg" alt="" class="rounded-full w-8"></td>
                                <td class="py-4 px-6"><h3>Keyur Malete</h3></td>
                                <td class="py-4 px-6"><h3>200510101070</h3></td>
                                <td class="py-4 px-6"><h3>BCA</h3></td>
                                <td class="py-4 px-6"><h3>Keyur</h3></td>
                                <td class="py-4 px-6"><h3>6th</h3></td>
                                <td class="py-4 px-6 flex gap-2">
                                    <h3 class="px-4 py-1 text-sm text-center text-white bg-blue-500 rounded-full hover:bg-blue-700 hover:text-white">View</h3>
                                    <h3 class="px-4 py-1 text-sm text-center text-white bg-green-500 rounded-full hover:bg-green-700 hover:text-white">Edit</h3>
                                    <h3 class="px-4 py-1 text-sm text-center text-white bg-red-500 rounded-full hover:bg-red-700 hover:text-white">Delete</h3>
                                </td>
                            </tr>
                            <tr class="bg-white border-b">
                                <td class="py-4 px-6"><img src="https://randomuser.me/api/portraits/lego/5.jpg" alt="" class="rounded-full w-8"></td>
                                <td class="py-4 px-6"><h3>Keyur Malete</h3></td>
                                <td class="py-4 px-6"><h3>200510101070</h3></td>
                                <td class="py-4 px-6"><h3>BCA</h3></td>
                                <td class="py-4 px-6"><h3>Keyur</h3></td>
                                <td class="py-4 px-6"><h3>6th</h3></td>
                                <td class="py-4 px-6 flex gap-2">
                                    <h3 class="px-4 py-1 text-sm text-center text-white bg-blue-500 rounded-full hover:bg-blue-700 hover:text-white">View</h3>
                                    <h3 class="px-4 py-1 text-sm text-center text-white bg-green-500 rounded-full hover:bg-green-700 hover:text-white">Edit</h3>
                                    <h3 class="px-4 py-1 text-sm text-center text-white bg-red-500 rounded-full hover:bg-red-700 hover:text-white">Delete</h3>
                                </td>
                            </tr>
                            
                            
                        </tbody>
                    </table>
                </div>
            </div>
    </main>
</div>
<!-- component -->

</body>
</html>

<!-- Color pallet 
        indigo-600 : primary
        violet-500 : secondary
        indigo-400
        trueGray-50
    -->