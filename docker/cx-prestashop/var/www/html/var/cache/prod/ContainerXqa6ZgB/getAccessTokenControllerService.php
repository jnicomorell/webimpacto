<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShopBundle\Controller\Api\OAuth2\AccessTokenController' shared service.

$a = new \League\OAuth2\Server\AuthorizationServer(new \PrestaShopBundle\Security\OAuth2\Repository\ClientRepository(($this->privates['security.user.provider.concrete.oauth2'] ?? ($this->privates['security.user.provider.concrete.oauth2'] = new \Symfony\Component\Security\Core\User\InMemoryUserProvider([]))), ($this->services['security.password_encoder'] ?? $this->load('getSecurity_PasswordEncoderService.php'))), new \PrestaShopBundle\Security\OAuth2\Repository\AccessTokenRepository(), new \PrestaShopBundle\Security\OAuth2\Repository\NullScopeRepository(), new \League\OAuth2\Server\CryptKey('-----BEGIN PRIVATE KEY-----'."\n".'MIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQC4og4YwGseVmWX'."\n".'2r+P5fcWxIHqmYD5rEko8/3YE0IiLm5P3qS8NcUaK8ZXTuPEKpWHSJKi3UcCdKzl'."\n".'YRn79Ns5hkiASTnAXYAMtyfDyKLa6IgS7yXJwaF52WRaTSJtFboeKVRZcZu2t13/'."\n".'+d9TPOJ4QnHd+QEIDaIcE+c4C+Ak2Kd/Faj6UfFC6a20FNJQL8NizVX3zPhHifXk'."\n".'3XKHkFTHHvJ5xvyVSM1m2sCdvy21xfSE3Et7+HJnJnp/MvQgEcR3POPpAInGjGM/'."\n".'pl2BeEiJ1tO58JgGEsChJJujFC3blytiaK+7eXOTxbCFSmGV5ftOCGlhtMbyTnL9'."\n".'AppUA05rAgMBAAECggEAD4xeIYl6u9hMv+gE/8o+76Tmx+nbaasvkgpSEzMz+4rr'."\n".'cUBvoQXqLlUHY+zZ03g+lWDwMFTwGO3YbYyq0oQBPivnyR3hhiiZkviNmbg4trSk'."\n".'WOvYw8/RmGBNSil6v7L3tHiIiOu/UDjK6raRLwJOlBAMZMQGaTY0s6adbyPY4WFU'."\n".'wt1HGF0tMxM+BBzmmq8eUj149DWyMcUCuTEbKE763Ooj+E3t2O03e7ARVJOvJWih'."\n".'+Q8bwAtrdtGVLYpseUrOAxc2db65SVkSH5I+PjCiUKbn+6xwX3CLf/MQzFAqOx2t'."\n".'ZOxE1px1oBsfauK/2iEAGYK3MTHkQqXdaSbLXXISkQKBgQDcPvY/0+cd7Yf7l176'."\n".'oDcScUstuLuN6u2iXmxQ+Ahj04GUjqNDMAlo7FvCxxOTY17+l2skc7TT6Y4+ffLC'."\n".'vgI3cs9WjDNqSJ1MRCal3E90eFFp4fbFGGLgOSrpA45wKlq3lD8ube2UOiaoyKwa'."\n".'A3I0Cww/bdTCvnh4VfI6aid5OQKBgQDWmxURl2YpLk4GMSuI8c4QG/XhGy6ekeXS'."\n".'75rocPTwQr9rQb7UTjzSgjeC12lsiQ3iIqRe33vQe5kRyeKiHL+RkWHWa9JREwu7'."\n".'5gFrRmZzb01CBKvw5iFKjxkonAuVXtw5y8QGev11eQkio8tgz7AFrCYcIk2Cw0DN'."\n".'Mb8JlFm4wwKBgFzeJ5NOVJun9ri9YQ0o1U/veZWz2VHEB6N5UQ7rJw6AtpjfdDP2'."\n".'Y2FcmGyO6NAzDHEpg8IBD/Ry/MmY7e3zlJewz4Bc6akdKUZpTiqNtOsVeK6+2wDM'."\n".'gZSuRkuudjcRhOL3nZSEQbNIudhdlUP6xALxzZ5JP3dGPSHwi4zaCf7xAoGAR++U'."\n".'EGF/jS5IWSsCPNVRDXVR5jMGXYDqWNqYQnIaqK63G2zeWqwfFzEvClzKqecHEFYs'."\n".'YuDmz+ueU6gon86jKFhjQ0zBIwwPUty2fQ8MKIWWkBqgyA9b+XIeLM6h02AI0hbL'."\n".'jqCLdWUs+r+M3NbBWiVqYOPet4ZbomyabMudh6ECgYEAr9jLKYuiAw9Tw7mBImKs'."\n".'Xkhuqkrncf2jEkfpVaCGKMCz1Rg31/y4/01fdUedQtStCMKlVCv0W04gA47u8+ZH'."\n".'u7jh1pPjp7vn98ZmGFjXQMO35WKbWKMyl4FEWb3WZTN+YyuPuKXOdSqtWHfdU2iZ'."\n".'sMigbS8Eug99JvctCFKJk9M='."\n".'-----END PRIVATE KEY-----'."\n".''), 'def0000084c81b382bc1274101a4ba63620096aabcdbfce726b82b35f9a851d1b43bf87ed181391363c8d2e69efacc28a103439a7322a3dd4785ac0d3b74a74ac6317de2');
$a->enableGrantType(new \League\OAuth2\Server\Grant\ClientCredentialsGrant());
$b = new \Nyholm\Psr7\Factory\Psr17Factory();

return $this->services['PrestaShopBundle\\Controller\\Api\\OAuth2\\AccessTokenController'] = new \PrestaShopBundle\Controller\Api\OAuth2\AccessTokenController($a, new \Symfony\Bridge\PsrHttpMessage\Factory\PsrHttpFactory($b, $b, $b, $b), new \Symfony\Bridge\PsrHttpMessage\Factory\HttpFoundationFactory(), $b);
