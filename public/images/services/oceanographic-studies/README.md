# Oceanographic Studies Category Images

This folder contains images for all services within the Oceanographic Studies category.

## Category Structure

The Oceanographic Studies category contains **3 individual services**:

### 1. Bathymetry
- **Folder**: `bathymetry/`
- **Main Image**: `bathymetry/main-service.jpg` 
- **Gallery**: `bathymetry/gallery/gallery-1.jpg`, `bathymetry/gallery/gallery-2.jpg`

### 2. Hydrodynamic Modeling
- **Folder**: `hydrodynamic-modeling/`
- **Main Image**: `hydrodynamic-modeling/main-service.jpg`
- **Gallery**: `hydrodynamic-modeling/gallery/gallery-1.jpg`, `hydrodynamic-modeling/gallery/gallery-2.jpg`

### 3. Coastal Engineering
- **Folder**: `coastal-engineering/`
- **Main Image**: `coastal-engineering/main-service.jpg`
- **Gallery**: `coastal-engineering/gallery/gallery-1.jpg`, `coastal-engineering/gallery/gallery-2.jpg`, `coastal-engineering/gallery/gallery-3.jpg`

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

### Category Banner
- **File**: `category-banner.jpg`
- **Used in**: Category listing page background

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

Images are configured in `config/oceanographic_studies.php`:
- Each service has its own image paths
- Gallery images are listed in the `gallery_images` array
- Paths are relative to the `public/` directory

## Instructions for Replacement

1. Replace placeholder files with actual images
2. Keep the same file names or update the config file accordingly
3. Recommended formats: JPG, PNG, or WebP
4. Optimize images for web before uploading
5. Each service can have different numbers of gallery images
