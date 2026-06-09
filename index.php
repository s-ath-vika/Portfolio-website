<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Professional Portfolio</title>
    <link rel="stylesheet" href="style.css?v=1.1">
</head>
<body>

    <header>
        <div class="logo"><strong>Portfolio</strong></div>
        <?php include('navbar.php'); ?>
    </header>

    <main>
        <section id="hero">
            <h1>Hi , I am an Artificial Intelligence & Machine Learning Undergraduate</h1>
            <p>Specializing in predictive modeling and intelligent systems, backed by full-stack implementation skills.</p>
            <a href="#projects" class="btn">Explore Core Projects</a>
        </section>

        <hr>

        <section id="about">
            <h2>About Me</h2>
            <p>Aspiring engineering candidate focused on continuous professional development and exploring emerging technical domains.
Aiming to leverage a strong foundational mindset to quickly adapt to organizational workflows, analyze system logic from the
ground up, and contribute effectively to collaborative engineering projects.</p>
            
        </section>

        <hr>
        <section id="skills">
            <h2>Technical Skills</h2>
            <div class="skills-grid">
        
                <div class="skill-card">
                    <h3>Programming Languages</h3>
                    <p>C, Java, Python</p>
                </div>

                <div class="skill-card">
                    <h3>Frontend Development</h3>
                    <p>HTML5, CSS3, JavaScript</p>
                </div>

                <div class="skill-card">
                    <h3>Backend & Databases</h3>
                    <p>PHP, MySQL</p>
                </div>

                <div class="skill-card">
                    <h3>Tools & Version Control</h3>
                    <p>Git, GitHub, Canva</p>
                </div>

            </div>
        </section>

        <hr>
        <section id="projects">
            <h2>Featured Projects</h2>
            <div class="project-container">
                
                <article class="project-card">
                    <h3>Real-Time Intelligent Phishing & Malicious URL Detector</h3>
                    <p class="tech-stack"><strong>Tech Stack:</strong> Python, Scikit-learn, Random Forest, Streamlit</p>
                    <ul>
                        <li>Engineered an end-to-end Random Forest pipeline achieving 96% accuracy across 650K+ URL samples.</li>
                        <li>Implemented a custom feature extraction script isolating 7 distinct lexical and network protocol indicators.</li>
                        <li>Developed a responsive Streamlit web app with a localized model inference engine for live threat scoring.</li>
                    </ul>
                </article>

                <article class="project-card">
                    <h3>Real-Time Weather Tracker</h3>
                    <p class="tech-stack"><strong>Tech Stack:</strong> Python, OpenWeatherMap API, JSON</p>
                    <ul>
                        <li>Engineered a desktop app to fetch and parse real-time global weather data via RESTful APIs.</li>
                        <li>Implemented robust error-handling to manage invalid queries, network timeouts, and rate limits.</li>
                        <li>Processed raw JSON data feeds to extract key metrics like temperature, humidity, and wind speed.</li>
                    </ul>
                </article>

                <article class="project-card">
                    <h3>Python QR Code Generator</h3>
                    <p class="tech-stack"><strong>Tech Stack:</strong> Python, Qrcode Library</p>
                    <ul>
                        <li>Utilized Python and the qrcode library to generate QR codes from user input.</li>
                        <li> Developed a Python application that converts text, URLs, or data into scannable QR code images.</li>
                        <li>Enabled users to easily create, save, and share QR codes in a simple and efficient format.</li>
                    </ul>
                </article>

            </div>
        </section>

        <hr>

        <section id="contact">
            <h2>Get In Touch</h2>
            <form id="contactForm" method="POST">
                <div>
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required placeholder="Your Name">
                </div>
                <br>
                <div>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required placeholder="Your Email Address">
                </div>
                <br>
                <div>
                    <label for="subject">Reason for Contact:</label>
                    <select id="subject" name="subject">
                        <option value="internship">Internship Opportunity</option>
                        <option value="project">Project Collaboration</option>
                        <option value="hello">Just Saying Hi!</option>
                    </select>
                </div>
                <br>
                <div>
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="5" required placeholder="Write your message here..."></textarea>
                </div>
                <br>
                <button type="submit">Send Message</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2026 Developer Portfolio. All rights reserved.</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>