 <?php session_start(); ?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studio Heavens | Multi-Service Hub</title>
    
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Header -->
    <header>
        <div class="logo"></div>
        <h1>STUDIO HEAVENS</h1>
        <p>Your Ultimate One-Stop Hub for Creative, Digital, Lifestyle, and Community Services</p>
    </header>

    <!-- Navigation -->
    <nav>
        <a href="services.html">Our Services</a>
        <a href="debate.html">Debate Sponsorship</a>
        <a href="#join-us">Join Organization</a>
        <a href="#contact">Contact Us</a>
    </nav>

    <!-- Main Content Container -->
    <div class="container">

        <!-- Services Section -->
        <section id="services">
            <h2 class="section-title">What We Do</h2>
            <div class="services-grid">
                
                <div class="service-card">
                    <h3>📸 Photography & Stationery</h3>
                    <p>Capturing your precious moments with high-definition photography. We also provide premium stationery supplies, printing, photocopying, and graphic design solutions.</p>
                </div>

                <div class="service-card">
                    <h3>🎵 Disco Sounds</h3>
                    <p>Bringing life to your events! Premium sound system rentals, professional DJs, and lighting setups tailored for weddings, parties, and corporate functions.</p>
                </div>

                <div class="service-card">
                    <h3>💻 Computer Software & Website Development</h3>
                    <p>Genuine software installation, OS updates, antivirus deployment, and custom software utilities to optimize your daily productivity.</p>
                </div>

                <div class="service-card">
                    <h3>🔧 Computer Care & Maintenance</h3>
                    <p>Expert hardware repair, routine system tune-ups, dust cleaning, thermal paste replacement, and reliable data recovery services.</p>
                </div>

                <div class="service-card">
                    <h3>💇 Unisex Saloon</h3>
                    <p>Look your absolute best. Modern haircuts, hair styling, braiding, dreadlocks, and professional grooming services for everyone.</p>
                </div>

            </div>
        </section>

        <!-- Debate & Contact Section -->
        <section id="sponsorship">
            <h2 class="section-title">Debate Competition Sponsorship</h2>
            <p>Organize Debate competitions,sponsor different competitons and provide basic talented equipment and knowledge about trainings and facilitaion.</p>
            <div class="contact-wrapper">
                
                <div class="contact-info">
                    <h3>Empowering the Youth</h3>
                    <p>At Studio Heavens, we believe in fostering critical thinking and leadership. We proudly sponsor local school, university, and community debate competitions.</p>
                    <p>Whether you need financial backing, sound equipment for your event, or promotional media coverage, apply through our form.</p>
                    <br>
                    <!-- 🌐 Membership & Join Organization Section -->
<section id="join-us" style="margin-top: 60px;">
    <h2 class="section-title">Join Our Organization</h2>
    
    <div class="contact-wrapper">
        <!-- Left Side: Pricing Structure -->
        <div class="contact-info">
            <h3>Membership & Subscriptions</h3>
            <p>Become an official member of the Studio Heavens network! Our tier-based fees are structured directly around age groups to ensure inclusivity for students and professionals alike.</p>
            
            <table class="fee-table">
                <thead>
                    <tr>
                        <th>Age Group</th>
                        <th>One-time Join fee</th>
                        <th>Monthly Sub Fee</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Youth (Under 18)</strong></td>
                        <td>UGX 10,000</td>
                        <td>UGX 5,000</td>
                    </tr>
                    <tr>
                        <td><strong>Young Adults (18 - 25)</strong></td>
                        <td>UGX 25,000</td>
                        <td>UGX 10,000</td>
                    </tr>
                    <tr>
                        <td><strong>Adults (26+)</strong></td>
                        <td>UGX 50,000</td>
                        <td>UGX 20,000</td>
                    </tr>
                </tbody>
            </table>
                        <!-- 📱 Mobile Money Payment Instructions Box -->
            <div class="payment-box">
                <h4>💳 How to Pay Your Fees</h4>
                <p>Please send your One-Time Join Fee and Monthly Subscription Fee to our official studio mobile line(MUBANGIZI PETERSON):</p>
                <p class="phone-line"><strong>Studio Mobile Line:</strong> +256 761 639 614/+256 759 724 432</p>
                <p style="font-size: 0.9rem; margin-bottom: 0;">
                    <em>* Please use your full name as the payment reference so we can easily verify and approve your registration account.</em>
                </p>
            </div>


            <p style="font-size: 0.9rem; color: #666; margin-top: 15px;">* Subscription fees are billed on the 1st of every calendar month following registration approval.</p>
        </div>

        <!-- Right Side: Application Form -->
        <div>
            <?php
            if (isset($_POST['submit_membership'])) {
                $member_name = htmlspecialchars($_POST['m_name']);
                $member_email = filter_var($_POST['m_email'], FILTER_SANITIZE_EMAIL);
                $member_age = intval($_POST['m_age']);
                
                // Automatically determine tier based on age input
                $tier = "Adult (26+)";
                if ($member_age < 18) {
                    $tier = "Youth (Under 18)";
                } elseif ($member_age >= 18 && $member_age <= 25) {
                    $tier = "Young Adult (18-25)";
                }

                $to = "studioheavens380@gmail.com"; // Replace with your company email
                $subject = "New Membership Registration: " . $member_name;
                
                $body = "You have received a new membership application.\n\n" .
                        "Full Name: $member_name\n" .
                        "Email: $member_email\n" .
                        "Age: $member_age\n" .
                        "Assigned Tier Group: $tier\n";

                $headers = "From: webmaster@studioheavens.com\r\n" .
                           "Reply-To: $member_email\r\n";

                if (mail($to, $subject, $body, $headers)) {
                    echo "<p style='color: green; font-weight: bold; margin-bottom: 15px;'>Registration submitted! Welcome to Studio Heavens.</p>";
                } else {
                    echo "<p style='color: #d9534f; font-weight: bold; margin-bottom: 15px;'>Form processed locally! Your details match the $tier tier group profile.</p>";
                }
            }
            ?>

            <form action="" method="POST">
                <label for="m_name">Full Name</label>
                <input type="text" id="m_name" name="m_name" placeholder="Your Name" required>

                <label for="m_email">Email Address</label>
                <input type="email" id="m_email" name="m_email" placeholder="name@domain.com" required>

                <label for="m_age">Your Age</label>
                <input type="number" id="m_age" name="m_age" min="1" max="120" placeholder="e.g., 20" required>

                <button type="submit" name="submit_membership">Submit Registration</button>
            </form>
        </div>
    </div>
</section>


                    <h3>Find Us</h3>
                    <p>📍 <strong>Address:</strong> Mutara T/C, Mitooma District</p>
                    <p>📞 <strong>Phone:</strong> +256 761 639 614/ +256 759 724 432</p>
                    <p>💬 <strong>WhatsApp:</strong> <a href="https://wa.me/256761639614" target="_blank" style="color: #25D366; font-weight: bold; text-decoration: none;">+256 761 639 614</a></p>
                    <p>📧 <strong>Email:</strong> studioheavens380@gmail.com</p>
                </div>

                <!-- 📞 Contact Us Section -->
<section id="contact" style="padding: 60px 0; background-color: #f4f6f9;">
    <div class="container">
        <h2 style="text-align: center; color: #1e3c72; margin-bottom: 40px; font-size: 2rem;">Contact Us</h2>
        
        <div class="contact-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 40px;">
            
            <!-- Column 1: Physical Location & Address -->
            <div class="contact-box-clean" style="background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
                <h3 style="color: #1e3c72; margin-bottom: 20px; font-size: 1.4rem; border-bottom: 2px solid #1e3c72; padding-bottom: 8px;">📍 Our Location</h3>
                <p style="font-size: 1.05rem; line-height: 1.6; color: #333; margin-bottom: 15px;">
                    <strong>Studio Address:</strong><br>
                    Mutara T/C, Mitooma District<br>
                    Mbarara, Uganda
                </p>
                <p style="font-size: 1.05rem; line-height: 1.6; color: #333;">
                    <strong>Operational Hours:</strong><br>
                    Monday – Saturday: 8:00 AM – 5:00 PM<br>
                    Sundays: Closed
                </p>
            </div>

            <!-- Column 2: Communication & Social Media Lines -->
            <div class="contact-box-clean" style="background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
                <h3 style="color: #1e3c72; margin-bottom: 20px; font-size: 1.4rem; border-bottom: 2px solid #1e3c72; padding-bottom: 8px;">💬 Communication Channels</h3>
                
                <table style="width: 100%; border-collapse: collapse;">
                    <tr style="border-bottom: 1px solid #eee;">
                        <td style="padding: 10px 0; font-weight: bold; color: #25D366;">🟢 WhatsApp Line:</td>
                        <td style="padding: 10px 0; text-align: right;"><a href="https://wa.me/256761639614" target="_blank" style="color: #333; text-decoration: none; font-weight: 600;">+256 761 639 614</a></td>
                    </tr>
                    <tr style="border-bottom: 1px solid #eee;">
                        <td style="padding: 10px 0; font-weight: bold; color: #1e3c72;">✉️ Email Address:</td>
                        <td style="padding: 10px 0; text-align: right;"><a href="mailto:studioheavens380@gmail.com" style="color: #333; text-decoration: none; font-weight: 600;">studioheavens380@gmail.com</a></td>
                    </tr>
                    <tr style="border-bottom: 1px solid #eee;">
                        <td style="padding: 10px 0; font-weight: bold; color: #1877F2;">🔵 Facebook:</td>
                        <td style="padding: 10px 0; text-align: right;"><a href="https://facebook.com/studioheavens" target="_blank" style="color: #333; text-decoration: none; font-weight: 600;">@studioheavens</a></td>
                    </tr>
                    <tr style="border-bottom: 1px solid #eee;">
                        <td style="padding: 10px 0; font-weight: bold; color: #1DA1F2;">🐦 Twitter / X:</td>
                        <td style="padding: 10px 0; text-align: right;"><a href="https://twitter.com/studioheavens" target="_blank" style="color: #333; text-decoration: none; font-weight: 600;">@studioheavens</a></td>
                    </tr>
                    <tr>
                        <td style="padding: 10px 0; font-weight: bold; color: #E1306C;">📸 Instagram:</td>
                        <td style="padding: 10px 0; text-align: right;"><a href="https://instagram.com/studioheavens" target="_blank" style="color: #333; text-decoration: none; font-weight: 600;">@studioheavens</a></td>
                    </tr>
                </table>
            </div>

        </div>
    </div>
</section>


    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Studio Heavens. All Rights Reserved.</p>
    </footer>

</body>
</html>

