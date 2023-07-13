<?php
if (!defined('_PS_VERSION_')) {
    exit;
}

class MyWeather extends Module
{
    public function __construct()
    {
        $this->name = 'myweather';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Nicolas Morell';
        $this->need_instance = 0;
        $this->ps_versions_compliancy = [
            'min' => '1.7',
            'max' => _PS_VERSION_
        ];
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('My Weather');
        $this->description = $this->l('Displays weather information based on user location.');

        $this->confirmUninstall = $this->l('Are you sure you want to uninstall?');

        if (!Configuration::get('MYWEATHER_NAME')) {
            $this->warning = $this->l('No name provided');
        }
    }

    public function install()
    {
        return parent::install() &&
            $this->registerHook('displayNav1');
    }

    public function uninstall()
    {
        if (!parent::uninstall() ||
            !Configuration::deleteByName('MYWEATHER_NAME')) {
            return false;
        }

        return true;
    }

    public function hookDisplayNav1()
    {
        // Get user's city name
        $userCity = $this->getUserLocation();

        // Get weather data
        $weatherData = @json_decode(file_get_contents('http://api.weatherapi.com/v1/current.json?key=946df3b8b6d0487bb7030428231307&q=' . $userCity));

        // Assign data to smarty
        $this->context->smarty->assign([
            'weather_location' => $weatherData->location->name,
            'weather_temp_c' => $weatherData->current->temp_c,
            'weather_condition_text' => $weatherData->current->condition->text,
            'weather_condition_icon' => $weatherData->current->condition->icon,
        ]);

        // Display template
        return $this->display(__FILE__, 'views/templates/hook/displayNav.tpl');
    }

    public function getVisIpAddr() {
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            return $_SERVER['HTTP_CLIENT_IP'];
        } else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            return $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            return $_SERVER['REMOTE_ADDR'];
        }
    }

    public function getUserLocation() {
        // Get user's IP address
        $user_ip = $this->getVisIpAddr();

        // Use the IP address to get geolocation data
        $geo_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $user_ip));

        // If geolocation could not be obtained, use a default location (in this case, London)
        if($geo_data === null || $geo_data->geoplugin_city == '') {
            return 'London';
        }

        // Return the user's city
        return $geo_data->geoplugin_city;
    }
}
