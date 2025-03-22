<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centered Box Layout</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #121212;
            color: #ffffff;
            font-family: Arial, sans-serif;
        }

        .container {
            width: 70%;
            height: 80%;
            background: #1e1e1e;
            display: flex;
            flex-direction: column;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
            padding: 20px;
        }

        .search-box {
            height: 10%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .search-box input {
            width: 50%;
            padding: 8px;
            font-size: 16px;
            background: #333;
            color: #fff;
            border: 1px solid #444;
            border-radius: 5px;
        }

        .input-section {
            height: 15%;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .input-section input {
            padding: 8px;
            font-size: 16px;
            background: #333;
            color: #fff;
            border: 1px solid #444;
            border-radius: 5px;
        }

        .input-section button {
            padding: 8px 12px;
            font-size: 16px;
            cursor: pointer;
            background: #444;
            color: #fff;
            border: none;
            border-radius: 5px;
        }

        .table-section {
            flex: 1;
            overflow-y: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: #222;
        }

        th,
        td {
            border: 1px solid #444;
            padding: 8px;
            text-align: left;
            color: #fff;
        }

        th {
            background: #333;
        }

        button {
            background: #555;
            color: #fff;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background: #666;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="search-box">
            <input type="text" placeholder="Search...">
        </div>
        <div class="input-section">
            <input type="text" placeholder="First Name">
            <input type="text" placeholder="Last Name">
            <button>Save</button>
        </div>
        <div class="table-section">
            <table class="user_table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>John</td>
                        <td>Doe</td>
                        <td><button>Save</button></td>
                    </tr>
                    <!-- More rows can be added dynamically -->
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            ajax({
                url: "get_user.php",
                method: "POST",
                success: function() {

                }
            })
        })
    </script>



</body>

</html>