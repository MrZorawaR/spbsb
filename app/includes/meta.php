<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- SEO Meta Tags -->
<title><?php echo htmlspecialchars($title ?? $config['seo']['default_title']); ?></title>
<meta name="description"
    content="<?php echo htmlspecialchars($description ?? $config['seo']['default_description']); ?>">

<!-- Canonical URL -->
<?php if (isset($canonical)): ?>
    <link rel="canonical" href="<?php echo htmlspecialchars($canonical); ?>">
<?php endif; ?>

<!-- Open Graph -->
<meta property="og:title" content="<?php echo htmlspecialchars($title ?? $config['seo']['default_title']); ?>">
<meta property="og:description"
    content="<?php echo htmlspecialchars($description ?? $config['seo']['default_description']); ?>">
<meta property="og:type" content="website">
<meta property="og:image" content="<?php echo $config['seo']['og_image']; ?>">
<meta property="og:site_name" content="<?php echo $config['site_name']; ?>">

<!-- Favicon -->
<link rel="icon" type="image/x-icon" href="/assets/images/favicon.ico">
<link rel="apple-touch-icon" sizes="180x180" href="/assets/images/apple-touch-icon.png">

<!-- Preload Critical Assets -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<!-- Fonts - Using Google Fonts for now, will self-host in production -->
<link
    href="https://fonts.googleapis.com/css2?family=Zilla+Slab:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet">

<!-- Styles -->
<link rel="stylesheet" href="/assets/css/main.css?v=<?php echo $config['asset_version']; ?>">

<?php if (isset($preload_hero) && $preload_hero): ?>
    <!-- Preload Hero Image -->
    <link rel="preload" as="image" href="/assets/images/hero/slide-1.webp">
<?php endif; ?>
<?php if (!empty($useSwiper)): ?>
    <link rel="stylesheet" href="/assets/vendor/swiper/swiper-bundle.min.css?v=<?php echo $config['asset_version']; ?>">
    <link rel="stylesheet" href="/assets/css/swiper-custom.css?v=<?php echo $config['asset_version']; ?>">
<?php endif; ?>