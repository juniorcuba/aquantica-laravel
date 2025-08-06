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
- **Files**:
  - `gallery-1.jpg` - First gallery image
  - `gallery-2.jpg` - Second gallery image  
  - `gallery-3.jpg` - Third gallery image
- **Recommended size**: 1280x720px (16:9 aspect ratio)

## Instructions for Replacement

1. Replace the placeholder files with your actual images
2. Keep the same file names to maintain configuration
3. Recommended formats: JPG, PNG, or WebP
4. Images should be optimized for web (compress before upload)

## Current Usage

The images are configured in `config/non_destructive_testing.php`:
- Main image: `images/services/non-destructive-testing/main-service.jpg`
- Gallery: `images/services/non-destructive-testing/gallery/gallery-*.jpg`

All image paths are relative to the `public/` directory and will be automatically served by Laravel.