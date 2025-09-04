# Environmental Services Category Images

This folder contains images for all services within the Environmental Services category.

## Category Structure

The Environmental Services category contains **2 individual services**:

### 1. Executive Projects
- **Folder**: `executive-projects/`
- **Main Image**: `executive-projects/main-service.jpg`
- **Gallery**: `executive-projects/gallery/gallery-*.jpg`

### 2. Environmental Services
- **Folder**: `environmental-services/`
- **Main Image**: `environmental-services/main-service.jpg` 
- **Gallery**: `environmental-services/gallery/gallery-*.jpg`

## Image Structure per Service

Each service follows the same structure:
```
service-name/
├── main-service.jpg          (Main service image)
└── gallery/
    ├── gallery-1.jpg        (Gallery images)
    ├── gallery-2.jpg
    ├── gallery-3.jpg
    └── ...                  (Additional as needed)
```

## Usage

### Main Service Images
- **Used in**: 
  - Category listing page (service cards)
  - Individual service detail pages (hero images)
- **Recommended size**: 1280x720px (16:9 aspect ratio)

### Gallery Images
- **Used in**: Individual service detail page image sliders
- **Recommended size**: 1280x720px (16:9 aspect ratio)
- **Format**: Sequential numbering (gallery-1.jpg, gallery-2.jpg, etc.)

## Configuration

Images are configured in `config/environmental_services.php`:
- Each service has its own image paths
- Gallery images are listed in the `gallery_images` array
- Paths are relative to the `public/` directory

## Instructions for Replacement

1. Replace placeholder files with actual images
2. Keep the same file names or update the config file accordingly
3. Recommended formats: JPG, PNG, or WebP
4. Optimize images for web before uploading
5. Each service can have different numbers of gallery images

## Category vs Service Naming

**Important**: The category is called "Environmental Services" and contains an individual service also called "Environmental Services". This is intentional - the individual service represents the core environmental services offering within the broader category.
