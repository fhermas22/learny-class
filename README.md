# LearnyClass - Online Learning Platform

A modern online learning platform built with **Laravel 12**, **Blade**, **Tailwind CSS** and **pure JavaScript**.

## 🌟 Features

- **Modern and responsive design** adapted for all devices
- **Smooth navigation** with mobile menu
- **Functional shopping cart system** with localStorage
- **Sophisticated CSS animations** for better UX
- **Unique SVG logo** created specifically for LearnyClass
- **Complete pages** : home, courses, detail, cart, about
- **Clean and well-structured code** for easy learning

## 🚀 Installation

### Prerequisites
- PHP 8.3+
- Composer
- Node.js 18+
- Git

### Steps

1. **Clone the project**
```bash
git clone https://github.com/fhermas22/learny-class
cd learnyclass
```

2. **Install PHP dependencies**
```bash
composer install
```

3. **Install Node.js dependencies**
```bash
npm install
```

4. **Compile assets**
```bash
npm run dev
```

5. **Start the server**
```bash
php artisan serve
```

6. **Access the application**
Open your browser and go to `http://localhost:8000`

## 📁 Project Structure

```
learnyclass/
├── app/                          # Application code
├── public/
│   ├── logo.svg                 # Unique logo
│   ├── images/                  # Images directory
│   └── js/
│       ├── cart.js              # Cart management
│       └── interactions.js       # Interactions
├── resources/
│   ├── css/
│   │   └── app.css             # Tailwind styles
│   ├── js/
│   │   └── app.js              # JS entry point
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php    # Main layout
│       ├── components/
│       │   ├── header.blade.php
│       │   ├── footer.blade.php
│       │   └── course-card.blade.php
│       └── pages/
│           ├── home.blade.php
│           ├── courses.blade.php
│           ├── course-detail.blade.php
│           ├── cart.blade.php
│           └── about.blade.php
├── routes/
│   └── web.php                  # Routes
└── tailwind.config.js           # Tailwind configuration
```

## 🎨 Customization

### Change Colors

Open `tailwind.config.js` and modify colors in the `theme.extend.colors` section.

### Add New Courses

Modify the `$courses` array in `routes/web.php`.

### Change Logo

Replace `public/logo.svg` with your own logo.

## 📚 Technologies

- **Laravel 12** : PHP Framework
- **Blade** : Template engine
- **Tailwind CSS 4** : CSS Framework
- **JavaScript ES6+** : Client-side logic
- **HTML5** : Semantic structure
- **SVG** : Logo and icons

## 📝 License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

## 👥 Contributing

Contributions are welcome! Please create a branch for your feature and submit a pull request.

## 📧 Contact

For any questions, contact us at: **franciscohermas@gmail.com**

---

**LearnyClass** - 🚀

