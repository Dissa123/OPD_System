<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../dist/output.css">
    <title>Document</title>
</head>

<body class="">

<?php require "../connection.php";
    // SQL query to select data from database
    $sql = " SELECT * FROM appointment ORDER BY a_id DESC ";
    $result = $conn->query($sql);

    include "./Filter.php";
    ?>
    </div>
    <div>
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
           
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        patient Number
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Patient Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Date
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Patient Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Patient Number
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                require "../connection.php";
                if (isset($_GET['from_date']) && isset($_GET['to_date'])) {
                    $from_date = $_GET['from_date'];
                    $to_date = $_GET['to_date'];

                    $query = "SELECT * FROM appointment WHERE date BETWEEN '$from_date' AND '$to_date'";
                    $query_run = mysqli_query($conn, $query);

                    if (mysqli_num_rows($query_run) > 0) {
                        foreach ($query_run as $row) {
                ?>
                            <tr>
                                <td><?= $row['name']; ?></td>
                                <td><?= $row['date']; ?></td>
                                <td><?= $row['email']; ?></td>
                                <td><?= $row['number']; ?></td>
                            </tr>
                <?php
                        }
                    } else {
                        echo "No Records";
                    }
                }
                ?>
                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                    <!-- PHP CODE TO FETCH DATA FROM ROWS -->
                    <?php
                    // LOOP TILL END OF DATA
                    while ($rows = $result->fetch_assoc()) {
                    ?>
                <tr>
                    <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"><?php echo $rows['a_id']; ?></td>
                    <td class="px-6 py-4"><?php echo $rows['name']; ?></td>
                    <td class="px-6 py-4"><?php echo $rows['date']; ?></td>
                    <td class="px-6 py-4"><?php echo $rows['email']; ?></td>
                    <td class="px-6 py-4"><?php echo $rows['number']; ?></td>

                  
                    <td class="px-6 py-4">
                        <a href="../Functions/Delete.php?p_id=<?php echo $rows['a_id'];?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</a>
                    </td>
                    
                    <td class="px-6 py-4">
                        <a href="./mail.php?id=<?php echo $rows['a_id'];?> " class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Send Email</a>
                    </td>
                </tr>
            <?php
                    }
            ?>

            </tbody>
        </table>
    </div>