var gulp         = require('gulp'),                                 // Подключаем Gulp
                                                                    //Подключаем Sass пакет,
    browserSync  = require('browser-sync');                         // Подключаем Browser Sync
 


gulp.task('browser-sync', function() {                                                              // Создаем таск browser-sync
    browserSync({                                                                                   // Выполняем browserSync
        proxy: "amdplus-verstka",
        notify: false                                                                               // Отключаем уведомления
    });
});




gulp.task('watch', ['browser-sync'], function() {
    gulp.watch('*.html', browserSync.reload);                                                     // Наблюдение за sass файлами в папке sass
    gulp.watch('*.php', browserSync.reload);                                                    // Наблюдение за HTML файлами в корне проекта
    gulp.watch('assets/js/**/*.js', browserSync.reload); 
    gulp.watch('assets/css/**/*.css', browserSync.reload);                                              // Наблюдение за JS файлами в папке js
});



gulp.task('default', ['watch']);