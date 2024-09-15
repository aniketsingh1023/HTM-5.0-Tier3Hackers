<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Collaboration Dashboard</title>
    <style>
        /* Reset basic styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #1f1f1f;
            color: #eaeaea;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            animation: fadeIn 1s ease-in-out;
        }

        .container {
            display: flex;
            background-color: #2a2a2a;
            width: 80%;
            max-width: 1200px;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.5);
            animation: slideUp 0.7s ease-out;
        }

        .sidebar {
            width: 25%;
            background-color: #111;
            padding: 25px;
            color: #fff;
        }

        .sidebar h2 {
            margin-bottom: 20px;
            font-size: 1.8em;
            text-align: center;
            letter-spacing: 1px;
        }

        .department {
            margin-bottom: 20px;
        }

        .department h3 {
            font-size: 1.4em;
            margin-bottom: 15px;
            font-weight: 500;
            color: #bbb;
        }

        .department ul {
            list-style: none;
            padding-left: 0;
        }

        .department li {
            padding: 12px;
            background-color: #333;
            margin-bottom: 10px;
            border-radius: 8px;
            cursor: grab;
            color: #ddd;
            transition: transform 0.3s ease, background-color 0.3s ease;
        }

        .department li:hover {
            background-color: #444;
            transform: scale(1.05);
        }

        .main-area {
            width: 75%;
            padding: 30px;
            background-color: #1f1f1f;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .main-area h2 {
            margin-bottom: 25px;
            color: #fff;
            font-size: 2em;
            letter-spacing: 1px;
        }

        .new-members {
            background-color: #2d2d2d;
            padding: 20px;
            border: 1px solid #444;
            border-radius: 10px;
            margin-bottom: 25px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }

        .new-members h3 {
            margin-bottom: 15px;
            font-size: 1.5em;
            font-weight: 500;
            color: #bbb;
        }

        .new-member {
            background-color: #222;
            padding: 25px;
            border-radius: 10px;
            min-height: 100px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
            transition: background-color 0.3s ease;
        }

        .new-member p {
            margin: 15px;
            background-color: #333;
            padding: 12px;
            border-radius: 5px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #ddd;
            animation: fadeIn 0.5s ease;
        }

        .remove-button {
            background-color: #ff4d4d;
            color: white;
            border: none;
            padding: 8px;
            cursor: pointer;
            margin-left: 12px;
            border-radius: 3px;
            transition: background-color 0.3s ease;
        }

        .remove-button:hover {
            background-color: #e60000;
        }

        .messaging {
            background-color: #2d2d2d;
            padding: 25px;
            border: 1px solid #444;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }

        .messaging h3 {
            margin-bottom: 15px;
            font-size: 1.5em;
            font-weight: 500;
            color: #bbb;
        }

        #messages {
            height: 220px;
            overflow-y: auto;
            background-color: #222;
            padding: 15px;
            border: 1px solid #444;
            margin-bottom: 20px;
            border-radius: 10px;
        }

        #messages p {
            margin-bottom: 12px;
            padding: 12px;
            background-color: #333;
            border-radius: 5px;
            color: #ddd;
            animation: fadeIn 0.5s ease;
        }

        form {
            display: flex;
            margin-bottom: 15px;
        }

        form input {
            flex-grow: 1;
            padding: 12px;
            border: 1px solid #444;
            border-radius: 8px;
            margin-right: 12px;
            background-color: #2d2d2d;
            color: #eaeaea;
        }

        form button {
            padding: 12px 24px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        form button:hover {
            background-color: #0056b3;
        }

        .video-call-button {
            padding: 12px 24px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .video-call-button:hover {
            background-color: #218838;
        }

        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes slideUp {
            from {
                transform: translateY(30px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <h2>Departments</h2>
            <?php foreach ($employees as $department => $emp_list): ?>
                <div class="department" id="<?= strtolower(str_replace(' ', '-', $department)) ?>">
                    <h3><?= $department ?> Dept.</h3>
                    <ul>
                        <?php foreach ($emp_list as $employee): ?>
                            <li class="employee" draggable="true"><?= $employee ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="main-area">
            <h2>Collaboration Area</h2>
            <div class="new-members">
                <h3>New Members</h3>
                <div class="new-member" id="new-member" ondrop="drop(event)" ondragover="allowDrop(event)">
                    <p>Drag employees here to collaborate</p>
                </div>
            </div>

            <div class="messaging">
                <h3>Messaging</h3>
                <div id="messages">
                    <?php if (!empty($messages)): ?>
                        <?php foreach ($messages as $msg): ?>
                            <p><?= $msg['message'] ?> (<?= date('H:i', strtotime($msg['timestamp'])) ?>)</p>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p>No messages yet.</p>
                    <?php endif; ?>
                </div>
                <form method="post" action="<?= base_url('collaboration/send_message') ?>">
                    <input type="text" name="message" id="messageInput" placeholder="Type a message..." required>
                    <button type="submit" id="sendMessage">Send</button>
                </form>
                <button class="video-call-button" onclick="startVideoCall()">Video Call</button>
            </div>
        </div>
    </div>

    <script>
        document.querySelectorAll('.employee').forEach(emp => {
            emp.addEventListener('dragstart', drag);
        });

        function allowDrop(event) {
            event.preventDefault();
        }

        function drag(event) {
            event.dataTransfer.setData('text', event.target.innerText);
        }

        function drop(event) {
            event.preventDefault();
            const data = event.dataTransfer.getData('text');
            const newMember = document.createElement('p');
            newMember.textContent = data;

            const removeButton = document.createElement('button');
            removeButton.textContent = 'Remove';
            removeButton.classList.add('remove-button');
            removeButton.onclick = () => newMember.remove();

            newMember.appendChild(removeButton);
            document.getElementById('new-member').appendChild(newMember);
        }

        function startVideoCall() {
            alert('Video call started');
        }
    </script>
</body>
</html>
