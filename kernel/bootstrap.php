final class Bootstrap{
    public static function init(){
        // Load the configuration
        Config::load();

        // Load the autoloader
        Autoloader::load();

        // Load the router
        Router::load();
    }
}