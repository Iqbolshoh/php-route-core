# 📂 php-route-core

`php-route-core` is a lightweight and efficient PHP routing engine designed to manage URL routes in web applications.

## 📂 Project Structure
```
/php-route-core
│── /app                  # Core PHP code (Routing Engine)
│   ├── /Core             # Framework core files
│   │   ├── Router.php    # Manages URL routing
│   │   ├── Request.php   # Handles user requests
│   │   ├── Response.php  # Sends responses
│
│── /routes               # Routing files
│   ├── web.php           # Frontend routes
│   ├── api.php           # Backend API routes
│
│── /public               # Public directory (Entry point)
│   ├── index.php         # Initializes the routing system
│
│── /tests                # Unit tests
│   ├── RouterTest.php    # Tests for the routing system
│
│── .env                  # Environment variables (if needed)
│── .htaccess             # Apache server configuration (Pretty URLs)
│── composer.json         # PHP dependencies (Composer)
│── README.md             # Project documentation
```

## 📌 Installation

1️⃣ **Clone the repository**
```bash
git clone https://github.com/Iqbolshoh/php-route-core.git
```

2️⃣ **Install dependencies using Composer**
```bash
composer install
```

3️⃣ **Ensure Apache is properly configured**  
Make sure `.htaccess` is enabled for pretty URLs.

## 🚀 Usage

### ➕ Adding a New Route
To add a new route, modify the `routes/web.php` file:
```php
$router->get('/home', function() {
    echo 'Home Page';
});
```

### 🔒 Using Middleware
Middleware files are stored in the `Middleware/` directory and can be used to add security layers and request validations.

## ✅ Running Tests
To run tests for the routing system, execute:
```bash
php tests/RouterTest.php
```

## 📜 License
This project is licensed under the **MIT License** – feel free to modify and distribute it as needed.

## 🤝 Contributing  

🎯 Contributions are welcome! If you have suggestions or want to enhance the project, feel free to fork the repository and submit a pull request.

## 📬 Connect with Me  

💬 I love meeting new people and discussing tech, business, and creative ideas. Let’s connect! You can reach me on these platforms:

<div align="center">
    <table>
        <tr>
            <td>
                <a href="https://github.com/iqbolshoh">
                    <img src="https://raw.githubusercontent.com/rahuldkjain/github-profile-readme-generator/master/src/images/icons/Social/github.svg"
                        height="40" width="40" alt="GitHub" />
                </a>
            </td>
            <td>
                <a href="https://t.me/iqbolshoh_777">
                    <img src="https://github.com/gayanvoice/github-active-users-monitor/blob/master/public/images/icons/telegram.svg"
                        height="40" width="40" alt="Telegram" />
                </a>
            </td>
            <td>
                <a href="https://www.linkedin.com/in/iiqbolshoh/">
                    <img src="https://github.com/gayanvoice/github-active-users-monitor/blob/master/public/images/icons/linkedin.svg"
                        height="40" width="40" alt="LinkedIn" />
                </a>
            </td>
            <td>
                <a href="https://instagram.com/iqbolshoh_777" target="blank">
                    <img src="https://raw.githubusercontent.com/rahuldkjain/github-profile-readme-generator/master/src/images/icons/Social/instagram.svg"
                        alt="Instagram" height="40" width="40" />
                </a>
            </td>
            <td>
                <a href="https://wa.me/qr/22PVFQSMQQX4F1">
                    <img src="https://github.com/gayanvoice/github-active-users-monitor/blob/master/public/images/icons/whatsapp.svg"
                        height="40" width="40" alt="WhatsApp" />
                </a>
            </td>
            <td>
                <a href="https://x.com/iqbolshoh_777">
                    <img src="https://img.shields.io/badge/X-000000?style=for-the-badge&logo=x&logoColor=white" height="40"
                        width="40" alt="Twitter" />
                </a>
            </td>
            <td>
                <a href="mailto:iilhomjonov777@gmail.com">
                    <img src="https://github.com/gayanvoice/github-active-users-monitor/blob/master/public/images/icons/gmail.svg"
                        height="40" width="40" alt="Email" />
                </a>
            </td>
        </tr>
    </table>
</div>