import React from 'react';
import { Home, GitHub, Linkedin, Mail } from 'lucide-react';

const Portfolio = () => {
  return (
    <div className="min-h-screen bg-gray-100 font-sans">
      {/* Navigation */}
      <nav className="bg-white shadow-md fixed w-full z-10 top-0">
        <div className="max-w-6xl mx-auto px-4 py-3 flex justify-between items-center">
          <div className="text-2xl font-bold text-gray-800">My Portfolio</div>
          <div className="flex space-x-4">
            <a href="#home" className="text-gray-600 hover:text-blue-600 transition duration-300">Home</a>
            <a href="#about" className="text-gray-600 hover:text-blue-600 transition duration-300">About</a>
            <a href="#projects" className="text-gray-600 hover:text-blue-600 transition duration-300">Projects</a>
            <a href="#contact" className="text-gray-600 hover:text-blue-600 transition duration-300">Contact</a>
          </div>
        </div>
      </nav>

      {/* Hero Section */}
      <header id="home" className="pt-20 pb-16 bg-gradient-to-r from-blue-500 to-purple-600 text-white">
        <div className="max-w-4xl mx-auto px-4 text-center">
          <img 
            src="/api/placeholder/200/200" 
            alt="Profile" 
            className="w-48 h-48 rounded-full mx-auto mb-6 border-4 border-white shadow-lg"
          />
          <h1 className="text-4xl font-bold mb-4">John Doe</h1>
          <p className="text-xl mb-6">Software Developer | Creative Problem Solver</p>
          <div className="flex justify-center space-x-4">
            <a href="https://github.com" target="_blank" rel="noopener noreferrer" className="hover:text-gray-200">
              <GitHub size={32} />
            </a>
            <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" className="hover:text-gray-200">
              <Linkedin size={32} />
            </a>
            <a href="mailto:john.doe@example.com" className="hover:text-gray-200">
              <Mail size={32} />
            </a>
          </div>
        </div>
      </header>

      {/* About Section */}
      <section id="about" className="py-16 bg-white">
        <div className="max-w-4xl mx-auto px-4">
          <h2 className="text-3xl font-bold text-center mb-8 text-gray-800">About Me</h2>
          <div className="text-center text-gray-600">
            <p className="mb-4">
              I'm a passionate software developer with experience in web technologies, 
              creating innovative solutions that blend creativity and technical expertise.
            </p>
            <p>
              My goal is to build meaningful projects that make a positive impact.
            </p>
          </div>
        </div>
      </section>

      {/* Projects Section */}
      <section id="projects" className="py-16 bg-gray-100">
        <div className="max-w-4xl mx-auto px-4">
          <h2 className="text-3xl font-bold text-center mb-8 text-gray-800">Projects</h2>
          <div className="grid md:grid-cols-3 gap-6">
            {[
              { 
                title: "Web App", 
                description: "Full-stack application with React and Node.js",
                tech: ["React", "Node.js", "MongoDB"]
              },
              { 
                title: "Mobile App", 
                description: "Cross-platform mobile application",
                tech: ["React Native", "Firebase"]
              },
              { 
                title: "Data Visualization", 
                description: "Interactive dashboard for analytics",
                tech: ["D3.js", "React", "TypeScript"]
              }
            ].map((project, index) => (
              <div 
                key={index} 
                className="bg-white rounded-lg shadow-md p-6 hover:shadow-xl transition duration-300"
              >
                <h3 className="text-xl font-semibold mb-3 text-gray-800">{project.title}</h3>
                <p className="text-gray-600 mb-4">{project.description}</p>
                <div className="flex flex-wrap gap-2">
                  {project.tech.map((tech, techIndex) => (
                    <span 
                      key={techIndex} 
                      className="bg-blue-100 text-blue-800 px-2 py-1 rounded-full text-xs"
                    >
                      {tech}
                    </span>
                  ))}
                </div>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* Contact Section */}
      <section id="contact" className="py-16 bg-white">
        <div className="max-w-4xl mx-auto px-4">
          <h2 className="text-3xl font-bold text-center mb-8 text-gray-800">Contact Me</h2>
          <form className="max-w-lg mx-auto">
            <div className="mb-4">
              <input 
                type="text" 
                placeholder="Your Name" 
                className="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
              />
            </div>
            <div className="mb-4">
              <input 
                type="email" 
                placeholder="Your Email" 
                className="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
              />
            </div>
            <div className="mb-4">
              <textarea 
                placeholder="Your Message" 
                rows="4" 
                className="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
              ></textarea>
            </div>
            <div className="text-center">
              <button 
                className="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600 transition duration-300"
              >
                Send Message
              </button>
            </div>
          </form>
        </div>
      </section>

      {/* Footer */}
      <footer className="bg-gray-800 text-white py-6">
        <div className="max-w-4xl mx-auto px-4 text-center">
          <p>&copy; 2024 John Doe. All Rights Reserved.</p>
        </div>
      </footer>
    </div>
  );
};

export default Portfolio;