    {if $weather_location}
        <span class="location">Location: {$weather_location}</span> | 
        <span class="temperature">Temperature: {$weather_temp_c}°C</span> | 
        <span class="humidity">Humidity: {$weather_condition_text} <img src="{$weather_condition_icon}"/></span>        
    {else}
        <span>Unable to fetch weather data.</span>
    {/if}
