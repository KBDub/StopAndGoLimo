<?php

namespace Database\Seeders;

use App\Models\EventTemplate;
use Illuminate\Database\Seeder;

class EventTemplateSeeder extends Seeder
{
    public function run(): void
    {
        EventTemplate::truncate();

        $templates = [

            // ── School ────────────────────────────────────────────────────────────
            'school' => [
                ['category' => 'academic', 'category_label' => 'Academic', 'name' => 'Graduation'],
                ['category' => 'academic', 'category_label' => 'Academic', 'name' => 'Honor Society Induction'],
                ['category' => 'academic', 'category_label' => 'Academic', 'name' => 'Book Fair'],
                ['category' => 'academic', 'category_label' => 'Academic', 'name' => 'Science Olympiad'],
                ['category' => 'academic', 'category_label' => 'Academic', 'name' => 'Class Picture Day'],

                ['category' => 'social_formal', 'category_label' => 'Social / Formal', 'name' => 'Prom'],
                ['category' => 'social_formal', 'category_label' => 'Social / Formal', 'name' => 'Homecoming'],
                ['category' => 'social_formal', 'category_label' => 'Social / Formal', 'name' => 'Winter Formal'],
                ['category' => 'social_formal', 'category_label' => 'Social / Formal', 'name' => 'Sadie Hawkins Dance'],

                ['category' => 'spirit_pride', 'category_label' => 'Spirit / Pride', 'name' => 'Spirit Week'],
                ['category' => 'spirit_pride', 'category_label' => 'Spirit / Pride', 'name' => 'Pep Rally'],
                ['category' => 'spirit_pride', 'category_label' => 'Spirit / Pride', 'name' => 'Mascot Launch'],
                ['category' => 'spirit_pride', 'category_label' => 'Spirit / Pride', 'name' => 'Founders Day'],
                ['category' => 'spirit_pride', 'category_label' => 'Spirit / Pride', 'name' => 'School Color Day'],

                ['category' => 'athletic', 'category_label' => 'Athletic', 'name' => 'Championship Game'],
                ['category' => 'athletic', 'category_label' => 'Athletic', 'name' => 'Senior Night'],
                ['category' => 'athletic', 'category_label' => 'Athletic', 'name' => 'Signing Day'],
                ['category' => 'athletic', 'category_label' => 'Athletic', 'name' => 'Tryouts'],
                ['category' => 'athletic', 'category_label' => 'Athletic', 'name' => 'Tournament'],
                ['category' => 'athletic', 'category_label' => 'Athletic', 'name' => 'State Qualifier'],

                ['category' => 'creative_arts', 'category_label' => 'Creative Arts', 'name' => 'Theater Opening Night'],
                ['category' => 'creative_arts', 'category_label' => 'Creative Arts', 'name' => 'Band Competition'],
                ['category' => 'creative_arts', 'category_label' => 'Creative Arts', 'name' => 'Art Show'],
                ['category' => 'creative_arts', 'category_label' => 'Creative Arts', 'name' => 'Choir Concert'],
                ['category' => 'creative_arts', 'category_label' => 'Creative Arts', 'name' => 'Talent Show'],

                ['category' => 'special_days', 'category_label' => 'Special Days', 'name' => 'Field Day'],
                ['category' => 'special_days', 'category_label' => 'Special Days', 'name' => '100th Day of School'],
                ['category' => 'special_days', 'category_label' => 'Special Days', 'name' => 'Teacher Appreciation Day'],
                ['category' => 'special_days', 'category_label' => 'Special Days', 'name' => 'Career Day'],
                ['category' => 'special_days', 'category_label' => 'Special Days', 'name' => 'Last Day of School'],
            ],

            // ── Corporate ─────────────────────────────────────────────────────────
            'corporate' => [
                ['category' => 'hr_culture', 'category_label' => 'HR / Culture', 'name' => 'New Hire Onboarding'],
                ['category' => 'hr_culture', 'category_label' => 'HR / Culture', 'name' => 'Work Anniversary Celebration'],
                ['category' => 'hr_culture', 'category_label' => 'HR / Culture', 'name' => 'Employee of the Month'],
                ['category' => 'hr_culture', 'category_label' => 'HR / Culture', 'name' => 'Team Building Day'],

                ['category' => 'ext_marketing', 'category_label' => 'External Marketing', 'name' => 'Trade Show'],
                ['category' => 'ext_marketing', 'category_label' => 'External Marketing', 'name' => 'Product Launch'],
                ['category' => 'ext_marketing', 'category_label' => 'External Marketing', 'name' => 'Client Hospitality Event'],
                ['category' => 'ext_marketing', 'category_label' => 'External Marketing', 'name' => 'Industry Expo'],
                ['category' => 'ext_marketing', 'category_label' => 'External Marketing', 'name' => 'Grand Opening'],

                ['category' => 'internal_ops', 'category_label' => 'Internal Ops', 'name' => 'Sales Kickoff (SKO)'],
                ['category' => 'internal_ops', 'category_label' => 'Internal Ops', 'name' => 'Annual Summit'],
                ['category' => 'internal_ops', 'category_label' => 'Internal Ops', 'name' => 'Strategic Planning Retreat'],
                ['category' => 'internal_ops', 'category_label' => 'Internal Ops', 'name' => 'All-Hands Meeting'],

                ['category' => 'uniformity', 'category_label' => 'Uniformity', 'name' => 'Uniform Refresh'],
                ['category' => 'uniformity', 'category_label' => 'Uniformity', 'name' => 'Departmental Rebrand'],
                ['category' => 'uniformity', 'category_label' => 'Uniformity', 'name' => 'Seasonal Gear Order'],

                ['category' => 'corp_social', 'category_label' => 'Corporate Social', 'name' => 'Volunteer Day'],
                ['category' => 'corp_social', 'category_label' => 'Corporate Social', 'name' => 'Charity Run / 5K'],
                ['category' => 'corp_social', 'category_label' => 'Corporate Social', 'name' => 'Holiday Party'],
                ['category' => 'corp_social', 'category_label' => 'Corporate Social', 'name' => 'Community Giveback'],

                ['category' => 'sales_incentives', 'category_label' => 'Sales Incentives', 'name' => "President's Club"],
                ['category' => 'sales_incentives', 'category_label' => 'Sales Incentives', 'name' => 'Quarterly Contest'],
                ['category' => 'sales_incentives', 'category_label' => 'Sales Incentives', 'name' => 'Top Performer Award'],
            ],

            // ── Fundraiser ────────────────────────────────────────────────────────
            'fundraiser' => [
                ['category' => 'spirit_pride', 'category_label' => 'Spirit / Pride', 'name' => 'Spirit Week'],
                ['category' => 'special_days', 'category_label' => 'Special Days', 'name' => 'Fundraiser Launch'],
                ['category' => 'special_days', 'category_label' => 'Special Days', 'name' => 'Order Deadline'],
                ['category' => 'special_days', 'category_label' => 'Special Days', 'name' => 'Pickup Day'],
                ['category' => 'special_days', 'category_label' => 'Special Days', 'name' => 'Goal Announcement'],
                ['category' => 'corp_social', 'category_label' => 'Community', 'name' => 'Booster Club Event'],
                ['category' => 'corp_social', 'category_label' => 'Community', 'name' => 'Charity Walk / Run'],
            ],

            // ── Specialized ───────────────────────────────────────────────────────
            'specialized' => [
                ['category' => 'franchise', 'category_label' => 'Franchise', 'name' => 'Grand Opening'],
                ['category' => 'franchise', 'category_label' => 'Franchise', 'name' => 'Local Sponsorship Event'],
                ['category' => 'franchise', 'category_label' => 'Franchise', 'name' => 'Anniversary Celebration'],

                ['category' => 'youth_sports', 'category_label' => 'Youth Sports', 'name' => 'Opening Day'],
                ['category' => 'youth_sports', 'category_label' => 'Youth Sports', 'name' => 'Playoffs'],
                ['category' => 'youth_sports', 'category_label' => 'Youth Sports', 'name' => 'All-Star Game'],
                ['category' => 'youth_sports', 'category_label' => 'Youth Sports', 'name' => 'Championship'],

                ['category' => 'camp', 'category_label' => 'Camp', 'name' => 'Camp Opens'],
                ['category' => 'camp', 'category_label' => 'Camp', 'name' => 'Visiting Day'],
                ['category' => 'camp', 'category_label' => 'Camp', 'name' => 'Color War'],
                ['category' => 'camp', 'category_label' => 'Camp', 'name' => 'Final Campfire'],
            ],

            // ── General ───────────────────────────────────────────────────────────
            'general' => [
                ['category' => 'special_days', 'category_label' => 'General', 'name' => 'Launch Day'],
                ['category' => 'special_days', 'category_label' => 'General', 'name' => 'Sale Window Opens'],
                ['category' => 'special_days', 'category_label' => 'General', 'name' => 'Order Deadline'],
                ['category' => 'special_days', 'category_label' => 'General', 'name' => 'Pickup / Delivery Day'],
                ['category' => 'special_days', 'category_label' => 'General', 'name' => 'Store Closing Day'],
            ],
        ];

        foreach ($templates as $storeType => $rows) {
            foreach ($rows as $row) {
                EventTemplate::create(array_merge(['store_type' => $storeType], $row));
            }
        }
    }
}
