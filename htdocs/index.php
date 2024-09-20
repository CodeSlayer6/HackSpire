<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="1.1.3db.css">
    <title>1.1.3 database</title>
</head>
<body>
    <div class="nav-bar">
        <nav>
            <div class="logo"></div>
            <div class="text">
                <h4>PSPS's</h4>
                <h2>Rajendra Mane College of Engineering & Technology</h2>
                <h3>Ambav, Ratnagiri Maharashtra</h3>
            </div>
        </nav>
    </div>
    <div class="cri1">
        <div class="nav">
            <a href="#cri1">Criteria 1</a>
            <a href="cri2.html">Criteria 2</a>
            <a href="cri3.html">Criteria 3</a>
            <a href="cri4.html">Criteria 4</a>
            <a href="cri5.html">Criteria 5</a>
            <a href="cri6.html">Criteria 6</a>
            <a href="#">Criteria 7</a>
        </div>
        <div class="title">
            <p>1.1.3 Teachers of the Institution participate in following activities related to curriculum development and assessment...</p>
        </div>
        <div class="table">
            <table style="width:100%">
                <tr>
                    <th>Sr.No</th>
                    <th>Year</th>
                    <th>Name of teacher participated</th>
                    <th>Name of the body in which full time teacher participated</th>
                    <th>Edit</th>
                    <th>Add Comment</th>
                </tr>

                <!-- Fetch and display data from MySQL -->
                <?php include 'fetch_data.php'; ?>

            </table>
        </div>
    </div>
</body>
</html>
