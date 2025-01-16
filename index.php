<?php
$conn = new mysqli('localhost', 'root', '', 'portfolio_db');
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pandya Sub Portfolio</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="navbar">
        <a href="#home">Home</a>
        <a href="#about">About Me</a>
        <a href="#guestbook">Guest Book</a>
    </div>

    <section id="home" class="home-section">
        <div class="animated-text-container">
            <h3 class="intro-text">Welcome,</h3>
            <h1 class="main-text">Glad to share<span class="highlight"> my work with you!</span></h1>
            <h3 class="intro-text2">And I am a <span class="dynamic-text">
                    <span>Devin Pandya</span>
                </span></h3>
        </div>
    </section>

    <section id="about" class="about-section">
        <div class="container">
            <h2 class="section-title">About Me</h2>
            <div class="about-content">
                <div class="about-image" data-aos="fade-right">
                    <img src="image/WhatsApp Image 2025-01-01 at 21.05.02_7fb40701.jpg" alt="About Me Image" />
                </div>
                <div class="about-text" data-aos="fade-left">
                    <h3>yo what's up!!</h3>
                    <p>
                        I am a passionate student of Informatics with a strong interest in
                        technology, creativity, and innovation. My journey has been filled
                        with challenges that helped me grow, and I am constantly seeking to
                        learn new skills and explore new opportunities.
                    </p>
                    <p>
                        In addition to academics, I enjoy working on personal projects,
                        designing creative solutions, and contributing to my community.
                    </p>
                    <a href="#portfolio" class="btn">View My Gallery</a>
                </div>
            </div>
        </div>
    </section>

    <section class="personal-section">
        <div class="container-person">
            <!-- Pendidikan -->
            <div class="section" id="education">
                <h2>Pendidikan</h2>
                <ul class="timeline">
                    <li class="timeline-item">
                        <h3>Informatics student</h3>
                        <p>Universitas Islam Indonesia, 2023 - Now</p>
                    </li>
                    <li class="timeline-item">
                        <h3>SMAN 1 KARANGANYAR</h3>
                        <p>2020 - 2023</p>
                    </li>
                </ul>
            </div>

            <!-- Motivator -->
            <div class="section" id="motivator">
                <h2>Life’s Fuel</h2>
                <div class="motivator-photo">
                    <img src="image/mahatMagandhi.jpg" alt="Motivator Image">
                    <div class="photo-description">
                        <p>"Hiduplah seolah engkau mati besok. <br> Belajarlah seolah engkau hidup selamanya"</p>
                    </div> 
                    <img src="image/download.jpg" alt="Motivator Image">
                    <div class="photo-description">
                        <p>"Yesterday is History, Tomorrow is a Mistery <br> but Today is a Gift <br> That is way it is called the present"</p>
                    </div>
                    <img src="image/Temida.jpg" alt="Motivator Image">
                    <div class="photo-description">
                        <p>"Fortis Fortuna Adiuvat"</p>
                    </div>
                    <img src="image/ostende.jpg" alt="Motivator Image">
                    <div class="photo-description">
                        <p>"Tace et Ostende"</p>
                    </div>
                </div>
            </div>

            <!-- Skill Aplikasi -->
            <section id="skills" class="section skills">
                <div class="container">
                    <h2 class="section-title">Skills</h2>
                    <div class="skills-wrapper">
                        <div class="skill-item" data-aos="fade-up">
                            <img src="icons/html-5-svgrepo-com.svg" alt="HTML" class="skill-icon">
                            <p>HTML</p>
                        </div>
                        <div class="skill-item" data-aos="fade-up" data-aos-delay="100">
                            <img src="icons/css-3-svgrepo-com.svg" alt="CSS" class="skill-icon">
                            <p>CSS</p>
                        </div>
                        <div class="skill-item" data-aos="fade-up" data-aos-delay="200">
                            <img src="icons/figma-svgrepo-com.svg" alt="Figma" class="skill-icon">
                            <p>Figma</p>
                        </div>
                        <div class="skill-item" data-aos="fade-up" data-aos-delay="300">
                            <img src="icons/adobe-lightroom-svgrepo-com.svg" alt="LR" class="skill-icon">
                            <p>Lightroom</p>
                        </div>
                    </div>
                </div>
            </section>


        </div>
    </section>

    <section id="portfolio" class="portfolio-section">
        <h2>My Gallery </h2>
        <div class="gambar">
            <div class="kartu" style="background-image: url('image/IMG-20241030-WA0003.jpg');"></div>
            <div class="kartu" style="background-image: url('image/IMG-20241030-WA0004.jpg');"></div>
            <div class="kartu" style="background-image: url('image/IMG-20241030-WA0006.jpg');"></div>
            <div class="kartu" style="background-image: url('image/A4\ -\ 4\(1\).png');"></div>
            <div class="kartu" style="background-image: url('image/WhatsApp\ Image\ 2024-10-30\ at\ 00.09.08_187d18e1.jpg');"></div>
            <div class="kartu" style="background-image: url('image/IMG-20241030-WA0007.jpg');"></div>
            <div class="kartu" style="background-image: url('image/IMG-20241030-WA0002.jpg');"></div>
            <div class="kartu" style="background-image: url('image/IMG-20241030-WA0001.jpg');"></div>
        </div>
    </section>

    <section id="guestbook" class="guestbook-section">
        <div class="container">
            <h2>Guest Book</h2>
            <form id="guestbook-form" action="insertMessage.php" method="POST">
                <div class="form-group">
                    <input type="text" id="guest-name" name="name" placeholder="Your Name" required>
                </div>
                <div class="form-group">
                    <textarea id="guest-message" name="message" rows="5" placeholder="Your Message" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <div id="guestbook-messages">
                <h3>Messages</h3>
                <?php
                $result = $conn->query('SELECT * FROM guestbook ORDER BY id DESC');
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='guest-message'>
                            <strong>{$row['name']}</strong>: {$row['message']}
                            <a href='editMessage.php?id={$row['id']}' class='edit-link'>Edit</a> |
                            <a href='deleteMessage.php?id={$row['id']}' class='delete-link'>Delete</a>
                          </div>";
                }

                ?>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="footer-content">
            <p>&copy; 2025 PandyaSub. All Rights Reserved.</p>
            <div class="social-icons">
                <a href="facebook.com" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/devinpandya11?igsh=MXVmeTM2NmFma3Z4MA==" title="Instagram"><i class="fab fa-instagram"></i></a>
                <a href="https://github.com/viienz" title="github"><i class="fab fa-github"></i></a>
                <a href="devinpandya64@gmail.com" title="LinkedIn"><i class="fas fa-envelope"></i></a>
            </div>
        </div>
    </footer>

    <script src="index.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>

<?php
$conn->close();
?>