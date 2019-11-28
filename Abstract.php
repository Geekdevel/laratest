<?php

interface Provider
{
    public function getAuthorizationUrl();
}

/*abstract class AbstractProvider
{
    abstract protected function getAuthorizationUrl();
}*/

/*class FacebookProvider extends Provider
{
    protected function getAuthorizationUrl()
    {
        return 'URL';
    }
}*/

class FacebookProvider implements Provider
{
    protected function getAuthorizationUrl()
    {
        return 'URL';
    }
}
