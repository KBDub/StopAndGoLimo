

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brand Color Palette - Golden Optimism</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #F2F0E6;
            color: #2C2C2C;
            line-height: 1.6;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 60px 20px;
        }

        header {
            text-align: center;
            margin-bottom: 60px;
            padding: 40px 20px;
            background: white;
            border-radius: 16px;
            box-shadow: 0 4px 20px rgba(255, 194, 14, 0.1);
        }

        h1 {
            font-size: 3em;
            color: #2C2C2C;
            margin-bottom: 10px;
            font-weight: 700;
        }

        .subtitle {
            font-size: 1.3em;
            color: #666;
            font-weight: 300;
        }

        .accent-bar {
            width: 100px;
            height: 4px;
            background: linear-gradient(90deg, #FFC20E, #FFD93D);
            margin: 20px auto;
            border-radius: 2px;
        }

        .section {
            background: white;
            padding: 40px;
            margin-bottom: 40px;
            border-radius: 16px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        h2 {
            font-size: 2em;
            margin-bottom: 30px;
            color: #2C2C2C;
            border-left: 4px solid #FFC20E;
            padding-left: 20px;
        }

        .color-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            margin-top: 30px;
        }

        .color-card {
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .color-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        }

        .color-swatch {
            height: 180px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .color-name-overlay {
            color: white;
            font-size: 1.5em;
            font-weight: 700;
            text-shadow: 0 2px 4px rgba(0,0,0,0.3);
        }

        .color-info {
            padding: 25px;
            background: #fafafa;
        }

        .color-title {
            font-size: 1.3em;
            font-weight: 600;
            margin-bottom: 8px;
            color: #2C2C2C;
        }

        .color-role {
            font-size: 0.9em;
            color: #666;
            margin-bottom: 15px;
            font-style: italic;
        }

        .color-values {
            margin-top: 15px;
        }

        .color-value {
            display: flex;
            justify-content: space-between;
            padding: 8px 0;
            border-bottom: 1px solid #e0e0e0;
            font-family: 'Courier New', monospace;
            font-size: 0.95em;
        }

        .color-value:last-child {
            border-bottom: none;
        }

        .label {
            font-weight: 600;
            color: #555;
        }

        .value {
            color: #2C2C2C;
            font-weight: 500;
        }

        .usage-section {
            margin-top: 30px;
            padding: 25px;
            background: #f9f9f9;
            border-radius: 8px;
            border-left: 4px solid #FFC20E;
        }

        .usage-section h3 {
            margin-bottom: 15px;
            color: #2C2C2C;
            font-size: 1.2em;
        }

        .usage-section ul {
            list-style: none;
            padding-left: 0;
        }

        .usage-section li {
            padding: 8px 0;
            padding-left: 25px;
            position: relative;
        }

        .usage-section li:before {
            content: "→";
            position: absolute;
            left: 0;
            color: #FFC20E;
            font-weight: bold;
        }

        .combination-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }

        .combination-card {
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .combo-colors {
            display: flex;
            height: 100px;
        }

        .combo-color {
            flex: 1;
        }

        .combo-info {
            padding: 20px;
            background: white;
        }

        .combo-title {
            font-weight: 600;
            margin-bottom: 8px;
            color: #2C2C2C;
        }

        .combo-desc {
            font-size: 0.9em;
            color: #666;
        }

        .theory-box {
            background: linear-gradient(135deg, #FFF9E6 0%, #F2F0E6 100%);
            padding: 30px;
            border-radius: 12px;
            margin-top: 30px;
            border: 2px solid #FFC20E;
        }

        .theory-box h3 {
            color: #2C2C2C;
            margin-bottom: 15px;
            font-size: 1.4em;
        }

        .theory-box p {
            color: #555;
            margin-bottom: 12px;
        }

        @media (max-width: 768px) {
            h1 {
                font-size: 2em;
            }

            .color-grid {
                grid-template-columns: 1fr;
            }

            .section {
                padding: 25px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Golden Optimism</h1>
            <div class="accent-bar"></div>
            <p class="subtitle">A vibrant, warm brand palette radiating confidence and creativity</p>
        </header>

        <!-- Primary & Secondary Colors -->
        <div class="section">
            <h2>Core Brand Colors</h2>
            <div class="color-grid">
                <div class="color-card">
                    <div class="color-swatch" style="background: #FFC20E;">
                        <div class="color-name-overlay">Sunburst Gold</div>
                    </div>
                    <div class="color-info">
                        <div class="color-title">Primary Color</div>
                        <div class="color-role">Brand Foundation</div>
                        <div class="color-values">
                            <div class="color-value">
                                <span class="label">HEX</span>
                                <span class="value">#FFC20E</span>
                            </div>
                            <div class="color-value">
                                <span class="label">RGB</span>
                                <span class="value">255, 194, 14</span>
                            </div>
                            <div class="color-value">
                                <span class="label">HSL</span>
                                <span class="value">45°, 100%, 53%</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="color-card">
                    <div class="color-swatch" style="background: #F2F0E6;">
                        <div class="color-name-overlay" style="color: #2C2C2C;">Soft Linen</div>
                    </div>
                    <div class="color-info">
                        <div class="color-title">Secondary Color</div>
                        <div class="color-role">Background Foundation</div>
                        <div class="color-values">
                            <div class="color-value">
                                <span class="label">HEX</span>
                                <span class="value">#F2F0E6</span>
                            </div>
                            <div class="color-value">
                                <span class="label">RGB</span>
                                <span class="value">242, 240, 230</span>
                            </div>
                            <div class="color-value">
                                <span class="label">HSL</span>
                                <span class="value">50°, 27%, 93%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Extended Palette -->
        <div class="section">
            <h2>Extended Color System</h2>
            <div class="color-grid">
                <div class="color-card">
                    <div class="color-swatch" style="background: #FFD93D;">
                        <div class="color-name-overlay">Bright Honey</div>
                    </div>
                    <div class="color-info">
                        <div class="color-title">Primary Light</div>
                        <div class="color-role">Highlights & Accents</div>
                        <div class="color-values">
                            <div class="color-value">
                                <span class="label">HEX</span>
                                <span class="value">#FFD93D</span>
                            </div>
                            <div class="color-value">
                                <span class="label">RGB</span>
                                <span class="value">255, 217, 61</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="color-card">
                    <div class="color-swatch" style="background: #E6A500;">
                        <div class="color-name-overlay">Deep Amber</div>
                    </div>
                    <div class="color-info">
                        <div class="color-title">Primary Dark</div>
                        <div class="color-role">Headers & Emphasis</div>
                        <div class="color-values">
                            <div class="color-value">
                                <span class="label">HEX</span>
                                <span class="value">#E6A500</span>
                            </div>
                            <div class="color-value">
                                <span class="label">RGB</span>
                                <span class="value">230, 165, 0</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="color-card">
                    <div class="color-swatch" style="background: #2C2C2C;">
                        <div class="color-name-overlay">Charcoal Black</div>
                    </div>
                    <div class="color-info">
                        <div class="color-title">Neutral Dark</div>
                        <div class="color-role">Body Text & Headers</div>
                        <div class="color-values">
                            <div class="color-value">
                                <span class="label">HEX</span>
                                <span class="value">#2C2C2C</span>
                            </div>
                            <div class="color-value">
                                <span class="label">RGB</span>
                                <span class="value">44, 44, 44</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="color-card">
                    <div class="color-swatch" style="background: #666666;">
                        <div class="color-name-overlay">Slate Gray</div>
                    </div>
                    <div class="color-info">
                        <div class="color-title">Neutral Medium</div>
                        <div class="color-role">Secondary Text</div>
                        <div class="color-values">
                            <div class="color-value">
                                <span class="label">HEX</span>
                                <span class="value">#666666</span>
                            </div>
                            <div class="color-value">
                                <span class="label">RGB</span>
                                <span class="value">102, 102, 102</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="color-card">
                    <div class="color-swatch" style="background: #FFFFFF; border: 1px solid #e0e0e0;">
                        <div class="color-name-overlay" style="color: #2C2C2C;">Pure White</div>
                    </div>
                    <div class="color-info">
                        <div class="color-title">Neutral Light</div>
                        <div class="color-role">Backgrounds & Cards</div>
                        <div class="color-values">
                            <div class="color-value">
                                <span class="label">HEX</span>
                                <span class="value">#FFFFFF</span>
                            </div>
                            <div class="color-value">
                                <span class="label">RGB</span>
                                <span class="value">255, 255, 255</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="color-card">
                    <div class="color-swatch" style="background: #FF6B35;">
                        <div class="color-name-overlay">Coral Accent</div>
                    </div>
                    <div class="color-info">
                        <div class="color-title">Complementary Accent</div>
                        <div class="color-role">CTAs & Important Actions</div>
                        <div class="color-values">
                            <div class="color-value">
                                <span class="label">HEX</span>
                                <span class="value">#FF6B35</span>
                            </div>
                            <div class="color-value">
                                <span class="label">RGB</span>
                                <span class="value">255, 107, 53</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Color Theory -->
        <div class="section">
            <h2>Color Theory & Psychology</h2>
            <div class="theory-box">
                <h3>🌟 Brand Personality</h3>
                <p><strong>Sunburst Gold (#FFC20E):</strong> This vibrant golden yellow radiates optimism, creativity, and energy. It evokes feelings of warmth, confidence, and innovation. Perfect for brands that want to appear approachable yet professional, creative yet trustworthy.</p>
                <p><strong>Soft Linen (#F2F0E6):</strong> This warm, off-white creates a sophisticated, organic foundation. It provides breathing room and elegance while maintaining warmth through its subtle yellow undertones that harmonize beautifully with the primary gold.</p>
                <p><strong>Visual Harmony:</strong> The palette uses an analogous color scheme with warm yellows and golds, creating natural harmony. The coral accent provides a complementary pop that adds energy and draws attention to calls-to-action without overwhelming the warmth of the primary palette.</p>
            </div>
        </div>

        <!-- Usage Guidelines -->
        <div class="section">
            <h2>Usage Guidelines</h2>

            <div class="usage-section">
                <h3>Sunburst Gold - Primary (#FFC20E)</h3>
                <ul>
                    <li>Primary CTAs and buttons</li>
                    <li>Brand logos and key visual elements</li>
                    <li>Accent borders and dividers</li>
                    <li>Hover states and interactive elements</li>
                    <li>Important highlights and badges</li>
                    <li>Limited to 15-25% of total design space</li>
                </ul>
            </div>

            <div class="usage-section">
                <h3>Soft Linen - Secondary (#F2F0E6)</h3>
                <ul>
                    <li>Page backgrounds and canvas</li>
                    <li>Card backgrounds (alternating with white)</li>
                    <li>Section dividers</li>
                    <li>Subtle texture backgrounds</li>
                    <li>Can occupy 30-50% of design space</li>
                </ul>
            </div>

            <div class="usage-section">
                <h3>Charcoal Black (#2C2C2C)</h3>
                <ul>
                    <li>Primary headlines and headers</li>
                    <li>Body copy and main text</li>
                    <li>Navigation elements</li>
                    <li>Provides strong contrast against light backgrounds</li>
                </ul>
            </div>

            <div class="usage-section">
                <h3>Coral Accent (#FF6B35)</h3>
                <ul>
                    <li>Use sparingly for maximum impact</li>
                    <li>Important CTAs that need extra attention</li>
                    <li>Alert messages and notifications</li>
                    <li>Special offers and promotions</li>
                    <li>Limited to 5-10% of design to maintain impact</li>
                </ul>
            </div>
        </div>

        <!-- Color Combinations -->
        <div class="section">
            <h2>Recommended Color Combinations</h2>
            <div class="combination-grid">
                <div class="combination-card">
                    <div class="combo-colors">
                        <div class="combo-color" style="background: #FFC20E;"></div>
                        <div class="combo-color" style="background: #2C2C2C;"></div>
                    </div>
                    <div class="combo-info">
                        <div class="combo-title">Bold & Professional</div>
                        <div class="combo-desc">Maximum contrast for headers and CTAs. Use for primary buttons and key headlines.</div>
                    </div>
                </div>

                <div class="combination-card">
                    <div class="combo-colors">
                        <div class="combo-color" style="background: #F2F0E6;"></div>
                        <div class="combo-color" style="background: #2C2C2C;"></div>
                        <div class="combo-color" style="background: #FFC20E;"></div>
                    </div>
                    <div class="combo-info">
                        <div class="combo-title">Balanced Foundation</div>
                        <div class="combo-desc">Perfect for content sections. Linen background, charcoal text, gold accents.</div>
                    </div>
                </div>

                <div class="combination-card">
                    <div class="combo-colors">
                        <div class="combo-color" style="background: #FFFFFF;"></div>
                        <div class="combo-color" style="background: #FFC20E;"></div>
                        <div class="combo-color" style="background: #E6A500;"></div>
                    </div>
                    <div class="combo-info">
                        <div class="combo-title">Premium Gradient</div>
                        <div class="combo-desc">Clean backgrounds with gold gradient overlays for hero sections and features.</div>
                    </div>
                </div>

                <div class="combination-card">
                    <div class="combo-colors">
                        <div class="combo-color" style="background: #F2F0E6;"></div>
                        <div class="combo-color" style="background: #666666;"></div>
                    </div>
                    <div class="combo-info">
                        <div class="combo-title">Subtle Elegance</div>
                        <div class="combo-desc">For secondary content, captions, and metadata. Soft and readable.</div>
                    </div>
                </div>

                <div class="combination-card">
                    <div class="combo-colors">
                        <div class="combo-color" style="background: #FFC20E;"></div>
                        <div class="combo-color" style="background: #FF6B35;"></div>
                    </div>
                    <div class="combo-info">
                        <div class="combo-title">High Energy</div>
                        <div class="combo-desc">Use sparingly for promotions and special announcements. Creates urgency.</div>
                    </div>
                </div>

                <div class="combination-card">
                    <div class="combo-colors">
                        <div class="combo-color" style="background: #FFFFFF;"></div>
                        <div class="combo-color" style="background: #F2F0E6;"></div>
                        <div class="combo-color" style="background: #FFD93D;"></div>
                    </div>
                    <div class="combo-info">
                        <div class="combo-title">Light & Airy</div>
                        <div class="combo-desc">For modern, minimalist layouts. Creates spacious, welcoming feel.</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Accessibility Notes -->
        <div class="section">
            <h2>Accessibility & Contrast Ratios</h2>
            <div class="theory-box" style="background: linear-gradient(135deg, #FFF9E6 0%, #FFFFFF 100%);">
                <h3>♿ WCAG Compliance Guidelines</h3>
                <p><strong>✓ Sunburst Gold on Charcoal (#FFC20E on #2C2C2C):</strong> Excellent contrast ratio of ~10.5:1. Passes AAA for all text sizes.</p>
                <p><strong>✓ Charcoal on Soft Linen (#2C2C2C on #F2F0E6):</strong> Strong contrast ratio of ~11.2:1. Passes AAA for all text sizes.</p>
                <p><strong>✓ Charcoal on White (#2C2C2C on #FFFFFF):</strong> Excellent contrast ratio of ~13.1:1. Passes AAA for all text sizes.</p>
                <p><strong>⚠ Avoid: Sunburst Gold on Soft Linen:</strong> Only 1.8:1 contrast. Use only for decorative elements, never for text.</p>
                <p><strong>⚠ Avoid: Sunburst Gold on White:</strong> Only 2.0:1 contrast. Use for large display text only (with AA compliance for 24px+).</p>
                <p><strong>Best Practice:</strong> Always pair text on colored backgrounds with high-contrast combinations. Use Charcoal or White as text colors for maximum legibility.</p>
            </div>
        </div>
    </div>
</body>
</html>