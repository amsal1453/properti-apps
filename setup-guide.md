# Properti App Setup Guide

This guide will help you set up the Properti App with Spatie Media Library integration.

## Prerequisites

- PHP 8.1 or higher
- MySQL/MariaDB
- Composer

## Setup Steps

1. Install required packages:

```bash
composer require spatie/laravel-medialibrary filament/spatie-laravel-media-library-plugin
```

2. Publish Media Library migrations:

```bash
php artisan vendor:publish --provider="Spatie\MediaLibrary\MediaLibraryServiceProvider" --tag="migrations"
```

3. Publish Media Library config:

```bash
php artisan vendor:publish --provider="Spatie\MediaLibrary\MediaLibraryServiceProvider" --tag="config"
```

4. Create symbolic link for storage:

```bash
php artisan storage:link
```

5. Run migrations:

```bash
php artisan migrate:fresh
```

6. Clear cache and optimize:

```bash
php artisan optimize:clear
```

7. Start the development server:

```bash
php artisan serve
```

## Key Files

- `app/Models/Properti.php` - The model implementing HasMedia
- `app/Filament/Resources/PropertiResource.php` - Filament resource for property management
- `database/migrations/2025_04_24_043956_create_propertis_table.php` - Property table migration
- `database/migrations/xxxx_xx_xx_xxxxxx_create_media_table.php` - Media library table migration

## Usage

1. Upload multiple property images through the Filament admin panel
2. Images are stored in the `gambar_properti` collection
3. Thumbnail conversions are automatically generated
4. Images can be viewed, opened, and downloaded from the detail view

## Additional Information

- The Spatie Media Library stores files in the `storage/app/public` directory
- Make sure the directory is writable by the web server
- Images are displayed as thumbnails in the property listing
- Full-size images are available in the detail view 
