# Admin Panel Specifications

## Backend Administration for Top 5 Percent E-Commerce

This document outlines the admin panel requirements for managing products, cart, checkout, CTAs, and frontend content using Laravel 11, the TALL stack, and Lunar e-commerce.

---

## Tech Stack for Admin

| Component | Technology |
|-----------|------------|
| Framework | Laravel 11 |
| Admin UI | Lunar Hub (Filament-based) |
| Frontend Sync | Livewire + Alpine.js |
| Database | PostgreSQL |
| File Storage | Laravel Storage (local/S3) |
| Search Indexing | Meilisearch via Laravel Scout |

---

## 1. Lunar Hub (Primary Admin)

Lunar provides a built-in admin panel called **Lunar Hub** at `/hub`. This handles core e-commerce functionality.

### Lunar Hub Features (Out of the Box)
- Product Management (CRUD)
- Product Variants & Options
- Collections & Categories
- Orders & Customers
- Pricing & Discounts
- Inventory/Stock Management
- Media Library
- Attribute Groups

### Accessing Lunar Hub
```php
// routes/web.php - Lunar Hub is auto-registered
// Access at: /hub
// Requires admin user authentication
```

### Creating Admin User
```bash
php artisan lunar:create-admin
```

---

## 2. Custom Admin Extensions

Beyond Lunar Hub, we need custom panels for:

### 2.1 CTA Management

Manage Call-to-Action blocks displayed on the frontend.

#### Database Schema
```php
// database/migrations/create_ctas_table.php
Schema::create('ctas', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->string('location'); // hero, sidebar, footer, popup
    $table->string('headline');
    $table->text('subheadline')->nullable();
    $table->string('button_text');
    $table->string('button_url');
    $table->string('button_style')->default('primary'); // primary, secondary
    $table->string('background_image')->nullable();
    $table->string('background_color')->nullable();
    $table->boolean('is_active')->default(true);
    $table->integer('sort_order')->default(0);
    $table->timestamp('starts_at')->nullable();
    $table->timestamp('ends_at')->nullable();
    $table->timestamps();
});
```

#### CTA Locations
| Location | Description |
|----------|-------------|
| `hero` | Homepage hero section |
| `sidebar` | Product page sidebar |
| `footer` | Above footer promo |
| `popup` | Exit-intent popup |
| `banner` | Site-wide announcement bar |
| `collection` | Collection page headers |

#### Admin Panel (Filament Resource)
```php
// app/Filament/Resources/CtaResource.php
<?php

declare(strict_types=1);

namespace App\Filament\Resources;

use App\Models\Cta;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;

class CtaResource extends Resource
{
    protected static ?string $model = Cta::class;
    protected static ?string $navigationIcon = 'heroicon-o-megaphone';
    protected static ?string $navigationGroup = 'Content';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('name')
                ->required()
                ->maxLength(255),
            Forms\Components\Select::make('location')
                ->options([
                    'hero' => 'Homepage Hero',
                    'sidebar' => 'Product Sidebar',
                    'footer' => 'Footer Promo',
                    'popup' => 'Exit Popup',
                    'banner' => 'Announcement Bar',
                ])
                ->required(),
            Forms\Components\TextInput::make('headline')
                ->required(),
            Forms\Components\Textarea::make('subheadline'),
            Forms\Components\TextInput::make('button_text')
                ->required(),
            Forms\Components\TextInput::make('button_url')
                ->url()
                ->required(),
            Forms\Components\Select::make('button_style')
                ->options([
                    'primary' => 'Primary (Gold)',
                    'secondary' => 'Secondary (Outline)',
                ]),
            Forms\Components\FileUpload::make('background_image')
                ->image()
                ->directory('ctas'),
            Forms\Components\ColorPicker::make('background_color'),
            Forms\Components\Toggle::make('is_active')
                ->default(true),
            Forms\Components\DateTimePicker::make('starts_at'),
            Forms\Components\DateTimePicker::make('ends_at'),
        ]);
    }
}
```

---

### 2.2 Homepage Content Management

#### Sections to Manage
| Section | Editable Fields |
|---------|-----------------|
| Hero Slider | Images, headlines, CTAs |
| Featured Products | Product selection (from Lunar) |
| Category Showcase | Collections display |
| Testimonials | Customer quotes |
| Trust Badges | Icons, text |
| About Preview | Text, image, link |

#### Homepage Settings Model
```php
// app/Models/HomepageSetting.php
<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomepageSetting extends Model
{
    protected $fillable = [
        'section',
        'key',
        'value',
        'type', // text, image, json, boolean
    ];

    protected $casts = [
        'value' => 'array',
    ];
}
```

---

### 2.3 Navigation Management

Control mega menu items without code changes.

#### Database Schema
```php
Schema::create('navigation_items', function (Blueprint $table) {
    $table->id();
    $table->foreignId('parent_id')->nullable()->constrained('navigation_items');
    $table->string('menu_location'); // main, footer, mobile
    $table->string('label');
    $table->string('url')->nullable();
    $table->string('route_name')->nullable();
    $table->foreignId('collection_id')->nullable(); // Link to Lunar collection
    $table->boolean('is_mega_menu')->default(false);
    $table->boolean('is_active')->default(true);
    $table->integer('sort_order')->default(0);
    $table->string('icon')->nullable();
    $table->timestamps();
});
```

---

### 2.4 Banner/Announcement Bar

Site-wide promotional banners.

```php
// app/Models/Banner.php
<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $fillable = [
        'message',
        'link_text',
        'link_url',
        'background_color',
        'text_color',
        'is_active',
        'dismissible',
        'starts_at',
        'ends_at',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'dismissible' => 'boolean',
        'starts_at' => 'datetime',
        'ends_at' => 'datetime',
    ];
}
```

---

## 3. Product Management (via Lunar)

### Product Attributes for Custom Apparel

| Attribute Group | Attributes |
|-----------------|------------|
| Sizing | XS, S, M, L, XL, 2XL, 3XL, 4XL, 5XL |
| Material Type | Vinyl, Rhinestone, Glitter, Foil, Glow, Flock, Reflective, Holographic, Brick, Patterns |
| Print Method | Digital, Dye-Sublimation, Screen Print, Laser |
| Garment Type | T-Shirt, Hoodie, Cap, Bag, Jersey |
| Color | (Dynamic color palette) |

### Setting Up Attributes in Lunar
```php
// database/seeders/AttributeSeeder.php
<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Lunar\Models\Attribute;
use Lunar\Models\AttributeGroup;

class AttributeSeeder extends Seeder
{
    public function run(): void
    {
        $apparelGroup = AttributeGroup::create([
            'name' => ['en' => 'Apparel Options'],
            'handle' => 'apparel_options',
            'position' => 1,
        ]);

        Attribute::create([
            'attribute_group_id' => $apparelGroup->id,
            'name' => ['en' => 'Size'],
            'handle' => 'size',
            'type' => \Lunar\FieldTypes\Dropdown::class,
            'searchable' => true,
            'filterable' => true,
        ]);

        Attribute::create([
            'attribute_group_id' => $apparelGroup->id,
            'name' => ['en' => 'Material Type'],
            'handle' => 'material_type',
            'type' => \Lunar\FieldTypes\Dropdown::class,
            'searchable' => true,
            'filterable' => true,
        ]);
    }
}
```

---

## 4. Cart & Checkout Configuration

### Cart Settings (Admin Managed)
| Setting | Description |
|---------|-------------|
| Free Shipping Threshold | Minimum order for free shipping |
| Tax Rate | Default tax percentage |
| Minimum Order | Minimum cart value |
| Cart Expiry | Session timeout for cart |

### Checkout Fields
| Field | Required | Notes |
|-------|----------|-------|
| Email | Yes | Order confirmation |
| Phone | Yes | For production updates |
| Shipping Address | Yes | Standard fields |
| Billing Address | Optional | Same as shipping toggle |
| Special Instructions | Optional | Custom notes for orders |
| Delivery Preference | Optional | Pickup vs Ship |

### Payment Providers (Lunar Integration)
```php
// config/lunar/payments.php
return [
    'default' => 'stripe',
    'types' => [
        'stripe' => [
            'driver' => 'stripe',
        ],
        'offline' => [
            'driver' => 'offline',
        ],
    ],
];
```

---

## 5. Order Management

### Order Statuses
| Status | Description | Color |
|--------|-------------|-------|
| `pending` | Awaiting payment | Gray |
| `paid` | Payment received | Green |
| `processing` | In production | Blue |
| `ready` | Ready for pickup/ship | Yellow |
| `shipped` | Shipped to customer | Purple |
| `delivered` | Confirmed delivery | Green |
| `cancelled` | Order cancelled | Red |
| `refunded` | Refund processed | Orange |

### Order Notes (Internal)
Staff can add internal notes visible only in admin:
- Production notes
- Customer communication
- Design file references

---

## 6. SEO & Meta Management

### Page-Level SEO
Each page should have editable:
| Field | Description |
|-------|-------------|
| Meta Title | Browser tab title |
| Meta Description | Search result snippet |
| OG Image | Social sharing image |
| Canonical URL | Prevent duplicate content |
| No-Index | Hide from search engines |

### Automatic SEO (Lunar)
Lunar handles product SEO automatically:
- Product titles → Meta titles
- Descriptions → Meta descriptions
- Product images → OG images

---

## 7. Media Management

### Image Requirements
| Type | Dimensions | Format |
|------|------------|--------|
| Product Main | 1200x1500 | WebP/JPG |
| Product Thumb | 400x500 | WebP/JPG |
| Hero Banner | 1920x1080 | WebP/JPG |
| Collection | 800x600 | WebP/JPG |

### Media Library Features (Lunar)
- Drag-and-drop upload
- Automatic thumbnail generation
- Image cropping
- Alt text management
- Folder organization

---

## 8. Admin Roles & Permissions

### Role Structure
| Role | Permissions |
|------|-------------|
| Super Admin | Full access to everything |
| Store Manager | Products, orders, customers |
| Content Editor | CTAs, banners, homepage |
| Order Processor | Orders only |
| Viewer | Read-only access |

### Implementing Roles (Lunar + Spatie)
```bash
composer require spatie/laravel-permission
```

```php
// Extend Lunar's staff user with roles
use Spatie\Permission\Traits\HasRoles;

class Staff extends LunarStaff
{
    use HasRoles;
}
```

---

## 9. Analytics Dashboard

### Key Metrics to Display
| Metric | Source |
|--------|--------|
| Daily Revenue | Orders |
| Orders Today | Orders |
| Conversion Rate | Calculated |
| Top Products | Order lines |
| Low Stock Alerts | Inventory |
| Cart Abandonment | Sessions |

### Dashboard Widgets (Filament)
```php
// app/Filament/Widgets/RevenueOverview.php
<?php

declare(strict_types=1);

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Lunar\Models\Order;

class RevenueOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        $todayRevenue = Order::whereDate('created_at', today())
            ->where('status', '!=', 'cancelled')
            ->sum('total');

        return [
            Stat::make('Revenue Today', '$' . number_format($todayRevenue / 100, 2))
                ->description('Total sales today')
                ->color('success'),
            Stat::make('Orders Today', Order::whereDate('created_at', today())->count())
                ->description('New orders'),
            Stat::make('Pending Orders', Order::where('status', 'pending')->count())
                ->description('Awaiting processing')
                ->color('warning'),
        ];
    }
}
```

---

## 10. Email Templates

### Transactional Emails
| Email | Trigger |
|-------|---------|
| Order Confirmation | After successful payment |
| Order Shipped | When marked shipped |
| Order Ready | For pickup orders |
| Abandoned Cart | 24h after cart abandonment |
| Welcome | New customer registration |

### Email Template Management
```php
// Using Laravel Blade components
// resources/views/emails/orders/confirmed.blade.php
```

---

## 11. Settings Panel

### General Settings
| Setting | Type |
|---------|------|
| Store Name | Text |
| Store Email | Email |
| Store Phone | Phone |
| Store Address | Address |
| Business Hours | JSON |
| Tax Rate | Percentage |

### Shipping Settings
| Setting | Type |
|---------|------|
| Free Shipping Threshold | Currency |
| Flat Rate | Currency |
| Local Pickup | Boolean |
| Shipping Zones | JSON |

---

## 12. File Structure for Admin

```
app/
├── Filament/
│   ├── Resources/
│   │   ├── CtaResource.php
│   │   ├── BannerResource.php
│   │   ├── NavigationItemResource.php
│   │   └── HomepageSettingResource.php
│   ├── Widgets/
│   │   ├── RevenueOverview.php
│   │   ├── OrdersChart.php
│   │   └── LowStockAlert.php
│   └── Pages/
│       └── Settings.php
├── Models/
│   ├── Cta.php
│   ├── Banner.php
│   ├── NavigationItem.php
│   └── HomepageSetting.php
└── Policies/
    ├── CtaPolicy.php
    └── BannerPolicy.php
```

---

## 13. Frontend Sync (Livewire)

### Real-time Admin Updates
When admin changes content, frontend updates via Livewire:

```php
// app/Livewire/AnnouncementBar.php
<?php

declare(strict_types=1);

namespace App\Livewire;

use App\Models\Banner;
use Livewire\Component;

class AnnouncementBar extends Component
{
    public function render()
    {
        $banner = Banner::where('is_active', true)
            ->where(function ($q) {
                $q->whereNull('starts_at')
                    ->orWhere('starts_at', '<=', now());
            })
            ->where(function ($q) {
                $q->whereNull('ends_at')
                    ->orWhere('ends_at', '>=', now());
            })
            ->first();

        return view('livewire.announcement-bar', [
            'banner' => $banner,
        ]);
    }
}
```

---

## Summary Checklist

- [ ] Lunar Hub installed and accessible at `/hub`
- [ ] Admin user created
- [ ] CTA management system
- [ ] Banner/announcement system
- [ ] Navigation management
- [ ] Homepage content editor
- [ ] Product attributes configured
- [ ] Cart settings panel
- [ ] Order status workflow
- [ ] SEO fields on all pages
- [ ] Media library organized
- [ ] Roles and permissions
- [ ] Analytics dashboard
- [ ] Email templates
- [ ] Settings panel
