# Non-Destructive Testing Service Images

This folder contains all images for the Non-Destructive Testing service.

## Image Structure

### Main Service Image
- **File**: `main-service.jpg`
- **Used in**: 
  - Home page services section (service card)
  - Service detail page (hero image)
- **Recommended size**: 1280x720px (16:9 aspect ratio)

### Gallery Images
- **Folder**: `gallery/`
- **Used in**: Service detail page image slider
- **Files**: Sequential numbering starting from `gallery-1.jpg`, `gallery-2.jpg`, etc.
- **Recommended size**: 1280x720px (16:9 aspect ratio)
- **Note**: All gallery images will be displayed in the image slider carousel

## Instructions for Replacement

1. Replace the placeholder files with your actual images
2. Keep the same file names to maintain configuration, or update the config file if changing names
3. Recommended formats: JPG, PNG, or WebP
4. Images should be optimized for web (compress before upload)
5. Gallery images should be numbered sequentially (gallery-1.jpg, gallery-2.jpg, etc.)
6. Update the `gallery_images` array in the config file to match your actual images

## Current Usage

The images are configured in `config/non_destructive_testing.php`:
- Main image: `images/services/non-destructive-testing/main-service.jpg`
- Gallery: Multiple images in the `gallery/` folder, referenced in the configuration file

All image paths are relative to the `public/` directory and will be automatically served by Laravel.

## Gallery Structure
- **1 main service image** (hero/card)
- **Variable number of gallery images** (as configured in the service config file)
- Each service can have a different number of gallery images based on content needs