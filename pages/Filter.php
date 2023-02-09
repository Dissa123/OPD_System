  <?php require "../connection.php";
    // SQL query to select data from database
    $sql = " SELECT * FROM appointment ORDER BY a_id DESC ";
    $result = $conn->query($sql);
    ?>


<body>
    <div class="flex flex-row p-2">
        <form action="" method="GET" class="flex flex-row justify-center">
            <div>
                <label for="">From Date</label>
                <input type="date" name="from_date" class="p-2">
            </div>

            <div>
                <label for="">To Date</label>
                <input type="date" name="to_date" class="p-2">
            </div>

            <div>
                <label for="">Number</label>
                <input type="number" name="a_number" class="border-2 p-2">
            </div>

            <div>
                <label for="">Appointment Name</label>
                <input type="text" name="name" class="border-2 p-2">
            </div>

            <div class="">
                <button type="submit" class="flex border p-2 ml-12">Filter</button>
            </div>

        </form>