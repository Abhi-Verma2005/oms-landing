# Stellar WordPress Theme

A modern, responsive WordPress theme based on the Stellar HTML template by Cruip.com. Features a dark design with purple accents, perfect for SaaS and technology companies.

## Features

### Design & Layout
- **Modern Dark Theme**: Sleek dark design with purple accent colors
- **Fully Responsive**: Optimized for all devices and screen sizes
- **Tailwind CSS**: Built with Tailwind CSS for consistent styling
- **Custom Animations**: Particle effects and smooth transitions
- **Typography**: Clean, readable fonts with proper hierarchy

### WordPress Features
- **Custom Post Types**: Team Members, Testimonials, Features
- **Custom Meta Boxes**: Additional fields for custom content
- **Theme Customizer**: Extensive customization options
- **Widget Areas**: Sidebar and footer widget support
- **Navigation Menus**: Primary, footer, and mobile menu support
- **WooCommerce Ready**: Full e-commerce integration

### SEO & Performance
- **SEO Optimized**: Meta tags, structured data, sitemaps
- **Core Web Vitals**: Optimized for Google's performance metrics
- **Image Optimization**: Lazy loading and responsive images
- **Caching Ready**: Compatible with popular caching plugins
- **Minification**: CSS and JavaScript minification options

### Security
- **Security Headers**: XSS protection, content type options
- **Input Sanitization**: All user inputs properly sanitized
- **File Permissions**: Secure file and directory permissions
- **WordPress Standards**: Follows WordPress coding standards

## Installation

1. **Upload Theme**: Copy the `stellar-theme` folder to `/wp-content/themes/`
2. **Activate**: Go to Appearance → Themes and activate "Stellar"
3. **Configure**: Use the Customizer to set up your site
4. **Content**: Add team members, testimonials, and features

## Configuration

### Theme Customizer Options

Navigate to **Appearance → Customize** to access:

#### Hero Section
- Hero title and subtitle
- Call-to-action button text and URL

#### Social Media
- Twitter, Facebook, LinkedIn, GitHub, Instagram URLs

#### Footer
- Copyright text
- Footer widget areas

#### Contact Information
- Email, phone, and address

#### Analytics
- Google Analytics ID
- Google Tag Manager ID

#### Performance
- Lazy loading for images
- CSS/JavaScript minification

#### Colors & Typography
- Primary and secondary colors
- Heading and body fonts

### Custom Post Types

#### Team Members
- Name, bio, and photo
- Position/title
- Social media links

#### Testimonials
- Customer testimonial text
- Author name, position, company
- Author photo

#### Features
- Feature title and description
- Categories and icons
- Custom ordering

### Menu Setup

1. Create menus in **Appearance → Menus**
2. Assign to menu locations:
   - Primary Menu (desktop navigation)
   - Footer Menu
   - Mobile Menu

### Widget Areas

Configure widgets in **Appearance → Widgets**:
- Sidebar (posts and pages)
- Footer Widget Area

## File Structure

```
stellar-theme/
├── assets/
│   ├── css/
│   │   ├── style.css (main stylesheet)
│   │   ├── vendors/
│   │   └── additional-styles/
│   ├── js/
│   │   ├── main.js (theme JavaScript)
│   │   └── vendors/
│   └── images/
├── inc/
│   ├── customizer.php (theme customizer)
│   ├── helpers.php (helper functions)
│   ├── seo.php (SEO optimization)
│   └── woocommerce.php (WooCommerce integration)
├── template-parts/
├── functions.php (main theme functions)
├── style.css (theme information)
├── index.php (homepage template)
├── header.php (header template)
├── footer.php (footer template)
├── single.php (single post template)
├── page.php (page template)
├── page-about.php (about page template)
├── archive.php (archive template)
├── search.php (search results template)
├── 404.php (404 error template)
├── comments.php (comments template)
└── README.md (this file)
```

## Customization

### Adding Custom CSS

1. Go to **Appearance → Customize**
2. Navigate to **Theme Options → Custom CSS**
3. Add your custom styles

### Child Theme

For extensive customization, create a child theme:

1. Create a new folder: `stellar-theme-child`
2. Add `style.css` with theme information
3. Add `functions.php` to enqueue parent styles
4. Override templates as needed

### Hooks and Filters

The theme includes various hooks for customization:

```php
// Add content before header
add_action('stellar_before_header', 'your_function');

// Modify hero title
add_filter('stellar_hero_title', 'your_function');
```

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Internet Explorer 11+

## Performance

### Optimization Features
- Lazy loading for images
- Minified CSS and JavaScript
- Optimized font loading
- Gzip compression ready
- CDN compatible

### Recommended Plugins
- **Caching**: WP Rocket, W3 Total Cache
- **Images**: Smush, ShortPixel
- **SEO**: Yoast SEO, RankMath
- **Security**: Wordfence, Sucuri

## Troubleshooting

### Common Issues

**Theme not activating**
- Check file permissions (755 for folders, 644 for files)
- Ensure all files uploaded correctly

**Styling issues**
- Clear cache plugins
- Check for plugin conflicts
- Verify CSS files loading

**Customizer not working**
- Check browser console for errors
- Disable plugins to identify conflicts
- Verify file permissions

### Getting Help

1. Check this documentation
2. WordPress support forums
3. Contact hosting provider
4. Hire WordPress developer

## Changelog

### Version 1.0.0
- Initial release
- Based on Stellar HTML template
- WordPress 6.4 compatibility
- WooCommerce integration
- Custom post types
- Theme customizer
- SEO optimization
- Security enhancements

## Credits

- **Original Template**: [Stellar by Cruip.com](https://cruip.com/)
- **Framework**: [Tailwind CSS](https://tailwindcss.com/)
- **Icons**: Custom SVG icons
- **Fonts**: Inter font family

## License

This theme is licensed under the GPL v2 or later.

---

**Support**: For theme support and updates, please refer to the documentation or contact the theme developer.
