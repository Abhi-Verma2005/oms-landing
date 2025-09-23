#!/bin/bash

# Stellar WordPress Docker Setup Script

echo "🚀 Setting up Stellar WordPress with Docker..."

# Create .env file if it doesn't exist
if [ ! -f .env ]; then
    echo "📝 Creating .env file..."
    cat > .env << EOF
# Database Configuration
DB_NAME=stellar_wp
DB_USER=stellar_user
DB_PASSWORD=stellar_password
DB_ROOT_PASSWORD=root_password
DB_HOST=db:3306

# WordPress Configuration
WP_DEBUG=true
WP_ENV=development

# Site URLs
WP_HOME=http://localhost:8080
WP_SITEURL=http://localhost:8080

# Redis Configuration
REDIS_HOST=redis
REDIS_PORT=6379
REDIS_DATABASE=0

# Mail Configuration (MailHog)
SMTP_HOST=mailhog
SMTP_PORT=1025
EOF
    echo "✅ .env file created"
fi

# Create .dockerignore file
if [ ! -f .dockerignore ]; then
    echo "📝 Creating .dockerignore file..."
    cat > .dockerignore << EOF
node_modules
npm-debug.log
.git
.gitignore
README.md
.env
.nyc_output
coverage
.DS_Store
EOF
    echo "✅ .dockerignore file created"
fi

# Set proper permissions
echo "🔧 Setting permissions..."
chmod +x setup.sh
chmod -R 755 wordpress/

# Build and start containers
echo "🐳 Building and starting Docker containers..."
docker-compose down
docker-compose build --no-cache
docker-compose up -d

# Wait for services to be ready
echo "⏳ Waiting for services to start..."
sleep 30

# Check if WordPress is accessible
echo "🔍 Checking WordPress installation..."
if curl -f http://localhost:8080 > /dev/null 2>&1; then
    echo "✅ WordPress is accessible at http://localhost:8080"
else
    echo "❌ WordPress is not accessible. Please check the logs with: docker-compose logs"
fi

# Display service URLs
echo ""
echo "🎉 Stellar WordPress is now running!"
echo ""
echo "📱 Service URLs:"
echo "   WordPress:     http://localhost:8080"
echo "   phpMyAdmin:    http://localhost:8081"
echo "   MailHog:       http://localhost:8025"
echo ""
echo "🔑 Database Credentials:"
echo "   Database:      stellar_wp"
echo "   Username:      stellar_user"
echo "   Password:      stellar_password"
echo ""
echo "📋 Useful Commands:"
echo "   View logs:     docker-compose logs -f"
echo "   Stop services: docker-compose down"
echo "   Restart:       docker-compose restart"
echo "   Access shell:  docker-compose exec wordpress bash"
echo ""
echo "🎯 Next Steps:"
echo "   1. Visit http://localhost:8080 to complete WordPress setup"
echo "   2. Activate the Stellar theme"
echo "   3. Configure your site settings"
echo ""
