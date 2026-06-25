<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple To-Do List</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial, Helvetica, sans-serif;
        }

        body{
            background:#f4f4f4;
            display:flex;
            justify-content:center;
            align-items:center;
            height:100vh;
        }

        .container{
            width:400px;
            background:white;
            border-radius:10px;
            box-shadow:0 0 15px rgba(0,0,0,0.15);
            overflow:hidden;
        }

        .header{
            background:#2563eb;
            color:white;
            text-align:center;
            padding:20px;
        }

        .content{
            padding:20px;
        }

        input{
            width:72%;
            padding:10px;
            border:1px solid #ccc;
            border-radius:5px;
            font-size:16px;
        }

        button{
            width:24%;
            padding:10px;
            background:#16a34a;
            color:white;
            border:none;
            border-radius:5px;
            cursor:pointer;
        }

        button:hover{
            background:#15803d;
        }

        ol{
            margin-top:20px;
            padding-left:30px;
        }

        li{
            background:#f8f8f8;
            padding:10px;
            margin-bottom:10px;
            border-radius:5px;
        }

        .footer{
            background:#1f2937;
            color:white;
            text-align:center;
            padding:15px;
            margin-top:15px;
        }
    </style>
</head>
<body>

<div class="container">

    <div class="header">
        <h2>My To-Do List</h2>
    </div>

    <div class="content">

        <input type="text" id="task" placeholder="Enter a task">

        <button onclick="addTask()">Add</button>

        <ol id="taskList"></ol>

    </div>

    <div class="footer">
        <strong>Name:</strong> Snehal Sebastian Mascarenhas <br>
        <strong>Roll No:</strong> 5024135
    </div>

</div>

<script>
function addTask(){

    let task=document.getElementById("task").value;

    if(task===""){
        alert("Please enter a task");
        return;
    }

    let li=document.createElement("li");
    li.textContent=task;

    document.getElementById("taskList").appendChild(li);

    document.getElementById("task").value="";
}
</script>

</body>
</html>