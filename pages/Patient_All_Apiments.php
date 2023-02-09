<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../dist/output.css">
    <title>Document</title>
</head>

<body class="">
<?php
include("./NavigationBar.php")
?>
    <?php require "../connection.php";
    // SQL query to select data from database
    $sql = " SELECT * FROM appointment ORDER BY a_id DESC ";
    $result = $conn->query($sql);
    ?>
    </div>

    <div class="flex flex-row text-center items-center justify-center">
        <!-- count current patients -->
        <div class="flex flex-col border-2 p-10">
        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAA8CAYAAAA6/NlyAAAACXBIWXMAAAsTAAALEwEAmpwYAAABsklEQVR4nO2bQU7DQAxF/6a5QwsHAhZwjaLmdJQrABFQjtBKLSxg2bA3ijSR0KhpJqk9caZ+klcjzfj3W446cYB4ZAByAAWAXxcvABZuLSlmAD4AUEOsAEyRCFmL2DreAUyQAHmA2DrukQCFJ+rBlfgFgKW39owEKD1RldCaS29tD4VkXrcNLdcQwSERtbvPAhvQsVg60ZXYxxP3Eu3uGYNYiRDr7rkCcVG7e9HQbdvomnwb0bp7eaT5xBQcrbtTj8Qqdh3EbiPkI37AdaDoSuxVCoKlMMHckDk8LFbS3JCV9LBYSWv9Re8A/AD4BnCrIB/xA77+7fF5DoJJ2T6jSdQEc0PKnDGHuSFlzqhx+AbApsfVjh8bd3lwaj69CT1gyyA25DltgrmhQIerMlwzuLtuueNS4/DY9hlNoiaYG1LmjDnMDSlzZjQOb7xHz9D5iB9Qv2vadXyXJJXPcAd0xARzQ+bwsFhJc0PnVtL7nkMtEkQZaikaJupic2iCT2RsacHwp14q5lKjhysF4vx4lRwsn7rZRlISbzE+HZi42canA9N5MaJ0Z89T+WTAMAzDgOMP/15DKxrN3bAAAAAASUVORK5CYII=">
            <h1 class="text-2xl">All Patients</h1>
            <h3 class="text-2xl"> <?php include("../Functions/Count.php"); ?></h3>
        </div>
    </div>


    <div class="">
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
                        <a href="../Functions/Delete.php?done_id=<?php echo $rows['a_id']; ?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Done</a>
                    </td>


                </tr>
            <?php
                    }

            ?>


            </tbody>
        </table>

    </div>