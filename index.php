<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="icon.png" type="image/x-icon">
    <title>My Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script>
        tailwind.config = { darkMode: 'class' }

        function toggleDarkMode() {
            const htmlElement = document.documentElement;
            htmlElement.classList.toggle('dark');
            
            document.getElementById('darkModeIcon').classList.toggle('hidden');
            document.getElementById('lightModeIcon').classList.toggle('hidden');
            
            localStorage.setItem('darkMode', htmlElement.classList.contains('dark'));
        }

        document.addEventListener('DOMContentLoaded', () => {
            const savedDarkMode = localStorage.getItem('darkMode') === 'true';
            if (savedDarkMode) {
                document.documentElement.classList.add('dark');
                document.getElementById('darkModeIcon').classList.add('hidden');
                document.getElementById('lightModeIcon').classList.remove('hidden');
            }
        });

        function handleSubmit(event) {
            event.preventDefault();
            
            const nameInput = document.getElementById('name');
            const emailInput = document.getElementById('email');
            const messageInput = document.getElementById('message');
            const formStatus = document.getElementById('formStatus');
            
            if (!nameInput.value.trim()) {
                formStatus.textContent = 'Please enter your name.';
                formStatus.className = 'text-red-500 text-center mt-2';
                return;
            }
            
            if (!emailInput.value.trim() || !isValidEmail(emailInput.value)) {
                formStatus.textContent = 'Please enter a valid email address.';
                formStatus.className = 'text-red-500 text-center mt-2';
                return;
            }
            
            if (!messageInput.value.trim()) {
                formStatus.textContent = 'Please enter a message.';
                formStatus.className = 'text-red-500 text-center mt-2';
                return;
            }

            const subject = encodeURIComponent(`Portfolio Contact: Message from ${nameInput.value}`);
            const body = encodeURIComponent(`Name: ${nameInput.value}\nEmail: ${emailInput.value}\n\nMessage:\n${messageInput.value}`);
            
            window.location.href = `mailto:randulatheshan5@gmail.com?subject=${subject}&body=${body}`;
            
            formStatus.textContent = 'Message opened in your email client. Please send the email.';
            formStatus.className = 'text-green-500 text-center mt-2';
            
            setTimeout(() => {
                event.target.reset();
                formStatus.textContent = '';
            }, 3000);
        }

        function isValidEmail(email) {
            const re = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            return re.test(String(email).toLowerCase());
        }

        // Mobile menu toggle
        function toggleMobileMenu() {
            const mobileMenu = document.getElementById('mobileMenu');
            mobileMenu.classList.toggle('hidden');
        }
    </script>
</head>
<body class="bg-gray-100 dark:bg-gray-900 font-sans">
    <!-- Navigation -->
    <nav class="bg-white dark:bg-gray-800 shadow-md fixed w-full z-10 top-0">
        <div class="max-w-6xl mx-auto px-4 py-3 flex justify-between items-center">
            <div class="text-2xl font-bold text-gray-800 dark:text-white">Randula Theshan</div>
            
            <!-- Desktop Navigation -->
            <div class="hidden md:flex space-x-4 items-center">
                <a href="#home" class="text-gray-600 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition duration-300">Home</a>
                <a href="#about" class="text-gray-600 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition duration-300">About</a>
                <a href="#projects" class="text-gray-600 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition duration-300">Projects</a>
                <a href="#contact" class="text-gray-600 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition duration-300">Contact</a>
                
                <button 
                    onclick="toggleDarkMode()" 
                    class="bg-gray-200 dark:bg-gray-700 p-2 rounded-lg focus:outline-none transition duration-300"
                    aria-label="Toggle Dark Mode"
                >
                    <i id="darkModeIcon" class="fas fa-moon text-gray-800"></i>
                    <i id="lightModeIcon" class="fas fa-sun text-yellow-500 hidden"></i>
                </button>
            </div>
            
            <!-- Mobile Navigation Toggle -->
            <div class="md:hidden flex items-center">
                <button 
                    onclick="toggleDarkMode()" 
                    class="bg-gray-200 dark:bg-gray-700 p-2 rounded-lg focus:outline-none"
                    aria-label="Toggle Dark Mode"
                >
                    <i class="fas fa-moon text-gray-800 dark:hidden"></i>
                    <i class="fas fa-sun text-yellow-500 hidden dark:inline"></i>
                </button>&nbsp&nbsp
                <button 
                    onclick="toggleMobileMenu()" 
                    class="text-gray-600 dark:text-gray-300 focus:outline-none"
                >
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>
        </div>
        
        <!-- Mobile Menu -->
        <div 
            id="mobileMenu" 
            class="md:hidden hidden absolute top-full left-0 w-full bg-white dark:bg-gray-800 shadow-md"
        >
            <div class="flex flex-col items-center py-4 space-y-4">
                <a href="#home" class="text-gray-600 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400">Home</a>
                <a href="#about" class="text-gray-600 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400">About</a>
                <a href="#projects" class="text-gray-600 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400">Projects</a>
                <a href="#contact" class="text-gray-600 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header id="home" class="pt-20 pb-16 bg-gradient-to-r from-blue-500 to-purple-600 text-white">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <img 
                src="profile.png" 
                alt="Profile" 
                class="w-48 h-48 rounded-full mx-auto mb-6 border-4 border-white shadow-lg"
            >
            <h1 class="text-4xl font-bold mb-4">Randula Theshan</h1>
            <p class="text-xl mb-6">Web Developer | Creative Web Designer</p>
            <div class="flex justify-center space-x-4">
                <a href="https://github.com/TheshanBMR" target="_blank" class="text-white hover:text-gray-200">
                    <i class="fab fa-github text-3xl"></i>
                </a>
                <a href="https://www.figma.com/@TheshanBMR" target="_blank" class="text-white hover:text-gray-200">
                    <i class="fab fa-figma text-3xl"></i>
                </a>
                <a href="https://t.me/TheshanBMR" target="_blank" class="text-white hover:text-gray-200">
                    <i class="fab fa-telegram text-3xl"></i>
                </a>
                <a href="https://discord.com/users/1196013048801013770" target="_blank" class="text-white hover:text-gray-200">
                    <i class="fab fa-discord text-3xl"></i>
                </a>
                <a href="mailto:randulatheshan5@gmail.com" class="text-white hover:text-gray-200">
                    <i class="fas fa-envelope text-3xl"></i>
                </a>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="py-16 bg-white dark:bg-gray-800">
        <?php
            include("about.php");
        ?>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-16 bg-gray-100 dark:bg-gray-900">
        <div class="max-w-4xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-8 text-gray-800 dark:text-white">Projects</h2>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-white dark:bg-gray-700 rounded-lg shadow-md p-6 hover:shadow-xl transition duration-300">
                    <h3 class="text-xl font-semibold mb-3 text-gray-800 dark:text-white">Web App</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">Full-stack application with React and Node.js</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-300 px-2 py-1 rounded-full text-xs">React</span>
                        <span class="bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-300 px-2 py-1 rounded-full text-xs">Node.js</span>
                        <span class="bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-300 px-2 py-1 rounded-full text-xs">MongoDB</span>
                    </div>
                </div>
                <div class="bg-white dark:bg-gray-700 rounded-lg shadow-md p-6 hover:shadow-xl transition duration-300">
                    <h3 class="text-xl font-semibold mb-3 text-gray-800 dark:text-white">Mobile App</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">Cross-platform mobile application</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-300 px-2 py-1 rounded-full text-xs">React Native</span>
                        <span class="bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-300 px-2 py-1 rounded-full text-xs">Firebase</span>
                    </div>
                </div>
                <div class="bg-white dark:bg-gray-700 rounded-lg shadow-md p-6 hover:shadow-xl transition duration-300">
                    <h3 class="text-xl font-semibold mb-3 text-gray-800 dark:text-white">Data Visualization</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">Interactive dashboard for analytics</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-300 px-2 py-1 rounded-full text-xs">D3.js</span>
                        <span class="bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-300 px-2 py-1 rounded-full text-xs">React</span>
                        <span class="bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-300 px-2 py-1 rounded-full text-xs">TypeScript</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-16 bg-white dark:bg-gray-800">
        <div class="max-w-4xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-8 text-gray-800 dark:text-white">Contact Me</h2>
            <form 
                onsubmit="handleSubmit(event)" 
                class="max-w-lg mx-auto"
            >
                <div class="mb-4">
                    <input 
                        id="name"
                        type="text" 
                        placeholder="Your Name" 
                        required
                        class="w-full px-4 py-2 border rounded-lg bg-white dark:bg-gray-700 dark:text-white dark:border-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    >
                </div>
                <div class="mb-4">
                    <input 
                        id="email"
                        type="email" 
                        placeholder="Your Email" 
                        required
                        class="w-full px-4 py-2 border rounded-lg bg-white dark:bg-gray-700 dark:text-white dark:border-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    >
                </div>
                <div class="mb-4">
                    <textarea 
                        id="message"
                        placeholder="Your Message" 
                        rows="4" 
                        required
                        class="w-full px-4 py-2 border rounded-lg bg-white dark:bg-gray-700 dark:text-white dark:border-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    ></textarea>
                </div>
                <div class="text-center">
                    <button 
                        id="submitBtn"
                        type="submit"
                        class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600 dark:bg-blue-600 dark:hover:bg-blue-700 transition duration-300"
                    >
                        Send Message
                    </button>
                </div>
                <div id="formStatus" class="mt-2"></div>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 dark:bg-black text-white py-6">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <p>&copy; 2024 Randula Theshan. All Rights Reserved.</p>
        </div>
    </footer>
</body>
</html>
