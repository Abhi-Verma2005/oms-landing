# Stellar WordPress Theme - Installation Guide

## Overview

This guide will help you install and set up the Stellar WordPress theme, which is based on the original Stellar HTML template. The theme features a modern dark design with purple accents, perfect for SaaS and technology companies.

## Prerequisites

- WordPress 5.0 or higher
- PHP 7.4 or higher
- MySQL 5.6 or higher
- Web server (Apache/Nginx)

## Installation Steps

### 1. Download WordPress

1. Download the latest WordPress from [wordpress.org](https://wordpress.org/download/)
2. Extract the WordPress files to your web server directory

### 2. Set Up Database

1. Create a MySQL database for your WordPress site
2. Create a database user with full privileges
3. Note down the database name, username, password, and host

### 3. Configure WordPress

1. Copy the provided `wp-config.php` file to your WordPress root directory
2. Update the database credentials in `wp-config.php`:
   ```php
   define('DB_NAME', 'your_database_name');
   define('DB_USER', 'your_database_user');
   define('DB_PASSWORD', 'your_database_password');
   define('DB_HOST', 'localhost');
   ```

3. Generate unique security keys from [WordPress.org](https://api.wordpress.org/secret-key/1.1/salt/) and replace the placeholder keys in `wp-config.php`

### 4. Install WordPress

1. Navigate to your domain in a web browser
2. Follow the WordPress installation wizard
3. Create an admin account
4. Complete the installation

### 5. Install the Stellar Theme

1. Copy the `stellar-theme` folder to `/wp-content/themes/`
2. Activate the theme in WordPress Admin → Appearance → Themes
3. The theme will automatically create necessary database tables and settings

## Theme Configuration

### 1. Customizer Settings

Navigate to **Appearance → Customize** to configure:

#### Hero Section
- Hero Title
- Hero Subtitle
- Hero Button Text and URL

#### Social Media Links
- Twitter URL
- Facebook URL
- LinkedIn URL
- GitHub URL
- Instagram URL

#### Footer
- Copyright Text
- Footer widget areas

#### Contact Information
- Contact Email
- Contact Phone
- Contact Address

#### Analytics & SEO
- Google Analytics ID
- Google Tag Manager ID

#### Performance
- Lazy Loading for Images
- CSS Minification
- JavaScript Minification

#### Color Scheme
- Primary Color
- Secondary Color

#### Typography
- Heading Font
- Body Font

### 2. Menu Setup

1. Go to **Appearance → Menus**
2. Create a new menu or use the default menu
3. Assign the menu to "Primary Menu" location
4. Add your desired pages and links

### 3. Widget Areas

The theme includes the following widget areas:
- Sidebar (single posts/pages)
- Footer Widget Area

Configure widgets in **Appearance → Widgets**

### 4. Custom Post Types

The theme includes three custom post types:

#### Team Members
- Create team member profiles
- Add position, social media links
- Upload profile photos

#### Testimonials
- Add customer testimonials
- Include author name, position, company
- Upload author photos

#### Features
- Create feature descriptions
- Add feature icons and descriptions
- Organize features with categories

## Content Setup

### 1. Create Essential Pages

Create the following pages:
- About
- Features/Services
- Pricing
- Blog
- Contact
- Privacy Policy
- Terms of Service

### 2. Set Up Blog

1. Create a "Blog" page
2. Set it as the "Posts page" in **Settings → Reading**
3. Start creating blog posts

### 3. Add Team Members

1. Go to **Team Members** in the admin menu
2. Add team member profiles with:
   - Name and bio
   - Position/title
   - Profile photo
   - Social media links

### 4. Add Testimonials

1. Go to **Testimonials** in the admin menu
2. Add customer testimonials with:
   - Testimonial text
   - Customer name and photo
   - Position and company
   - Social media links

### 5. Add Features

1. Go to **Features** in the admin menu
2. Add feature descriptions with:
   - Feature title
   - Detailed description
   - Feature icon
   - Category

## SEO Optimization

### 1. Install SEO Plugin

Recommended plugins:
- Yoast SEO
- RankMath
- All in One SEO

### 2. Configure SEO Settings

1. Set up meta titles and descriptions
2. Configure social media sharing
3. Set up XML sitemaps
4. Configure structured data

### 3. Performance Optimization

1. Install a caching plugin (WP Rocket, W3 Total Cache)
2. Optimize images (Smush, ShortPixel)
3. Use a CDN (Cloudflare, MaxCDN)
4. Enable Gzip compression

## Security Setup

### 1. Security Plugins

Recommended plugins:
- Wordfence Security
- Sucuri Security
- iThemes Security

### 2. Security Best Practices

1. Keep WordPress, themes, and plugins updated
2. Use strong passwords
3. Enable two-factor authentication
4. Regular backups
5. SSL certificate installation

## WooCommerce Integration

If you plan to use WooCommerce:

1. Install WooCommerce plugin
2. Configure store settings
3. Add products
4. Set up payment gateways
5. Configure shipping options

The theme includes built-in WooCommerce styling and templates.

## Troubleshooting

### Common Issues

#### Theme Not Activating
- Check file permissions (755 for folders, 644 for files)
- Ensure all theme files are uploaded correctly

#### Styling Issues
- Clear any caching plugins
- Check for plugin conflicts
- Verify CSS files are loading correctly

#### Customizer Not Working
- Check browser console for JavaScript errors
- Disable plugins to identify conflicts
- Ensure proper file permissions

#### Performance Issues
- Enable caching
- Optimize images
- Use a performance plugin
- Check server resources

### Getting Help

1. Check the theme documentation
2. Visit the WordPress support forums
3. Contact your hosting provider
4. Hire a WordPress developer

## Maintenance

### Regular Tasks

1. **Weekly**
   - Update plugins and themes
   - Check site performance
   - Review security logs

2. **Monthly**
   - Update WordPress core
   - Backup database and files
   - Review analytics data

3. **Quarterly**
   - Security audit
   - Performance optimization
   - Content review and updates

## Support

For theme support and updates:
- Check the theme documentation
- Visit the support forum
- Contact the theme developer

## Changelog

### Version 1.0.0
- Initial release
- Based on Stellar HTML template
- WordPress 6.4 compatibility
- WooCommerce integration
- Custom post types
- Theme customizer options
- SEO optimization
- Security enhancements

---

**Note**: This theme is based on the Stellar HTML template by Cruip.com and has been converted to WordPress following WordPress coding standards and best practices.
