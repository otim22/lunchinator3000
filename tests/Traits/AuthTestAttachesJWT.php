<?php

namespace Tests\Traits;


use App\User;
use Tymon\JWTAuth\Facades\JWTAuth;

trait AuthTestAttachesJWT {
    /**
     * @var User
     */
    protected $loginUser;

    /**
     * @param User $user
     *
     * @return $this
     */
    public function loginAs (User $user) {
        $this->loginUser = $user;

        return $this;
    }

    /**
     * @return string
     */
    protected function getJwtToken () {
        return is_null($this->loginUser) ? null : JWTAuth::fromUser($this->loginUser);
    }

    /**
     * @param string $method
     * @param string $uri
     * @param array $parameters
     * @param array $cookies
     * @param array $files
     * @param array $server
     * @param string $content
     *
     * @return \Illuminate\Http\Response
     */
    public function call ($method, $uri, $parameters = [], $cookies = [], $files = [], $server = [], $content = null) {
        if ($this->requestNeedsToken($method, $uri)) {
            $server = $this->attachToken($server);
        }

        return parent::call($method, $uri, $parameters, $cookies, $files, $server, $content);
    }

    /**
     * @param string $method
     * @param string $uri
     *
     * @return bool
     */
    protected function requestNeedsToken ($method, $uri) {
        return !($method === "POST" && ($uri === "/auth" || $uri === "/route-without-auth"));
    }

    /**
     * @param array $server
     *
     * @return string
     */
    protected function attachToken (array $server) {
        return array_merge($server, $this->transformHeadersToServerVars([
            'Authorization' => 'Bearer ' . $this->getJwtToken(),
        ]));
    }
}