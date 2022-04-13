<?php

namespace MomoHandler\Handler;

use Illuminate\Support\Facades\Http;

define('MOMO_BRAIN_URL', env('MOMO_BRAIN_URL'));

class MomoHandler
{
    public static function CallMicro($microservice, $action, $method, $params)
    {
        try {
            $url = self::get_microservice_url($microservice, $action);
            $response = Http::post($url, $params);
            return response($response->body());

        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }

    private static function get_microservice_url($microservice, $action)
    {
        try {
            if (!constant('MOMO_BRAIN_URL')) {
                throw new \Exception("MOMO_BRAIN_URL not found. Please configure it on your environment file.");
            }
            $response = Http::post(constant('MOMO_BRAIN_URL'), [
                'microservice' => $microservice,
                'action' => $action
            ]);
            return $response->body();

        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }
}