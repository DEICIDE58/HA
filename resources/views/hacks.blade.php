<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Life Hacks</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 30px;
            background: #f4f4f9;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        table {
            width: 80%;
            margin: auto;
            border-collapse: collapse;
            background: white;
            box-shadow: 0px 4px 6px rgba(0,0,0,0.1);
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }
        th {
            background: #007bff;
            color: white;
        }
        tr:nth-child(even) {
            background: #f9f9f9;
        }
        tr:hover {
            background: #eaf2ff;
        }
    </style>
</head>
<body>
    <h1>Life Hacks</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Category</th>
                <th>Tip</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($hacks as $hack)
                <tr>
                    <td>{{ $hack->id }}</td>
                    <td>{{ $hack->category }}</td>
                    <td>{{ $hack->tip }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" style="text-align: center;">No hacks found</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
