const Encore = require('@symfony/webpack-encore');

if (!Encore.isRuntimeEnvironmentConfigured()) {
    Encore.configureRuntimeEnvironment(process.env.NODE_ENV || 'dev');
}

Encore
    // Répertoire de sortie final
    .setOutputPath('public/build/')
    .setPublicPath('/build')

    // Fichier d'entrée principal
    .addEntry('app', './assets/app.js')

    // Optimisations
    .splitEntryChunks()
    .enableSingleRuntimeChunk()
    .cleanupOutputBeforeBuild()
    .enableSourceMaps(!Encore.isProduction())
    .enableVersioning(Encore.isProduction())

    // Configuration Babel
    .configureBabelPresetEnv((config) => {
        config.useBuiltIns = 'usage';
        config.corejs = '3.38';
    })

    // Pour traiter les fichiers CSS (à activer si besoin)
    .enablePostCssLoader()

    // Copie des images depuis assets vers public
    .copyFiles({
        from: './assets/images',
        to: 'images/[path][name].[hash:8].[ext]'
    })
;

module.exports = Encore.getWebpackConfig();
