<section class="py-10 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-16">
            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mt-3 mb-4">Our Programs</h2>
            <p class="text-gray-600 max-w-5xl mx-auto">Choose from our range of AICTE approved PGDM programs
                designed to shape tomorrow's business leaders.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            <?php
            $programColors = [
                'from-primary-600 to-primary-800',
                'from-secondary-600 to-secondary-800',
                'from-emerald-600 to-emerald-800',
                'from-amber-600 to-amber-800',
                'from-purple-600 to-purple-800',
                'from-rose-600 to-rose-800',
            ];
            $config = require __DIR__ . '/../config/site.php';
            foreach ($config['programs'] as $index => $program):
                $colorClass = $programColors[$index % count($programColors)];
                ?>
                <a href="<?php echo $program['link']; ?>"
                    class="group relative overflow-hidden rounded-2xl bg-gradient-to-br <?php echo $colorClass; ?> p-8 text-white transition-all hover:shadow-2xl hover:-translate-y-1">

                    <div class="absolute inset-0 opacity-10">
                        <div
                            class="absolute top-0 right-0 w-40 h-40 bg-white rounded-full -translate-y-1/2 translate-x-1/2">
                        </div>
                        <div
                            class="absolute bottom-0 left-0 w-32 h-32 bg-white rounded-full translate-y-1/2 -translate-x-1/2">
                        </div>
                    </div>

                    <div class="relative">
                        <div class="text-sm font-medium text-white/70 mb-2">
                            <?php echo $program['name']; ?>
                        </div>
                        <h3 class="text-xl font-bold mb-3">
                            <?php echo $program['title']; ?>
                        </h3>
                        <p class="text-white/80 text-sm">
                            <?php echo $program['desc']; ?>
                        </p>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>