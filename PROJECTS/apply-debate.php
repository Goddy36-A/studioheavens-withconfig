<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply for Debate Program | Studio Heavens</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .form-container {
            background: #fff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            max-width: 700px;
            margin: 30px auto;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        form label {
            margin-bottom: 5px;
            font-weight: 600;
            color: #1e3c72;
        }
        form input, form textarea, form select {
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1rem;
        }
        form button {
            background: #1e3c72;
            color: #fff;
            padding: 14px;
            border: none;
            border-radius: 4px;
            font-size: 1.1rem;
            cursor: pointer;
            font-weight: 600;
            transition: background 0.3s;
        }
        form button:hover {
            background: #2a5298;
        }
        .back-link {
            display: inline-block;
            margin-bottom: 20px;
            color: #1e3c72;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <header>
        <div class="logo"></div>
        <h1>Debate Program Application</h1>
        <p>Submit your event details to partner with Studio Heavens</p>
    </header>

    <div class="container">
        <a href="debate.html" class="back-link">⬅ Back to Debate Details</a>
                <!-- 🔔 NEW: Membership Prerequisite Notice -->
        <div class="membership-alert-box">
            <h5>⚠️ Important Requirement</h5>
            <p>To qualify for our Debate Sponsorship Program, your school or institution must first be an official registered member of Studio Heavens.</p>
            <a href="index.php#join-us" class="alert-join-btn">Join Our Organization First ➔</a>
        </div>


        <div class="form-container">
            <?php
            if (isset($_POST['submit_debate'])) {
                $institution = htmlspecialchars($_POST['institution']);
                $contact_person = htmlspecialchars($_POST['contact_person']);
                $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
                $phone = htmlspecialchars($_POST['phone']);
                $event_date = htmlspecialchars($_POST['event_date']);
                $motion = htmlspecialchars($_POST['motion']);
                $needs = isset($_POST['needs']) ? implode(", ", $_POST['needs']) : "None selected";

                // Email content configuration
                $to = "studioheavens380@gmail.com"; // Replace with your company email
                $subject = "New Debate Program Application from " . $institution;
                
                $body = "You have received a new Debate Sponsorship Application.\n\n" .
                        "Institution: $institution\n" .
                        "Contact Person: $contact_person\n" .
                        "Email: $email\n" .
                        "Phone: $phone\n" .
                        "Proposed Date: $event_date\n" .
                        "Debate Motion/Topic: $motion\n" .
                        "Requested Services: $needs\n";

                $headers = "From: webmaster@studioheavens.com\r\n" .
                           "Reply-To: $email\r\n";

                if (mail($to, $subject, $body, $headers)) {
                    echo "<p style='color: green; font-weight: bold; margin-bottom: 20px;'>Application submitted successfully! We will get back to you shortly.</p>";
                } else {
                    echo "<p style='color: #d9534f; font-weight: bold; margin-bottom: 20px;'>Form processed locally! (Email delivery requires live server hosting).</p>";
                }
            }
            ?>

            <form action="" method="POST">
                <label for="institution">Institution / School Name</label>
                <input type="text" id="institution" name="institution" placeholder="e.g., Greenhill Academy" required>

                <label for="contact_person">Contact Person Name</label>
                <input type="text" id="contact_person" name="contact_person" placeholder="e.g., Patron or Club President" required>

                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required>

                <label for="phone">Phone / WhatsApp Number</label>
                <input type="text" id="phone" name="phone" required>

                <label for="event_date">Proposed Date of Competition</label>
                <input type="date" id="event_date" name="event_date" required>

                <label for="motion">Proposed Debate Motion / Topic</label>
                <textarea id="motion" name="motion" rows="3" placeholder="e.g., This house believes that AI will replace traditional classrooms..."></textarea>

                <label style="margin-bottom: 10px;">What other support do you require from Studio Heavens? (Hold Ctrl to select multiple)</label>
                <select name="needs[]" multiple style="height: 80px;">
                    <option value="Disco Sounds / PA System">Photogrphy & Stationery</option>
                    <option value="Event Photography">Computer software, care and Maintenance</option>
                    <option value="Stationery / Printing">Unisex Saloon & Disco Sounds</option>
                </select>

                <button type="submit" name="submit_debate">Submit Application</button>
            </form>
        </div>
    </div>

    <footer>
        <p>&copy; 2026 Studio Heavens. All Rights Reserved.</p>
    </footer>

</body>
</html>

